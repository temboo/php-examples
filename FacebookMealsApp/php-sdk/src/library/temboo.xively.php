<?php

/**
 * Temboo PHP SDK Xively classes
 *
 * Execute Choreographies from the Temboo Xively bundle.
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
 * @subpackage Xively
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Deletes a single existing datapoint for a specific timestamp.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteDatapoint extends Temboo_Choreography
{
    /**
     * Deletes a single existing datapoint for a specific timestamp.
     *
     * @param Temboo_Session $session The session that owns this DeleteDatapoint Choreo.
     * @return Xively_ReadWriteData_DeleteDatapoint New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/DeleteDatapoint/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteDatapoint Choreo.
     *
     * @param Xively_ReadWriteData_DeleteDatapoint_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_DeleteDatapoint_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_DeleteDatapoint_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_DeleteDatapoint_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteDatapoint Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_DeleteDatapoint_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_DeleteDatapoint_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteDatapoint Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteDatapoint_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteDatapoint Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_DeleteDatapoint_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteDatapoint input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_DeleteDatapoint_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_DeleteDatapoint_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteDatapoint Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_DeleteDatapoint_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DatastreamID input for this DeleteDatapoint Choreo.
     *
     * @param string $value (required, string) The ID of the datastream you would like to delete the datapoint for.
     * @return Xively_ReadWriteData_DeleteDatapoint_Inputs For method chaining.
     */
    public function setDatastreamID($value)
    {
        return $this->set('DatastreamID', $value);
    }

    /**
     * Set the value for the FeedID input for this DeleteDatapoint Choreo.
     *
     * @param string $value (required, string) The ID of the feed you would like to delete the datapoint for.
     * @return Xively_ReadWriteData_DeleteDatapoint_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the Timestamp input for this DeleteDatapoint Choreo.
     *
     * @param string $value (required, date) Timestamp of datapoint value to delete. Must be in ISO 8601 format, and can include up to 6 decimal places of resolution (in seconds), default zone is UTC.  Ex: 2013-05-07T00:00:00.123456Z.
     * @return Xively_ReadWriteData_DeleteDatapoint_Inputs For method chaining.
     */
    public function setTimestamp($value)
    {
        return $this->set('Timestamp', $value);
    }
}


/**
 * Execution object for the DeleteDatapoint Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteDatapoint_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteDatapoint Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteDatapoint execution.
     * @param Xively_ReadWriteData_DeleteDatapoint $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_DeleteDatapoint_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_DeleteDatapoint_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_DeleteDatapoint_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_DeleteDatapoint $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteDatapoint execution.
     *
     * @return Xively_ReadWriteData_DeleteDatapoint_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteDatapoint execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_DeleteDatapoint_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_DeleteDatapoint_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteDatapoint Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteDatapoint_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteDatapoint Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_DeleteDatapoint_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponsStatusCode" output from this DeleteDatapoint execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful datapoint deletion, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponsStatusCode()
    {
        return $this->get('ResponsStatusCode');
    }
}

/**
 * Returns filterable data on all feeds viewable by the authenticated account.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ListAllFeeds extends Temboo_Choreography
{
    /**
     * Returns filterable data on all feeds viewable by the authenticated account.
     *
     * @param Temboo_Session $session The session that owns this ListAllFeeds Choreo.
     * @return Xively_ReadWriteData_ListAllFeeds New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/ListAllFeeds/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllFeeds Choreo.
     *
     * @param Xively_ReadWriteData_ListAllFeeds_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_ListAllFeeds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_ListAllFeeds_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_ListAllFeeds_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllFeeds Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_ListAllFeeds_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllFeeds Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ListAllFeeds_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllFeeds Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllFeeds input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllFeeds Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Content input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) Describes whether to return full or summary results. Full - all datastream values are returned, summary - returns the environment metadata for each feed. Valid values: 'full' or 'summary'.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setContent($value)
    {
        return $this->set('Content', $value);
    }

    /**
     * Set the value for the DistanceUnits input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) Units of distance. Valid values: "miles" or "kms" (default).
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setDistanceUnits($value)
    {
        return $this->set('DistanceUnits', $value);
    }

    /**
     * Set the value for the Distance input for this ListAllFeeds Choreo.
     *
     * @param float $value (optional, decimal) Search radius (units like miles or kilometers defined by DistanceUnits). Ex: 5.0.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the FeedType input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) The type of feed that is being returned. Valid values are "json" (the default), "xml" and "csv". No metadata is returned for the csv feed.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setFeedType($value)
    {
        return $this->set('FeedType', $value);
    }

    /**
     * Set the value for the FullTextSearch input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) Returns any feeds matching this string.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setFullTextSearch($value)
    {
        return $this->set('FullTextSearch', $value);
    }

    /**
     * Set the value for the Latitude input for this ListAllFeeds Choreo.
     *
     * @param float $value (optional, decimal) Used to find feeds located around this latitude. Ex. 51.5235375648154.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this ListAllFeeds Choreo.
     *
     * @param float $value (optional, decimal) Used to find feeds located around this longitude. Ex: -0.0807666778564453.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Page input for this ListAllFeeds Choreo.
     *
     * @param int $value (optional, integer) Indicates which page of results you are requesting. Starts from 1.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListAllFeeds Choreo.
     *
     * @param int $value (optional, integer) Defines how many results to return per page (1 to 1000).
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the ShowUser input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) Include user login and user level for each feed. Valid values: true, false (default).
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setShowUser($value)
    {
        return $this->set('ShowUser', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) Order of returned feeds. Valid values: "created_at", "retrieved_at" or "relevance".
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the Status input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) Sets whether to search for only live feeds, only frozen feeds, or all feeds. Valid values: "live", "frozen", "all" (default).
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }

    /**
     * Set the value for the Tag input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) Returns feeds containing datastreams tagged with the search query.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }

    /**
     * Set the value for the Units input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) Returns feeds containing datastreams with units specified by the search query. Ex: Celsius.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }

    /**
     * Set the value for the User input for this ListAllFeeds Choreo.
     *
     * @param string $value (optional, string) Returns feeds created by the user specified.
     * @return Xively_ReadWriteData_ListAllFeeds_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListAllFeeds Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ListAllFeeds_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllFeeds Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllFeeds execution.
     * @param Xively_ReadWriteData_ListAllFeeds $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_ListAllFeeds_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_ListAllFeeds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_ListAllFeeds_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_ListAllFeeds $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllFeeds execution.
     *
     * @return Xively_ReadWriteData_ListAllFeeds_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllFeeds execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_ListAllFeeds_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_ListAllFeeds_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllFeeds Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ListAllFeeds_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllFeeds Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_ListAllFeeds_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllFeeds execution.
     *
     * @return string The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new device in a product batch for each serial number provided. When created, each device will be in a pre-registered state awaiting activation. Creating a non-product-affiliated device is not available through the Xively API, and can only be done through the browser-only Xively Developer Workbench.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_CreateDevice extends Temboo_Choreography
{
    /**
     * Creates a new device in a product batch for each serial number provided. When created, each device will be in a pre-registered state awaiting activation. Creating a non-product-affiliated device is not available through the Xively API, and can only be done through the browser-only Xively Developer Workbench.
     *
     * @param Temboo_Session $session The session that owns this CreateDevice Choreo.
     * @return Xively_Devices_CreateDevice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Devices/CreateDevice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateDevice Choreo.
     *
     * @param Xively_Devices_CreateDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_CreateDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_CreateDevice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Devices_CreateDevice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_CreateDevice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Devices_CreateDevice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_CreateDevice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_CreateDevice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateDevice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Devices_CreateDevice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Devices_CreateDevice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateDevice Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Devices_CreateDevice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ProductID input for this CreateDevice Choreo.
     *
     * @param string $value (required, string) The product ID for the device you would like to add.
     * @return Xively_Devices_CreateDevice_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }

    /**
     * Set the value for the SerialNumbers input for this CreateDevice Choreo.
     *
     * @param string $value (required, string) Comma-separated list of device serial numbers to add. Allowed characters: case-sensitive alphanumeric characters (Ab3) and the following characters: "+", "-", "_", and ":". Ex: abc:123,aBc-124.
     * @return Xively_Devices_CreateDevice_Inputs For method chaining.
     */
    public function setSerialNumbers($value)
    {
        return $this->set('SerialNumbers', $value);
    }
}


/**
 * Execution object for the CreateDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_CreateDevice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateDevice Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateDevice execution.
     * @param Xively_Devices_CreateDevice $choreo The choreography object for this execution.
     * @param Xively_Devices_CreateDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_CreateDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_CreateDevice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Devices_CreateDevice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateDevice execution.
     *
     * @return Xively_Devices_CreateDevice_Results New results object.
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
     * Wraps results in appropriate results class for this CreateDevice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Devices_CreateDevice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Devices_CreateDevice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_CreateDevice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateDevice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Devices_CreateDevice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this CreateDevice execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful device creation, the code should be 201.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Returns a paged list of devices belonging to a specific product.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ListAllDevices extends Temboo_Choreography
{
    /**
     * Returns a paged list of devices belonging to a specific product.
     *
     * @param Temboo_Session $session The session that owns this ListAllDevices Choreo.
     * @return Xively_Devices_ListAllDevices New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Devices/ListAllDevices/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllDevices Choreo.
     *
     * @param Xively_Devices_ListAllDevices_Inputs|array $inputs (optional) Inputs as Xively_Devices_ListAllDevices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_ListAllDevices_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Devices_ListAllDevices_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllDevices Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_ListAllDevices_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Devices_ListAllDevices_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllDevices Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ListAllDevices_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllDevices Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_ListAllDevices_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllDevices input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Devices_ListAllDevices_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Devices_ListAllDevices_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllDevices Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Devices_ListAllDevices_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Activated input for this ListAllDevices Choreo.
     *
     * @param string $value (optional, string) Filter for returning device serial numbers in the requested activation state. Valid values: "all" (default), "true" or "false".
     * @return Xively_Devices_ListAllDevices_Inputs For method chaining.
     */
    public function setActivated($value)
    {
        return $this->set('Activated', $value);
    }

    /**
     * Set the value for the Page input for this ListAllDevices Choreo.
     *
     * @param int $value (optional, integer) Indicates which page of results you are requesting. Starts from 1.
     * @return Xively_Devices_ListAllDevices_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListAllDevices Choreo.
     *
     * @param int $value (optional, integer) Defines how many results to return per page (1 to 1000, default is 30).
     * @return Xively_Devices_ListAllDevices_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the ProductID input for this ListAllDevices Choreo.
     *
     * @param string $value (required, string) The ID for the product you would like to retrieve the list of devices for.
     * @return Xively_Devices_ListAllDevices_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }

    /**
     * Set the value for the SerialNumber input for this ListAllDevices Choreo.
     *
     * @param string $value (optional, string) Filter by providing an exact or partial serial number string. Letters are case-insensitive. Ex: inputting 'abc' will return serials that contain 'Abc',  'aBc' and 'abc', but not 'ab-c'.
     * @return Xively_Devices_ListAllDevices_Inputs For method chaining.
     */
    public function setSerialNumber($value)
    {
        return $this->set('SerialNumber', $value);
    }
}


/**
 * Execution object for the ListAllDevices Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ListAllDevices_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllDevices Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllDevices execution.
     * @param Xively_Devices_ListAllDevices $choreo The choreography object for this execution.
     * @param Xively_Devices_ListAllDevices_Inputs|array $inputs (optional) Inputs as Xively_Devices_ListAllDevices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_ListAllDevices_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Devices_ListAllDevices $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllDevices execution.
     *
     * @return Xively_Devices_ListAllDevices_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllDevices execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Devices_ListAllDevices_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Devices_ListAllDevices_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllDevices Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ListAllDevices_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllDevices Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Devices_ListAllDevices_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllDevices execution.
     *
     * @return string (json) The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Activates (or reactivates) a device given an authorization code. Returns the device API Key and Feed ID. 
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ActivateDevice extends Temboo_Choreography
{
    /**
     * Activates (or reactivates) a device given an authorization code. Returns the device API Key and Feed ID. 
     *
     * @param Temboo_Session $session The session that owns this ActivateDevice Choreo.
     * @return Xively_Devices_ActivateDevice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Devices/ActivateDevice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ActivateDevice Choreo.
     *
     * @param Xively_Devices_ActivateDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_ActivateDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_ActivateDevice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Devices_ActivateDevice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ActivateDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_ActivateDevice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Devices_ActivateDevice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ActivateDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ActivateDevice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ActivateDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_ActivateDevice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ActivateDevice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Devices_ActivateDevice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Devices_ActivateDevice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ActivateDevice Choreo.
     *
     * @param string $value (optional, string) Not required for first activation. If re-activating a device, either the original device APIKey returned from the first activation or the master APIKey is required.
     * @return Xively_Devices_ActivateDevice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ActivationCode input for this ActivateDevice Choreo.
     *
     * @param string $value (required, string) Activation code provided when pre-registering a device with a serial number.
     * @return Xively_Devices_ActivateDevice_Inputs For method chaining.
     */
    public function setActivationCode($value)
    {
        return $this->set('ActivationCode', $value);
    }
}


/**
 * Execution object for the ActivateDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ActivateDevice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ActivateDevice Choreo.
     *
     * @param Temboo_Session $session The session that owns this ActivateDevice execution.
     * @param Xively_Devices_ActivateDevice $choreo The choreography object for this execution.
     * @param Xively_Devices_ActivateDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_ActivateDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_ActivateDevice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Devices_ActivateDevice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ActivateDevice execution.
     *
     * @return Xively_Devices_ActivateDevice_Results New results object.
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
     * Wraps results in appropriate results class for this ActivateDevice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Devices_ActivateDevice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Devices_ActivateDevice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ActivateDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ActivateDevice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ActivateDevice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Devices_ActivateDevice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ActivateDevice execution.
     *
     * @return string (json) The response from Xively. Upon successful activation, it returns a JSON array containing the device APIKey, FeedID and Datastreams.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a product batch. This will also delete all devices and feeds associated with the specified product batch.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_DeleteProduct extends Temboo_Choreography
{
    /**
     * Deletes a product batch. This will also delete all devices and feeds associated with the specified product batch.
     *
     * @param Temboo_Session $session The session that owns this DeleteProduct Choreo.
     * @return Xively_Products_DeleteProduct New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Products/DeleteProduct/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteProduct Choreo.
     *
     * @param Xively_Products_DeleteProduct_Inputs|array $inputs (optional) Inputs as Xively_Products_DeleteProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_DeleteProduct_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Products_DeleteProduct_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_DeleteProduct_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Products_DeleteProduct_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_DeleteProduct_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_DeleteProduct_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteProduct input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Products_DeleteProduct_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Products_DeleteProduct_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteProduct Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Products_DeleteProduct_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ProductID input for this DeleteProduct Choreo.
     *
     * @param string $value (required, string) The ID of the product you are trying to delete.
     * @return Xively_Products_DeleteProduct_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }
}


/**
 * Execution object for the DeleteProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_DeleteProduct_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteProduct Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteProduct execution.
     * @param Xively_Products_DeleteProduct $choreo The choreography object for this execution.
     * @param Xively_Products_DeleteProduct_Inputs|array $inputs (optional) Inputs as Xively_Products_DeleteProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_DeleteProduct_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Products_DeleteProduct $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteProduct execution.
     *
     * @return Xively_Products_DeleteProduct_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteProduct execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Products_DeleteProduct_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Products_DeleteProduct_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_DeleteProduct_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteProduct Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Products_DeleteProduct_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteProduct execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful product deletion, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Returns a JSON representation of the device with the provided serial number.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ReadDevice extends Temboo_Choreography
{
    /**
     * Returns a JSON representation of the device with the provided serial number.
     *
     * @param Temboo_Session $session The session that owns this ReadDevice Choreo.
     * @return Xively_Devices_ReadDevice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Devices/ReadDevice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReadDevice Choreo.
     *
     * @param Xively_Devices_ReadDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_ReadDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_ReadDevice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Devices_ReadDevice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReadDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_ReadDevice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Devices_ReadDevice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReadDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ReadDevice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReadDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_ReadDevice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReadDevice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Devices_ReadDevice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Devices_ReadDevice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ReadDevice Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Devices_ReadDevice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ProductID input for this ReadDevice Choreo.
     *
     * @param string $value (required, string) The product ID of the device you would like to read.
     * @return Xively_Devices_ReadDevice_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }

    /**
     * Set the value for the SerialNumber input for this ReadDevice Choreo.
     *
     * @param string $value (required, string) The serial number for the device you would like to read.
     * @return Xively_Devices_ReadDevice_Inputs For method chaining.
     */
    public function setSerialNumber($value)
    {
        return $this->set('SerialNumber', $value);
    }
}


/**
 * Execution object for the ReadDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ReadDevice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReadDevice Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReadDevice execution.
     * @param Xively_Devices_ReadDevice $choreo The choreography object for this execution.
     * @param Xively_Devices_ReadDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_ReadDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_ReadDevice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Devices_ReadDevice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReadDevice execution.
     *
     * @return Xively_Devices_ReadDevice_Results New results object.
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
     * Wraps results in appropriate results class for this ReadDevice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Devices_ReadDevice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Devices_ReadDevice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReadDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_ReadDevice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReadDevice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Devices_ReadDevice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReadDevice execution.
     *
     * @return string (json) The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new APIKey.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_CreateKey extends Temboo_Choreography
{
    /**
     * Creates a new APIKey.
     *
     * @param Temboo_Session $session The session that owns this CreateKey Choreo.
     * @return Xively_APIKeys_CreateKey New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/APIKeys/CreateKey/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateKey Choreo.
     *
     * @param Xively_APIKeys_CreateKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_CreateKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_CreateKey_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_APIKeys_CreateKey_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_CreateKey_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_APIKeys_CreateKey_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_CreateKey_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_CreateKey_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateKey input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateKey Choreo.
     *
     * @param string $value (required, string) The master API Key provided by Xively.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessMethods input for this CreateKey Choreo.
     *
     * @param string $value (conditional, string) Comma-separated input containing one or more allowed HTTP methods that the key is allowed. Valid values: get, put, post, and/or delete. Ex.: "put,post". Required unless writing your own CustomKey.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setAccessMethods($value)
    {
        return $this->set('AccessMethods', $value);
    }

    /**
     * Set the value for the CustomKey input for this CreateKey Choreo.
     *
     * @param mixed $value (optional, any) Optional Custom key to send to Xively. Type and format depends on CustomType. Please see documentation for more information on constructing your own body. If used, all other scalar inputs are ignored.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setCustomKey($value)
    {
        return $this->set('CustomKey', $value);
    }

    /**
     * Set the value for the CustomPermissions input for this CreateKey Choreo.
     *
     * @param mixed $value (optional, any) Optional custom permissions for advanced configuration. Type and format depends on CustomType. If specified, ignores SourceIP, ResourcesData and AccessMethodsData.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setCustomPermissions($value)
    {
        return $this->set('CustomPermissions', $value);
    }

    /**
     * Set the value for the CustomType input for this CreateKey Choreo.
     *
     * @param string $value (optional, string) The datatype that is being input if adding custom permission objects. Valid values are "json" (the default) and "xml".
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setCustomType($value)
    {
        return $this->set('CustomType', $value);
    }

    /**
     * Set the value for the ExpirationDate input for this CreateKey Choreo.
     *
     * @param string $value (optional, date) Expiration date for the key, after which it won't work. Must be in ISO 8601 format, default zone is UTC.  Ex: 2013-05-07T00:00:00Z.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setExpirationDate($value)
    {
        return $this->set('ExpirationDate', $value);
    }

    /**
     * Set the value for the Label input for this CreateKey Choreo.
     *
     * @param string $value (conditional, string) A label by which the key can be referenced. Required unless writing your own CustomKey.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setLabel($value)
    {
        return $this->set('Label', $value);
    }

    /**
     * Set the value for the PrivateAccess input for this CreateKey Choreo.
     *
     * @param string $value (optional, string) Flag that indicates whether this key can access private resources belonging to the user. To turn on, input "true", leave blank for "false".
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setPrivateAccess($value)
    {
        return $this->set('PrivateAccess', $value);
    }

    /**
     * Set the value for the ResourceFeedID input for this CreateKey Choreo.
     *
     * @param int $value (optional, integer) Specify a particular FeedID that the new APIKey should have access to. If not specified, the new APIKey permissions will apply to all feeds you are authorized to access.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setResourceFeedID($value)
    {
        return $this->set('ResourceFeedID', $value);
    }

    /**
     * Set the value for the SourceIP input for this CreateKey Choreo.
     *
     * @param string $value (optional, string) An IP address that, when specified, limits incoming requests to that specific IP address only.
     * @return Xively_APIKeys_CreateKey_Inputs For method chaining.
     */
    public function setSourceIP($value)
    {
        return $this->set('SourceIP', $value);
    }
}


/**
 * Execution object for the CreateKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_CreateKey_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateKey Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateKey execution.
     * @param Xively_APIKeys_CreateKey $choreo The choreography object for this execution.
     * @param Xively_APIKeys_CreateKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_CreateKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_CreateKey_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_APIKeys_CreateKey $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateKey execution.
     *
     * @return Xively_APIKeys_CreateKey_Results New results object.
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
     * Wraps results in appropriate results class for this CreateKey execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_APIKeys_CreateKey_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_APIKeys_CreateKey_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_CreateKey_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateKey Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_APIKeys_CreateKey_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "APIKeyLocation" output from this CreateKey execution.
     *
     * @return string (string) The URL of the newly created APIKey.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAPIKeyLocation()
    {
        return $this->get('APIKeyLocation');
    }
    /**
     * Retrieve the value for the "NewAPIKey" output from this CreateKey execution.
     *
     * @return string (string) The new APIKey obtained from the APIKeyLocation returned by this Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAPIKey()
    {
        return $this->get('NewAPIKey');
    }
}

/**
 * Allows you to regenerate a new key with the same attributes and permissions as a previous key.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_RegenerateKey extends Temboo_Choreography
{
    /**
     * Allows you to regenerate a new key with the same attributes and permissions as a previous key.
     *
     * @param Temboo_Session $session The session that owns this RegenerateKey Choreo.
     * @return Xively_APIKeys_RegenerateKey New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/APIKeys/RegenerateKey/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RegenerateKey Choreo.
     *
     * @param Xively_APIKeys_RegenerateKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_RegenerateKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_RegenerateKey_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_APIKeys_RegenerateKey_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RegenerateKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_RegenerateKey_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_APIKeys_RegenerateKey_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RegenerateKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_RegenerateKey_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RegenerateKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_RegenerateKey_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RegenerateKey input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_APIKeys_RegenerateKey_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_APIKeys_RegenerateKey_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RegenerateKey Choreo.
     *
     * @param string $value (required, string) The API Key you would like to regenerate. On successful regeneration, this API Key will no longer be valid.
     * @return Xively_APIKeys_RegenerateKey_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the MasterAPIKey input for this RegenerateKey Choreo.
     *
     * @param string $value (optional, string) Specify a MasterAPIKey with sufficient permissions if the APIKey you would like to regenerate does not have the permissions to do so.
     * @return Xively_APIKeys_RegenerateKey_Inputs For method chaining.
     */
    public function setMasterAPIKey($value)
    {
        return $this->set('MasterAPIKey', $value);
    }
}


/**
 * Execution object for the RegenerateKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_RegenerateKey_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RegenerateKey Choreo.
     *
     * @param Temboo_Session $session The session that owns this RegenerateKey execution.
     * @param Xively_APIKeys_RegenerateKey $choreo The choreography object for this execution.
     * @param Xively_APIKeys_RegenerateKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_RegenerateKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_RegenerateKey_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_APIKeys_RegenerateKey $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RegenerateKey execution.
     *
     * @return Xively_APIKeys_RegenerateKey_Results New results object.
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
     * Wraps results in appropriate results class for this RegenerateKey execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_APIKeys_RegenerateKey_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_APIKeys_RegenerateKey_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RegenerateKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_RegenerateKey_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RegenerateKey Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_APIKeys_RegenerateKey_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "APIKeyLocation" output from this RegenerateKey execution.
     *
     * @return string (string) The URL of the newly regenerated APIKey.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAPIKeyLocation()
    {
        return $this->get('APIKeyLocation');
    }
    /**
     * Retrieve the value for the "NewAPIKey" output from this RegenerateKey execution.
     *
     * @return string (string) The regenerated APIKey obtained from the APIKeyLocation returned by this Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAPIKey()
    {
        return $this->get('NewAPIKey');
    }
}

/**
 * Returns a JSON representation of all products associated with the specified APIKey.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_ListAllProducts extends Temboo_Choreography
{
    /**
     * Returns a JSON representation of all products associated with the specified APIKey.
     *
     * @param Temboo_Session $session The session that owns this ListAllProducts Choreo.
     * @return Xively_Products_ListAllProducts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Products/ListAllProducts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllProducts Choreo.
     *
     * @param Xively_Products_ListAllProducts_Inputs|array $inputs (optional) Inputs as Xively_Products_ListAllProducts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_ListAllProducts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Products_ListAllProducts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllProducts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_ListAllProducts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Products_ListAllProducts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllProducts Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_ListAllProducts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllProducts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_ListAllProducts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllProducts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Products_ListAllProducts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Products_ListAllProducts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllProducts Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Products_ListAllProducts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }
}


/**
 * Execution object for the ListAllProducts Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_ListAllProducts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllProducts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllProducts execution.
     * @param Xively_Products_ListAllProducts $choreo The choreography object for this execution.
     * @param Xively_Products_ListAllProducts_Inputs|array $inputs (optional) Inputs as Xively_Products_ListAllProducts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_ListAllProducts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Products_ListAllProducts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllProducts execution.
     *
     * @return Xively_Products_ListAllProducts_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllProducts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Products_ListAllProducts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Products_ListAllProducts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllProducts Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_ListAllProducts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllProducts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Products_ListAllProducts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllProducts execution.
     *
     * @return string (json) The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a datastream. 
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteDatastream extends Temboo_Choreography
{
    /**
     * Deletes a datastream. 
     *
     * @param Temboo_Session $session The session that owns this DeleteDatastream Choreo.
     * @return Xively_ReadWriteData_DeleteDatastream New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/DeleteDatastream/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteDatastream Choreo.
     *
     * @param Xively_ReadWriteData_DeleteDatastream_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_DeleteDatastream_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_DeleteDatastream_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_DeleteDatastream_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteDatastream Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_DeleteDatastream_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_DeleteDatastream_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteDatastream Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteDatastream_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteDatastream Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_DeleteDatastream_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteDatastream input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_DeleteDatastream_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_DeleteDatastream_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteDatastream Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_DeleteDatastream_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DatastreamID input for this DeleteDatastream Choreo.
     *
     * @param string $value (required, string) The ID of the datastream you wish to delete.
     * @return Xively_ReadWriteData_DeleteDatastream_Inputs For method chaining.
     */
    public function setDatastreamID($value)
    {
        return $this->set('DatastreamID', $value);
    }

    /**
     * Set the value for the FeedID input for this DeleteDatastream Choreo.
     *
     * @param string $value (required, string) The ID of the feed you would like to delete the datastream for.
     * @return Xively_ReadWriteData_DeleteDatastream_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }
}


/**
 * Execution object for the DeleteDatastream Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteDatastream_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteDatastream Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteDatastream execution.
     * @param Xively_ReadWriteData_DeleteDatastream $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_DeleteDatastream_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_DeleteDatastream_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_DeleteDatastream_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_DeleteDatastream $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteDatastream execution.
     *
     * @return Xively_ReadWriteData_DeleteDatastream_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteDatastream execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_DeleteDatastream_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_DeleteDatastream_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteDatastream Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteDatastream_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteDatastream Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_DeleteDatastream_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteDatastream execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful deletion, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Returns a JSON or XML representation of the specified APIKey.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_ReadKey extends Temboo_Choreography
{
    /**
     * Returns a JSON or XML representation of the specified APIKey.
     *
     * @param Temboo_Session $session The session that owns this ReadKey Choreo.
     * @return Xively_APIKeys_ReadKey New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/APIKeys/ReadKey/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReadKey Choreo.
     *
     * @param Xively_APIKeys_ReadKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_ReadKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_ReadKey_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_APIKeys_ReadKey_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReadKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_ReadKey_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_APIKeys_ReadKey_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReadKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_ReadKey_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReadKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_ReadKey_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReadKey input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_APIKeys_ReadKey_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_APIKeys_ReadKey_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ReadKey Choreo.
     *
     * @param string $value (required, string) The API Key you would like to return information on.
     * @return Xively_APIKeys_ReadKey_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the MasterAPIKey input for this ReadKey Choreo.
     *
     * @param string $value (optional, string) Specify a MasterAPIKey with more permissions if the APIKey you would like to view does not have sufficient (read) permissions.
     * @return Xively_APIKeys_ReadKey_Inputs For method chaining.
     */
    public function setMasterAPIKey($value)
    {
        return $this->set('MasterAPIKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ReadKey Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Xively_APIKeys_ReadKey_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ReadKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_ReadKey_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReadKey Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReadKey execution.
     * @param Xively_APIKeys_ReadKey $choreo The choreography object for this execution.
     * @param Xively_APIKeys_ReadKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_ReadKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_ReadKey_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_APIKeys_ReadKey $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReadKey execution.
     *
     * @return Xively_APIKeys_ReadKey_Results New results object.
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
     * Wraps results in appropriate results class for this ReadKey execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_APIKeys_ReadKey_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_APIKeys_ReadKey_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReadKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_ReadKey_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReadKey Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_APIKeys_ReadKey_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReadKey execution.
     *
     * @return string The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing trigger.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_UpdateTrigger extends Temboo_Choreography
{
    /**
     * Updates an existing trigger.
     *
     * @param Temboo_Session $session The session that owns this UpdateTrigger Choreo.
     * @return Xively_Triggers_UpdateTrigger New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Triggers/UpdateTrigger/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateTrigger Choreo.
     *
     * @param Xively_Triggers_UpdateTrigger_Inputs|array $inputs (optional) Inputs as Xively_Triggers_UpdateTrigger_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_UpdateTrigger_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Triggers_UpdateTrigger_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateTrigger Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_UpdateTrigger_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Triggers_UpdateTrigger_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_UpdateTrigger_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateTrigger Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_UpdateTrigger_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateTrigger input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Triggers_UpdateTrigger_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Triggers_UpdateTrigger_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateTrigger Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Triggers_UpdateTrigger_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ThresholdValue input for this UpdateTrigger Choreo.
     *
     * @param string $value (optional, string) Threshold that will cause the trigger to activate. Include input only if changing Threshold Value.
     * @return Xively_Triggers_UpdateTrigger_Inputs For method chaining.
     */
    public function setThresholdValue($value)
    {
        return $this->set('ThresholdValue', $value);
    }

    /**
     * Set the value for the TriggerID input for this UpdateTrigger Choreo.
     *
     * @param int $value (required, integer) TriggerID for the trigger that you wish to update.
     * @return Xively_Triggers_UpdateTrigger_Inputs For method chaining.
     */
    public function setTriggerID($value)
    {
        return $this->set('TriggerID', $value);
    }

    /**
     * Set the value for the TriggerType input for this UpdateTrigger Choreo.
     *
     * @param string $value (optional, string) Type of trigger. Include input only if changing TriggerType. Valid values: gt, gte, lt, lte, eq, change (any change), frozen (no updates for 15 minutes), or live (updated again after being frozen).
     * @return Xively_Triggers_UpdateTrigger_Inputs For method chaining.
     */
    public function setTriggerType($value)
    {
        return $this->set('TriggerType', $value);
    }

    /**
     * Set the value for the URL input for this UpdateTrigger Choreo.
     *
     * @param string $value (optional, string) The URL that the Xively trigger will post to when activated. Include input only if changing the URL. Ex: http://requestb.in
     * @return Xively_Triggers_UpdateTrigger_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the UpdateTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_UpdateTrigger_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateTrigger Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateTrigger execution.
     * @param Xively_Triggers_UpdateTrigger $choreo The choreography object for this execution.
     * @param Xively_Triggers_UpdateTrigger_Inputs|array $inputs (optional) Inputs as Xively_Triggers_UpdateTrigger_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_UpdateTrigger_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Triggers_UpdateTrigger $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateTrigger execution.
     *
     * @return Xively_Triggers_UpdateTrigger_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateTrigger execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Triggers_UpdateTrigger_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Triggers_UpdateTrigger_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_UpdateTrigger_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateTrigger Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Triggers_UpdateTrigger_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this UpdateTrigger execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful trigger update, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Returns a specific trigger for the authenticated account.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_ReadTrigger extends Temboo_Choreography
{
    /**
     * Returns a specific trigger for the authenticated account.
     *
     * @param Temboo_Session $session The session that owns this ReadTrigger Choreo.
     * @return Xively_Triggers_ReadTrigger New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Triggers/ReadTrigger/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReadTrigger Choreo.
     *
     * @param Xively_Triggers_ReadTrigger_Inputs|array $inputs (optional) Inputs as Xively_Triggers_ReadTrigger_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_ReadTrigger_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Triggers_ReadTrigger_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReadTrigger Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_ReadTrigger_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Triggers_ReadTrigger_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReadTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_ReadTrigger_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReadTrigger Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_ReadTrigger_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReadTrigger input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Triggers_ReadTrigger_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Triggers_ReadTrigger_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ReadTrigger Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Triggers_ReadTrigger_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ReadTrigger Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Xively_Triggers_ReadTrigger_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TriggerID input for this ReadTrigger Choreo.
     *
     * @param int $value (required, integer) ID for the trigger that you wish to retrieve information about.
     * @return Xively_Triggers_ReadTrigger_Inputs For method chaining.
     */
    public function setTriggerID($value)
    {
        return $this->set('TriggerID', $value);
    }
}


/**
 * Execution object for the ReadTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_ReadTrigger_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReadTrigger Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReadTrigger execution.
     * @param Xively_Triggers_ReadTrigger $choreo The choreography object for this execution.
     * @param Xively_Triggers_ReadTrigger_Inputs|array $inputs (optional) Inputs as Xively_Triggers_ReadTrigger_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_ReadTrigger_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Triggers_ReadTrigger $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReadTrigger execution.
     *
     * @return Xively_Triggers_ReadTrigger_Results New results object.
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
     * Wraps results in appropriate results class for this ReadTrigger execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Triggers_ReadTrigger_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Triggers_ReadTrigger_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReadTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_ReadTrigger_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReadTrigger Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Triggers_ReadTrigger_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReadTrigger execution.
     *
     * @return string The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to easily update the location data of your feed.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteLocationData extends Temboo_Choreography
{
    /**
     * Allows you to easily update the location data of your feed.
     *
     * @param Temboo_Session $session The session that owns this WriteLocationData Choreo.
     * @return Xively_ReadWriteData_WriteLocationData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/WriteLocationData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WriteLocationData Choreo.
     *
     * @param Xively_ReadWriteData_WriteLocationData_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_WriteLocationData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_WriteLocationData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_WriteLocationData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WriteLocationData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_WriteLocationData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WriteLocationData Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteLocationData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WriteLocationData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WriteLocationData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this WriteLocationData Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Disposition input for this WriteLocationData Choreo.
     *
     * @param string $value (optional, string) Can be set to "mobile" to enable creating waypoints (lat, lon and elevation with timestamp), or "fixed" (default) for a single location. Leave empty to keep existing settings.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function setDisposition($value)
    {
        return $this->set('Disposition', $value);
    }

    /**
     * Set the value for the Domain input for this WriteLocationData Choreo.
     *
     * @param string $value (optional, string) The domain of the location, i.e. physical or virtual. Leave empty to keep existing Domain. Type "BLANK" to clear existing Domain. Ex: "physical".
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function setDomain($value)
    {
        return $this->set('Domain', $value);
    }

    /**
     * Set the value for the Elevation input for this WriteLocationData Choreo.
     *
     * @param float $value (optional, decimal) Elevation in meters. Leave empty to keep previously existing Elevation. Type "BLANK" to clear existing Elevation. Ex: 20.5.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function setElevation($value)
    {
        return $this->set('Elevation', $value);
    }

    /**
     * Set the value for the FeedID input for this WriteLocationData Choreo.
     *
     * @param int $value (required, integer) The ID for the feed that you would like to update.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the Latitude input for this WriteLocationData Choreo.
     *
     * @param float $value (optional, decimal) Latitude coordinates. Leave empty to keep previously existing Latitude. Type "BLANK" to clear existing Latitude. Ex: 40.728194.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this WriteLocationData Choreo.
     *
     * @param float $value (optional, decimal) Longitude coordinates. Leave empty to keep previously existing Location. Type "BLANK" to clear existing settings. Ex: -73.957316.
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Name input for this WriteLocationData Choreo.
     *
     * @param string $value (optional, string) Name of Location. Leave empty to keep existing Location. Type "BLANK" to clear existing settings. Ex.: "My Fitbit Tracker".
     * @return Xively_ReadWriteData_WriteLocationData_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }
}


/**
 * Execution object for the WriteLocationData Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteLocationData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WriteLocationData Choreo.
     *
     * @param Temboo_Session $session The session that owns this WriteLocationData execution.
     * @param Xively_ReadWriteData_WriteLocationData $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_WriteLocationData_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_WriteLocationData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_WriteLocationData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_WriteLocationData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WriteLocationData execution.
     *
     * @return Xively_ReadWriteData_WriteLocationData_Results New results object.
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
     * Wraps results in appropriate results class for this WriteLocationData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_WriteLocationData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_WriteLocationData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WriteLocationData Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteLocationData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WriteLocationData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_WriteLocationData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this WriteLocationData execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful feed location update, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Deletes a specific API Key.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_DeleteKey extends Temboo_Choreography
{
    /**
     * Deletes a specific API Key.
     *
     * @param Temboo_Session $session The session that owns this DeleteKey Choreo.
     * @return Xively_APIKeys_DeleteKey New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/APIKeys/DeleteKey/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteKey Choreo.
     *
     * @param Xively_APIKeys_DeleteKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_DeleteKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_DeleteKey_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_APIKeys_DeleteKey_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_DeleteKey_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_APIKeys_DeleteKey_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_DeleteKey_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_DeleteKey_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteKey input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_APIKeys_DeleteKey_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_APIKeys_DeleteKey_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteKey Choreo.
     *
     * @param string $value (required, string) The API Key you would like to delete.
     * @return Xively_APIKeys_DeleteKey_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the MasterAPIKey input for this DeleteKey Choreo.
     *
     * @param string $value (optional, string) Specify a MasterAPIKey with more permissions if the APIKey you would like to delete does not have sufficient permissions.
     * @return Xively_APIKeys_DeleteKey_Inputs For method chaining.
     */
    public function setMasterAPIKey($value)
    {
        return $this->set('MasterAPIKey', $value);
    }
}


/**
 * Execution object for the DeleteKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_DeleteKey_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteKey Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteKey execution.
     * @param Xively_APIKeys_DeleteKey $choreo The choreography object for this execution.
     * @param Xively_APIKeys_DeleteKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_DeleteKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_DeleteKey_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_APIKeys_DeleteKey $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteKey execution.
     *
     * @return Xively_APIKeys_DeleteKey_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteKey execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_APIKeys_DeleteKey_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_APIKeys_DeleteKey_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_DeleteKey_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteKey Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_APIKeys_DeleteKey_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteKey execution.
     *
     * @return int (integer) The response status code returned from Xively. For a valid deletion, the code returned should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Returns a JSON representation of a product. 
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_ReadProduct extends Temboo_Choreography
{
    /**
     * Returns a JSON representation of a product. 
     *
     * @param Temboo_Session $session The session that owns this ReadProduct Choreo.
     * @return Xively_Products_ReadProduct New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Products/ReadProduct/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReadProduct Choreo.
     *
     * @param Xively_Products_ReadProduct_Inputs|array $inputs (optional) Inputs as Xively_Products_ReadProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_ReadProduct_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Products_ReadProduct_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReadProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_ReadProduct_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Products_ReadProduct_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReadProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_ReadProduct_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReadProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_ReadProduct_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReadProduct input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Products_ReadProduct_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Products_ReadProduct_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ReadProduct Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Products_ReadProduct_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ProductID input for this ReadProduct Choreo.
     *
     * @param string $value (required, string) The ID of the product you are trying to read information on.
     * @return Xively_Products_ReadProduct_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }
}


/**
 * Execution object for the ReadProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_ReadProduct_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReadProduct Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReadProduct execution.
     * @param Xively_Products_ReadProduct $choreo The choreography object for this execution.
     * @param Xively_Products_ReadProduct_Inputs|array $inputs (optional) Inputs as Xively_Products_ReadProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_ReadProduct_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Products_ReadProduct $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReadProduct execution.
     *
     * @return Xively_Products_ReadProduct_Results New results object.
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
     * Wraps results in appropriate results class for this ReadProduct execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Products_ReadProduct_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Products_ReadProduct_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReadProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_ReadProduct_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReadProduct Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Products_ReadProduct_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReadProduct execution.
     *
     * @return string (json) The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a JSON or XML representation of all of the user's keys.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_ListAllKeys extends Temboo_Choreography
{
    /**
     * Returns a JSON or XML representation of all of the user's keys.
     *
     * @param Temboo_Session $session The session that owns this ListAllKeys Choreo.
     * @return Xively_APIKeys_ListAllKeys New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/APIKeys/ListAllKeys/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllKeys Choreo.
     *
     * @param Xively_APIKeys_ListAllKeys_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_ListAllKeys_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_ListAllKeys_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_APIKeys_ListAllKeys_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllKeys Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_ListAllKeys_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_APIKeys_ListAllKeys_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllKeys Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_ListAllKeys_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllKeys Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_ListAllKeys_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllKeys input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_APIKeys_ListAllKeys_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_APIKeys_ListAllKeys_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllKeys Choreo.
     *
     * @param string $value (required, string) The master API Key for which you would like to return a list of all the user's keys.
     * @return Xively_APIKeys_ListAllKeys_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListAllKeys Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Xively_APIKeys_ListAllKeys_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListAllKeys Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_ListAllKeys_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllKeys Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllKeys execution.
     * @param Xively_APIKeys_ListAllKeys $choreo The choreography object for this execution.
     * @param Xively_APIKeys_ListAllKeys_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_ListAllKeys_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_ListAllKeys_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_APIKeys_ListAllKeys $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllKeys execution.
     *
     * @return Xively_APIKeys_ListAllKeys_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllKeys execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_APIKeys_ListAllKeys_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_APIKeys_ListAllKeys_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllKeys Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_ListAllKeys_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllKeys Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_APIKeys_ListAllKeys_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllKeys execution.
     *
     * @return string The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns filterable data on a specific feed viewable by the authenticated account.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ReadFeed extends Temboo_Choreography
{
    /**
     * Returns filterable data on a specific feed viewable by the authenticated account.
     *
     * @param Temboo_Session $session The session that owns this ReadFeed Choreo.
     * @return Xively_ReadWriteData_ReadFeed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/ReadFeed/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReadFeed Choreo.
     *
     * @param Xively_ReadWriteData_ReadFeed_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_ReadFeed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_ReadFeed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_ReadFeed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReadFeed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_ReadFeed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_ReadFeed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReadFeed Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ReadFeed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReadFeed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_ReadFeed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReadFeed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ReadFeed Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Datastreams input for this ReadFeed Choreo.
     *
     * @param string $value (optional, string) Filter by datastream. Valid values - comma separated datastream IDs (Ex: energy,power).
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setDatastreams($value)
    {
        return $this->set('Datastreams', $value);
    }

    /**
     * Set the value for the Duration input for this ReadFeed Choreo.
     *
     * @param string $value (optional, string) Used for a historical query. If used with EndDate will request data prior to EndDate, if used with StartDate will request data after StartDate. By itself will give most recent data. Ex: 6hours, 2days.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the EndDate input for this ReadFeed Choreo.
     *
     * @param string $value (optional, date) Used for a historical query. Defines the end point of the data returned as a timestamp. Ex: 2013-05-10T12:00:00Z.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the FeedID input for this ReadFeed Choreo.
     *
     * @param int $value (required, integer) The ID of the feed you wish to view.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the FeedType input for this ReadFeed Choreo.
     *
     * @param string $value (optional, string) The type of feed that is being returned. Valid values are "json" (the default), "csv" and "xml". No metadata is returned for the csv feed.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setFeedType($value)
    {
        return $this->set('FeedType', $value);
    }

    /**
     * Set the value for the FindPrevious input for this ReadFeed Choreo.
     *
     * @param bool $value (optional, boolean) Used for a historical query. Will also return the previous value to the date range being requested. Useful when graphing, to start a graph with a datapoint. Valid values: "true", blank (default).
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setFindPrevious($value)
    {
        return $this->set('FindPrevious', $value);
    }

    /**
     * Set the value for the IntervalType input for this ReadFeed Choreo.
     *
     * @param string $value (optional, string) Used for a historical query. If set to "discrete" the data will be returned in fixed time interval format according to Interval value. If not set, the raw datapoints will be returned.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setIntervalType($value)
    {
        return $this->set('IntervalType', $value);
    }

    /**
     * Set the value for the Interval input for this ReadFeed Choreo.
     *
     * @param int $value (optional, integer) Used for a historical query. Determines what interval of data is requested and is defined in seconds between the datapoints. See documentation for full list of possible values. Ex.: 0, 30, 60, etc.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setInterval($value)
    {
        return $this->set('Interval', $value);
    }

    /**
     * Set the value for the Limit input for this ReadFeed Choreo.
     *
     * @param int $value (optional, integer) Used for a historical query. Limits the number of results to the number specified here. Defaults to 100, has a maximum of 1000.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ShowUser input for this ReadFeed Choreo.
     *
     * @param string $value (optional, string) Include user login for each feed. For JSON/XML response only. Valid values: "true", "false" (default).
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setShowUser($value)
    {
        return $this->set('ShowUser', $value);
    }

    /**
     * Set the value for the StartDate input for this ReadFeed Choreo.
     *
     * @param string $value (optional, date) Used for a historical query. Defines the starting point of the query as a timestamp. Ex: 2013-05-10T00:00:00Z.
     * @return Xively_ReadWriteData_ReadFeed_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }
}


/**
 * Execution object for the ReadFeed Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ReadFeed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReadFeed Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReadFeed execution.
     * @param Xively_ReadWriteData_ReadFeed $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_ReadFeed_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_ReadFeed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_ReadFeed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_ReadFeed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReadFeed execution.
     *
     * @return Xively_ReadWriteData_ReadFeed_Results New results object.
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
     * Wraps results in appropriate results class for this ReadFeed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_ReadFeed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_ReadFeed_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReadFeed Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ReadFeed_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReadFeed Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_ReadFeed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReadFeed execution.
     *
     * @return string The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing APIKey.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_UpdateKey extends Temboo_Choreography
{
    /**
     * Updates an existing APIKey.
     *
     * @param Temboo_Session $session The session that owns this UpdateKey Choreo.
     * @return Xively_APIKeys_UpdateKey New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/APIKeys/UpdateKey/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateKey Choreo.
     *
     * @param Xively_APIKeys_UpdateKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_UpdateKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_UpdateKey_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_APIKeys_UpdateKey_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_UpdateKey_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_APIKeys_UpdateKey_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_UpdateKey_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_APIKeys_UpdateKey_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateKey input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateKey Choreo.
     *
     * @param string $value (required, string) The API Key you would like to update.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessMethods input for this UpdateKey Choreo.
     *
     * @param string $value (conditional, string) Comma-separated input containing one or more allowed HTTP methods that the key is allowed. Valid values: get, put, post, and/or delete. Ex.: "put,post". Required unless writing your own CustomKey.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setAccessMethods($value)
    {
        return $this->set('AccessMethods', $value);
    }

    /**
     * Set the value for the CustomKey input for this UpdateKey Choreo.
     *
     * @param mixed $value (optional, any) Optional Custom key to sent to Xively. Type and format depends on CustomType. Please see documentation for more information on constructing your own body. If used all other scalar inputs are ignored.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setCustomKey($value)
    {
        return $this->set('CustomKey', $value);
    }

    /**
     * Set the value for the CustomPermissions input for this UpdateKey Choreo.
     *
     * @param mixed $value (optional, any) Optional custom permissions for advanced configuration. Type and format depends on CustomType. If specified ignores SourceIP, ResourcesData and AccessMethodsData.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setCustomPermissions($value)
    {
        return $this->set('CustomPermissions', $value);
    }

    /**
     * Set the value for the CustomType input for this UpdateKey Choreo.
     *
     * @param string $value (optional, string) The datatype that is being input if adding custom permission objects. Valid values are "json" (the default) and "xml".
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setCustomType($value)
    {
        return $this->set('CustomType', $value);
    }

    /**
     * Set the value for the Label input for this UpdateKey Choreo.
     *
     * @param string $value (conditional, string) A label by which the key can be referenced. Required unless writing your own CustomKey.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setLabel($value)
    {
        return $this->set('Label', $value);
    }

    /**
     * Set the value for the MasterAPIKey input for this UpdateKey Choreo.
     *
     * @param string $value (optional, string) Specify a MasterAPIKey with more permissions if the APIKey you would like to view does not have sufficient (write) permissions.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setMasterAPIKey($value)
    {
        return $this->set('MasterAPIKey', $value);
    }

    /**
     * Set the value for the PrivateAccess input for this UpdateKey Choreo.
     *
     * @param string $value (optional, string) Flag that indicates whether this key can access private resources belonging to the user. To turn on, input "true", leave blank for "false".
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setPrivateAccess($value)
    {
        return $this->set('PrivateAccess', $value);
    }

    /**
     * Set the value for the ResourceFeedID input for this UpdateKey Choreo.
     *
     * @param string $value (optional, string) Specify a particular FeedID that the APIKey should have access to. If not specified, the APIKey permissions will apply to all feeds you are authorized to access.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setResourceFeedID($value)
    {
        return $this->set('ResourceFeedID', $value);
    }

    /**
     * Set the value for the SourceIP input for this UpdateKey Choreo.
     *
     * @param string $value (optional, string) An IP address that, when specified, limits incoming requests to that specific IP address only.
     * @return Xively_APIKeys_UpdateKey_Inputs For method chaining.
     */
    public function setSourceIP($value)
    {
        return $this->set('SourceIP', $value);
    }
}


/**
 * Execution object for the UpdateKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_UpdateKey_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateKey Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateKey execution.
     * @param Xively_APIKeys_UpdateKey $choreo The choreography object for this execution.
     * @param Xively_APIKeys_UpdateKey_Inputs|array $inputs (optional) Inputs as Xively_APIKeys_UpdateKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_APIKeys_UpdateKey_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_APIKeys_UpdateKey $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateKey execution.
     *
     * @return Xively_APIKeys_UpdateKey_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateKey execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_APIKeys_UpdateKey_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_APIKeys_UpdateKey_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateKey Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_APIKeys_UpdateKey_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateKey Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_APIKeys_UpdateKey_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this UpdateKey execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful APIKey update, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Returns all triggers for the authenticated account.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_ListAllTriggers extends Temboo_Choreography
{
    /**
     * Returns all triggers for the authenticated account.
     *
     * @param Temboo_Session $session The session that owns this ListAllTriggers Choreo.
     * @return Xively_Triggers_ListAllTriggers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Triggers/ListAllTriggers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllTriggers Choreo.
     *
     * @param Xively_Triggers_ListAllTriggers_Inputs|array $inputs (optional) Inputs as Xively_Triggers_ListAllTriggers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_ListAllTriggers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Triggers_ListAllTriggers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllTriggers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_ListAllTriggers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Triggers_ListAllTriggers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllTriggers Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_ListAllTriggers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllTriggers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_ListAllTriggers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllTriggers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Triggers_ListAllTriggers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Triggers_ListAllTriggers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllTriggers Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Triggers_ListAllTriggers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FeedID input for this ListAllTriggers Choreo.
     *
     * @param int $value (optional, integer) Filter the returned triggers to only include those for the specified FeedID.
     * @return Xively_Triggers_ListAllTriggers_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListAllTriggers Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "json" (the default) and "xml".
     * @return Xively_Triggers_ListAllTriggers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListAllTriggers Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_ListAllTriggers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllTriggers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllTriggers execution.
     * @param Xively_Triggers_ListAllTriggers $choreo The choreography object for this execution.
     * @param Xively_Triggers_ListAllTriggers_Inputs|array $inputs (optional) Inputs as Xively_Triggers_ListAllTriggers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_ListAllTriggers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Triggers_ListAllTriggers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllTriggers execution.
     *
     * @return Xively_Triggers_ListAllTriggers_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllTriggers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Triggers_ListAllTriggers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Triggers_ListAllTriggers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllTriggers Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_ListAllTriggers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllTriggers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Triggers_ListAllTriggers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllTriggers execution.
     *
     * @return string The response from Xively.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new product batch.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_CreateProduct extends Temboo_Choreography
{
    /**
     * Creates a new product batch.
     *
     * @param Temboo_Session $session The session that owns this CreateProduct Choreo.
     * @return Xively_Products_CreateProduct New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Products/CreateProduct/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateProduct Choreo.
     *
     * @param Xively_Products_CreateProduct_Inputs|array $inputs (optional) Inputs as Xively_Products_CreateProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_CreateProduct_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Products_CreateProduct_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_CreateProduct_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Products_CreateProduct_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_CreateProduct_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_CreateProduct_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateProduct input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Products_CreateProduct_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Products_CreateProduct_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateProduct Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Products_CreateProduct_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CustomProduct input for this CreateProduct Choreo.
     *
     * @param string $value (optional, json) Optional custom configuration for creating your product in JSON. If you use this field the other optional parameters will be ignored. See Choreo description and Xively documentation for details.
     * @return Xively_Products_CreateProduct_Inputs For method chaining.
     */
    public function setCustomProduct($value)
    {
        return $this->set('CustomProduct', $value);
    }

    /**
     * Set the value for the Datastreams input for this CreateProduct Choreo.
     *
     * @param string $value (optional, json) Default device datastream JSON array. Every newly created device in this product will have this default datastream. Ex: [{"id":"channel1"},{"id":"demo"}]
     * @return Xively_Products_CreateProduct_Inputs For method chaining.
     */
    public function setDatastreams($value)
    {
        return $this->set('Datastreams', $value);
    }

    /**
     * Set the value for the Description input for this CreateProduct Choreo.
     *
     * @param string $value (optional, string) Description of the product.
     * @return Xively_Products_CreateProduct_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Name input for this CreateProduct Choreo.
     *
     * @param string $value (conditional, string) Name of the product. Required unless using the CustomProduct JSON input.
     * @return Xively_Products_CreateProduct_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Private input for this CreateProduct Choreo.
     *
     * @param string $value (optional, string) Default device feed privacy settings. Valid values: "true", "false" (default).
     * @return Xively_Products_CreateProduct_Inputs For method chaining.
     */
    public function setPrivate($value)
    {
        return $this->set('Private', $value);
    }
}


/**
 * Execution object for the CreateProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_CreateProduct_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateProduct Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateProduct execution.
     * @param Xively_Products_CreateProduct $choreo The choreography object for this execution.
     * @param Xively_Products_CreateProduct_Inputs|array $inputs (optional) Inputs as Xively_Products_CreateProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_CreateProduct_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Products_CreateProduct $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateProduct execution.
     *
     * @return Xively_Products_CreateProduct_Results New results object.
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
     * Wraps results in appropriate results class for this CreateProduct execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Products_CreateProduct_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Products_CreateProduct_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_CreateProduct_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateProduct Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Products_CreateProduct_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ProductID" output from this CreateProduct execution.
     *
     * @return string (string) The ProductID obtained from the ProductLocation returned by this Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getProductID()
    {
        return $this->get('ProductID');
    }
    /**
     * Retrieve the value for the "ProductLocation" output from this CreateProduct execution.
     *
     * @return string (string) The URL of the newly created product.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getProductLocation()
    {
        return $this->get('ProductLocation');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this CreateProduct execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful product creation, the code should be 201.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Updates an existing product batch.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_UpdateProduct extends Temboo_Choreography
{
    /**
     * Updates an existing product batch.
     *
     * @param Temboo_Session $session The session that owns this UpdateProduct Choreo.
     * @return Xively_Products_UpdateProduct New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Products/UpdateProduct/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateProduct Choreo.
     *
     * @param Xively_Products_UpdateProduct_Inputs|array $inputs (optional) Inputs as Xively_Products_UpdateProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_UpdateProduct_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Products_UpdateProduct_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_UpdateProduct_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Products_UpdateProduct_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_UpdateProduct_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateProduct Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Products_UpdateProduct_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateProduct input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Products_UpdateProduct_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Products_UpdateProduct_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateProduct Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Products_UpdateProduct_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CustomProduct input for this UpdateProduct Choreo.
     *
     * @param string $value (optional, json) Optional custom configuration for creating your product in JSON. If you use this field the other optional parameters will be ignored. See Choreo description and Xively documentation for details.
     * @return Xively_Products_UpdateProduct_Inputs For method chaining.
     */
    public function setCustomProduct($value)
    {
        return $this->set('CustomProduct', $value);
    }

    /**
     * Set the value for the Datastreams input for this UpdateProduct Choreo.
     *
     * @param string $value (optional, json) Default device datastream JSON array. Every newly created device in this product will have this default datastream. Ex: [{"id":"channel1"},{"id":"demo"}].
     * @return Xively_Products_UpdateProduct_Inputs For method chaining.
     */
    public function setDatastreams($value)
    {
        return $this->set('Datastreams', $value);
    }

    /**
     * Set the value for the Description input for this UpdateProduct Choreo.
     *
     * @param string $value (optional, string) Description of the product.
     * @return Xively_Products_UpdateProduct_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Name input for this UpdateProduct Choreo.
     *
     * @param string $value (optional, string) Name of the product.
     * @return Xively_Products_UpdateProduct_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Private input for this UpdateProduct Choreo.
     *
     * @param string $value (optional, string) Default device feed privacy settings. Valid values: "true", "false" (default). Note - leaving this blank will automatically change a private device feed to a public device feed.
     * @return Xively_Products_UpdateProduct_Inputs For method chaining.
     */
    public function setPrivate($value)
    {
        return $this->set('Private', $value);
    }

    /**
     * Set the value for the ProductID input for this UpdateProduct Choreo.
     *
     * @param string $value (required, string) The ID of the product you are trying to update.
     * @return Xively_Products_UpdateProduct_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }
}


/**
 * Execution object for the UpdateProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_UpdateProduct_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateProduct Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateProduct execution.
     * @param Xively_Products_UpdateProduct $choreo The choreography object for this execution.
     * @param Xively_Products_UpdateProduct_Inputs|array $inputs (optional) Inputs as Xively_Products_UpdateProduct_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Products_UpdateProduct_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Products_UpdateProduct $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateProduct execution.
     *
     * @return Xively_Products_UpdateProduct_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateProduct execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Products_UpdateProduct_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Products_UpdateProduct_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateProduct Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Products_UpdateProduct_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateProduct Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Products_UpdateProduct_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this UpdateProduct execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful product update, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Deletes the device matching the provided serial number.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_DeleteDevice extends Temboo_Choreography
{
    /**
     * Deletes the device matching the provided serial number.
     *
     * @param Temboo_Session $session The session that owns this DeleteDevice Choreo.
     * @return Xively_Devices_DeleteDevice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Devices/DeleteDevice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteDevice Choreo.
     *
     * @param Xively_Devices_DeleteDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_DeleteDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_DeleteDevice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Devices_DeleteDevice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_DeleteDevice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Devices_DeleteDevice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_DeleteDevice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_DeleteDevice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteDevice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Devices_DeleteDevice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Devices_DeleteDevice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteDevice Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Devices_DeleteDevice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ProductID input for this DeleteDevice Choreo.
     *
     * @param string $value (required, string) The product ID for the device you would like to delete.
     * @return Xively_Devices_DeleteDevice_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }

    /**
     * Set the value for the SerialNumber input for this DeleteDevice Choreo.
     *
     * @param string $value (required, string) The serial number for the device you would like to delete.
     * @return Xively_Devices_DeleteDevice_Inputs For method chaining.
     */
    public function setSerialNumber($value)
    {
        return $this->set('SerialNumber', $value);
    }
}


/**
 * Execution object for the DeleteDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_DeleteDevice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteDevice Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteDevice execution.
     * @param Xively_Devices_DeleteDevice $choreo The choreography object for this execution.
     * @param Xively_Devices_DeleteDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_DeleteDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_DeleteDevice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Devices_DeleteDevice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteDevice execution.
     *
     * @return Xively_Devices_DeleteDevice_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteDevice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Devices_DeleteDevice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Devices_DeleteDevice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_DeleteDevice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteDevice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Devices_DeleteDevice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteDevice execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful deletion, the status code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Allows you to easily update the metadata of your feed.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteFeedMetadata extends Temboo_Choreography
{
    /**
     * Allows you to easily update the metadata of your feed.
     *
     * @param Temboo_Session $session The session that owns this WriteFeedMetadata Choreo.
     * @return Xively_ReadWriteData_WriteFeedMetadata New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/WriteFeedMetadata/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WriteFeedMetadata Choreo.
     *
     * @param Xively_ReadWriteData_WriteFeedMetadata_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_WriteFeedMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_WriteFeedMetadata_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WriteFeedMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_WriteFeedMetadata_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WriteFeedMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteFeedMetadata_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WriteFeedMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WriteFeedMetadata input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FeedData input for this WriteFeedMetadata Choreo.
     *
     * @param mixed $value (optional, any) Custom data body for the new feed in JSON or XML format (set by FeedType). See documentation for how to write your own feed. If custom FeedData is used, all other optional inputs are ignored.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setFeedData($value)
    {
        return $this->set('FeedData', $value);
    }

    /**
     * Set the value for the APIKey input for this WriteFeedMetadata Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Description input for this WriteFeedMetadata Choreo.
     *
     * @param string $value (optional, string) A description of the feed. Leave empty to keep existing Description. Type "BLANK" to clear existing Description.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Email input for this WriteFeedMetadata Choreo.
     *
     * @param string $value (optional, string) Contact Email. Leave empty to keep existing Email. Type "BLANK" to clear existing Email.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FeedID input for this WriteFeedMetadata Choreo.
     *
     * @param int $value (required, integer) The ID for the feed that you would like to update.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the FeedType input for this WriteFeedMetadata Choreo.
     *
     * @param string $value (optional, string) The type of feed that is being provided for custom FeedData. Valid values are "json" (the default) and "xml".
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setFeedType($value)
    {
        return $this->set('FeedType', $value);
    }

    /**
     * Set the value for the Icon input for this WriteFeedMetadata Choreo.
     *
     * @param string $value (optional, string) The URL of an icon which is relevant to this feed. Leave empty to keep existing Icon. Type "BLANK" to clear existing Icon.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setIcon($value)
    {
        return $this->set('Icon', $value);
    }

    /**
     * Set the value for the Private input for this WriteFeedMetadata Choreo.
     *
     * @param bool $value (optional, boolean) Specifies whether or not the feed is private to the creator of the feed. If 'true' the feed is private, if 'false' the feed is public. Leave empty to keep existing settings.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setPrivate($value)
    {
        return $this->set('Private', $value);
    }

    /**
     * Set the value for the Tags input for this WriteFeedMetadata Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of searchable tags (the characters ', ", and commas are not allowed). Tags input overwrites previous tags, enter "BLANK" to clear all tags. Ex: "power,energy".
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this WriteFeedMetadata Choreo.
     *
     * @param string $value (optional, string) A descriptive name for the feed. Leave empty to keep existing Title. Type "BLANK" to clear existing Title.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Website input for this WriteFeedMetadata Choreo.
     *
     * @param string $value (optional, string) The URL of a website which is relevant to this feed. Leave empty to keep existing Website. Type "BLANK" to clear existing Website. Ex.: http://www.homepage.com.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Inputs For method chaining.
     */
    public function setWebsite($value)
    {
        return $this->set('Website', $value);
    }
}


/**
 * Execution object for the WriteFeedMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteFeedMetadata_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WriteFeedMetadata Choreo.
     *
     * @param Temboo_Session $session The session that owns this WriteFeedMetadata execution.
     * @param Xively_ReadWriteData_WriteFeedMetadata $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_WriteFeedMetadata_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_WriteFeedMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_WriteFeedMetadata $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WriteFeedMetadata execution.
     *
     * @return Xively_ReadWriteData_WriteFeedMetadata_Results New results object.
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
     * Wraps results in appropriate results class for this WriteFeedMetadata execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_WriteFeedMetadata_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WriteFeedMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteFeedMetadata_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WriteFeedMetadata Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_WriteFeedMetadata_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this WriteFeedMetadata execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful feed update, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Deletes the specified trigger.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_DeleteTrigger extends Temboo_Choreography
{
    /**
     * Deletes the specified trigger.
     *
     * @param Temboo_Session $session The session that owns this DeleteTrigger Choreo.
     * @return Xively_Triggers_DeleteTrigger New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Triggers/DeleteTrigger/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteTrigger Choreo.
     *
     * @param Xively_Triggers_DeleteTrigger_Inputs|array $inputs (optional) Inputs as Xively_Triggers_DeleteTrigger_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_DeleteTrigger_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Triggers_DeleteTrigger_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteTrigger Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_DeleteTrigger_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Triggers_DeleteTrigger_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_DeleteTrigger_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteTrigger Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_DeleteTrigger_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteTrigger input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Triggers_DeleteTrigger_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Triggers_DeleteTrigger_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteTrigger Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Triggers_DeleteTrigger_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the TriggerID input for this DeleteTrigger Choreo.
     *
     * @param int $value (required, integer) TriggerID for the trigger that you wish to delete.
     * @return Xively_Triggers_DeleteTrigger_Inputs For method chaining.
     */
    public function setTriggerID($value)
    {
        return $this->set('TriggerID', $value);
    }
}


/**
 * Execution object for the DeleteTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_DeleteTrigger_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteTrigger Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteTrigger execution.
     * @param Xively_Triggers_DeleteTrigger $choreo The choreography object for this execution.
     * @param Xively_Triggers_DeleteTrigger_Inputs|array $inputs (optional) Inputs as Xively_Triggers_DeleteTrigger_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_DeleteTrigger_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Triggers_DeleteTrigger $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteTrigger execution.
     *
     * @return Xively_Triggers_DeleteTrigger_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteTrigger execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Triggers_DeleteTrigger_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Triggers_DeleteTrigger_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_DeleteTrigger_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteTrigger Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Triggers_DeleteTrigger_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this DeleteTrigger execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful trigger deletion, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Creates a new trigger.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_CreateTrigger extends Temboo_Choreography
{
    /**
     * Creates a new trigger.
     *
     * @param Temboo_Session $session The session that owns this CreateTrigger Choreo.
     * @return Xively_Triggers_CreateTrigger New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Triggers/CreateTrigger/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateTrigger Choreo.
     *
     * @param Xively_Triggers_CreateTrigger_Inputs|array $inputs (optional) Inputs as Xively_Triggers_CreateTrigger_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_CreateTrigger_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Triggers_CreateTrigger_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateTrigger Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_CreateTrigger_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Triggers_CreateTrigger_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_CreateTrigger_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateTrigger Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Triggers_CreateTrigger_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateTrigger input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Triggers_CreateTrigger_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Triggers_CreateTrigger_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateTrigger Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Triggers_CreateTrigger_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DatastreamID input for this CreateTrigger Choreo.
     *
     * @param string $value (required, string) The ID of the datastream you would like to create a trigger for.
     * @return Xively_Triggers_CreateTrigger_Inputs For method chaining.
     */
    public function setDatastreamID($value)
    {
        return $this->set('DatastreamID', $value);
    }

    /**
     * Set the value for the FeedID input for this CreateTrigger Choreo.
     *
     * @param int $value (required, integer) The ID of the feed you would like to create a trigger for.
     * @return Xively_Triggers_CreateTrigger_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the ThresholdValue input for this CreateTrigger Choreo.
     *
     * @param string $value (required, string) Threshold that will cause the trigger to activate. Not required if TriggerType = "change", "frozen" or "live". Required for all others.
     * @return Xively_Triggers_CreateTrigger_Inputs For method chaining.
     */
    public function setThresholdValue($value)
    {
        return $this->set('ThresholdValue', $value);
    }

    /**
     * Set the value for the TriggerType input for this CreateTrigger Choreo.
     *
     * @param string $value (required, string) Type of trigger. Possible values: "gt", "gte", "lt", "lte", "eq", "change" (any change), "frozen" (no updates for 15 minutes), or "live" (updated again after being frozen).
     * @return Xively_Triggers_CreateTrigger_Inputs For method chaining.
     */
    public function setTriggerType($value)
    {
        return $this->set('TriggerType', $value);
    }

    /**
     * Set the value for the URL input for this CreateTrigger Choreo.
     *
     * @param string $value (required, string) The URL that the Xively trigger will post to when activated. Ex: http://requestb.in
     * @return Xively_Triggers_CreateTrigger_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the CreateTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_CreateTrigger_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateTrigger Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateTrigger execution.
     * @param Xively_Triggers_CreateTrigger $choreo The choreography object for this execution.
     * @param Xively_Triggers_CreateTrigger_Inputs|array $inputs (optional) Inputs as Xively_Triggers_CreateTrigger_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Triggers_CreateTrigger_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Triggers_CreateTrigger $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateTrigger execution.
     *
     * @return Xively_Triggers_CreateTrigger_Results New results object.
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
     * Wraps results in appropriate results class for this CreateTrigger execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Triggers_CreateTrigger_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Triggers_CreateTrigger_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateTrigger Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Triggers_CreateTrigger_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateTrigger Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Triggers_CreateTrigger_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this CreateTrigger execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful trigger creation, the code should be 201.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
    /**
     * Retrieve the value for the "TriggerID" output from this CreateTrigger execution.
     *
     * @return int (integer) TriggerID extracted from the TriggerLocation.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTriggerID()
    {
        return $this->get('TriggerID');
    }
    /**
     * Retrieve the value for the "TriggerLocation" output from this CreateTrigger execution.
     *
     * @return string (string) The URL of the newly created trigger.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTriggerLocation()
    {
        return $this->get('TriggerLocation');
    }
}

/**
 * Returns a customizable graph (Base64-encoded PNG image file) of datapoints from a specific datastream.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ReadGraph extends Temboo_Choreography
{
    /**
     * Returns a customizable graph (Base64-encoded PNG image file) of datapoints from a specific datastream.
     *
     * @param Temboo_Session $session The session that owns this ReadGraph Choreo.
     * @return Xively_ReadWriteData_ReadGraph New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/ReadGraph/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReadGraph Choreo.
     *
     * @param Xively_ReadWriteData_ReadGraph_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_ReadGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_ReadGraph_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_ReadGraph_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReadGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_ReadGraph_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_ReadGraph_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReadGraph Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ReadGraph_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReadGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_ReadGraph_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReadGraph input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ReadGraph Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Color input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) The PNG color in hex. Ex: FFCC33.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setColor($value)
    {
        return $this->set('Color', $value);
    }

    /**
     * Set the value for the DatastreamID input for this ReadGraph Choreo.
     *
     * @param string $value (required, string) The ID for the datastream you wish to read.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setDatastreamID($value)
    {
        return $this->set('DatastreamID', $value);
    }

    /**
     * Set the value for the Duration input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) Used for a historical query. If used with EndDate will request data prior to EndDate, if used with StartDate will request data after StartDate. By itself will give most recent data. Ex: 6hours, 2days.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the EndDate input for this ReadGraph Choreo.
     *
     * @param string $value (optional, date) Used for a historical query. Defines the end point of the data returned as a timestamp. Ex: 2013-05-10T12:00:00Z. Default value is set to current timestamp.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the FeedID input for this ReadGraph Choreo.
     *
     * @param int $value (required, integer) The ID of the feed you wish to read.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the FindPrevious input for this ReadGraph Choreo.
     *
     * @param bool $value (optional, boolean) Used for a historical query. Will also return the previous value to the date range being requested. Useful to allow a graph to start a graph with some datapoint. Valid values: "true", blank (default).
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setFindPrevious($value)
    {
        return $this->set('FindPrevious', $value);
    }

    /**
     * Set the value for the Height input for this ReadGraph Choreo.
     *
     * @param int $value (optional, integer) The PNG height in pixels. Max height: 500. Ex: 400.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setHeight($value)
    {
        return $this->set('Height', $value);
    }

    /**
     * Set the value for the IntervalType input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) Used for a historical query. If set to "discrete" the data will be returned in fixed time interval format according to Interval value. If not set, the raw datapoints will be returned.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setIntervalType($value)
    {
        return $this->set('IntervalType', $value);
    }

    /**
     * Set the value for the Interval input for this ReadGraph Choreo.
     *
     * @param int $value (optional, integer) Used for a historical query. Determines what interval of data is requested and is defined in seconds between the datapoints. See documentation for full list of possible values. Ex: 0, 30, 60, etc.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setInterval($value)
    {
        return $this->set('Interval', $value);
    }

    /**
     * Set the value for the Legend input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) Label given datapoints on a legend included on the graph.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setLegend($value)
    {
        return $this->set('Legend', $value);
    }

    /**
     * Set the value for the Limit input for this ReadGraph Choreo.
     *
     * @param int $value (optional, integer) Used for a historical query. LImits the number of results to the number specified here. Defaults to 100, has a maximum of 1000.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LineSize input for this ReadGraph Choreo.
     *
     * @param int $value (optional, integer) Size of the lines/strokes in pixels. Ex: 4.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setLineSize($value)
    {
        return $this->set('LineSize', $value);
    }

    /**
     * Set the value for the ShowAxisLabels input for this ReadGraph Choreo.
     *
     * @param bool $value (optional, boolean) Show access labels. Input "true" to turn on, leave blank to keep off (default).
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setShowAxisLabels($value)
    {
        return $this->set('ShowAxisLabels', $value);
    }

    /**
     * Set the value for the ShowDetailedGrid input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) Show detailed grid. Input "true" to turn on, leave blank to keep off (default).
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setShowDetailedGrid($value)
    {
        return $this->set('ShowDetailedGrid', $value);
    }

    /**
     * Set the value for the StartDate input for this ReadGraph Choreo.
     *
     * @param string $value (optional, date) Used for a historical query. Defines the starting the point of the query as a timestamp. Ex: 2013-05-10T00:00:00Z.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Timezone input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) Timezone of the graph. For a list of valid values please see description and API documenation. Ex: Eastern Time (US & Canada), Pacific Time (US & Canada), UTC, Tokyo.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setTimezone($value)
    {
        return $this->set('Timezone', $value);
    }

    /**
     * Set the value for the Title input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) Title of the graph.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Width input for this ReadGraph Choreo.
     *
     * @param int $value (optional, integer) The PNG width in pixels. Max width: 600. Ex: 600.
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setWidth($value)
    {
        return $this->set('Width', $value);
    }

    /**
     * Set the value for the YAxisMax input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) Y-axis maximum value if the YAxisScale is set to "manual".
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setYAxisMax($value)
    {
        return $this->set('YAxisMax', $value);
    }

    /**
     * Set the value for the YAxisMin input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) Y-axis minimum value if the YAxisScale is set to "manual".
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setYAxisMin($value)
    {
        return $this->set('YAxisMin', $value);
    }

    /**
     * Set the value for the YAxisScale input for this ReadGraph Choreo.
     *
     * @param string $value (optional, string) Method used to determine the y-axis scale. Valid values: "auto" (default), "datastream", or "manual".
     * @return Xively_ReadWriteData_ReadGraph_Inputs For method chaining.
     */
    public function setYAxisScale($value)
    {
        return $this->set('YAxisScale', $value);
    }
}


/**
 * Execution object for the ReadGraph Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ReadGraph_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReadGraph Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReadGraph execution.
     * @param Xively_ReadWriteData_ReadGraph $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_ReadGraph_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_ReadGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_ReadGraph_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_ReadGraph $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReadGraph execution.
     *
     * @return Xively_ReadWriteData_ReadGraph_Results New results object.
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
     * Wraps results in appropriate results class for this ReadGraph execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_ReadGraph_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_ReadGraph_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReadGraph Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_ReadGraph_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReadGraph Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_ReadGraph_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReadGraph execution.
     *
     * @return string The response from Xively, which is a base64-encoded binary .png file. Decode to get the binary PNG graphic.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to easily update the metadata of your datastream.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteDatastreamMetadata extends Temboo_Choreography
{
    /**
     * Allows you to easily update the metadata of your datastream.
     *
     * @param Temboo_Session $session The session that owns this WriteDatastreamMetadata Choreo.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/WriteDatastreamMetadata/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WriteDatastreamMetadata Choreo.
     *
     * @param Xively_ReadWriteData_WriteDatastreamMetadata_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_WriteDatastreamMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_WriteDatastreamMetadata_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WriteDatastreamMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_WriteDatastreamMetadata_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WriteDatastreamMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteDatastreamMetadata_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WriteDatastreamMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WriteDatastreamMetadata input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this WriteDatastreamMetadata Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CustomDatastreamData input for this WriteDatastreamMetadata Choreo.
     *
     * @param string $value (optional, json) Custom data body for the updated datastream in JSON. See documentation for how to construct your own datastream feed. If custom DatastreamData is used, all other optional inputs are ignored.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setCustomDatastreamData($value)
    {
        return $this->set('CustomDatastreamData', $value);
    }

    /**
     * Set the value for the DatastreamID input for this WriteDatastreamMetadata Choreo.
     *
     * @param string $value (required, string) The ID of the Datastream you would like to add metadata to. Required unless you are using CustomDatastreamData.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setDatastreamID($value)
    {
        return $this->set('DatastreamID', $value);
    }

    /**
     * Set the value for the FeedID input for this WriteDatastreamMetadata Choreo.
     *
     * @param int $value (required, integer) The ID for the feed that you would like to update.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the MaxValue input for this WriteDatastreamMetadata Choreo.
     *
     * @param string $value (optional, string) The maximum value since the last reset. Leave empty to keep existing MaxValue. Type "BLANK" to clear existing value.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setMaxValue($value)
    {
        return $this->set('MaxValue', $value);
    }

    /**
     * Set the value for the MinValue input for this WriteDatastreamMetadata Choreo.
     *
     * @param string $value (optional, string) The minimum value since the last reset. Leave empty to keep existing MinValue. Type "BLANK" to clear existing value.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setMinValue($value)
    {
        return $this->set('MinValue', $value);
    }

    /**
     * Set the value for the Tags input for this WriteDatastreamMetadata Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of searchable tags (the characters ', ", and commas are not allowed). Tags input overwrites previous tags, enter "BLANK" to clear all tags. Ex: "power,energy".
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the UnitSymbol input for this WriteDatastreamMetadata Choreo.
     *
     * @param string $value (optional, string) The symbol of the Unit. Leave empty to keep existing UnitSymbol. Type "BLANK" to clear existing value. Ex: "C".
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setUnitSymbol($value)
    {
        return $this->set('UnitSymbol', $value);
    }

    /**
     * Set the value for the UnitType input for this WriteDatastreamMetadata Choreo.
     *
     * @param string $value (optional, string) The type of Unit. Leave empty to keep existing UnitType. Type "BLANK" to clear existing value. Ex: "basicSI".
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setUnitType($value)
    {
        return $this->set('UnitType', $value);
    }

    /**
     * Set the value for the Units input for this WriteDatastreamMetadata Choreo.
     *
     * @param string $value (optional, string) The units of the datastream. Leave empty to keep existing Units. Type "BLANK" to clear existing Units. Ex: "Celsius".
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }
}


/**
 * Execution object for the WriteDatastreamMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteDatastreamMetadata_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WriteDatastreamMetadata Choreo.
     *
     * @param Temboo_Session $session The session that owns this WriteDatastreamMetadata execution.
     * @param Xively_ReadWriteData_WriteDatastreamMetadata $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_WriteDatastreamMetadata_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_WriteDatastreamMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_WriteDatastreamMetadata $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WriteDatastreamMetadata execution.
     *
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Results New results object.
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
     * Wraps results in appropriate results class for this WriteDatastreamMetadata execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_WriteDatastreamMetadata_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WriteDatastreamMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteDatastreamMetadata_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WriteDatastreamMetadata Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_WriteDatastreamMetadata_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this WriteDatastreamMetadata execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful datastream update, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Deletes multiple datapoints from a single datastream given a start date, end date, and/or duration.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteMultipleDatapoints extends Temboo_Choreography
{
    /**
     * Deletes multiple datapoints from a single datastream given a start date, end date, and/or duration.
     *
     * @param Temboo_Session $session The session that owns this DeleteMultipleDatapoints Choreo.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/DeleteMultipleDatapoints/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteMultipleDatapoints Choreo.
     *
     * @param Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_DeleteMultipleDatapoints_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteMultipleDatapoints Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteMultipleDatapoints Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteMultipleDatapoints Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteMultipleDatapoints input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteMultipleDatapoints Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DatastreamID input for this DeleteMultipleDatapoints Choreo.
     *
     * @param string $value (required, string) The ID of the datastream you would like to delete datapoints from.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs For method chaining.
     */
    public function setDatastreamID($value)
    {
        return $this->set('DatastreamID', $value);
    }

    /**
     * Set the value for the Duration input for this DeleteMultipleDatapoints Choreo.
     *
     * @param string $value (conditional, string) Specifies the duration of the deletion. Can be used with StartDate or EndDate. Ex: 5seconds, 10minutes, 6hours. See documentation for full description / examples.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the EndDate input for this DeleteMultipleDatapoints Choreo.
     *
     * @param string $value (conditional, date) Defines the end point of the deletion as a timestamp. Can be used with Duration. Ex: 2013-05-10T12:00:00Z.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the FeedID input for this DeleteMultipleDatapoints Choreo.
     *
     * @param string $value (required, string) The ID of the feed you would like to delete datapoints from.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the StartDate input for this DeleteMultipleDatapoints Choreo.
     *
     * @param string $value (conditional, date) Defines the starting point of the deletion as a timestamp. Can be used with Duration. Ex: 2013-05-10T00:00:00Z.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }
}


/**
 * Execution object for the DeleteMultipleDatapoints Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteMultipleDatapoints_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteMultipleDatapoints Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteMultipleDatapoints execution.
     * @param Xively_ReadWriteData_DeleteMultipleDatapoints $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_DeleteMultipleDatapoints_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_DeleteMultipleDatapoints $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteMultipleDatapoints execution.
     *
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteMultipleDatapoints execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_DeleteMultipleDatapoints_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteMultipleDatapoints Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_DeleteMultipleDatapoints_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteMultipleDatapoints Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_DeleteMultipleDatapoints_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponsStatusCode" output from this DeleteMultipleDatapoints execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful datapoint range deletion, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponsStatusCode()
    {
        return $this->get('ResponsStatusCode');
    }
}

/**
 * Allows you to update your feed, including updating/creating new datastreams and datapoints. 
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteData extends Temboo_Choreography
{
    /**
     * Allows you to update your feed, including updating/creating new datastreams and datapoints. 
     *
     * @param Temboo_Session $session The session that owns this WriteData Choreo.
     * @return Xively_ReadWriteData_WriteData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/ReadWriteData/WriteData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WriteData Choreo.
     *
     * @param Xively_ReadWriteData_WriteData_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_WriteData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_WriteData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_ReadWriteData_WriteData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WriteData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_WriteData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_ReadWriteData_WriteData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WriteData Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WriteData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_ReadWriteData_WriteData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WriteData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_ReadWriteData_WriteData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_ReadWriteData_WriteData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FeedData input for this WriteData Choreo.
     *
     * @param mixed $value (optional, any) Custom data body for the new feed in JSON or XML format (set by FeedType). See documentation for the minimum required fields for a feed. If custom FeedData is used, Value and Timestamp is ignored.
     * @return Xively_ReadWriteData_WriteData_Inputs For method chaining.
     */
    public function setFeedData($value)
    {
        return $this->set('FeedData', $value);
    }

    /**
     * Set the value for the APIKey input for this WriteData Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_ReadWriteData_WriteData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DatastreamID input for this WriteData Choreo.
     *
     * @param string $value (optional, string) ID for single datastream you would like to update. Required if specifying a single datapoint update using Value.
     * @return Xively_ReadWriteData_WriteData_Inputs For method chaining.
     */
    public function setDatastreamID($value)
    {
        return $this->set('DatastreamID', $value);
    }

    /**
     * Set the value for the FeedID input for this WriteData Choreo.
     *
     * @param int $value (required, integer) The ID for the feed that you would like to update.
     * @return Xively_ReadWriteData_WriteData_Inputs For method chaining.
     */
    public function setFeedID($value)
    {
        return $this->set('FeedID', $value);
    }

    /**
     * Set the value for the FeedType input for this WriteData Choreo.
     *
     * @param string $value (optional, string) The type of feed that is being provided for custom FeedData. Valid values are "json" (the default), "xml" and "csv". Ignored if specifying single datapoint Value.
     * @return Xively_ReadWriteData_WriteData_Inputs For method chaining.
     */
    public function setFeedType($value)
    {
        return $this->set('FeedType', $value);
    }

    /**
     * Set the value for the Timestamp input for this WriteData Choreo.
     *
     * @param string $value (optional, date) Can be used with a single Value and DatastreamID. If specified, sets timestamp for Value. If Value is set with blank Timestamp, Value's timestamp will be current time. Ex: 2013-05-10T00:00:00.123456Z.
     * @return Xively_ReadWriteData_WriteData_Inputs For method chaining.
     */
    public function setTimestamp($value)
    {
        return $this->set('Timestamp', $value);
    }

    /**
     * Set the value for the Value input for this WriteData Choreo.
     *
     * @param string $value (optional, string) Specifies the value for a single datapoint in a specified datastream.
     * @return Xively_ReadWriteData_WriteData_Inputs For method chaining.
     */
    public function setValue($value)
    {
        return $this->set('Value', $value);
    }
}


/**
 * Execution object for the WriteData Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WriteData Choreo.
     *
     * @param Temboo_Session $session The session that owns this WriteData execution.
     * @param Xively_ReadWriteData_WriteData $choreo The choreography object for this execution.
     * @param Xively_ReadWriteData_WriteData_Inputs|array $inputs (optional) Inputs as Xively_ReadWriteData_WriteData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_ReadWriteData_WriteData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_ReadWriteData_WriteData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WriteData execution.
     *
     * @return Xively_ReadWriteData_WriteData_Results New results object.
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
     * Wraps results in appropriate results class for this WriteData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_ReadWriteData_WriteData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_ReadWriteData_WriteData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WriteData Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_ReadWriteData_WriteData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WriteData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_ReadWriteData_WriteData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this WriteData execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful feed / data update, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}

/**
 * Updates a single device's serial number. 
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_UpdateDevice extends Temboo_Choreography
{
    /**
     * Updates a single device's serial number. 
     *
     * @param Temboo_Session $session The session that owns this UpdateDevice Choreo.
     * @return Xively_Devices_UpdateDevice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Xively/Devices/UpdateDevice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateDevice Choreo.
     *
     * @param Xively_Devices_UpdateDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_UpdateDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_UpdateDevice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Xively_Devices_UpdateDevice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_UpdateDevice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Xively_Devices_UpdateDevice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_UpdateDevice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateDevice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Xively_Devices_UpdateDevice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateDevice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Xively_Devices_UpdateDevice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Xively_Devices_UpdateDevice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateDevice Choreo.
     *
     * @param string $value (required, string) The API Key provided by Xively.
     * @return Xively_Devices_UpdateDevice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the NewSerialNumber input for this UpdateDevice Choreo.
     *
     * @param string $value (required, string) The new serial number you want to update the existing device to. Allowed characters: case-sensitive alphanumeric characters (Ab3) and certain characters: "+", "-", "_", and ":". Ex: abc:123,aBc-124.
     * @return Xively_Devices_UpdateDevice_Inputs For method chaining.
     */
    public function setNewSerialNumber($value)
    {
        return $this->set('NewSerialNumber', $value);
    }

    /**
     * Set the value for the ProductID input for this UpdateDevice Choreo.
     *
     * @param string $value (required, string) The product ID for the device you would like to update.
     * @return Xively_Devices_UpdateDevice_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }

    /**
     * Set the value for the SerialNumber input for this UpdateDevice Choreo.
     *
     * @param string $value (required, string) The existing serial number for the device you would like to update.
     * @return Xively_Devices_UpdateDevice_Inputs For method chaining.
     */
    public function setSerialNumber($value)
    {
        return $this->set('SerialNumber', $value);
    }
}


/**
 * Execution object for the UpdateDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_UpdateDevice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateDevice Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateDevice execution.
     * @param Xively_Devices_UpdateDevice $choreo The choreography object for this execution.
     * @param Xively_Devices_UpdateDevice_Inputs|array $inputs (optional) Inputs as Xively_Devices_UpdateDevice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Xively_Devices_UpdateDevice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Xively_Devices_UpdateDevice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateDevice execution.
     *
     * @return Xively_Devices_UpdateDevice_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateDevice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Xively_Devices_UpdateDevice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Xively_Devices_UpdateDevice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateDevice Choreo.
 *
 * @package Temboo
 * @subpackage Xively
 */
class Xively_Devices_UpdateDevice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateDevice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Xively_Devices_UpdateDevice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this UpdateDevice execution.
     *
     * @return int (integer) The response status code returned from Xively. For a successful device update, the code should be 200.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


?>
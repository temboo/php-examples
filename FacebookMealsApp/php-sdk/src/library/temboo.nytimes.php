<?php

/**
 * Temboo PHP SDK NYTimes classes
 *
 * Execute Choreographies from the Temboo NYTimes bundle.
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
 * @subpackage NYTimes
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Searches events by location, filters, or full text search.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchListings extends Temboo_Choreography
{
    /**
     * Searches events by location, filters, or full text search.
     *
     * @param Temboo_Session $session The session that owns this SearchListings Choreo.
     * @return NYTimes_EventListings_SearchListings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/EventListings/SearchListings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchListings Choreo.
     *
     * @param NYTimes_EventListings_SearchListings_Inputs|array $inputs (optional) Inputs as NYTimes_EventListings_SearchListings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_EventListings_SearchListings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_EventListings_SearchListings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchListings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_EventListings_SearchListings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_EventListings_SearchListings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchListings Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchListings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchListings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_EventListings_SearchListings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchListings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchListings Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DateRange input for this SearchListings Choreo.
     *
     * @param string $value (optional, date) Start date to end date in the following format: YYYY-MM-DD:YYYY-MM-DD.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the Filters input for this SearchListings Choreo.
     *
     * @param string $value (optional, string) Filters search results using facet names and values. See Choreo documentation for examples.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setFilters($value)
    {
        return $this->set('Filters', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchListings Choreo.
     *
     * @param float $value (optional, decimal) The latitude coordinate of the location to use in the event search. If specified, Longitude must also be provided.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchListings Choreo.
     *
     * @param int $value (optional, integer) The number of results to return.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchListings Choreo.
     *
     * @param float $value (optional, decimal) The longitude coordinate of the location to use in the event search. If specified, Latitude must also be provided.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Offset input for this SearchListings Choreo.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. This can be used in combination with the Limit input to page through results.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this SearchListings Choreo.
     *
     * @param string $value (optional, string) Search keywords to perform a text search on the following fields: web_description, event_name and venue_name.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Radius input for this SearchListings Choreo.
     *
     * @param int $value (optional, integer) The radius of the spacial search (in meters). Defaults to 1000.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchListings Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this SearchListings Choreo.
     *
     * @param string $value (optional, string) Allows you to sort results. Appending "+asc" or "+desc" to a facet will sort results on that value in ascending or descending order (i.e. dist+asc).
     * @return NYTimes_EventListings_SearchListings_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the SearchListings Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchListings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchListings Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchListings execution.
     * @param NYTimes_EventListings_SearchListings $choreo The choreography object for this execution.
     * @param NYTimes_EventListings_SearchListings_Inputs|array $inputs (optional) Inputs as NYTimes_EventListings_SearchListings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_EventListings_SearchListings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_EventListings_SearchListings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchListings execution.
     *
     * @return NYTimes_EventListings_SearchListings_Results New results object.
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
     * Wraps results in appropriate results class for this SearchListings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_EventListings_SearchListings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_EventListings_SearchListings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchListings Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchListings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchListings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_EventListings_SearchListings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchListings execution.
     *
     * @return string The response from the NY Times API. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve details about individual donors, or a summary of donors from a particular location to a presidential election campaign.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation extends Temboo_Choreography
{
    /**
     * Retrieve details about individual donors, or a summary of donors from a particular location to a presidential election campaign.
     *
     * @param Temboo_Session $session The session that owns this PresidentialDonorInformation Choreo.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/PresidentialCampaigns/PresidentialDonorInformation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PresidentialDonorInformation Choreo.
     *
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PresidentialDonorInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PresidentialDonorInformation Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PresidentialDonorInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PresidentialDonorInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PresidentialDonorInformation Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this PresidentialDonorInformation Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the FirstName input for this PresidentialDonorInformation Choreo.
     *
     * @param string $value (optional, string) Enter the first name of a donor.  This parameter can be used together with LastName and/or Zip
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the LastName input for this PresidentialDonorInformation Choreo.
     *
     * @param string $value (optional, string) Enter the last name of an individual donor to be retrieved.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Offset input for this PresidentialDonorInformation Choreo.
     *
     * @param int $value (optional, integer) Specify the starting point of the retrieved results, in multiples of 20.  By default, the first 20 results are returned.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PresidentialDonorInformation Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Zip input for this PresidentialDonorInformation Choreo.
     *
     * @param int $value (optional, integer) Enter a zipcode for which donor information wil be retrieved.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the PresidentialDonorInformation Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PresidentialDonorInformation Choreo.
     *
     * @param Temboo_Session $session The session that owns this PresidentialDonorInformation execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PresidentialDonorInformation execution.
     *
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results New results object.
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
     * Wraps results in appropriate results class for this PresidentialDonorInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PresidentialDonorInformation Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PresidentialDonorInformation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PresidentialDonorInformation execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves percentiles of real estate listings from New York Times Web Service.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetListingsPercentiles extends Temboo_Choreography
{
    /**
     * Retrieves percentiles of real estate listings from New York Times Web Service.
     *
     * @param Temboo_Session $session The session that owns this GetListingsPercentiles Choreo.
     * @return NYTimes_RealEstate_GetListingsPercentiles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/RealEstate/GetListingsPercentiles/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetListingsPercentiles Choreo.
     *
     * @param NYTimes_RealEstate_GetListingsPercentiles_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_GetListingsPercentiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_RealEstate_GetListingsPercentiles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListingsPercentiles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_RealEstate_GetListingsPercentiles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListingsPercentiles Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetListingsPercentiles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetListingsPercentiles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListingsPercentiles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetListingsPercentiles Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Bedrooms input for this GetListingsPercentiles Choreo.
     *
     * @param int $value (optional, integer) Limits the results by number of bedrooms to search for. Defaults to 1.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function setBedrooms($value)
    {
        return $this->set('Bedrooms', $value);
    }

    /**
     * Set the value for the DateRange input for this GetListingsPercentiles Choreo.
     *
     * @param string $value (required, string) Sets the quarter, month, week or day for the results (i.e. 2008-Q1, 2008-W52, 2007-07, 2010-10-01, etc).
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the GeoExtentLevel input for this GetListingsPercentiles Choreo.
     *
     * @param string $value (required, string) The geographical unit for the results (i.e. borough, neighborhood, or zip).
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function setGeoExtentLevel($value)
    {
        return $this->set('GeoExtentLevel', $value);
    }

    /**
     * Set the value for the GeoExtentValue input for this GetListingsPercentiles Choreo.
     *
     * @param string $value (required, string) Limits the search to a specific area.  For example, if GeoExtentLevel is borough, the value for GeoExtentValue could be Brooklyn.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function setGeoExtentValue($value)
    {
        return $this->set('GeoExtentValue', $value);
    }

    /**
     * Set the value for the GeoSummaryLevel input for this GetListingsPercentiles Choreo.
     *
     * @param string $value (required, string) The geographic unit for grouping the results (borough, neighborhood, or zip).
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function setGeoSummaryLevel($value)
    {
        return $this->set('GeoSummaryLevel', $value);
    }

    /**
     * Set the value for the Percentile input for this GetListingsPercentiles Choreo.
     *
     * @param int $value (required, integer) Specify a percentile for the listing prices you want to retrieve (i.e 50).
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function setPercentile($value)
    {
        return $this->set('Percentile', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetListingsPercentiles Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetListingsPercentiles Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetListingsPercentiles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListingsPercentiles Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetListingsPercentiles execution.
     * @param NYTimes_RealEstate_GetListingsPercentiles $choreo The choreography object for this execution.
     * @param NYTimes_RealEstate_GetListingsPercentiles_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_GetListingsPercentiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_RealEstate_GetListingsPercentiles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListingsPercentiles execution.
     *
     * @return NYTimes_RealEstate_GetListingsPercentiles_Results New results object.
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
     * Wraps results in appropriate results class for this GetListingsPercentiles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_RealEstate_GetListingsPercentiles_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetListingsPercentiles Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetListingsPercentiles_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetListingsPercentiles Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_RealEstate_GetListingsPercentiles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetListingsPercentiles execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for a Presidential or Congressional candidate by last name and election cycle.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateSearch extends Temboo_Choreography
{
    /**
     * Search for a Presidential or Congressional candidate by last name and election cycle.
     *
     * @param Temboo_Session $session The session that owns this CandidateSearch Choreo.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Candidates/CandidateSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CandidateSearch Choreo.
     *
     * @param NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CandidateSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CandidateSearch Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CandidateSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CandidateSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CandidateSearch Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CandidateSearch Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the LastName input for this CandidateSearch Choreo.
     *
     * @param string $value (required, string) Enter the last name (or partial last name) of a Congressional or Presidential office candidate.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CandidateSearch Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CandidateSearch Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CandidateSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this CandidateSearch execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateSearch $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Candidates_CandidateSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CandidateSearch execution.
     *
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Results New results object.
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
     * Wraps results in appropriate results class for this CandidateSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CandidateSearch Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CandidateSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CandidateSearch execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of the 20 top candidates in terms of contributions received.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory extends Temboo_Choreography
{
    /**
     * Retrieve a list of the 20 top candidates in terms of contributions received.
     *
     * @param Temboo_Session $session The session that owns this CandidateLeadersByCategory Choreo.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Candidates/CandidateLeadersByCategory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CandidateLeadersByCategory Choreo.
     *
     * @param NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CandidateLeadersByCategory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CandidateLeadersByCategory Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CandidateLeadersByCategory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CandidateLeadersByCategory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CandidateLeadersByCategory Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CandidateLeadersByCategory Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Category input for this CandidateLeadersByCategory Choreo.
     *
     * @param string $value (required, string) Specify thecategory to be retrieved. Example: contribution-total, returns the total amount of financial contributions received by this candidate's campaign.  See Description for more info.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CandidateLeadersByCategory Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CandidateLeadersByCategory Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CandidateLeadersByCategory Choreo.
     *
     * @param Temboo_Session $session The session that owns this CandidateLeadersByCategory execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CandidateLeadersByCategory execution.
     *
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results New results object.
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
     * Wraps results in appropriate results class for this CandidateLeadersByCategory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CandidateLeadersByCategory Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CandidateLeadersByCategory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CandidateLeadersByCategory execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lets you query the Article Search API for New York Times articles.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_ArticleSearch_QueryArticles extends Temboo_Choreography
{
    /**
     * Lets you query the Article Search API for New York Times articles.
     *
     * @param Temboo_Session $session The session that owns this QueryArticles Choreo.
     * @return NYTimes_ArticleSearch_QueryArticles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/ArticleSearch/QueryArticles/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this QueryArticles Choreo.
     *
     * @param NYTimes_ArticleSearch_QueryArticles_Inputs|array $inputs (optional) Inputs as NYTimes_ArticleSearch_QueryArticles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_ArticleSearch_QueryArticles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_ArticleSearch_QueryArticles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this QueryArticles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_ArticleSearch_QueryArticles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the QueryArticles Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_ArticleSearch_QueryArticles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the QueryArticles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this QueryArticles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this QueryArticles Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BeginDate input for this QueryArticles Choreo.
     *
     * @param string $value (optional, date) Sets the starting point (which is inclusive) of the range of publication dates to return. Must be used with EndDate. Date should be formatted like YYYYMMDD.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setBeginDate($value)
    {
        return $this->set('BeginDate', $value);
    }

    /**
     * Set the value for the EndDate input for this QueryArticles Choreo.
     *
     * @param string $value (optional, date) Sets the end point (which is inclusive) of the range of publication dates to return. Must be used with BeginDate. Date should be formatted like YYYYMMDD.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Facets input for this QueryArticles Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of up to 5 facets. This indicates the sets of facet values to include in the response. See Choreo documentation for more information about accepted values for this input.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setFacets($value)
    {
        return $this->set('Facets', $value);
    }

    /**
     * Set the value for the Fields input for this QueryArticles Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of fields to return. These fields are returned by default: body, byline, date, title, and url.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Offset input for this QueryArticles Choreo.
     *
     * @param int $value (optional, integer) This corresponds to which set of 10 results is returned. Used to page through results. Set to 0 to return records 0-9, set to 1 to return records 10-19, etc.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this QueryArticles Choreo.
     *
     * @param string $value (required, string) Search keywords (optionally applied to specific fields) and/or facets. See Choreo documentation for syntax examples.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Rank input for this QueryArticles Choreo.
     *
     * @param string $value (optional, string) Sets the order of the results. Accepted values are: newest (the defaults), oldest, or closest.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setRank($value)
    {
        return $this->set('Rank', $value);
    }
}


/**
 * Execution object for the QueryArticles Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_ArticleSearch_QueryArticles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the QueryArticles Choreo.
     *
     * @param Temboo_Session $session The session that owns this QueryArticles execution.
     * @param NYTimes_ArticleSearch_QueryArticles $choreo The choreography object for this execution.
     * @param NYTimes_ArticleSearch_QueryArticles_Inputs|array $inputs (optional) Inputs as NYTimes_ArticleSearch_QueryArticles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_ArticleSearch_QueryArticles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_ArticleSearch_QueryArticles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this QueryArticles execution.
     *
     * @return NYTimes_ArticleSearch_QueryArticles_Results New results object.
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
     * Wraps results in appropriate results class for this QueryArticles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_ArticleSearch_QueryArticles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_ArticleSearch_QueryArticles_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the QueryArticles Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_ArticleSearch_QueryArticles_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the QueryArticles Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_ArticleSearch_QueryArticles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this QueryArticles execution.
     *
     * @return string (json) The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	The value of offset corresponds to a set of 10 results (i.e. offset=0 for results 0-9, offset=1 for results 10-19, etc)
	*/

	public function getOffset() {
		return Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "offset");
	}
	/*
	Contains the search tokens provided for the query
	*/

	public function getTokens() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "tokens");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}
	/*
	The total number of articles for this search
	*/

	public function getTotal() {
		return Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "total");
	}
	/*
	Get an article matching the search criteria
	*/

	public function getArticles() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "results");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new NYTimes_Article_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Obtain a specific Political Action Committee's electronic filings.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeFilings extends Temboo_Choreography
{
    /**
     * Obtain a specific Political Action Committee's electronic filings.
     *
     * @param Temboo_Session $session The session that owns this CommitteeFilings Choreo.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeFilings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CommitteeFilings Choreo.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeFilings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeFilings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeFilings Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CommitteeFilings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeFilings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeFilings Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeFilings Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CommitteeFECID input for this CommitteeFilings Choreo.
     *
     * @param string $value (required, string) Enter a committee's FEC ID.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setCommitteeFECID($value)
    {
        return $this->set('CommitteeFECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeFilings Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeFilings Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeFilings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeFilings Choreo.
     *
     * @param Temboo_Session $session The session that owns this CommitteeFilings execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeFilings $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeFilings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeFilings execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Results New results object.
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
     * Wraps results in appropriate results class for this CommitteeFilings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeFilings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CommitteeFilings Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeFilings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CommitteeFilings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CommitteeFilings execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to do a spatial search for events within a box bounded by specified northeast and southwest points.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchWithinBoundedBox extends Temboo_Choreography
{
    /**
     * Allows you to do a spatial search for events within a box bounded by specified northeast and southwest points.
     *
     * @param Temboo_Session $session The session that owns this SearchWithinBoundedBox Choreo.
     * @return NYTimes_EventListings_SearchWithinBoundedBox New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/EventListings/SearchWithinBoundedBox/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchWithinBoundedBox Choreo.
     *
     * @param NYTimes_EventListings_SearchWithinBoundedBox_Inputs|array $inputs (optional) Inputs as NYTimes_EventListings_SearchWithinBoundedBox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_EventListings_SearchWithinBoundedBox_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchWithinBoundedBox Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_EventListings_SearchWithinBoundedBox_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchWithinBoundedBox Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchWithinBoundedBox_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchWithinBoundedBox Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchWithinBoundedBox input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchWithinBoundedBox Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DateRange input for this SearchWithinBoundedBox Choreo.
     *
     * @param string $value (optional, date) Start date to end date in the following format: YYYY-MM-DD:YYYY-MM-DD.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the Filters input for this SearchWithinBoundedBox Choreo.
     *
     * @param string $value (optional, string) Filters search results using facet names and values. See Choreo documentation for examples.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setFilters($value)
    {
        return $this->set('Filters', $value);
    }

    /**
     * Set the value for the Limit input for this SearchWithinBoundedBox Choreo.
     *
     * @param int $value (optional, integer) The number of results to return.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the NortheastLatitude input for this SearchWithinBoundedBox Choreo.
     *
     * @param float $value (conditional, decimal) The northeastern latitude of the bounding box to search. When searching within a bounded box, all four coordinates are required.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setNortheastLatitude($value)
    {
        return $this->set('NortheastLatitude', $value);
    }

    /**
     * Set the value for the NortheastLongitude input for this SearchWithinBoundedBox Choreo.
     *
     * @param float $value (conditional, decimal) The northeastern longitude of the bounding box to search. When searching within a bounded box, all four coordinates are required.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setNortheastLongitude($value)
    {
        return $this->set('NortheastLongitude', $value);
    }

    /**
     * Set the value for the Offset input for this SearchWithinBoundedBox Choreo.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. This can be used in combination with the Limit input to page through results.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this SearchWithinBoundedBox Choreo.
     *
     * @param string $value (optional, string) Search keywords to perform a text search on the following fields: web_description, event_name and venue_name.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Radius input for this SearchWithinBoundedBox Choreo.
     *
     * @param int $value (optional, integer) The radius of the spacial search (in meters). Defaults to 1000.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchWithinBoundedBox Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to json, xml, or sphp. Defaults to xml.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this SearchWithinBoundedBox Choreo.
     *
     * @param string $value (optional, string) Allows you to sort results. Appending "+asc" or "+desc" to a facet will sort results on that value in ascending or descending order (i.e. dist+asc).
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the SouthwestLatitude input for this SearchWithinBoundedBox Choreo.
     *
     * @param float $value (conditional, decimal) The southwest latitude of the bounding box to search. When searching within a bounded box, all four coordinates are required.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setSouthwestLatitude($value)
    {
        return $this->set('SouthwestLatitude', $value);
    }

    /**
     * Set the value for the SouthwestLongitude input for this SearchWithinBoundedBox Choreo.
     *
     * @param float $value (conditional, decimal) The southwest longitude of the bounding box to search. When searching within a bounded box, all four coordinates are required.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Inputs For method chaining.
     */
    public function setSouthwestLongitude($value)
    {
        return $this->set('SouthwestLongitude', $value);
    }
}


/**
 * Execution object for the SearchWithinBoundedBox Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchWithinBoundedBox_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchWithinBoundedBox Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchWithinBoundedBox execution.
     * @param NYTimes_EventListings_SearchWithinBoundedBox $choreo The choreography object for this execution.
     * @param NYTimes_EventListings_SearchWithinBoundedBox_Inputs|array $inputs (optional) Inputs as NYTimes_EventListings_SearchWithinBoundedBox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_EventListings_SearchWithinBoundedBox $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchWithinBoundedBox execution.
     *
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Results New results object.
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
     * Wraps results in appropriate results class for this SearchWithinBoundedBox execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_EventListings_SearchWithinBoundedBox_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchWithinBoundedBox Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchWithinBoundedBox_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchWithinBoundedBox Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_EventListings_SearchWithinBoundedBox_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchWithinBoundedBox execution.
     *
     * @return string The response from the NY Times API. Valid values are: json (the default) and xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve contributions made by individuals to a specific presidential candidate. 
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate extends Temboo_Choreography
{
    /**
     * Retrieve contributions made by individuals to a specific presidential candidate. 
     *
     * @param Temboo_Session $session The session that owns this ContributionsByCandidate Choreo.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndividualContributors/ContributionsByCandidate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ContributionsByCandidate Choreo.
     *
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ContributionsByCandidate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ContributionsByCandidate Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ContributionsByCandidate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ContributionsByCandidate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ContributionsByCandidate Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this ContributionsByCandidate Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CandidateFECID input for this ContributionsByCandidate Choreo.
     *
     * @param string $value (required, string) Enter a cadidate's nine-digit FEC ID. IDs can be obtained by first running the CandidateSearch Choreo.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setCandidateFECID($value)
    {
        return $this->set('CandidateFECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ContributionsByCandidate Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ContributionsByCandidate Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ContributionsByCandidate Choreo.
     *
     * @param Temboo_Session $session The session that owns this ContributionsByCandidate execution.
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ContributionsByCandidate execution.
     *
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results New results object.
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
     * Wraps results in appropriate results class for this ContributionsByCandidate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ContributionsByCandidate Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ContributionsByCandidate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ContributionsByCandidate execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves data from a New York Times best-seller list for a specified date.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_GetBestSellerList extends Temboo_Choreography
{
    /**
     * Retrieves data from a New York Times best-seller list for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetBestSellerList Choreo.
     * @return NYTimes_BestSellers_GetBestSellerList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/BestSellers/GetBestSellerList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBestSellerList Choreo.
     *
     * @param NYTimes_BestSellers_GetBestSellerList_Inputs|array $inputs (optional) Inputs as NYTimes_BestSellers_GetBestSellerList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_BestSellers_GetBestSellerList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_BestSellers_GetBestSellerList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBestSellerList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_BestSellers_GetBestSellerList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBestSellerList Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_GetBestSellerList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBestSellerList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBestSellerList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBestSellerList Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Date input for this GetBestSellerList Choreo.
     *
     * @param string $value (required, date) The best-seller list publication date in YYYY-MM-DD format.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ListName input for this GetBestSellerList Choreo.
     *
     * @param string $value (required, string) The Times best-seller list to retrieve (i.e. e-book-fiction or hardcover-fiction).
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs For method chaining.
     */
    public function setListName($value)
    {
        return $this->set('ListName', $value);
    }

    /**
     * Set the value for the Offset input for this GetBestSellerList Choreo.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBestSellerList Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortBy input for this GetBestSellerList Choreo.
     *
     * @param string $value (optional, string) The column name to sort by. Valid values are: bestsellers-date, date, isbn, list, list-name, published-date, rank, rank-last-week, and weeks-on-list.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this GetBestSellerList Choreo.
     *
     * @param string $value (optional, string) The sort order. Valid values are: ASC and DESC.
     * @return NYTimes_BestSellers_GetBestSellerList_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the GetBestSellerList Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_GetBestSellerList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBestSellerList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBestSellerList execution.
     * @param NYTimes_BestSellers_GetBestSellerList $choreo The choreography object for this execution.
     * @param NYTimes_BestSellers_GetBestSellerList_Inputs|array $inputs (optional) Inputs as NYTimes_BestSellers_GetBestSellerList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_BestSellers_GetBestSellerList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_BestSellers_GetBestSellerList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBestSellerList execution.
     *
     * @return NYTimes_BestSellers_GetBestSellerList_Results New results object.
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
     * Wraps results in appropriate results class for this GetBestSellerList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_BestSellers_GetBestSellerList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_BestSellers_GetBestSellerList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBestSellerList Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_GetBestSellerList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBestSellerList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_BestSellers_GetBestSellerList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBestSellerList execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the 20 most recent independent expenditures by a given committee, also known as "Super PACs."
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures extends Temboo_Choreography
{
    /**
     * Retrieve the 20 most recent independent expenditures by a given committee, also known as "Super PACs."
     *
     * @param Temboo_Session $session The session that owns this CommitteeIndependentExpenditures Choreo.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndependentExpenditures/CommitteeIndependentExpenditures/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CommitteeIndependentExpenditures Choreo.
     *
     * @param NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeIndependentExpenditures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeIndependentExpenditures Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CommitteeIndependentExpenditures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeIndependentExpenditures input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeIndependentExpenditures Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeIndependentExpenditures Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the FECID input for this CommitteeIndependentExpenditures Choreo.
     *
     * @param string $value (required, string) Enter the FEC ID for the committee.  ID can be obtained by first running the CommitteeSearch Choreo.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setFECID($value)
    {
        return $this->set('FECID', $value);
    }

    /**
     * Set the value for the Offset input for this CommitteeIndependentExpenditures Choreo.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value (e.g., Offset=40 displays results 41–60).
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeIndependentExpenditures Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeIndependentExpenditures Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeIndependentExpenditures Choreo.
     *
     * @param Temboo_Session $session The session that owns this CommitteeIndependentExpenditures execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeIndependentExpenditures execution.
     *
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results New results object.
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
     * Wraps results in appropriate results class for this CommitteeIndependentExpenditures execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CommitteeIndependentExpenditures Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CommitteeIndependentExpenditures Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CommitteeIndependentExpenditures execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves 20 of the most recent independent expenditures in support of or opposition to presidential candidates.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures extends Temboo_Choreography
{
    /**
     * Retrieves 20 of the most recent independent expenditures in support of or opposition to presidential candidates.
     *
     * @param Temboo_Session $session The session that owns this PresidentialIndependentExpenditures Choreo.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndependentExpenditures/PresidentialIndependentExpenditures/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PresidentialIndependentExpenditures Choreo.
     *
     * @param NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PresidentialIndependentExpenditures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PresidentialIndependentExpenditures Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PresidentialIndependentExpenditures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PresidentialIndependentExpenditures input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PresidentialIndependentExpenditures Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this PresidentialIndependentExpenditures Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Offset input for this PresidentialIndependentExpenditures Choreo.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value (e.g., Offset=40 displays results 41–60).
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PresidentialIndependentExpenditures Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PresidentialIndependentExpenditures Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PresidentialIndependentExpenditures Choreo.
     *
     * @param Temboo_Session $session The session that owns this PresidentialIndependentExpenditures execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PresidentialIndependentExpenditures execution.
     *
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results New results object.
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
     * Wraps results in appropriate results class for this PresidentialIndependentExpenditures execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PresidentialIndependentExpenditures Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PresidentialIndependentExpenditures Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PresidentialIndependentExpenditures execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves counts of real estate listings from New York Times Web Service.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetListingsCounts extends Temboo_Choreography
{
    /**
     * Retrieves counts of real estate listings from New York Times Web Service.
     *
     * @param Temboo_Session $session The session that owns this GetListingsCounts Choreo.
     * @return NYTimes_RealEstate_GetListingsCounts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/RealEstate/GetListingsCounts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetListingsCounts Choreo.
     *
     * @param NYTimes_RealEstate_GetListingsCounts_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_GetListingsCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_GetListingsCounts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_RealEstate_GetListingsCounts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListingsCounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_RealEstate_GetListingsCounts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListingsCounts Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetListingsCounts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetListingsCounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListingsCounts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetListingsCounts Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Bedrooms input for this GetListingsCounts Choreo.
     *
     * @param int $value (optional, integer) Limits the results by number of bedrooms to search for. Defaults to 1.
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs For method chaining.
     */
    public function setBedrooms($value)
    {
        return $this->set('Bedrooms', $value);
    }

    /**
     * Set the value for the DateRange input for this GetListingsCounts Choreo.
     *
     * @param string $value (required, string) Sets the quarter, month, week or day for the results (i.e. 2008-Q1, 2008-W52, 2007-07, 2010-10-01, etc).
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the GeoExtentLevel input for this GetListingsCounts Choreo.
     *
     * @param string $value (required, string) The geographical unit for the results (i.e. borough, neighborhood, or zip).
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs For method chaining.
     */
    public function setGeoExtentLevel($value)
    {
        return $this->set('GeoExtentLevel', $value);
    }

    /**
     * Set the value for the GeoExtentValue input for this GetListingsCounts Choreo.
     *
     * @param string $value (required, string) Limits the search to a specific area.  For example, if GeoExtentLevel is borough, the value for GeoExtentValue could be Brooklyn.
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs For method chaining.
     */
    public function setGeoExtentValue($value)
    {
        return $this->set('GeoExtentValue', $value);
    }

    /**
     * Set the value for the GeoSummaryLevel input for this GetListingsCounts Choreo.
     *
     * @param string $value (required, string) The geographic unit for grouping the results (borough, neighborhood, or zip).
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs For method chaining.
     */
    public function setGeoSummaryLevel($value)
    {
        return $this->set('GeoSummaryLevel', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetListingsCounts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_RealEstate_GetListingsCounts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetListingsCounts Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetListingsCounts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListingsCounts Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetListingsCounts execution.
     * @param NYTimes_RealEstate_GetListingsCounts $choreo The choreography object for this execution.
     * @param NYTimes_RealEstate_GetListingsCounts_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_GetListingsCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_GetListingsCounts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_RealEstate_GetListingsCounts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListingsCounts execution.
     *
     * @return NYTimes_RealEstate_GetListingsCounts_Results New results object.
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
     * Wraps results in appropriate results class for this GetListingsCounts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_RealEstate_GetListingsCounts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_RealEstate_GetListingsCounts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetListingsCounts Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetListingsCounts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetListingsCounts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_RealEstate_GetListingsCounts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetListingsCounts execution.
     *
     * @return string The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the total amount of donations aggregated by a specified location (by state and/or zipcode).
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals extends Temboo_Choreography
{
    /**
     * Retrieve the total amount of donations aggregated by a specified location (by state and/or zipcode).
     *
     * @param Temboo_Session $session The session that owns this PresidentialStateZipTotals Choreo.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/PresidentialCampaigns/PresidentialStateZipTotals/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PresidentialStateZipTotals Choreo.
     *
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PresidentialStateZipTotals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PresidentialStateZipTotals Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PresidentialStateZipTotals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PresidentialStateZipTotals input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PresidentialStateZipTotals Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this PresidentialStateZipTotals Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Location input for this PresidentialStateZipTotals Choreo.
     *
     * @param string $value (required, string) Enter the location for which data will be retrieved. If ResourceType = states, use a two-letter state abbreviation (example: NY).  For zips, enter a five-digit zip code.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setLocation($value)
    {
        return $this->set('Location', $value);
    }

    /**
     * Set the value for the ResourceType input for this PresidentialStateZipTotals Choreo.
     *
     * @param string $value (required, string) Specify the type of resource to use when retrieving donor data. Valid formats include: zips, or states.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setResourceType($value)
    {
        return $this->set('ResourceType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PresidentialStateZipTotals Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PresidentialStateZipTotals Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PresidentialStateZipTotals Choreo.
     *
     * @param Temboo_Session $session The session that owns this PresidentialStateZipTotals execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PresidentialStateZipTotals execution.
     *
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results New results object.
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
     * Wraps results in appropriate results class for this PresidentialStateZipTotals execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PresidentialStateZipTotals Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PresidentialStateZipTotals Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PresidentialStateZipTotals execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves lists of reviews and NYT Critics' Picks.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetPicks extends Temboo_Choreography
{
    /**
     * Retrieves lists of reviews and NYT Critics' Picks.
     *
     * @param Temboo_Session $session The session that owns this GetPicks Choreo.
     * @return NYTimes_MovieReviews_GetPicks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MovieReviews/GetPicks/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPicks Choreo.
     *
     * @param NYTimes_MovieReviews_GetPicks_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetPicks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetPicks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MovieReviews_GetPicks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPicks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetPicks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MovieReviews_GetPicks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPicks Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetPicks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPicks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetPicks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPicks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MovieReviews_GetPicks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MovieReviews_GetPicks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPicks Choreo.
     *
     * @param string $value (optional, string) The API Key provided by NY Times.
     * @return NYTimes_MovieReviews_GetPicks_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetPicks Choreo.
     *
     * @param int $value (optional, integer) The number of results to return.
     * @return NYTimes_MovieReviews_GetPicks_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this GetPicks Choreo.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. Used to page through results.
     * @return NYTimes_MovieReviews_GetPicks_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Order input for this GetPicks Choreo.
     *
     * @param string $value (optional, string) Sets the sort order of the results. Accepted values are: by-title, by-publication-date, by-opening-date, by-dvd-release-date.
     * @return NYTimes_MovieReviews_GetPicks_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the ResourceType input for this GetPicks Choreo.
     *
     * @param string $value (optional, string) Specify "picks" to get NYT Critics' Picks in theaters or "dvd-picks" to get NYT Critics' Picks on DVD. Specify "all" to retrieve all reviews.
     * @return NYTimes_MovieReviews_GetPicks_Inputs For method chaining.
     */
    public function setResourceType($value)
    {
        return $this->set('ResourceType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetPicks Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_MovieReviews_GetPicks_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetPicks Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetPicks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPicks Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPicks execution.
     * @param NYTimes_MovieReviews_GetPicks $choreo The choreography object for this execution.
     * @param NYTimes_MovieReviews_GetPicks_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetPicks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetPicks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MovieReviews_GetPicks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPicks execution.
     *
     * @return NYTimes_MovieReviews_GetPicks_Results New results object.
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
     * Wraps results in appropriate results class for this GetPicks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetPicks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MovieReviews_GetPicks_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPicks Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetPicks_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPicks Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetPicks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPicks execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves 20 of the most recent committees that have registered as independent expenditure-only (commonly known as "Super PACs").
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees extends Temboo_Choreography
{
    /**
     * Retrieves 20 of the most recent committees that have registered as independent expenditure-only (commonly known as "Super PACs").
     *
     * @param Temboo_Session $session The session that owns this IndependentExpenditureOnlyCommittees Choreo.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndependentExpenditures/IndependentExpenditureOnlyCommittees/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this IndependentExpenditureOnlyCommittees Choreo.
     *
     * @param NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IndependentExpenditureOnlyCommittees Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IndependentExpenditureOnlyCommittees Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the IndependentExpenditureOnlyCommittees Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IndependentExpenditureOnlyCommittees input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this IndependentExpenditureOnlyCommittees Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this IndependentExpenditureOnlyCommittees Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Offset input for this IndependentExpenditureOnlyCommittees Choreo.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value (e.g., Offset=40 displays results 41–60).
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this IndependentExpenditureOnlyCommittees Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the IndependentExpenditureOnlyCommittees Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IndependentExpenditureOnlyCommittees Choreo.
     *
     * @param Temboo_Session $session The session that owns this IndependentExpenditureOnlyCommittees execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IndependentExpenditureOnlyCommittees execution.
     *
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results New results object.
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
     * Wraps results in appropriate results class for this IndependentExpenditureOnlyCommittees execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the IndependentExpenditureOnlyCommittees Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the IndependentExpenditureOnlyCommittees Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this IndependentExpenditureOnlyCommittees execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for the blog posts and articles that are most frequently viewed.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostViewed extends Temboo_Choreography
{
    /**
     * Retrieves information for the blog posts and articles that are most frequently viewed.
     *
     * @param Temboo_Session $session The session that owns this GetMostViewed Choreo.
     * @return NYTimes_MostPopular_GetMostViewed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MostPopular/GetMostViewed/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMostViewed Choreo.
     *
     * @param NYTimes_MostPopular_GetMostViewed_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_GetMostViewed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_GetMostViewed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MostPopular_GetMostViewed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMostViewed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_GetMostViewed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MostPopular_GetMostViewed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMostViewed Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostViewed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMostViewed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_GetMostViewed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMostViewed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MostPopular_GetMostViewed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MostPopular_GetMostViewed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetMostViewed Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_MostPopular_GetMostViewed_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Offset input for this GetMostViewed Choreo.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value.
     * @return NYTimes_MostPopular_GetMostViewed_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetMostViewed Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_MostPopular_GetMostViewed_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Section input for this GetMostViewed Choreo.
     *
     * @param string $value (required, string) Limits the results by one or more sections (i.e. arts).  To get all sections, specify all-sections.
     * @return NYTimes_MostPopular_GetMostViewed_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }

    /**
     * Set the value for the TimePeriod input for this GetMostViewed Choreo.
     *
     * @param int $value (required, integer) Allowed integer values: 1, 7, or 30, which corresponds to a day (1) , a week (7), or a month (30) of content.
     * @return NYTimes_MostPopular_GetMostViewed_Inputs For method chaining.
     */
    public function setTimePeriod($value)
    {
        return $this->set('TimePeriod', $value);
    }
}


/**
 * Execution object for the GetMostViewed Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostViewed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMostViewed Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMostViewed execution.
     * @param NYTimes_MostPopular_GetMostViewed $choreo The choreography object for this execution.
     * @param NYTimes_MostPopular_GetMostViewed_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_GetMostViewed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_GetMostViewed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MostPopular_GetMostViewed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMostViewed execution.
     *
     * @return NYTimes_MostPopular_GetMostViewed_Results New results object.
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
     * Wraps results in appropriate results class for this GetMostViewed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MostPopular_GetMostViewed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MostPopular_GetMostViewed_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMostViewed Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostViewed_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMostViewed Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MostPopular_GetMostViewed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMostViewed execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches movie reviews by keyword and various filter parameters.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_SearchByKeyword extends Temboo_Choreography
{
    /**
     * Searches movie reviews by keyword and various filter parameters.
     *
     * @param Temboo_Session $session The session that owns this SearchByKeyword Choreo.
     * @return NYTimes_MovieReviews_SearchByKeyword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MovieReviews/SearchByKeyword/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByKeyword Choreo.
     *
     * @param NYTimes_MovieReviews_SearchByKeyword_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_SearchByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_SearchByKeyword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MovieReviews_SearchByKeyword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MovieReviews_SearchByKeyword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_SearchByKeyword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByKeyword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchByKeyword Choreo.
     *
     * @param string $value (optional, string) The API Key provided by NY Times.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CriticsPick input for this SearchByKeyword Choreo.
     *
     * @param string $value (optional, string) Set this parameter to Y to limt the results to NYT Critics' Picks. To get only those movies that have not been highlighted by Times critics, specify N.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setCriticsPick($value)
    {
        return $this->set('CriticsPick', $value);
    }

    /**
     * Set the value for the DVD input for this SearchByKeyword Choreo.
     *
     * @param string $value (optional, string) Set this parameter to Y to limit the results to movies that have been released on DVD. To get only those movies that have not been released on DVD, specify N.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setDVD($value)
    {
        return $this->set('DVD', $value);
    }

    /**
     * Set the value for the Limit input for this SearchByKeyword Choreo.
     *
     * @param int $value (optional, integer) The number of results to return.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this SearchByKeyword Choreo.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. This can be used in combination with the Limit input to page through results.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the OpeningDate input for this SearchByKeyword Choreo.
     *
     * @param string $value (optional, date) Limits by date or range of dates. The opening-date is the date the movie's opening date in the New York region. Format YYYY-MM-DD. Separate ranges with semicolons.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setOpeningDate($value)
    {
        return $this->set('OpeningDate', $value);
    }

    /**
     * Set the value for the Order input for this SearchByKeyword Choreo.
     *
     * @param string $value (optional, string) Sets the sort order of the results. Accepted values are: by-title, by-publication-date, by-opening-date, by-dvd-release-date.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicationDate input for this SearchByKeyword Choreo.
     *
     * @param string $value (optional, date) Limits by date or range of dates. The publication-date is the date the review was first publish.ed in The Times. Format YYYY-MM-DD. Separate ranges with semicolons.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setPublicationDate($value)
    {
        return $this->set('PublicationDate', $value);
    }

    /**
     * Set the value for the Query input for this SearchByKeyword Choreo.
     *
     * @param string $value (conditional, string) A string of search keywords. Matches movie titles and indexed terms.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchByKeyword Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Reviewer input for this SearchByKeyword Choreo.
     *
     * @param string $value (optional, string) Limits results to reviews by a specific critic. Reviewer names should be hyphenated or concatenated with dots (i.e manohla.dargis).
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setReviewer($value)
    {
        return $this->set('Reviewer', $value);
    }

    /**
     * Set the value for the ThousandBest input for this SearchByKeyword Choreo.
     *
     * @param string $value (optional, string) Set this parameter to Y to limit the results to movies on the Times list of The Best 1,000 Movies Ever Made. To get only those movies that are not on the list, specify N.
     * @return NYTimes_MovieReviews_SearchByKeyword_Inputs For method chaining.
     */
    public function setThousandBest($value)
    {
        return $this->set('ThousandBest', $value);
    }
}


/**
 * Execution object for the SearchByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_SearchByKeyword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByKeyword Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByKeyword execution.
     * @param NYTimes_MovieReviews_SearchByKeyword $choreo The choreography object for this execution.
     * @param NYTimes_MovieReviews_SearchByKeyword_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_SearchByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_SearchByKeyword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MovieReviews_SearchByKeyword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByKeyword execution.
     *
     * @return NYTimes_MovieReviews_SearchByKeyword_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByKeyword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MovieReviews_SearchByKeyword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MovieReviews_SearchByKeyword_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_SearchByKeyword_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByKeyword Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MovieReviews_SearchByKeyword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByKeyword execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for the blog posts and articles that are most frequently shared.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostShared extends Temboo_Choreography
{
    /**
     * Retrieves information for the blog posts and articles that are most frequently shared.
     *
     * @param Temboo_Session $session The session that owns this GetMostShared Choreo.
     * @return NYTimes_MostPopular_GetMostShared New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MostPopular/GetMostShared/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMostShared Choreo.
     *
     * @param NYTimes_MostPopular_GetMostShared_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_GetMostShared_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_GetMostShared_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MostPopular_GetMostShared_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMostShared Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_GetMostShared_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MostPopular_GetMostShared_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMostShared Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostShared_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMostShared Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_GetMostShared_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMostShared input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MostPopular_GetMostShared_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MostPopular_GetMostShared_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetMostShared Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_MostPopular_GetMostShared_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Offset input for this GetMostShared Choreo.
     *
     * @param string $value (optional, string) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value.
     * @return NYTimes_MostPopular_GetMostShared_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetMostShared Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_MostPopular_GetMostShared_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Section input for this GetMostShared Choreo.
     *
     * @param string $value (required, string) Limits the results by one or more sections (i.e. arts).  To get all sections, specify all-sections.
     * @return NYTimes_MostPopular_GetMostShared_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }

    /**
     * Set the value for the ShareTypes input for this GetMostShared Choreo.
     *
     * @param string $value (required, string) Limits the results by the method used to share the items.  Separate multiple share types by semicolons (i.e. facebook; twitter).
     * @return NYTimes_MostPopular_GetMostShared_Inputs For method chaining.
     */
    public function setShareTypes($value)
    {
        return $this->set('ShareTypes', $value);
    }

    /**
     * Set the value for the TimePeriod input for this GetMostShared Choreo.
     *
     * @param int $value (required, integer) Allowed integer values: 1, 7, or 30, which corresponds to a day (1) , a week (7), or a month (30) of content.
     * @return NYTimes_MostPopular_GetMostShared_Inputs For method chaining.
     */
    public function setTimePeriod($value)
    {
        return $this->set('TimePeriod', $value);
    }
}


/**
 * Execution object for the GetMostShared Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostShared_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMostShared Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMostShared execution.
     * @param NYTimes_MostPopular_GetMostShared $choreo The choreography object for this execution.
     * @param NYTimes_MostPopular_GetMostShared_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_GetMostShared_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_GetMostShared_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MostPopular_GetMostShared $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMostShared execution.
     *
     * @return NYTimes_MostPopular_GetMostShared_Results New results object.
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
     * Wraps results in appropriate results class for this GetMostShared execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MostPopular_GetMostShared_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MostPopular_GetMostShared_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMostShared Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostShared_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMostShared Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MostPopular_GetMostShared_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMostShared execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for the blog posts and articles that are most frequently emailed.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostEmailed extends Temboo_Choreography
{
    /**
     * Retrieves information for the blog posts and articles that are most frequently emailed.
     *
     * @param Temboo_Session $session The session that owns this GetMostEmailed Choreo.
     * @return NYTimes_MostPopular_GetMostEmailed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MostPopular/GetMostEmailed/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMostEmailed Choreo.
     *
     * @param NYTimes_MostPopular_GetMostEmailed_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_GetMostEmailed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_GetMostEmailed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MostPopular_GetMostEmailed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMostEmailed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_GetMostEmailed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MostPopular_GetMostEmailed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMostEmailed Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostEmailed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMostEmailed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_GetMostEmailed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMostEmailed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MostPopular_GetMostEmailed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MostPopular_GetMostEmailed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetMostEmailed Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_MostPopular_GetMostEmailed_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Offset input for this GetMostEmailed Choreo.
     *
     * @param string $value (optional, string) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value.
     * @return NYTimes_MostPopular_GetMostEmailed_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetMostEmailed Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_MostPopular_GetMostEmailed_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Section input for this GetMostEmailed Choreo.
     *
     * @param string $value (required, string) Limits the results by one or more sections (i.e. arts).  To get all sections, specify all-sections.
     * @return NYTimes_MostPopular_GetMostEmailed_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }

    /**
     * Set the value for the TimePeriod input for this GetMostEmailed Choreo.
     *
     * @param int $value (required, integer) Allowed integer values: 1, 7, or 30, which corresponds to a day (1) , a week (7), or a month (30) of content.
     * @return NYTimes_MostPopular_GetMostEmailed_Inputs For method chaining.
     */
    public function setTimePeriod($value)
    {
        return $this->set('TimePeriod', $value);
    }
}


/**
 * Execution object for the GetMostEmailed Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostEmailed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMostEmailed Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMostEmailed execution.
     * @param NYTimes_MostPopular_GetMostEmailed $choreo The choreography object for this execution.
     * @param NYTimes_MostPopular_GetMostEmailed_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_GetMostEmailed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_GetMostEmailed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MostPopular_GetMostEmailed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMostEmailed execution.
     *
     * @return NYTimes_MostPopular_GetMostEmailed_Results New results object.
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
     * Wraps results in appropriate results class for this GetMostEmailed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MostPopular_GetMostEmailed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MostPopular_GetMostEmailed_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMostEmailed Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_GetMostEmailed_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMostEmailed Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MostPopular_GetMostEmailed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMostEmailed execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of PACs that have been designated by the FEC as "leadership PACs".
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_LeadershipPACs extends Temboo_Choreography
{
    /**
     * Retrieve a list of PACs that have been designated by the FEC as "leadership PACs".
     *
     * @param Temboo_Session $session The session that owns this LeadershipPACs Choreo.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/LeadershipPACs/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LeadershipPACs Choreo.
     *
     * @param NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_LeadershipPACs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LeadershipPACs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LeadershipPACs Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LeadershipPACs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LeadershipPACs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this LeadershipPACs Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this LeadershipPACs Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LeadershipPACs Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the LeadershipPACs Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_LeadershipPACs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LeadershipPACs Choreo.
     *
     * @param Temboo_Session $session The session that owns this LeadershipPACs execution.
     * @param NYTimes_CampaignFinance_Committees_LeadershipPACs $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_LeadershipPACs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LeadershipPACs execution.
     *
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Results New results object.
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
     * Wraps results in appropriate results class for this LeadershipPACs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_LeadershipPACs_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LeadershipPACs Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_LeadershipPACs_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LeadershipPACs Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LeadershipPACs execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves biographical information about reviewers.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewer extends Temboo_Choreography
{
    /**
     * Retrieves biographical information about reviewers.
     *
     * @param Temboo_Session $session The session that owns this GetReviewer Choreo.
     * @return NYTimes_MovieReviews_GetReviewer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MovieReviews/GetReviewer/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetReviewer Choreo.
     *
     * @param NYTimes_MovieReviews_GetReviewer_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetReviewer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetReviewer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MovieReviews_GetReviewer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReviewer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetReviewer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MovieReviews_GetReviewer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReviewer Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetReviewer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetReviewer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReviewer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MovieReviews_GetReviewer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MovieReviews_GetReviewer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetReviewer Choreo.
     *
     * @param string $value (optional, string) The API Key provided by NY Times.
     * @return NYTimes_MovieReviews_GetReviewer_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResourceType input for this GetReviewer Choreo.
     *
     * @param string $value (optional, string) Specify "all", "full-time", or "part-time" for that subset. Specify a reviewer's name to get details about a reviewer. Names should be separated by hyphens or dots (i.e. manohla-dargis).
     * @return NYTimes_MovieReviews_GetReviewer_Inputs For method chaining.
     */
    public function setResourceType($value)
    {
        return $this->set('ResourceType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetReviewer Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_MovieReviews_GetReviewer_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetReviewer Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReviewer Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetReviewer execution.
     * @param NYTimes_MovieReviews_GetReviewer $choreo The choreography object for this execution.
     * @param NYTimes_MovieReviews_GetReviewer_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetReviewer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetReviewer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MovieReviews_GetReviewer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReviewer execution.
     *
     * @return NYTimes_MovieReviews_GetReviewer_Results New results object.
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
     * Wraps results in appropriate results class for this GetReviewer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetReviewer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MovieReviews_GetReviewer_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetReviewer Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewer_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetReviewer Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetReviewer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetReviewer execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves percentiles of real estate sales from New York Times Web Service.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetSalesPercentiles extends Temboo_Choreography
{
    /**
     * Retrieves percentiles of real estate sales from New York Times Web Service.
     *
     * @param Temboo_Session $session The session that owns this GetSalesPercentiles Choreo.
     * @return NYTimes_RealEstate_GetSalesPercentiles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/RealEstate/GetSalesPercentiles/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSalesPercentiles Choreo.
     *
     * @param NYTimes_RealEstate_GetSalesPercentiles_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_GetSalesPercentiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_RealEstate_GetSalesPercentiles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSalesPercentiles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_RealEstate_GetSalesPercentiles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSalesPercentiles Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetSalesPercentiles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSalesPercentiles Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSalesPercentiles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetSalesPercentiles Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Bedrooms input for this GetSalesPercentiles Choreo.
     *
     * @param int $value (optional, integer) Limits the results by number of bedrooms to search for. Defaults to 1.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function setBedrooms($value)
    {
        return $this->set('Bedrooms', $value);
    }

    /**
     * Set the value for the DateRange input for this GetSalesPercentiles Choreo.
     *
     * @param string $value (required, string) Sets the quarter, month, week or day for the results (i.e. 2008-Q1, 2008-W52, 2007-07, etc)
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the GeoExtentLevel input for this GetSalesPercentiles Choreo.
     *
     * @param string $value (required, string) The geographical unit for the results (i.e. borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function setGeoExtentLevel($value)
    {
        return $this->set('GeoExtentLevel', $value);
    }

    /**
     * Set the value for the GeoExtentValue input for this GetSalesPercentiles Choreo.
     *
     * @param string $value (required, string) Limits the search to a specific area.  For example, if GeoExtendLevel is borough, the value for GeoExtendValue could be Brooklyn.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function setGeoExtentValue($value)
    {
        return $this->set('GeoExtentValue', $value);
    }

    /**
     * Set the value for the GeoSummaryLevel input for this GetSalesPercentiles Choreo.
     *
     * @param string $value (required, string) The geographic unit for grouping the results (borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function setGeoSummaryLevel($value)
    {
        return $this->set('GeoSummaryLevel', $value);
    }

    /**
     * Set the value for the Percentile input for this GetSalesPercentiles Choreo.
     *
     * @param int $value (required, integer) Specify the percentile for sales prices you want to retrieve (i.e 50)
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function setPercentile($value)
    {
        return $this->set('Percentile', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSalesPercentiles Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetSalesPercentiles Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetSalesPercentiles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSalesPercentiles Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSalesPercentiles execution.
     * @param NYTimes_RealEstate_GetSalesPercentiles $choreo The choreography object for this execution.
     * @param NYTimes_RealEstate_GetSalesPercentiles_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_GetSalesPercentiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_RealEstate_GetSalesPercentiles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSalesPercentiles execution.
     *
     * @return NYTimes_RealEstate_GetSalesPercentiles_Results New results object.
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
     * Wraps results in appropriate results class for this GetSalesPercentiles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_RealEstate_GetSalesPercentiles_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSalesPercentiles Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetSalesPercentiles_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSalesPercentiles Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_RealEstate_GetSalesPercentiles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSalesPercentiles execution.
     *
     * @return string The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves reviews by a specific Times reviewer.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_SearchByReviewer extends Temboo_Choreography
{
    /**
     * Retrieves reviews by a specific Times reviewer.
     *
     * @param Temboo_Session $session The session that owns this SearchByReviewer Choreo.
     * @return NYTimes_MovieReviews_SearchByReviewer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MovieReviews/SearchByReviewer/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByReviewer Choreo.
     *
     * @param NYTimes_MovieReviews_SearchByReviewer_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_SearchByReviewer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_SearchByReviewer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MovieReviews_SearchByReviewer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByReviewer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MovieReviews_SearchByReviewer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByReviewer Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_SearchByReviewer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByReviewer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByReviewer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchByReviewer Choreo.
     *
     * @param string $value (optional, string) The API Key provided by NY Times.
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CriticsPick input for this SearchByReviewer Choreo.
     *
     * @param string $value (optional, string) Set this parameter to Y to limt the results to NYT Critics' Picks. To get only those movies that have not been highlighted by Times critics, specify N.
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs For method chaining.
     */
    public function setCriticsPick($value)
    {
        return $this->set('CriticsPick', $value);
    }

    /**
     * Set the value for the Offset input for this SearchByReviewer Choreo.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. Used to page through results.
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Order input for this SearchByReviewer Choreo.
     *
     * @param string $value (optional, string) Sets the sort order of the results. Accepted values are: by-title, by-publication-date, by-opening-date, by-dvd-release-date.
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchByReviewer Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ReviewerName input for this SearchByReviewer Choreo.
     *
     * @param string $value (required, string) The name of the Times reviewer. Reviewer names should be separated by hyphens or dots (i.e. manohla-dargis or manohla.dargis).
     * @return NYTimes_MovieReviews_SearchByReviewer_Inputs For method chaining.
     */
    public function setReviewerName($value)
    {
        return $this->set('ReviewerName', $value);
    }
}


/**
 * Execution object for the SearchByReviewer Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_SearchByReviewer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByReviewer Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByReviewer execution.
     * @param NYTimes_MovieReviews_SearchByReviewer $choreo The choreography object for this execution.
     * @param NYTimes_MovieReviews_SearchByReviewer_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_SearchByReviewer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_SearchByReviewer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MovieReviews_SearchByReviewer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByReviewer execution.
     *
     * @return NYTimes_MovieReviews_SearchByReviewer_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByReviewer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MovieReviews_SearchByReviewer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MovieReviews_SearchByReviewer_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByReviewer Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_SearchByReviewer_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByReviewer Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MovieReviews_SearchByReviewer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByReviewer execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves 20 of the most recently added political office candidates.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_NewCandidates extends Temboo_Choreography
{
    /**
     * Retrieves 20 of the most recently added political office candidates.
     *
     * @param Temboo_Session $session The session that owns this NewCandidates Choreo.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Candidates/NewCandidates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this NewCandidates Choreo.
     *
     * @param NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Candidates_NewCandidates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NewCandidates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NewCandidates Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the NewCandidates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NewCandidates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this NewCandidates Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this NewCandidates Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this NewCandidates Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the NewCandidates Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_NewCandidates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NewCandidates Choreo.
     *
     * @param Temboo_Session $session The session that owns this NewCandidates execution.
     * @param NYTimes_CampaignFinance_Candidates_NewCandidates $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Candidates_NewCandidates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NewCandidates execution.
     *
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Results New results object.
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
     * Wraps results in appropriate results class for this NewCandidates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Candidates_NewCandidates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the NewCandidates Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_NewCandidates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the NewCandidates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this NewCandidates execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about New York Times best-sellers that match a specified search criteria.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_GetBestSellerHistory extends Temboo_Choreography
{
    /**
     * Retrieves information about New York Times best-sellers that match a specified search criteria.
     *
     * @param Temboo_Session $session The session that owns this GetBestSellerHistory Choreo.
     * @return NYTimes_BestSellers_GetBestSellerHistory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/BestSellers/GetBestSellerHistory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBestSellerHistory Choreo.
     *
     * @param NYTimes_BestSellers_GetBestSellerHistory_Inputs|array $inputs (optional) Inputs as NYTimes_BestSellers_GetBestSellerHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_BestSellers_GetBestSellerHistory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBestSellerHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_BestSellers_GetBestSellerHistory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBestSellerHistory Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_GetBestSellerHistory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBestSellerHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBestSellerHistory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AgeGroup input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (optional, string) The target age group for the best seller.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setAgeGroup($value)
    {
        return $this->set('AgeGroup', $value);
    }

    /**
     * Set the value for the Author input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (optional, string) The author of the best seller.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setAuthor($value)
    {
        return $this->set('Author', $value);
    }

    /**
     * Set the value for the Contributor input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (optional, string) The author of the best seller, as well as other contributors such as the illustrator.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setContributor($value)
    {
        return $this->set('Contributor', $value);
    }

    /**
     * Set the value for the ISBN input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (optional, string) International Standard Book Number, 10 or 13 digits.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setISBN($value)
    {
        return $this->set('ISBN', $value);
    }

    /**
     * Set the value for the Offset input for this GetBestSellerHistory Choreo.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Price input for this GetBestSellerHistory Choreo.
     *
     * @param float $value (optional, decimal) The publisher's list price of the best seller, including decimal point.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setPrice($value)
    {
        return $this->set('Price', $value);
    }

    /**
     * Set the value for the Publisher input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (optional, string) The standardized name of the publisher.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setPublisher($value)
    {
        return $this->set('Publisher', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (optional, string) The format that the response should bein. Valid values are: json (the default), and xml.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortBy input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (optional, string) The column name to sort by. Valid values are: age-group, author, contributor, isbn, price, publisher, and title.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (optional, string) The sort order. Valid values are: ASC and DESC.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the Title input for this GetBestSellerHistory Choreo.
     *
     * @param string $value (conditional, string) The title of the best seller to retrieve data for.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }
}


/**
 * Execution object for the GetBestSellerHistory Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_GetBestSellerHistory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBestSellerHistory Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBestSellerHistory execution.
     * @param NYTimes_BestSellers_GetBestSellerHistory $choreo The choreography object for this execution.
     * @param NYTimes_BestSellers_GetBestSellerHistory_Inputs|array $inputs (optional) Inputs as NYTimes_BestSellers_GetBestSellerHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_BestSellers_GetBestSellerHistory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBestSellerHistory execution.
     *
     * @return NYTimes_BestSellers_GetBestSellerHistory_Results New results object.
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
     * Wraps results in appropriate results class for this GetBestSellerHistory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_BestSellers_GetBestSellerHistory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBestSellerHistory Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_GetBestSellerHistory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBestSellerHistory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_BestSellers_GetBestSellerHistory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBestSellerHistory execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Queries the Newswire API for a specific news item.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetNewsItem extends Temboo_Choreography
{
    /**
     * Queries the Newswire API for a specific news item.
     *
     * @param Temboo_Session $session The session that owns this GetNewsItem Choreo.
     * @return NYTimes_TimesNewswire_GetNewsItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/TimesNewswire/GetNewsItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetNewsItem Choreo.
     *
     * @param NYTimes_TimesNewswire_GetNewsItem_Inputs|array $inputs (optional) Inputs as NYTimes_TimesNewswire_GetNewsItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_TimesNewswire_GetNewsItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_TimesNewswire_GetNewsItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNewsItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_TimesNewswire_GetNewsItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_TimesNewswire_GetNewsItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNewsItem Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetNewsItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetNewsItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_TimesNewswire_GetNewsItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNewsItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_TimesNewswire_GetNewsItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_TimesNewswire_GetNewsItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetNewsItem Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_TimesNewswire_GetNewsItem_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetNewsItem Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_TimesNewswire_GetNewsItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the URL input for this GetNewsItem Choreo.
     *
     * @param string $value (required, string) The complete URL of a specific news item. This URL is returned in the output of the GetRecentNews Choreo.
     * @return NYTimes_TimesNewswire_GetNewsItem_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the GetNewsItem Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetNewsItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNewsItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetNewsItem execution.
     * @param NYTimes_TimesNewswire_GetNewsItem $choreo The choreography object for this execution.
     * @param NYTimes_TimesNewswire_GetNewsItem_Inputs|array $inputs (optional) Inputs as NYTimes_TimesNewswire_GetNewsItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_TimesNewswire_GetNewsItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_TimesNewswire_GetNewsItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNewsItem execution.
     *
     * @return NYTimes_TimesNewswire_GetNewsItem_Results New results object.
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
     * Wraps results in appropriate results class for this GetNewsItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_TimesNewswire_GetNewsItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_TimesNewswire_GetNewsItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetNewsItem Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetNewsItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetNewsItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_TimesNewswire_GetNewsItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetNewsItem execution.
     *
     * @return string The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain details about a specific Political Action Committee.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeDetails extends Temboo_Choreography
{
    /**
     * Obtain details about a specific Political Action Committee.
     *
     * @param Temboo_Session $session The session that owns this CommitteeDetails Choreo.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CommitteeDetails Choreo.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeDetails Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CommitteeDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeDetails Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeDetails Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CommitteeFECID input for this CommitteeDetails Choreo.
     *
     * @param string $value (required, string) Enter a committee's FEC ID.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setCommitteeFECID($value)
    {
        return $this->set('CommitteeFECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeDetails Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeDetails Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this CommitteeDetails execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeDetails $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeDetails execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Results New results object.
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
     * Wraps results in appropriate results class for this CommitteeDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CommitteeDetails Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CommitteeDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CommitteeDetails execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the total receipts and disbursements for all presidential candidates for a particular campaign cycle.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals extends Temboo_Choreography
{
    /**
     * Retrieves the total receipts and disbursements for all presidential candidates for a particular campaign cycle.
     *
     * @param Temboo_Session $session The session that owns this PresidentialCandidateTotals Choreo.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/PresidentialCampaigns/PresidentialCandidateTotals/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PresidentialCandidateTotals Choreo.
     *
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PresidentialCandidateTotals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PresidentialCandidateTotals Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PresidentialCandidateTotals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PresidentialCandidateTotals input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PresidentialCandidateTotals Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this PresidentialCandidateTotals Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PresidentialCandidateTotals Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PresidentialCandidateTotals Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PresidentialCandidateTotals Choreo.
     *
     * @param Temboo_Session $session The session that owns this PresidentialCandidateTotals execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PresidentialCandidateTotals execution.
     *
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results New results object.
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
     * Wraps results in appropriate results class for this PresidentialCandidateTotals execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PresidentialCandidateTotals Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PresidentialCandidateTotals Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PresidentialCandidateTotals execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves 20 of the most recently added committees.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_NewCommittees extends Temboo_Choreography
{
    /**
     * Retrieves 20 of the most recently added committees.
     *
     * @param Temboo_Session $session The session that owns this NewCommittees Choreo.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/NewCommittees/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this NewCommittees Choreo.
     *
     * @param NYTimes_CampaignFinance_Committees_NewCommittees_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_NewCommittees_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_NewCommittees_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NewCommittees Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_NewCommittees_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NewCommittees Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_NewCommittees_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the NewCommittees Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NewCommittees input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this NewCommittees Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this NewCommittees Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this NewCommittees Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the NewCommittees Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_NewCommittees_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NewCommittees Choreo.
     *
     * @param Temboo_Session $session The session that owns this NewCommittees execution.
     * @param NYTimes_CampaignFinance_Committees_NewCommittees $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Committees_NewCommittees_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_NewCommittees_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_NewCommittees $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NewCommittees execution.
     *
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Results New results object.
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
     * Wraps results in appropriate results class for this NewCommittees execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_NewCommittees_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the NewCommittees Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_NewCommittees_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the NewCommittees Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this NewCommittees execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a list of available form types used in FEC filings.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes extends Temboo_Choreography
{
    /**
     * Obtain a list of available form types used in FEC filings.
     *
     * @param Temboo_Session $session The session that owns this GetElectronicFilingFormTypes Choreo.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/ElectronicFilings/GetElectronicFilingFormTypes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetElectronicFilingFormTypes Choreo.
     *
     * @param NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetElectronicFilingFormTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetElectronicFilingFormTypes Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetElectronicFilingFormTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetElectronicFilingFormTypes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetElectronicFilingFormTypes Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this GetElectronicFilingFormTypes Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetElectronicFilingFormTypes Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetElectronicFilingFormTypes Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetElectronicFilingFormTypes Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetElectronicFilingFormTypes execution.
     * @param NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetElectronicFilingFormTypes execution.
     *
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results New results object.
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
     * Wraps results in appropriate results class for this GetElectronicFilingFormTypes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetElectronicFilingFormTypes Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetElectronicFilingFormTypes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetElectronicFilingFormTypes execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves counts of real estate sales from New York Times Web Service.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetSalesCounts extends Temboo_Choreography
{
    /**
     * Retrieves counts of real estate sales from New York Times Web Service.
     *
     * @param Temboo_Session $session The session that owns this GetSalesCounts Choreo.
     * @return NYTimes_RealEstate_GetSalesCounts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/RealEstate/GetSalesCounts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSalesCounts Choreo.
     *
     * @param NYTimes_RealEstate_GetSalesCounts_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_GetSalesCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_GetSalesCounts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_RealEstate_GetSalesCounts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSalesCounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_RealEstate_GetSalesCounts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSalesCounts Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetSalesCounts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSalesCounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSalesCounts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetSalesCounts Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Bedrooms input for this GetSalesCounts Choreo.
     *
     * @param int $value (optional, integer) Limits the results by number of bedrooms to search for. Defaults to 1.
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs For method chaining.
     */
    public function setBedrooms($value)
    {
        return $this->set('Bedrooms', $value);
    }

    /**
     * Set the value for the DateRange input for this GetSalesCounts Choreo.
     *
     * @param string $value (required, string) Sets the quarter, month, week or day for the results (i.e. 2008-Q1, 2008-W52, 2007-07, 2010-10-01, etc)
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the GeoExtentLevel input for this GetSalesCounts Choreo.
     *
     * @param string $value (required, string) The geographical unit for the results (i.e. borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs For method chaining.
     */
    public function setGeoExtentLevel($value)
    {
        return $this->set('GeoExtentLevel', $value);
    }

    /**
     * Set the value for the GeoExtentValue input for this GetSalesCounts Choreo.
     *
     * @param string $value (required, string) Limits the search to a specific area.  For example, if GeoExtendLevel is borough, the value for GeoExtendValue could be Brooklyn.
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs For method chaining.
     */
    public function setGeoExtentValue($value)
    {
        return $this->set('GeoExtentValue', $value);
    }

    /**
     * Set the value for the GeoSummaryLevel input for this GetSalesCounts Choreo.
     *
     * @param string $value (required, string) The geographic unit for grouping the results (borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs For method chaining.
     */
    public function setGeoSummaryLevel($value)
    {
        return $this->set('GeoSummaryLevel', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSalesCounts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_RealEstate_GetSalesCounts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetSalesCounts Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetSalesCounts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSalesCounts Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSalesCounts execution.
     * @param NYTimes_RealEstate_GetSalesCounts $choreo The choreography object for this execution.
     * @param NYTimes_RealEstate_GetSalesCounts_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_GetSalesCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_GetSalesCounts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_RealEstate_GetSalesCounts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSalesCounts execution.
     *
     * @return NYTimes_RealEstate_GetSalesCounts_Results New results object.
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
     * Wraps results in appropriate results class for this GetSalesCounts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_RealEstate_GetSalesCounts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_RealEstate_GetSalesCounts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSalesCounts Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_GetSalesCounts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSalesCounts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_RealEstate_GetSalesCounts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSalesCounts execution.
     *
     * @return string The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain finance details for a Presidential or Congressional candidate.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateDetails extends Temboo_Choreography
{
    /**
     * Obtain finance details for a Presidential or Congressional candidate.
     *
     * @param Temboo_Session $session The session that owns this CandidateDetails Choreo.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Candidates/CandidateDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CandidateDetails Choreo.
     *
     * @param NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CandidateDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CandidateDetails Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CandidateDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CandidateDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CandidateDetails Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CandidateDetails Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the FECID input for this CandidateDetails Choreo.
     *
     * @param string $value (required, string) Enter the FEC ID for the candidate.  ID can be obtained by first running the CandidateSearch Choreo.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setFECID($value)
    {
        return $this->set('FECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CandidateDetails Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CandidateDetails Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CandidateDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this CandidateDetails execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateDetails $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Candidates_CandidateDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CandidateDetails execution.
     *
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Results New results object.
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
     * Wraps results in appropriate results class for this CandidateDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CandidateDetails Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CandidateDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CandidateDetails execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain contributions made by a Political Action Committee (PAC) to a candidate.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate extends Temboo_Choreography
{
    /**
     * Obtain contributions made by a Political Action Committee (PAC) to a candidate.
     *
     * @param Temboo_Session $session The session that owns this CommitteeContributionsToCandidate Choreo.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeContributionsToCandidate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CommitteeContributionsToCandidate Choreo.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeContributionsToCandidate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeContributionsToCandidate Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CommitteeContributionsToCandidate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeContributionsToCandidate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeContributionsToCandidate Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeContributionsToCandidate Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CandidateFECID input for this CommitteeContributionsToCandidate Choreo.
     *
     * @param string $value (required, string) Enter a cadidate's FEC ID.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setCandidateFECID($value)
    {
        return $this->set('CandidateFECID', $value);
    }

    /**
     * Set the value for the CommitteeFECID input for this CommitteeContributionsToCandidate Choreo.
     *
     * @param string $value (required, string) Enter a committee's FEC ID.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setCommitteeFECID($value)
    {
        return $this->set('CommitteeFECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeContributionsToCandidate Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeContributionsToCandidate Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeContributionsToCandidate Choreo.
     *
     * @param Temboo_Session $session The session that owns this CommitteeContributionsToCandidate execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeContributionsToCandidate execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results New results object.
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
     * Wraps results in appropriate results class for this CommitteeContributionsToCandidate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CommitteeContributionsToCandidate Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CommitteeContributionsToCandidate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CommitteeContributionsToCandidate execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for a political action committee (PACs) by name, or partial name.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeSearch extends Temboo_Choreography
{
    /**
     * Search for a political action committee (PACs) by name, or partial name.
     *
     * @param Temboo_Session $session The session that owns this CommitteeSearch Choreo.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CommitteeSearch Choreo.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeSearch Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CommitteeSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeSearch Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeSearch Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Name input for this CommitteeSearch Choreo.
     *
     * @param string $value (required, string) Specify the name of the committee to be retireved. Partial names are also acceptable.  Examples: viacom.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeSearch Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeSearch Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this CommitteeSearch execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeSearch $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeSearch execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Results New results object.
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
     * Wraps results in appropriate results class for this CommitteeSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CommitteeSearch Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CommitteeSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CommitteeSearch execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve contributions made by individuals to a specific presidential candidate. 
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates extends Temboo_Choreography
{
    /**
     * Retrieve contributions made by individuals to a specific presidential candidate. 
     *
     * @param Temboo_Session $session The session that owns this ContributionsToPresidentialCandidates Choreo.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndividualContributors/ContributionsToPresidentialCandidates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ContributionsToPresidentialCandidates Choreo.
     *
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ContributionsToPresidentialCandidates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ContributionsToPresidentialCandidates Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ContributionsToPresidentialCandidates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ContributionsToPresidentialCandidates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ContributionsToPresidentialCandidates Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this ContributionsToPresidentialCandidates Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CandidateFECID input for this ContributionsToPresidentialCandidates Choreo.
     *
     * @param string $value (conditional, string) Enter a candidate's nine-digit FEC ID. IDs can be obtained by first running the CandidateSearch Choreo. Required unless providing the LastName input.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setCandidateFECID($value)
    {
        return $this->set('CandidateFECID', $value);
    }

    /**
     * Set the value for the LastName input for this ContributionsToPresidentialCandidates Choreo.
     *
     * @param string $value (conditional, string) Enter the name of a presidential candidate for whom contributions will be obtained. Required unless providing the CandidateFECID input.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ContributionsToPresidentialCandidates Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ContributionsToPresidentialCandidates Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ContributionsToPresidentialCandidates Choreo.
     *
     * @param Temboo_Session $session The session that owns this ContributionsToPresidentialCandidates execution.
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ContributionsToPresidentialCandidates execution.
     *
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results New results object.
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
     * Wraps results in appropriate results class for this ContributionsToPresidentialCandidates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ContributionsToPresidentialCandidates Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ContributionsToPresidentialCandidates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ContributionsToPresidentialCandidates execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain contributions made by a Political Action Committee (PAC) in an election cycle.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributions extends Temboo_Choreography
{
    /**
     * Obtain contributions made by a Political Action Committee (PAC) in an election cycle.
     *
     * @param Temboo_Session $session The session that owns this CommitteeContributions Choreo.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeContributions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CommitteeContributions Choreo.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeContributions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeContributions Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CommitteeContributions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeContributions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeContributions Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeContributions Choreo.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CommitteeFECID input for this CommitteeContributions Choreo.
     *
     * @param string $value (conditional, string) Enter a political action committee's FEC ID.  Either CommitteeFECID, OR Name must be provided.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setCommitteeFECID($value)
    {
        return $this->set('CommitteeFECID', $value);
    }

    /**
     * Set the value for the Name input for this CommitteeContributions Choreo.
     *
     * @param string $value (conditional, string) Enter the name of a political action committee (PAC) whose contributions will be obtained. Either Name or CommitteeFECID must be provided.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Offset input for this CommitteeContributions Choreo.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value (e.g., Offset=40 displays results 41–60).
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeContributions Choreo.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeContributions Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeContributions Choreo.
     *
     * @param Temboo_Session $session The session that owns this CommitteeContributions execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributions $choreo The choreography object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeContributions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeContributions execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Results New results object.
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
     * Wraps results in appropriate results class for this CommitteeContributions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CommitteeContributions Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CommitteeContributions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CommitteeContributions execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves recent news items.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetRecentNewsItems extends Temboo_Choreography
{
    /**
     * Retrieves recent news items.
     *
     * @param Temboo_Session $session The session that owns this GetRecentNewsItems Choreo.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/TimesNewswire/GetRecentNewsItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecentNewsItems Choreo.
     *
     * @param NYTimes_TimesNewswire_GetRecentNewsItems_Inputs|array $inputs (optional) Inputs as NYTimes_TimesNewswire_GetRecentNewsItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_TimesNewswire_GetRecentNewsItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentNewsItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_TimesNewswire_GetRecentNewsItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentNewsItems Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetRecentNewsItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecentNewsItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentNewsItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecentNewsItems Choreo.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetRecentNewsItems Choreo.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 20.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this GetRecentNewsItems Choreo.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. This can be used in combination with the Limit input to page through results.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRecentNewsItems Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Section input for this GetRecentNewsItems Choreo.
     *
     * @param string $value (optional, string) Limits the set of items by one or more sections. Separate sections by semicolons. Defaults to "all" to get all sections. See Choreo documentation for more options for this input.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }

    /**
     * Set the value for the Source input for this GetRecentNewsItems Choreo.
     *
     * @param string $value (optional, string) Limits the set of items by originating source. Set to "nyt" for New York Times items only and "iht" for International Herald Tribune items. Set to "all" for both (the default).
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the TimePeriod input for this GetRecentNewsItems Choreo.
     *
     * @param int $value (optional, integer) Limits the set of items by time published. Valid range is number of hours, 1–720 (in hours). Defaults to 24.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Inputs For method chaining.
     */
    public function setTimePeriod($value)
    {
        return $this->set('TimePeriod', $value);
    }
}


/**
 * Execution object for the GetRecentNewsItems Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetRecentNewsItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentNewsItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecentNewsItems execution.
     * @param NYTimes_TimesNewswire_GetRecentNewsItems $choreo The choreography object for this execution.
     * @param NYTimes_TimesNewswire_GetRecentNewsItems_Inputs|array $inputs (optional) Inputs as NYTimes_TimesNewswire_GetRecentNewsItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_TimesNewswire_GetRecentNewsItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentNewsItems execution.
     *
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecentNewsItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_TimesNewswire_GetRecentNewsItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecentNewsItems Choreo.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetRecentNewsItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecentNewsItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_TimesNewswire_GetRecentNewsItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecentNewsItems execution.
     *
     * @return string The response from the NY Times API.
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


/*
 Represents a NYTimes article

*/

class NYTimes_Article_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The title of the article
	*/

	public function getTitle() {
		return Temboo_Results::getSubItemByKey($this->base, "title");
	}

	/*
	The url for the article
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The body of the article
	*/

	public function getBody() {
		return Temboo_Results::getSubItemByKey($this->base, "body");
	}

	/*
	The 'by line' field containing the author's name
	*/

	public function getByLine() {
		return Temboo_Results::getSubItemByKey($this->base, "byline");
	}

	/*
	The publication date in YYYYMMDD format
	*/

	public function getDate() {
		return Temboo_Results::getSubItemByKey($this->base, "date");
	}
}




?>
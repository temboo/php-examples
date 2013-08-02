<?php

/**
 * Temboo PHP SDK Yelp classes
 *
 * Execute Choreographies from the Temboo Yelp bundle.
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
 * @subpackage Yelp
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieve businesses by neighborhood.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByNeighborhood extends Temboo_Choreography
{
    /**
     * Retrieve businesses by neighborhood.
     *
     * @param Temboo_Session $session The session that owns this SearchByNeighborhood Choreo.
     * @return Yelp_SearchByNeighborhood New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yelp/SearchByNeighborhood/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByNeighborhood Choreo.
     *
     * @param Yelp_SearchByNeighborhood_Inputs|array $inputs (optional) Inputs as Yelp_SearchByNeighborhood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByNeighborhood_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yelp_SearchByNeighborhood_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByNeighborhood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByNeighborhood_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yelp_SearchByNeighborhood_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByNeighborhood Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByNeighborhood_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByNeighborhood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByNeighborhood_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByNeighborhood input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BusinessType input for this SearchByNeighborhood Choreo.
     *
     * @param string $value (optional, string) A term to narrow the search, such as "wine" or "restaurants". Leave blank to search for all business types.
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function setBusinessType($value)
    {
        return $this->set('BusinessType', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchByNeighborhood Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Yelp.
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchByNeighborhood Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Yelp.
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this SearchByNeighborhood Choreo.
     *
     * @param int $value (optional, integer) The number of businesses to return. The default is 15.
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Neighborhood input for this SearchByNeighborhood Choreo.
     *
     * @param string $value (required, string) The neighborhood in which to search for businesses. See the Yelp API documentation for a list of supported neighborhoods.
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function setNeighborhood($value)
    {
        return $this->set('Neighborhood', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchByNeighborhood Choreo.
     *
     * @param string $value (optional, string) The format of the response from Yelp, either XML or JSON (the default).
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TokenSecret input for this SearchByNeighborhood Choreo.
     *
     * @param string $value (required, string) The Token Secret provided by Yelp.
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function setTokenSecret($value)
    {
        return $this->set('TokenSecret', $value);
    }

    /**
     * Set the value for the Token input for this SearchByNeighborhood Choreo.
     *
     * @param string $value (required, string) The Token provided by Yelp.
     * @return Yelp_SearchByNeighborhood_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the SearchByNeighborhood Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByNeighborhood_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByNeighborhood Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByNeighborhood execution.
     * @param Yelp_SearchByNeighborhood $choreo The choreography object for this execution.
     * @param Yelp_SearchByNeighborhood_Inputs|array $inputs (optional) Inputs as Yelp_SearchByNeighborhood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByNeighborhood_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yelp_SearchByNeighborhood $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByNeighborhood execution.
     *
     * @return Yelp_SearchByNeighborhood_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByNeighborhood execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yelp_SearchByNeighborhood_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yelp_SearchByNeighborhood_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByNeighborhood Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByNeighborhood_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByNeighborhood Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yelp_SearchByNeighborhood_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByNeighborhood execution.
     *
     * @return string The response from Yelp. Corresponds to the input value for ResponseFormat (defaults to JSON).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Only returns information for businesses with deals.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchForBusinessesWithDeals extends Temboo_Choreography
{
    /**
     * Only returns information for businesses with deals.
     *
     * @param Temboo_Session $session The session that owns this SearchForBusinessesWithDeals Choreo.
     * @return Yelp_SearchForBusinessesWithDeals New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yelp/SearchForBusinessesWithDeals/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchForBusinessesWithDeals Choreo.
     *
     * @param Yelp_SearchForBusinessesWithDeals_Inputs|array $inputs (optional) Inputs as Yelp_SearchForBusinessesWithDeals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchForBusinessesWithDeals_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yelp_SearchForBusinessesWithDeals_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchForBusinessesWithDeals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yelp_SearchForBusinessesWithDeals_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchForBusinessesWithDeals Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchForBusinessesWithDeals_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchForBusinessesWithDeals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchForBusinessesWithDeals input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Accuracy input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param int $value (optional, integer) Narrow or widen the search range in relation to the coordinates, such as "2" for state or "8" for street address.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the BusinessType input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param string $value (optional, string) A term to narrow the search, such as "comic books" or "restaurants". Leave blank to search for all business types.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setBusinessType($value)
    {
        return $this->set('BusinessType', $value);
    }

    /**
     * Set the value for the Category input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param string $value (optional, string) Yelp categories to search in, separated by commas but no spaces, such as "hiking,climbing". See the Yelp API docimentation for a list of categories.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Yelp.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Yelp.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param float $value (conditional, decimal) The latitude to search near, such as "37.788022". Searching with either Location or Coordinates is required.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Location input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param string $value (conditional, string) An address, neighborhood, city, state, or ZIP code in which to search for the category. Searching with either Location or Coordinates is required.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setLocation($value)
    {
        return $this->set('Location', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param float $value (conditional, decimal) The longitude to search near, such as "-122.399797". Searching with either Location or Coordinates is required.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param string $value (optional, string) The format of the response from Yelp, either XML or JSON (the default).
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TokenSecret input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param string $value (required, string) The Token Secret provided by Yelp.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setTokenSecret($value)
    {
        return $this->set('TokenSecret', $value);
    }

    /**
     * Set the value for the Token input for this SearchForBusinessesWithDeals Choreo.
     *
     * @param string $value (required, string) The Token provided by Yelp.
     * @return Yelp_SearchForBusinessesWithDeals_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the SearchForBusinessesWithDeals Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchForBusinessesWithDeals_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchForBusinessesWithDeals Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchForBusinessesWithDeals execution.
     * @param Yelp_SearchForBusinessesWithDeals $choreo The choreography object for this execution.
     * @param Yelp_SearchForBusinessesWithDeals_Inputs|array $inputs (optional) Inputs as Yelp_SearchForBusinessesWithDeals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchForBusinessesWithDeals_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yelp_SearchForBusinessesWithDeals $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchForBusinessesWithDeals execution.
     *
     * @return Yelp_SearchForBusinessesWithDeals_Results New results object.
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
     * Wraps results in appropriate results class for this SearchForBusinessesWithDeals execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yelp_SearchForBusinessesWithDeals_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yelp_SearchForBusinessesWithDeals_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchForBusinessesWithDeals Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchForBusinessesWithDeals_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchForBusinessesWithDeals Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yelp_SearchForBusinessesWithDeals_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchForBusinessesWithDeals execution.
     *
     * @return string The response from Yelp. Corresponds to the input value for ResponseFormat (defaults to JSON).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve businesses within a specific range of a specified address.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByAddress extends Temboo_Choreography
{
    /**
     * Retrieve businesses within a specific range of a specified address.
     *
     * @param Temboo_Session $session The session that owns this SearchByAddress Choreo.
     * @return Yelp_SearchByAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yelp/SearchByAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByAddress Choreo.
     *
     * @param Yelp_SearchByAddress_Inputs|array $inputs (optional) Inputs as Yelp_SearchByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yelp_SearchByAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yelp_SearchByAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Address input for this SearchByAddress Choreo.
     *
     * @param string $value (required, string) The street address of the business to search for.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the BusinessType input for this SearchByAddress Choreo.
     *
     * @param string $value (optional, string) A term to narrow the search, such as "shoes" or "restaurants". Leave blank to search for all business types.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setBusinessType($value)
    {
        return $this->set('BusinessType', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchByAddress Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Yelp.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchByAddress Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Yelp.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Range input for this SearchByAddress Choreo.
     *
     * @param int $value (required, integer) Narrow or expand a search by specifying a range in either feet, meters, miles, or kilometers, depending on the value of the Units input. The default is 200 feet, and the maximum is 2,500 square miles.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setRange($value)
    {
        return $this->set('Range', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchByAddress Choreo.
     *
     * @param string $value (optional, string) The format of the response from Yelp, either XML or JSON (the default).
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TokenSecret input for this SearchByAddress Choreo.
     *
     * @param string $value (required, string) The Token Secret provided by Yelp.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setTokenSecret($value)
    {
        return $this->set('TokenSecret', $value);
    }

    /**
     * Set the value for the Token input for this SearchByAddress Choreo.
     *
     * @param string $value (required, string) The Token provided by Yelp.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Units input for this SearchByAddress Choreo.
     *
     * @param string $value (required, string) Specify "feet" (the default), "meters", "miles", or "kilometers". Units apply to the Range input value.
     * @return Yelp_SearchByAddress_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }
}


/**
 * Execution object for the SearchByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByAddress execution.
     * @param Yelp_SearchByAddress $choreo The choreography object for this execution.
     * @param Yelp_SearchByAddress_Inputs|array $inputs (optional) Inputs as Yelp_SearchByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yelp_SearchByAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByAddress execution.
     *
     * @return Yelp_SearchByAddress_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yelp_SearchByAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yelp_SearchByAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yelp_SearchByAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByAddress execution.
     *
     * @return string The response from Yelp. Corresponds to the input value for ResponseFormat (defaults to JSON).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve businesses near a specified latitude and longitude.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCoordinates extends Temboo_Choreography
{
    /**
     * Retrieve businesses near a specified latitude and longitude.
     *
     * @param Temboo_Session $session The session that owns this SearchByCoordinates Choreo.
     * @return Yelp_SearchByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yelp/SearchByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByCoordinates Choreo.
     *
     * @param Yelp_SearchByCoordinates_Inputs|array $inputs (optional) Inputs as Yelp_SearchByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yelp_SearchByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yelp_SearchByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Accuracy input for this SearchByCoordinates Choreo.
     *
     * @param int $value (optional, integer) Narrow or widen the search range in relation to the coordinates, such as "2" for state or "8" for street address.
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the BusinessType input for this SearchByCoordinates Choreo.
     *
     * @param string $value (optional, string) A term to narrow the search, such as "comic books" or "restaurants". Leave blank to search for all business types.
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setBusinessType($value)
    {
        return $this->set('BusinessType', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchByCoordinates Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Yelp.
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchByCoordinates Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Yelp.
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitude to search near, such as "37.788022".
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude to search near, such as "-122.399797".
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchByCoordinates Choreo.
     *
     * @param string $value (optional, string) The format of the response from Yelp, either XML or JSON (the default).
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TokenSecret input for this SearchByCoordinates Choreo.
     *
     * @param string $value (required, string) The Token Secret provided by Yelp.
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setTokenSecret($value)
    {
        return $this->set('TokenSecret', $value);
    }

    /**
     * Set the value for the Token input for this SearchByCoordinates Choreo.
     *
     * @param string $value (required, string) The Token provided by Yelp.
     * @return Yelp_SearchByCoordinates_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the SearchByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByCoordinates execution.
     * @param Yelp_SearchByCoordinates $choreo The choreography object for this execution.
     * @param Yelp_SearchByCoordinates_Inputs|array $inputs (optional) Inputs as Yelp_SearchByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yelp_SearchByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByCoordinates execution.
     *
     * @return Yelp_SearchByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yelp_SearchByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yelp_SearchByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yelp_SearchByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByCoordinates execution.
     *
     * @return string The response from Yelp. Corresponds to the input value for ResponseFormat (defaults to JSON).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a given business id or name.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchForBusiness extends Temboo_Choreography
{
    /**
     * Retrieves information for a given business id or name.
     *
     * @param Temboo_Session $session The session that owns this SearchForBusiness Choreo.
     * @return Yelp_SearchForBusiness New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yelp/SearchForBusiness/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchForBusiness Choreo.
     *
     * @param Yelp_SearchForBusiness_Inputs|array $inputs (optional) Inputs as Yelp_SearchForBusiness_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchForBusiness_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yelp_SearchForBusiness_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchForBusiness Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchForBusiness_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yelp_SearchForBusiness_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchForBusiness Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchForBusiness_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchForBusiness Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchForBusiness_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchForBusiness input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BusinessId input for this SearchForBusiness Choreo.
     *
     * @param string $value (conditional, string) The business id to return results for. This can be found in the URL when you're on the business page on yelp.com (i.e. "yelp-san-francisco"). This is required unless using the BusinessName input.
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function setBusinessId($value)
    {
        return $this->set('BusinessId', $value);
    }

    /**
     * Set the value for the BusinessName input for this SearchForBusiness Choreo.
     *
     * @param string $value (conditional, string) A term to narrow the search, such as business name. This is required unless using the BusinessId input.
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function setBusinessName($value)
    {
        return $this->set('BusinessName', $value);
    }

    /**
     * Set the value for the City input for this SearchForBusiness Choreo.
     *
     * @param string $value (conditional, string) The name of the city in which to search for businesses. This is required unless providing the BusinessId.
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchForBusiness Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Yelp.
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchForBusiness Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Yelp.
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchForBusiness Choreo.
     *
     * @param string $value (optional, multiline) The format of the response from Yelp, either XML or JSON (the default).
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TokenSecret input for this SearchForBusiness Choreo.
     *
     * @param string $value (required, string) The Token Secret provided by Yelp.
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function setTokenSecret($value)
    {
        return $this->set('TokenSecret', $value);
    }

    /**
     * Set the value for the Token input for this SearchForBusiness Choreo.
     *
     * @param string $value (required, string) The Token provided by Yelp.
     * @return Yelp_SearchForBusiness_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the SearchForBusiness Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchForBusiness_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchForBusiness Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchForBusiness execution.
     * @param Yelp_SearchForBusiness $choreo The choreography object for this execution.
     * @param Yelp_SearchForBusiness_Inputs|array $inputs (optional) Inputs as Yelp_SearchForBusiness_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchForBusiness_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yelp_SearchForBusiness $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchForBusiness execution.
     *
     * @return Yelp_SearchForBusiness_Results New results object.
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
     * Wraps results in appropriate results class for this SearchForBusiness execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yelp_SearchForBusiness_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yelp_SearchForBusiness_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchForBusiness Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchForBusiness_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchForBusiness Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yelp_SearchForBusiness_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchForBusiness execution.
     *
     * @return string The response from Yelp. Corresponds to the input value for ResponseFormat (defaults to JSON).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve businesses in a geographic bounding box.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByBoundingBox extends Temboo_Choreography
{
    /**
     * Retrieve businesses in a geographic bounding box.
     *
     * @param Temboo_Session $session The session that owns this SearchByBoundingBox Choreo.
     * @return Yelp_SearchByBoundingBox New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yelp/SearchByBoundingBox/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByBoundingBox Choreo.
     *
     * @param Yelp_SearchByBoundingBox_Inputs|array $inputs (optional) Inputs as Yelp_SearchByBoundingBox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByBoundingBox_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yelp_SearchByBoundingBox_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByBoundingBox Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByBoundingBox_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yelp_SearchByBoundingBox_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByBoundingBox Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByBoundingBox_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByBoundingBox Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByBoundingBox_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByBoundingBox input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BusinessType input for this SearchByBoundingBox Choreo.
     *
     * @param string $value (optional, string) A term to narrow the search, such as "comic books" or "restaurants". Leave blank to search for all business types.
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setBusinessType($value)
    {
        return $this->set('BusinessType', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchByBoundingBox Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Yelp.
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchByBoundingBox Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Yelp.
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the NortheastLatitude input for this SearchByBoundingBox Choreo.
     *
     * @param float $value (required, decimal) The northeastern latitude of the bounding box to search, such as "37.788022".
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setNortheastLatitude($value)
    {
        return $this->set('NortheastLatitude', $value);
    }

    /**
     * Set the value for the NortheastLongitude input for this SearchByBoundingBox Choreo.
     *
     * @param float $value (required, decimal) The northeastern longitude of the bounding box to search, such as "-122.399797".
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setNortheastLongitude($value)
    {
        return $this->set('NortheastLongitude', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchByBoundingBox Choreo.
     *
     * @param string $value (optional, string) The format of the response from Yelp, either XML or JSON (the default).
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SouthwestLatitude input for this SearchByBoundingBox Choreo.
     *
     * @param float $value (required, decimal) The southwestern latitude of the bounding box to search, such as "37.900000".
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setSouthwestLatitude($value)
    {
        return $this->set('SouthwestLatitude', $value);
    }

    /**
     * Set the value for the SouthwestLongitude input for this SearchByBoundingBox Choreo.
     *
     * @param float $value (required, decimal) The southwestern longitude of the bounding box to search, such as "-122.500000".
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setSouthwestLongitude($value)
    {
        return $this->set('SouthwestLongitude', $value);
    }

    /**
     * Set the value for the TokenSecret input for this SearchByBoundingBox Choreo.
     *
     * @param string $value (required, string) The Token Secret provided by Yelp.
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setTokenSecret($value)
    {
        return $this->set('TokenSecret', $value);
    }

    /**
     * Set the value for the Token input for this SearchByBoundingBox Choreo.
     *
     * @param string $value (required, string) The Token provided by Yelp.
     * @return Yelp_SearchByBoundingBox_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the SearchByBoundingBox Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByBoundingBox_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByBoundingBox Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByBoundingBox execution.
     * @param Yelp_SearchByBoundingBox $choreo The choreography object for this execution.
     * @param Yelp_SearchByBoundingBox_Inputs|array $inputs (optional) Inputs as Yelp_SearchByBoundingBox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByBoundingBox_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yelp_SearchByBoundingBox $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByBoundingBox execution.
     *
     * @return Yelp_SearchByBoundingBox_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByBoundingBox execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yelp_SearchByBoundingBox_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yelp_SearchByBoundingBox_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByBoundingBox Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByBoundingBox_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByBoundingBox Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yelp_SearchByBoundingBox_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByBoundingBox execution.
     *
     * @return string The response from Yelp. Corresponds to the input value for ResponseFormat (defaults to JSON).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve businesses by city.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCity extends Temboo_Choreography
{
    /**
     * Retrieve businesses by city.
     *
     * @param Temboo_Session $session The session that owns this SearchByCity Choreo.
     * @return Yelp_SearchByCity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yelp/SearchByCity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByCity Choreo.
     *
     * @param Yelp_SearchByCity_Inputs|array $inputs (optional) Inputs as Yelp_SearchByCity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByCity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yelp_SearchByCity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByCity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByCity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yelp_SearchByCity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByCity Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByCity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByCity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByCity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BusinessType input for this SearchByCity Choreo.
     *
     * @param string $value (optional, string) A term to narrow the search, such as "wine" or "restaurants". Leave blank to search for all business types.
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function setBusinessType($value)
    {
        return $this->set('BusinessType', $value);
    }

    /**
     * Set the value for the City input for this SearchByCity Choreo.
     *
     * @param string $value (required, string) The name of the city in which to search for businesses.
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchByCity Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Yelp.
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchByCity Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Yelp.
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this SearchByCity Choreo.
     *
     * @param int $value (optional, integer) The number of businesses to return. The default is 15.
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchByCity Choreo.
     *
     * @param string $value (optional, multiline) The format of the response from Yelp, either XML or JSON (the default).
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TokenSecret input for this SearchByCity Choreo.
     *
     * @param string $value (required, string) The Token Secret provided by Yelp.
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function setTokenSecret($value)
    {
        return $this->set('TokenSecret', $value);
    }

    /**
     * Set the value for the Token input for this SearchByCity Choreo.
     *
     * @param string $value (required, string) The Token provided by Yelp.
     * @return Yelp_SearchByCity_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the SearchByCity Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByCity Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByCity execution.
     * @param Yelp_SearchByCity $choreo The choreography object for this execution.
     * @param Yelp_SearchByCity_Inputs|array $inputs (optional) Inputs as Yelp_SearchByCity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByCity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yelp_SearchByCity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByCity execution.
     *
     * @return Yelp_SearchByCity_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByCity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yelp_SearchByCity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yelp_SearchByCity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByCity Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByCity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yelp_SearchByCity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByCity execution.
     *
     * @return string The response from Yelp. Corresponds to the input value for ResponseFormat (defaults to JSON).
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve businesses in a specific location by business category.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCategory extends Temboo_Choreography
{
    /**
     * Retrieve businesses in a specific location by business category.
     *
     * @param Temboo_Session $session The session that owns this SearchByCategory Choreo.
     * @return Yelp_SearchByCategory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yelp/SearchByCategory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByCategory Choreo.
     *
     * @param Yelp_SearchByCategory_Inputs|array $inputs (optional) Inputs as Yelp_SearchByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByCategory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yelp_SearchByCategory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByCategory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByCategory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yelp_SearchByCategory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByCategory Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCategory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByCategory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yelp_SearchByCategory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByCategory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Category input for this SearchByCategory Choreo.
     *
     * @param string $value (required, string) Yelp categories to search in, separated by commas but no spaces, such as "hiking,climbing". See the Yelp API docimentation for a list of categories.
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchByCategory Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Yelp.
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchByCategory Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Yelp.
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this SearchByCategory Choreo.
     *
     * @param int $value (optional, integer) The number of businesses to return. The default is 15.
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Location input for this SearchByCategory Choreo.
     *
     * @param string $value (required, string) An address, neighborhood, city, state, or ZIP code in which to search for the category.
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function setLocation($value)
    {
        return $this->set('Location', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchByCategory Choreo.
     *
     * @param string $value (optional, string) The format of the response from Yelp, either XML or JSON (the default).
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TokenSecret input for this SearchByCategory Choreo.
     *
     * @param string $value (required, string) The Token Secret provided by Yelp.
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function setTokenSecret($value)
    {
        return $this->set('TokenSecret', $value);
    }

    /**
     * Set the value for the Token input for this SearchByCategory Choreo.
     *
     * @param string $value (required, string) The Token provided by Yelp.
     * @return Yelp_SearchByCategory_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the SearchByCategory Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCategory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByCategory Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByCategory execution.
     * @param Yelp_SearchByCategory $choreo The choreography object for this execution.
     * @param Yelp_SearchByCategory_Inputs|array $inputs (optional) Inputs as Yelp_SearchByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yelp_SearchByCategory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yelp_SearchByCategory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByCategory execution.
     *
     * @return Yelp_SearchByCategory_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByCategory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yelp_SearchByCategory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yelp_SearchByCategory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByCategory Choreo.
 *
 * @package Temboo
 * @subpackage Yelp
 */
class Yelp_SearchByCategory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByCategory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yelp_SearchByCategory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByCategory execution.
     *
     * @return string The response from Yelp. Corresponds to the input value for ResponseFormat (defaults to JSON).
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
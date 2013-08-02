<?php

/**
 * Temboo PHP SDK BrighterPlanet classes
 *
 * Execute Choreographies from the Temboo BrighterPlanet bundle.
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
 * @subpackage BrighterPlanet
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns information about the carbon emissions from using a wide variety of fuel types.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_FuelPurchase extends Temboo_Choreography
{
    /**
     * Returns information about the carbon emissions from using a wide variety of fuel types.
     *
     * @param Temboo_Session $session The session that owns this FuelPurchase Choreo.
     * @return BrighterPlanet_FuelPurchase New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/FuelPurchase/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FuelPurchase Choreo.
     *
     * @param BrighterPlanet_FuelPurchase_Inputs|array $inputs (optional) Inputs as BrighterPlanet_FuelPurchase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_FuelPurchase_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_FuelPurchase_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FuelPurchase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_FuelPurchase_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_FuelPurchase_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FuelPurchase Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_FuelPurchase_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FuelPurchase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_FuelPurchase_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FuelPurchase input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FuelPurchase Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cost input for this FuelPurchase Choreo.
     *
     * @param float $value (optional, decimal) The cost of the fuel purchase.
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setCost($value)
    {
        return $this->set('Cost', $value);
    }

    /**
     * Set the value for the Date input for this FuelPurchase Choreo.
     *
     * @param string $value (optional, date) The date of the fuel purchase in YYYY-MM-DD format.
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the FuelType input for this FuelPurchase Choreo.
     *
     * @param string $value (optional, string) The fuel type purchases (i.e. Asphalt and Road Oil, Aviation Gasoline, Commercial Coal, Commercial Natural Gas, or Motor Gasoline)
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setFuelType($value)
    {
        return $this->set('FuelType', $value);
    }

    /**
     * Set the value for the PADD input for this FuelPurchase Choreo.
     *
     * @param string $value (optional, string) A code for the Petroleum administration for defense districts (1A, 1B, 1C, 2, or 3).
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setPADD($value)
    {
        return $this->set('PADD', $value);
    }

    /**
     * Set the value for the Price input for this FuelPurchase Choreo.
     *
     * @param string $value (optional, string) The price of the fuel.
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setPrice($value)
    {
        return $this->set('Price', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FuelPurchase Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this FuelPurchase Choreo.
     *
     * @param string $value (optional, string) A postal abbreviation for the state where the fuel was purchased.
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Timeframe input for this FuelPurchase Choreo.
     *
     * @param string $value (optional, string) A date range specified in the following format: 2008-01-01/2008-07-09
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setTimeframe($value)
    {
        return $this->set('Timeframe', $value);
    }

    /**
     * Set the value for the Volume input for this FuelPurchase Choreo.
     *
     * @param float $value (optional, decimal) The amount of fuel purchased.
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setVolume($value)
    {
        return $this->set('Volume', $value);
    }

    /**
     * Set the value for the ZipCode input for this FuelPurchase Choreo.
     *
     * @param string $value (optional, string) The postal code for the area where the fuel was purchased.
     * @return BrighterPlanet_FuelPurchase_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the FuelPurchase Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_FuelPurchase_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FuelPurchase Choreo.
     *
     * @param Temboo_Session $session The session that owns this FuelPurchase execution.
     * @param BrighterPlanet_FuelPurchase $choreo The choreography object for this execution.
     * @param BrighterPlanet_FuelPurchase_Inputs|array $inputs (optional) Inputs as BrighterPlanet_FuelPurchase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_FuelPurchase_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_FuelPurchase $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FuelPurchase execution.
     *
     * @return BrighterPlanet_FuelPurchase_Results New results object.
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
     * Wraps results in appropriate results class for this FuelPurchase execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_FuelPurchase_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_FuelPurchase_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FuelPurchase Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_FuelPurchase_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FuelPurchase Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_FuelPurchase_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FuelPurchase execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns lifecycle food production and veterinary care emissions modeling for domestic animals.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Pet extends Temboo_Choreography
{
    /**
     * Returns lifecycle food production and veterinary care emissions modeling for domestic animals.
     *
     * @param Temboo_Session $session The session that owns this Pet Choreo.
     * @return BrighterPlanet_Pet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/Pet/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Pet Choreo.
     *
     * @param BrighterPlanet_Pet_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Pet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Pet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_Pet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Pet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Pet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_Pet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Pet Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Pet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Pet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Pet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Pet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Pet Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Acquisition input for this Pet Choreo.
     *
     * @param string $value (optional, string) Enter date the pet was acquired.
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function setAcquisition($value)
    {
        return $this->set('Acquisition', $value);
    }

    /**
     * Set the value for the Breed input for this Pet Choreo.
     *
     * @param string $value (optional, string) Enter a cat, dog, or horse breed.
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function setBreed($value)
    {
        return $this->set('Breed', $value);
    }

    /**
     * Set the value for the Gender input for this Pet Choreo.
     *
     * @param string $value (optional, string) Enter cat, dog, or horse gender.
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function setGender($value)
    {
        return $this->set('Gender', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Pet Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Retirement input for this Pet Choreo.
     *
     * @param string $value (optional, string) Enter date you no longer have the pet.
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function setRetirement($value)
    {
        return $this->set('Retirement', $value);
    }

    /**
     * Set the value for the Species input for this Pet Choreo.
     *
     * @param string $value (optional, string) Enter the species type (e.g. bird, cat, dog, ferret, fish).
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function setSpecies($value)
    {
        return $this->set('Species', $value);
    }

    /**
     * Set the value for the Weight input for this Pet Choreo.
     *
     * @param float $value (optional, decimal) Enter pet weight in kilograms.
     * @return BrighterPlanet_Pet_Inputs For method chaining.
     */
    public function setWeight($value)
    {
        return $this->set('Weight', $value);
    }
}


/**
 * Execution object for the Pet Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Pet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Pet Choreo.
     *
     * @param Temboo_Session $session The session that owns this Pet execution.
     * @param BrighterPlanet_Pet $choreo The choreography object for this execution.
     * @param BrighterPlanet_Pet_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Pet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Pet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_Pet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Pet execution.
     *
     * @return BrighterPlanet_Pet_Results New results object.
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
     * Wraps results in appropriate results class for this Pet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_Pet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_Pet_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Pet Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Pet_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Pet Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_Pet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Pet execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns greenhouse gas modeling for passenger vehicles operated over periods of time.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Automobile extends Temboo_Choreography
{
    /**
     * Returns greenhouse gas modeling for passenger vehicles operated over periods of time.
     *
     * @param Temboo_Session $session The session that owns this Automobile Choreo.
     * @return BrighterPlanet_Automobile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/Automobile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Automobile Choreo.
     *
     * @param BrighterPlanet_Automobile_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Automobile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Automobile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_Automobile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Automobile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Automobile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_Automobile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Automobile Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Automobile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Automobile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Automobile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Automobile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Automobile Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Acquisition input for this Automobile Choreo.
     *
     * @param string $value (optional, string) Date automobile was acquired in YYYY-MM-DD format.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setAcquisition($value)
    {
        return $this->set('Acquisition', $value);
    }

    /**
     * Set the value for the AnnualDistance input for this Automobile Choreo.
     *
     * @param float $value (optional, decimal) Annual distance traveled in kilometres.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setAnnualDistance($value)
    {
        return $this->set('AnnualDistance', $value);
    }

    /**
     * Set the value for the AnnualFuelUse input for this Automobile Choreo.
     *
     * @param float $value (optional, decimal) Total fuel used in one year in litres.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setAnnualFuelUse($value)
    {
        return $this->set('AnnualFuelUse', $value);
    }

    /**
     * Set the value for the AutomobileFuel input for this Automobile Choreo.
     *
     * @param string $value (optional, string) Fuel used by automobile (e.g. regular gasoline).
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setAutomobileFuel($value)
    {
        return $this->set('AutomobileFuel', $value);
    }

    /**
     * Set the value for the Country input for this Automobile Choreo.
     *
     * @param string $value (optional, string) ISO code of the country. Defaults to 3166.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the DailyDistance input for this Automobile Choreo.
     *
     * @param float $value (optional, decimal) Daily distance traveled on average in kilometres.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setDailyDistance($value)
    {
        return $this->set('DailyDistance', $value);
    }

    /**
     * Set the value for the DailyDuration input for this Automobile Choreo.
     *
     * @param int $value (optional, integer) Average amount of time used daily in seconds.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setDailyDuration($value)
    {
        return $this->set('DailyDuration', $value);
    }

    /**
     * Set the value for the FuelEfficiency input for this Automobile Choreo.
     *
     * @param float $value (optional, decimal) The automobile's fuel efficiency in kilometres per litre.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setFuelEfficiency($value)
    {
        return $this->set('FuelEfficiency', $value);
    }

    /**
     * Set the value for the FuelUse input for this Automobile Choreo.
     *
     * @param float $value (optional, decimal) Amount of fuel used in litres.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setFuelUse($value)
    {
        return $this->set('FuelUse', $value);
    }

    /**
     * Set the value for the Hybridity input for this Automobile Choreo.
     *
     * @param bool $value (optional, boolean) Enter whether the automobile is a hybrid.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setHybridity($value)
    {
        return $this->set('Hybridity', $value);
    }

    /**
     * Set the value for the Make input for this Automobile Choreo.
     *
     * @param string $value (optional, string) Automobile make (e.g. Honda).
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setMake($value)
    {
        return $this->set('Make', $value);
    }

    /**
     * Set the value for the Model input for this Automobile Choreo.
     *
     * @param string $value (optional, string) Model of automobile (e.g. Civic, Accord).
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setModel($value)
    {
        return $this->set('Model', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Automobile Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Retirement input for this Automobile Choreo.
     *
     * @param string $value (optional, string) Date automobile is retired from use in YYYY-MM-DD format.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setRetirement($value)
    {
        return $this->set('Retirement', $value);
    }

    /**
     * Set the value for the SizeClass input for this Automobile Choreo.
     *
     * @param string $value (optional, string) Automobile size class (e.g. midsize car, large van).
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setSizeClass($value)
    {
        return $this->set('SizeClass', $value);
    }

    /**
     * Set the value for the Speed input for this Automobile Choreo.
     *
     * @param float $value (optional, decimal) Enter average speed when in use in kilometres per hour.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setSpeed($value)
    {
        return $this->set('Speed', $value);
    }

    /**
     * Set the value for the Urbanity input for this Automobile Choreo.
     *
     * @param bool $value (optional, boolean) Enter whether the trip is in an urban area.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setUrbanity($value)
    {
        return $this->set('Urbanity', $value);
    }

    /**
     * Set the value for the WeeklyDistance input for this Automobile Choreo.
     *
     * @param int $value (optional, integer) Enter average weekly distance automobile travels in kilometres.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setWeeklyDistance($value)
    {
        return $this->set('WeeklyDistance', $value);
    }

    /**
     * Set the value for the Year input for this Automobile Choreo.
     *
     * @param int $value (optional, integer) Year that automobile was manufactured.
     * @return BrighterPlanet_Automobile_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the Automobile Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Automobile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Automobile Choreo.
     *
     * @param Temboo_Session $session The session that owns this Automobile execution.
     * @param BrighterPlanet_Automobile $choreo The choreography object for this execution.
     * @param BrighterPlanet_Automobile_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Automobile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Automobile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_Automobile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Automobile execution.
     *
     * @return BrighterPlanet_Automobile_Results New results object.
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
     * Wraps results in appropriate results class for this Automobile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_Automobile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_Automobile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Automobile Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Automobile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Automobile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_Automobile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Automobile execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the carbon footprint of using electricity from the US public grid.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_ElectricityUse extends Temboo_Choreography
{
    /**
     * Returns information about the carbon footprint of using electricity from the US public grid.
     *
     * @param Temboo_Session $session The session that owns this ElectricityUse Choreo.
     * @return BrighterPlanet_ElectricityUse New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/ElectricityUse/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ElectricityUse Choreo.
     *
     * @param BrighterPlanet_ElectricityUse_Inputs|array $inputs (optional) Inputs as BrighterPlanet_ElectricityUse_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_ElectricityUse_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_ElectricityUse_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ElectricityUse Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_ElectricityUse_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_ElectricityUse_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ElectricityUse Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_ElectricityUse_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ElectricityUse Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_ElectricityUse_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ElectricityUse input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ElectricityUse Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Country input for this ElectricityUse Choreo.
     *
     * @param string $value (optional, string) An iso_3166 country code.
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Date input for this ElectricityUse Choreo.
     *
     * @param string $value (optional, date) The date of the electricity use in YYYY-MM-DD format.
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Energy input for this ElectricityUse Choreo.
     *
     * @param float $value (optional, decimal) The amount of engery in kilowatt hours.
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function setEnergy($value)
    {
        return $this->set('Energy', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ElectricityUse Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this ElectricityUse Choreo.
     *
     * @param string $value (optional, string) A postal abbreviation for the state to return electricity information for.
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Timeframe input for this ElectricityUse Choreo.
     *
     * @param string $value (optional, string) A date range specified in the following format: 2008-01-01/2008-07-09
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function setTimeframe($value)
    {
        return $this->set('Timeframe', $value);
    }

    /**
     * Set the value for the ZipCode input for this ElectricityUse Choreo.
     *
     * @param string $value (optional, string) The postal code for the area to retrieve electricity information for.
     * @return BrighterPlanet_ElectricityUse_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the ElectricityUse Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_ElectricityUse_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ElectricityUse Choreo.
     *
     * @param Temboo_Session $session The session that owns this ElectricityUse execution.
     * @param BrighterPlanet_ElectricityUse $choreo The choreography object for this execution.
     * @param BrighterPlanet_ElectricityUse_Inputs|array $inputs (optional) Inputs as BrighterPlanet_ElectricityUse_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_ElectricityUse_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_ElectricityUse $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ElectricityUse execution.
     *
     * @return BrighterPlanet_ElectricityUse_Results New results object.
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
     * Wraps results in appropriate results class for this ElectricityUse execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_ElectricityUse_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_ElectricityUse_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ElectricityUse Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_ElectricityUse_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ElectricityUse Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_ElectricityUse_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ElectricityUse execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the carbon footprint of driving an automobile.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_AutomobileTrip extends Temboo_Choreography
{
    /**
     * Returns information about the carbon footprint of driving an automobile.
     *
     * @param Temboo_Session $session The session that owns this AutomobileTrip Choreo.
     * @return BrighterPlanet_AutomobileTrip New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/AutomobileTrip/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AutomobileTrip Choreo.
     *
     * @param BrighterPlanet_AutomobileTrip_Inputs|array $inputs (optional) Inputs as BrighterPlanet_AutomobileTrip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_AutomobileTrip_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_AutomobileTrip_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AutomobileTrip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_AutomobileTrip_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_AutomobileTrip_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AutomobileTrip Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_AutomobileTrip_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AutomobileTrip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_AutomobileTrip_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AutomobileTrip input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AutomobileTrip Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AutomobileFuel input for this AutomobileTrip Choreo.
     *
     * @param string $value (optional, string) Fuel used by automobile (e.g. regular gasoline).
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setAutomobileFuel($value)
    {
        return $this->set('AutomobileFuel', $value);
    }

    /**
     * Set the value for the Country input for this AutomobileTrip Choreo.
     *
     * @param string $value (optional, string) ISO code of the country. Defaults to 3166.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Date input for this AutomobileTrip Choreo.
     *
     * @param string $value (optional, string) Automobile trip date in YYYY-MM-DD format.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Destination input for this AutomobileTrip Choreo.
     *
     * @param string $value (optional, string) Enter the name of a destination.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setDestination($value)
    {
        return $this->set('Destination', $value);
    }

    /**
     * Set the value for the Distance input for this AutomobileTrip Choreo.
     *
     * @param float $value (optional, decimal) Distance traveled in kilometres.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the Duration input for this AutomobileTrip Choreo.
     *
     * @param float $value (optional, decimal) Duration of trip in total seconds.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the FuelEfficiency input for this AutomobileTrip Choreo.
     *
     * @param float $value (optional, decimal) The automobile's fuel efficiency in kilometres per litre.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setFuelEfficiency($value)
    {
        return $this->set('FuelEfficiency', $value);
    }

    /**
     * Set the value for the FuelUse input for this AutomobileTrip Choreo.
     *
     * @param float $value (optional, decimal) Amount of fuel used in litres.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setFuelUse($value)
    {
        return $this->set('FuelUse', $value);
    }

    /**
     * Set the value for the Hybridity input for this AutomobileTrip Choreo.
     *
     * @param bool $value (optional, boolean) Enter whether the automobile is a hybrid.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setHybridity($value)
    {
        return $this->set('Hybridity', $value);
    }

    /**
     * Set the value for the Make input for this AutomobileTrip Choreo.
     *
     * @param string $value (optional, string) Automobile make (e.g. Honda).
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setMake($value)
    {
        return $this->set('Make', $value);
    }

    /**
     * Set the value for the Model input for this AutomobileTrip Choreo.
     *
     * @param string $value (optional, string) Model of automobile (e.g. Civic, Accord).
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setModel($value)
    {
        return $this->set('Model', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AutomobileTrip Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SizeClass input for this AutomobileTrip Choreo.
     *
     * @param string $value (optional, string) Automobile size class (e.g. midsize car, large van).
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setSizeClass($value)
    {
        return $this->set('SizeClass', $value);
    }

    /**
     * Set the value for the Speed input for this AutomobileTrip Choreo.
     *
     * @param float $value (optional, decimal) Enter the speed during the trip in kilometres per hour.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setSpeed($value)
    {
        return $this->set('Speed', $value);
    }

    /**
     * Set the value for the Urbanity input for this AutomobileTrip Choreo.
     *
     * @param bool $value (optional, boolean) Enter whether the trip is in an urban area.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setUrbanity($value)
    {
        return $this->set('Urbanity', $value);
    }

    /**
     * Set the value for the Year input for this AutomobileTrip Choreo.
     *
     * @param int $value (optional, integer) Year that automobile was manufactured.
     * @return BrighterPlanet_AutomobileTrip_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the AutomobileTrip Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_AutomobileTrip_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AutomobileTrip Choreo.
     *
     * @param Temboo_Session $session The session that owns this AutomobileTrip execution.
     * @param BrighterPlanet_AutomobileTrip $choreo The choreography object for this execution.
     * @param BrighterPlanet_AutomobileTrip_Inputs|array $inputs (optional) Inputs as BrighterPlanet_AutomobileTrip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_AutomobileTrip_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_AutomobileTrip $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AutomobileTrip execution.
     *
     * @return BrighterPlanet_AutomobileTrip_Results New results object.
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
     * Wraps results in appropriate results class for this AutomobileTrip execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_AutomobileTrip_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_AutomobileTrip_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AutomobileTrip Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_AutomobileTrip_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AutomobileTrip Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_AutomobileTrip_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AutomobileTrip execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a wide variety of reference data sets provided by Brighter Planet.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_GetReferenceData extends Temboo_Choreography
{
    /**
     * Retrieves a wide variety of reference data sets provided by Brighter Planet.
     *
     * @param Temboo_Session $session The session that owns this GetReferenceData Choreo.
     * @return BrighterPlanet_GetReferenceData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/GetReferenceData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetReferenceData Choreo.
     *
     * @param BrighterPlanet_GetReferenceData_Inputs|array $inputs (optional) Inputs as BrighterPlanet_GetReferenceData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_GetReferenceData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_GetReferenceData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReferenceData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_GetReferenceData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_GetReferenceData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReferenceData Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_GetReferenceData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetReferenceData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_GetReferenceData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReferenceData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_GetReferenceData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_GetReferenceData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Resource input for this GetReferenceData Choreo.
     *
     * @param string $value (required, string) The name of the reference data resource you want to retrieve (i.e. airports, airlines, etc). Resource names are formatted using plural, lowercase, and underscores (i.e. automobile_makes).
     * @return BrighterPlanet_GetReferenceData_Inputs For method chaining.
     */
    public function setResource($value)
    {
        return $this->set('Resource', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetReferenceData Choreo.
     *
     * @param string $value (optional, string) The desired response format. Accepted formats are: csv, xml, and json (the default).
     * @return BrighterPlanet_GetReferenceData_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetReferenceData Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_GetReferenceData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReferenceData Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetReferenceData execution.
     * @param BrighterPlanet_GetReferenceData $choreo The choreography object for this execution.
     * @param BrighterPlanet_GetReferenceData_Inputs|array $inputs (optional) Inputs as BrighterPlanet_GetReferenceData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_GetReferenceData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_GetReferenceData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReferenceData execution.
     *
     * @return BrighterPlanet_GetReferenceData_Results New results object.
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
     * Wraps results in appropriate results class for this GetReferenceData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_GetReferenceData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_GetReferenceData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetReferenceData Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_GetReferenceData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetReferenceData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_GetReferenceData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetReferenceData execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the carbon footprint of a passenger's train travel.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_RailTrip extends Temboo_Choreography
{
    /**
     * Returns information about the carbon footprint of a passenger's train travel.
     *
     * @param Temboo_Session $session The session that owns this RailTrip Choreo.
     * @return BrighterPlanet_RailTrip New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/RailTrip/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RailTrip Choreo.
     *
     * @param BrighterPlanet_RailTrip_Inputs|array $inputs (optional) Inputs as BrighterPlanet_RailTrip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_RailTrip_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_RailTrip_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RailTrip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_RailTrip_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_RailTrip_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RailTrip Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_RailTrip_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RailTrip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_RailTrip_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RailTrip input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RailTrip Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Compliance input for this RailTrip Choreo.
     *
     * @param string $value (optional, string) Comply with one or more protocols:  Greenhouse Gas Protocol Scope 3 (ghg_protocol_scope_3), ISO 14064-1 (iso), and The Climate Registry (tcr).
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setCompliance($value)
    {
        return $this->set('Compliance', $value);
    }

    /**
     * Set the value for the Country input for this RailTrip Choreo.
     *
     * @param string $value (optional, string) A country code associated with the rail trip (in ISO 3166 format).
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Date input for this RailTrip Choreo.
     *
     * @param string $value (optional, date) The date of the rail trip in YYYY-MM-DD format.
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Destination input for this RailTrip Choreo.
     *
     * @param string $value (optional, string) The destination of the rail trip.
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setDestination($value)
    {
        return $this->set('Destination', $value);
    }

    /**
     * Set the value for the Distance input for this RailTrip Choreo.
     *
     * @param float $value (optional, decimal) The distance of the rail trip in kilometres.
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the Duration input for this RailTrip Choreo.
     *
     * @param float $value (optional, decimal) The duration of the rail trip in seconds.
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the Origin input for this RailTrip Choreo.
     *
     * @param string $value (optional, string) The origin of the rail trip.
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setOrigin($value)
    {
        return $this->set('Origin', $value);
    }

    /**
     * Set the value for the RailClass input for this RailTrip Choreo.
     *
     * @param string $value (optional, string) The rail class associated with the rail trip (i.e. commuter, heavy, highspeed, intercity, light).
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setRailClass($value)
    {
        return $this->set('RailClass', $value);
    }

    /**
     * Set the value for the RailCompany input for this RailTrip Choreo.
     *
     * @param string $value (optional, string) The rail company associated with the rail trip (i.e. AMTRAK).
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setRailCompany($value)
    {
        return $this->set('RailCompany', $value);
    }

    /**
     * Set the value for the RailTraction input for this RailTrip Choreo.
     *
     * @param string $value (optional, string) The rail traction associated with the rail trip (i.e. diesel, electric).
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setRailTraction($value)
    {
        return $this->set('RailTraction', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RailTrip Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Timeframe input for this RailTrip Choreo.
     *
     * @param string $value (optional, string) A date range specified in the following format: 2008-01-01/2008-07-09
     * @return BrighterPlanet_RailTrip_Inputs For method chaining.
     */
    public function setTimeframe($value)
    {
        return $this->set('Timeframe', $value);
    }
}


/**
 * Execution object for the RailTrip Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_RailTrip_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RailTrip Choreo.
     *
     * @param Temboo_Session $session The session that owns this RailTrip execution.
     * @param BrighterPlanet_RailTrip $choreo The choreography object for this execution.
     * @param BrighterPlanet_RailTrip_Inputs|array $inputs (optional) Inputs as BrighterPlanet_RailTrip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_RailTrip_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_RailTrip $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RailTrip execution.
     *
     * @return BrighterPlanet_RailTrip_Results New results object.
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
     * Wraps results in appropriate results class for this RailTrip execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_RailTrip_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_RailTrip_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RailTrip Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_RailTrip_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RailTrip Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_RailTrip_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RailTrip execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns facility operations emissions analysis for corporate and cultural events.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Meeting extends Temboo_Choreography
{
    /**
     * Returns facility operations emissions analysis for corporate and cultural events.
     *
     * @param Temboo_Session $session The session that owns this Meeting Choreo.
     * @return BrighterPlanet_Meeting New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/Meeting/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Meeting Choreo.
     *
     * @param BrighterPlanet_Meeting_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Meeting_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Meeting_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_Meeting_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Meeting Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Meeting_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_Meeting_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Meeting Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Meeting_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Meeting Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Meeting_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Meeting input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_Meeting_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_Meeting_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Meeting Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_Meeting_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Area input for this Meeting Choreo.
     *
     * @param int $value (optional, integer) Area of event venue in square meters.
     * @return BrighterPlanet_Meeting_Inputs For method chaining.
     */
    public function setArea($value)
    {
        return $this->set('Area', $value);
    }

    /**
     * Set the value for the Date input for this Meeting Choreo.
     *
     * @param string $value (optional, string) Date of event in YYYY-MM-DD format.
     * @return BrighterPlanet_Meeting_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Duration input for this Meeting Choreo.
     *
     * @param int $value (optional, integer) Event duration in total seconds.
     * @return BrighterPlanet_Meeting_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Meeting Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_Meeting_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this Meeting Choreo.
     *
     * @param string $value (optional, string) Two-letter postal abbreviation for the state in which the meeting takes place (e.g. NY).
     * @return BrighterPlanet_Meeting_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Zip input for this Meeting Choreo.
     *
     * @param int $value (optional, integer) Five digit zip code in which the meeting takes place.
     * @return BrighterPlanet_Meeting_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the Meeting Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Meeting_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Meeting Choreo.
     *
     * @param Temboo_Session $session The session that owns this Meeting execution.
     * @param BrighterPlanet_Meeting $choreo The choreography object for this execution.
     * @param BrighterPlanet_Meeting_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Meeting_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Meeting_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_Meeting $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Meeting execution.
     *
     * @return BrighterPlanet_Meeting_Results New results object.
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
     * Wraps results in appropriate results class for this Meeting execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_Meeting_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_Meeting_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Meeting Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Meeting_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Meeting Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_Meeting_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Meeting execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns lifecycle emissions for any good or service. 
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Purchase extends Temboo_Choreography
{
    /**
     * Returns lifecycle emissions for any good or service. 
     *
     * @param Temboo_Session $session The session that owns this Purchase Choreo.
     * @return BrighterPlanet_Purchase New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/Purchase/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Purchase Choreo.
     *
     * @param BrighterPlanet_Purchase_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Purchase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Purchase_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_Purchase_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Purchase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Purchase_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_Purchase_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Purchase Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Purchase_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Purchase Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Purchase_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Purchase input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Purchase Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cost input for this Purchase Choreo.
     *
     * @param float $value (optional, decimal) The cost associated with the purchase.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setCost($value)
    {
        return $this->set('Cost', $value);
    }

    /**
     * Set the value for the Date input for this Purchase Choreo.
     *
     * @param string $value (optional, date) The date of the purchase in YYYY-MM-DD format.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Industry input for this Purchase Choreo.
     *
     * @param int $value (optional, integer) An industry code (NAICS CODE) corresponding to the industry to return results for. For example, the id for Audio and Video Equipment Manufacturing is 334310.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setIndustry($value)
    {
        return $this->set('Industry', $value);
    }

    /**
     * Set the value for the MerchantCategory input for this Purchase Choreo.
     *
     * @param string $value (optional, string) The id for a merchant category.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setMerchantCategory($value)
    {
        return $this->set('MerchantCategory', $value);
    }

    /**
     * Set the value for the Merchant input for this Purchase Choreo.
     *
     * @param int $value (optional, integer) An id corresponding to a merchant that you want to return data for.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setMerchant($value)
    {
        return $this->set('Merchant', $value);
    }

    /**
     * Set the value for the PurchaseAmount input for this Purchase Choreo.
     *
     * @param float $value (optional, decimal) The purchase amount.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setPurchaseAmount($value)
    {
        return $this->set('PurchaseAmount', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Purchase Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SicIndustry input for this Purchase Choreo.
     *
     * @param int $value (optional, integer) A Sic Industry id (i.e. 0111 is the code for Wheat, 0112 is the code for Rice, etc).
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setSicIndustry($value)
    {
        return $this->set('SicIndustry', $value);
    }

    /**
     * Set the value for the Tax input for this Purchase Choreo.
     *
     * @param float $value (optional, decimal) The tax amount for the purchase.
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setTax($value)
    {
        return $this->set('Tax', $value);
    }

    /**
     * Set the value for the Timeframe input for this Purchase Choreo.
     *
     * @param string $value (optional, string) A date range specified in the following format: 2008-01-01/2008-07-09
     * @return BrighterPlanet_Purchase_Inputs For method chaining.
     */
    public function setTimeframe($value)
    {
        return $this->set('Timeframe', $value);
    }
}


/**
 * Execution object for the Purchase Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Purchase_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Purchase Choreo.
     *
     * @param Temboo_Session $session The session that owns this Purchase execution.
     * @param BrighterPlanet_Purchase $choreo The choreography object for this execution.
     * @param BrighterPlanet_Purchase_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Purchase_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Purchase_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_Purchase $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Purchase execution.
     *
     * @return BrighterPlanet_Purchase_Results New results object.
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
     * Wraps results in appropriate results class for this Purchase execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_Purchase_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_Purchase_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Purchase Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Purchase_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Purchase Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_Purchase_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Purchase execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the annual carbon footprint of a home.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Residence extends Temboo_Choreography
{
    /**
     * Returns information about the annual carbon footprint of a home.
     *
     * @param Temboo_Session $session The session that owns this Residence Choreo.
     * @return BrighterPlanet_Residence New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/Residence/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Residence Choreo.
     *
     * @param BrighterPlanet_Residence_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Residence_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Residence_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_Residence_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Residence Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Residence_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_Residence_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Residence Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Residence_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Residence Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Residence_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Residence input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Residence Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Acquisition input for this Residence Choreo.
     *
     * @param string $value (optional, date) Date of acquisition in YYYY-MM-DD format.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setAcquisition($value)
    {
        return $this->set('Acquisition', $value);
    }

    /**
     * Set the value for the AirConditionerUse input for this Residence Choreo.
     *
     * @param string $value (optional, string) The frequency of air conditioner use. Accepted values are: "Not used at all", "Turned on just about all summer", "Turned on only a few days or nights when really needed", or "Turned on quite a bit"
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setAirConditionerUse($value)
    {
        return $this->set('AirConditionerUse', $value);
    }

    /**
     * Set the value for the AnnualCoalVolumeEstimate input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) An estimate for amount of coal used annually.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setAnnualCoalVolumeEstimate($value)
    {
        return $this->set('AnnualCoalVolumeEstimate', $value);
    }

    /**
     * Set the value for the AnnualFuelOilCost input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) Annual cost of oil fuel in dollars.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setAnnualFuelOilCost($value)
    {
        return $this->set('AnnualFuelOilCost', $value);
    }

    /**
     * Set the value for the AnnualFuelOilVolumeEstimate input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) An estimate for the volume oil used annually.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setAnnualFuelOilVolumeEstimate($value)
    {
        return $this->set('AnnualFuelOilVolumeEstimate', $value);
    }

    /**
     * Set the value for the AnnualPropaneCost input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) The annual cost of propane annually in dollars.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setAnnualPropaneCost($value)
    {
        return $this->set('AnnualPropaneCost', $value);
    }

    /**
     * Set the value for the AnnualPropaneVolumeEstimate input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) An estimate of the amount of propane used annually in litres.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setAnnualPropaneVolumeEstimate($value)
    {
        return $this->set('AnnualPropaneVolumeEstimate', $value);
    }

    /**
     * Set the value for the AnnualWoodVolumeEstimate input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) An estimate of the amount of wood used for heating annually (in Joulses).
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setAnnualWoodVolumeEstimate($value)
    {
        return $this->set('AnnualWoodVolumeEstimate', $value);
    }

    /**
     * Set the value for the Bathrooms input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) The amount of bathrooms in the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setBathrooms($value)
    {
        return $this->set('Bathrooms', $value);
    }

    /**
     * Set the value for the Bedrooms input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) The number of bedrooms in the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setBedrooms($value)
    {
        return $this->set('Bedrooms', $value);
    }

    /**
     * Set the value for the ClothesMachineUse input for this Residence Choreo.
     *
     * @param string $value (optional, string) The number laundry loads per week. Valid values are: "1 load or less each week", "10 to 15 loads", "2 to 4 loads", "5 to 9 loads", "More than 15 loads"
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setClothesMachineUse($value)
    {
        return $this->set('ClothesMachineUse', $value);
    }

    /**
     * Set the value for the ConstructionYear input for this Residence Choreo.
     *
     * @param int $value (optional, integer) The year the residence was constructed.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setConstructionYear($value)
    {
        return $this->set('ConstructionYear', $value);
    }

    /**
     * Set the value for the DishwasherUse input for this Residence Choreo.
     *
     * @param string $value (optional, string) Number of times the dishwasher is used per week. Valid values: "2 or 3 times a week", "4 to 6 times a week", "At least once each day", "Less than once each week", "Once each week".
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setDishwasherUse($value)
    {
        return $this->set('DishwasherUse', $value);
    }

    /**
     * Set the value for the Floors input for this Residence Choreo.
     *
     * @param int $value (optional, integer) The number of floors.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setFloors($value)
    {
        return $this->set('Floors', $value);
    }

    /**
     * Set the value for the FloorspaceEstimate input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) An estimate of the amount of floorspace that the residence has.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setFloorspaceEstimate($value)
    {
        return $this->set('FloorspaceEstimate', $value);
    }

    /**
     * Set the value for the FreezerCount input for this Residence Choreo.
     *
     * @param int $value (optional, integer) The number of freezers in the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setFreezerCount($value)
    {
        return $this->set('FreezerCount', $value);
    }

    /**
     * Set the value for the FullBathrooms input for this Residence Choreo.
     *
     * @param int $value (optional, integer) The number of full bathrooms in the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setFullBathrooms($value)
    {
        return $this->set('FullBathrooms', $value);
    }

    /**
     * Set the value for the GreenElectricty input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) The amount green electricity that the residence uses.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setGreenElectricty($value)
    {
        return $this->set('GreenElectricty', $value);
    }

    /**
     * Set the value for the HalfBathrooms input for this Residence Choreo.
     *
     * @param int $value (optional, integer) The number of half bathrooms in the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setHalfBathrooms($value)
    {
        return $this->set('HalfBathrooms', $value);
    }

    /**
     * Set the value for the LightingEfficiency input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) A numeric value representing the lighting efficiency of the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setLightingEfficiency($value)
    {
        return $this->set('LightingEfficiency', $value);
    }

    /**
     * Set the value for the MonthlyElectricityCost input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) The montly cost of electricity for the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setMonthlyElectricityCost($value)
    {
        return $this->set('MonthlyElectricityCost', $value);
    }

    /**
     * Set the value for the MonthlyElectricityUseEstimate input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) An estimate for the amount of electricity used monthly in kilowatt hours.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setMonthlyElectricityUseEstimate($value)
    {
        return $this->set('MonthlyElectricityUseEstimate', $value);
    }

    /**
     * Set the value for the MonthlyNaturalGasCost input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) The monthly cost of natural gas for the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setMonthlyNaturalGasCost($value)
    {
        return $this->set('MonthlyNaturalGasCost', $value);
    }

    /**
     * Set the value for the MonthlyNaturalGasVolumeEstimate input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) An estimate of the amount of natural gas used monthly.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setMonthlyNaturalGasVolumeEstimate($value)
    {
        return $this->set('MonthlyNaturalGasVolumeEstimate', $value);
    }

    /**
     * Set the value for the Occupation input for this Residence Choreo.
     *
     * @param float $value (optional, decimal) Refers to the percentage of time a residence is occupied during a year. Defaults to 0.937.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setOccupation($value)
    {
        return $this->set('Occupation', $value);
    }

    /**
     * Set the value for the Ownership input for this Residence Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the residence is owned or rented. Set to "true" if you own the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setOwnership($value)
    {
        return $this->set('Ownership', $value);
    }

    /**
     * Set the value for the RefrigeratorCount input for this Residence Choreo.
     *
     * @param int $value (optional, integer) The number of refrigerators in the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setRefrigeratorCount($value)
    {
        return $this->set('RefrigeratorCount', $value);
    }

    /**
     * Set the value for the ResidentialClass input for this Residence Choreo.
     *
     * @param string $value (optional, string) Valid values: "Apartment in a building with 5 or more units", "Apartment in a house or a building with 2-4 units", "Mobile home", "Single-family attached house", or "Single-family detached house".
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setResidentialClass($value)
    {
        return $this->set('ResidentialClass', $value);
    }

    /**
     * Set the value for the Residents input for this Residence Choreo.
     *
     * @param int $value (optional, integer) The number of people living in the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setResidents($value)
    {
        return $this->set('Residents', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Residence Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Retirement input for this Residence Choreo.
     *
     * @param string $value (optional, date) A date of retirement.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setRetirement($value)
    {
        return $this->set('Retirement', $value);
    }

    /**
     * Set the value for the Timeframe input for this Residence Choreo.
     *
     * @param string $value (optional, string) A date range specified in the following format: 2008-01-01/2008-07-09
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setTimeframe($value)
    {
        return $this->set('Timeframe', $value);
    }

    /**
     * Set the value for the Urbanity input for this Residence Choreo.
     *
     * @param string $value (optional, string) Can be set to: City, Rural, Suburbs, or Town.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setUrbanity($value)
    {
        return $this->set('Urbanity', $value);
    }

    /**
     * Set the value for the ZipCode input for this Residence Choreo.
     *
     * @param string $value (optional, string) The postal code of the residence.
     * @return BrighterPlanet_Residence_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the Residence Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Residence_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Residence Choreo.
     *
     * @param Temboo_Session $session The session that owns this Residence execution.
     * @param BrighterPlanet_Residence $choreo The choreography object for this execution.
     * @param BrighterPlanet_Residence_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Residence_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Residence_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_Residence $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Residence execution.
     *
     * @return BrighterPlanet_Residence_Results New results object.
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
     * Wraps results in appropriate results class for this Residence execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_Residence_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_Residence_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Residence Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Residence_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Residence Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_Residence_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Residence execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the carbon footprint of an individual's yearly food consumption.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Diet extends Temboo_Choreography
{
    /**
     * Returns information about the carbon footprint of an individual's yearly food consumption.
     *
     * @param Temboo_Session $session The session that owns this Diet Choreo.
     * @return BrighterPlanet_Diet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/Diet/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Diet Choreo.
     *
     * @param BrighterPlanet_Diet_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Diet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Diet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_Diet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Diet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Diet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_Diet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Diet Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Diet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Diet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Diet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Diet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_Diet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_Diet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Diet Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_Diet_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DietClass input for this Diet Choreo.
     *
     * @param string $value (optional, string) Enter the type of diet. Acceptable inputs: standard, vegetarian, vegan.
     * @return BrighterPlanet_Diet_Inputs For method chaining.
     */
    public function setDietClass($value)
    {
        return $this->set('DietClass', $value);
    }

    /**
     * Set the value for the EndDate input for this Diet Choreo.
     *
     * @param string $value (optional, string) End date od diet in YYYY-MM-DD format. Defaults to 2013-01-01 when none specified.
     * @return BrighterPlanet_Diet_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Diet Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_Diet_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Size input for this Diet Choreo.
     *
     * @param int $value (required, integer) Enter the number of calories consumed per day. See documentation below for a set of national averages for reference.
     * @return BrighterPlanet_Diet_Inputs For method chaining.
     */
    public function setSize($value)
    {
        return $this->set('Size', $value);
    }

    /**
     * Set the value for the StartDate input for this Diet Choreo.
     *
     * @param string $value (optional, string) Start date of diet in YYYY-MM-DD format. Defaults to 2012-01-01 when none specified.
     * @return BrighterPlanet_Diet_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }
}


/**
 * Execution object for the Diet Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Diet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Diet Choreo.
     *
     * @param Temboo_Session $session The session that owns this Diet execution.
     * @param BrighterPlanet_Diet $choreo The choreography object for this execution.
     * @param BrighterPlanet_Diet_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Diet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Diet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_Diet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Diet execution.
     *
     * @return BrighterPlanet_Diet_Results New results object.
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
     * Wraps results in appropriate results class for this Diet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_Diet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_Diet_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Diet Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Diet_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Diet Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_Diet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Diet execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the carbon footprint of passenger bus travel.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_BusTrip extends Temboo_Choreography
{
    /**
     * Returns information about the carbon footprint of passenger bus travel.
     *
     * @param Temboo_Session $session The session that owns this BusTrip Choreo.
     * @return BrighterPlanet_BusTrip New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/BusTrip/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this BusTrip Choreo.
     *
     * @param BrighterPlanet_BusTrip_Inputs|array $inputs (optional) Inputs as BrighterPlanet_BusTrip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_BusTrip_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_BusTrip_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BusTrip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_BusTrip_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_BusTrip_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BusTrip Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_BusTrip_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the BusTrip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_BusTrip_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BusTrip input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this BusTrip Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BusClass input for this BusTrip Choreo.
     *
     * @param string $value (optional, string) The bus class for the trip (i.e. city transit, regional coach).
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function setBusClass($value)
    {
        return $this->set('BusClass', $value);
    }

    /**
     * Set the value for the Compliance input for this BusTrip Choreo.
     *
     * @param string $value (optional, string) Comply with one or more protocols: Greenhouse Gas Protocol Scope 3 (ghg_protocol_scope_3), and ISO 14064-1 (iso), and The Climate Registry (tcr).
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function setCompliance($value)
    {
        return $this->set('Compliance', $value);
    }

    /**
     * Set the value for the Date input for this BusTrip Choreo.
     *
     * @param string $value (optional, date) The date of the bus trip in YYYY-MM-DD format.
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Distance input for this BusTrip Choreo.
     *
     * @param float $value (optional, decimal) The distance of the bus trip in kilometres.
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the Duration input for this BusTrip Choreo.
     *
     * @param float $value (optional, decimal) The duration of the bus trip in seconds.
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this BusTrip Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Timeframe input for this BusTrip Choreo.
     *
     * @param string $value (optional, string) A date range specified in the following format: 2008-01-01/2008-07-09
     * @return BrighterPlanet_BusTrip_Inputs For method chaining.
     */
    public function setTimeframe($value)
    {
        return $this->set('Timeframe', $value);
    }
}


/**
 * Execution object for the BusTrip Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_BusTrip_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BusTrip Choreo.
     *
     * @param Temboo_Session $session The session that owns this BusTrip execution.
     * @param BrighterPlanet_BusTrip $choreo The choreography object for this execution.
     * @param BrighterPlanet_BusTrip_Inputs|array $inputs (optional) Inputs as BrighterPlanet_BusTrip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_BusTrip_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_BusTrip $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BusTrip execution.
     *
     * @return BrighterPlanet_BusTrip_Results New results object.
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
     * Wraps results in appropriate results class for this BusTrip execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_BusTrip_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_BusTrip_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the BusTrip Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_BusTrip_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the BusTrip Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_BusTrip_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this BusTrip execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the carbon footprint of a passenger's air travel.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Flight extends Temboo_Choreography
{
    /**
     * Returns information about the carbon footprint of a passenger's air travel.
     *
     * @param Temboo_Session $session The session that owns this Flight Choreo.
     * @return BrighterPlanet_Flight New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/Flight/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Flight Choreo.
     *
     * @param BrighterPlanet_Flight_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Flight_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Flight_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_Flight_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Flight Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Flight_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_Flight_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Flight Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Flight_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Flight Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Flight_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Flight input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Flight Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Aircraft input for this Flight Choreo.
     *
     * @param string $value (optional, string) The ICAO code associated with the aircraft.
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setAircraft($value)
    {
        return $this->set('Aircraft', $value);
    }

    /**
     * Set the value for the Airline input for this Flight Choreo.
     *
     * @param string $value (optional, string) The name of the airline used (i.e. Continental, Delta, etc).
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setAirline($value)
    {
        return $this->set('Airline', $value);
    }

    /**
     * Set the value for the Compliance input for this Flight Choreo.
     *
     * @param string $value (optional, string) Comply with one or more protocols:  Greenhouse Gas Protocol Scope 3 (ghg_protocol_scope_3), ISO 14064-1 (iso), and The Climate Registry (tcr).
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setCompliance($value)
    {
        return $this->set('Compliance', $value);
    }

    /**
     * Set the value for the Date input for this Flight Choreo.
     *
     * @param string $value (optional, date) The date of the trip in YYYY-MM-DD format.
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the DestinationAirport input for this Flight Choreo.
     *
     * @param string $value (optional, string) The airport code for the destination (i.e. LGA, JFK, etc.).
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setDestinationAirport($value)
    {
        return $this->set('DestinationAirport', $value);
    }

    /**
     * Set the value for the DistanceClass input for this Flight Choreo.
     *
     * @param string $value (optional, string) The distance class associated it the air travel (i.e. long haul, short haul).
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setDistanceClass($value)
    {
        return $this->set('DistanceClass', $value);
    }

    /**
     * Set the value for the DistanceEstimate input for this Flight Choreo.
     *
     * @param float $value (optional, decimal) A estimate of the distance of the travel in kilometres.
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setDistanceEstimate($value)
    {
        return $this->set('DistanceEstimate', $value);
    }

    /**
     * Set the value for the Fuel input for this Flight Choreo.
     *
     * @param string $value (optional, string) The type of fuel used in the aircraft (i.e. Aviation Gasoline, Biodiesel).
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setFuel($value)
    {
        return $this->set('Fuel', $value);
    }

    /**
     * Set the value for the OriginAirport input for this Flight Choreo.
     *
     * @param string $value (optional, string) The airport code for the origin (i.e. LGA, JFK, etc.).
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setOriginAirport($value)
    {
        return $this->set('OriginAirport', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Flight Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Seats input for this Flight Choreo.
     *
     * @param int $value (optional, integer) The number of seats.
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setSeats($value)
    {
        return $this->set('Seats', $value);
    }

    /**
     * Set the value for the Timeframe input for this Flight Choreo.
     *
     * @param string $value (optional, string) A date range specified in the following format: 2008-01-01/2008-07-09
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setTimeframe($value)
    {
        return $this->set('Timeframe', $value);
    }

    /**
     * Set the value for the Trips input for this Flight Choreo.
     *
     * @param string $value (optional, string) The number of trips to calculate information for.
     * @return BrighterPlanet_Flight_Inputs For method chaining.
     */
    public function setTrips($value)
    {
        return $this->set('Trips', $value);
    }
}


/**
 * Execution object for the Flight Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Flight_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Flight Choreo.
     *
     * @param Temboo_Session $session The session that owns this Flight execution.
     * @param BrighterPlanet_Flight $choreo The choreography object for this execution.
     * @param BrighterPlanet_Flight_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Flight_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Flight_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_Flight $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Flight execution.
     *
     * @return BrighterPlanet_Flight_Results New results object.
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
     * Wraps results in appropriate results class for this Flight execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_Flight_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_Flight_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Flight Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Flight_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Flight Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_Flight_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Flight execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the carbon footprint of shipping packages.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Shipment extends Temboo_Choreography
{
    /**
     * Returns information about the carbon footprint of shipping packages.
     *
     * @param Temboo_Session $session The session that owns this Shipment Choreo.
     * @return BrighterPlanet_Shipment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/Shipment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Shipment Choreo.
     *
     * @param BrighterPlanet_Shipment_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Shipment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Shipment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_Shipment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Shipment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Shipment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_Shipment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Shipment Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Shipment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Shipment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Shipment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Shipment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Shipment Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Carrier input for this Shipment Choreo.
     *
     * @param string $value (optional, string) The carrier used for the shipment. Valid values are: FedEx, UPS, or USPS.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setCarrier($value)
    {
        return $this->set('Carrier', $value);
    }

    /**
     * Set the value for the DestinationZipCode input for this Shipment Choreo.
     *
     * @param string $value (optional, string) The postal code of the destination address.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setDestinationZipCode($value)
    {
        return $this->set('DestinationZipCode', $value);
    }

    /**
     * Set the value for the Destination input for this Shipment Choreo.
     *
     * @param string $value (optional, string) The destination of the shipment.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setDestination($value)
    {
        return $this->set('Destination', $value);
    }

    /**
     * Set the value for the Distance input for this Shipment Choreo.
     *
     * @param float $value (optional, decimal) The distance from the shipment origin to the shipment destination.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the Mode input for this Shipment Choreo.
     *
     * @param string $value (optional, string) The mode or method of shipment. Valid values are: air, courier, or ground.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the OriginZipCode input for this Shipment Choreo.
     *
     * @param string $value (optional, string) The postal code of the origin address.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setOriginZipCode($value)
    {
        return $this->set('OriginZipCode', $value);
    }

    /**
     * Set the value for the Origin input for this Shipment Choreo.
     *
     * @param string $value (optional, string) The origin of the shipment.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setOrigin($value)
    {
        return $this->set('Origin', $value);
    }

    /**
     * Set the value for the PackageCount input for this Shipment Choreo.
     *
     * @param int $value (optional, integer) The number of packages in the shipment.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setPackageCount($value)
    {
        return $this->set('PackageCount', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Shipment Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Weight input for this Shipment Choreo.
     *
     * @param float $value (optional, decimal) The weight of the shipment in kilograms.
     * @return BrighterPlanet_Shipment_Inputs For method chaining.
     */
    public function setWeight($value)
    {
        return $this->set('Weight', $value);
    }
}


/**
 * Execution object for the Shipment Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Shipment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Shipment Choreo.
     *
     * @param Temboo_Session $session The session that owns this Shipment execution.
     * @param BrighterPlanet_Shipment $choreo The choreography object for this execution.
     * @param BrighterPlanet_Shipment_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Shipment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Shipment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_Shipment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Shipment execution.
     *
     * @return BrighterPlanet_Shipment_Results New results object.
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
     * Wraps results in appropriate results class for this Shipment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_Shipment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_Shipment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Shipment Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Shipment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Shipment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_Shipment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Shipment execution.
     *
     * @return string The response from Brighter Planet.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the the footprint of a guest's hotel stay.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Lodging extends Temboo_Choreography
{
    /**
     * Returns the the footprint of a guest's hotel stay.
     *
     * @param Temboo_Session $session The session that owns this Lodging Choreo.
     * @return BrighterPlanet_Lodging New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/BrighterPlanet/Lodging/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Lodging Choreo.
     *
     * @param BrighterPlanet_Lodging_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Lodging_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Lodging_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new BrighterPlanet_Lodging_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Lodging Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Lodging_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new BrighterPlanet_Lodging_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Lodging Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Lodging_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Lodging Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return BrighterPlanet_Lodging_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Lodging input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ACCoverage input for this Lodging Choreo.
     *
     * @param float $value (optional, decimal) A numeric value representing the AC coverage of the lodging establishment.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setACCoverage($value)
    {
        return $this->set('ACCoverage', $value);
    }

    /**
     * Set the value for the APIKey input for this Lodging Choreo.
     *
     * @param string $value (required, string) The API Key provided by Brighter Planet.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the City input for this Lodging Choreo.
     *
     * @param string $value (optional, string) The city of the establishment.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Compliance input for this Lodging Choreo.
     *
     * @param string $value (optional, string) Comply with one or more protocols:  Greenhouse Gas Protocol Scope 3 (ghg_protocol_scope_3), ISO 14064-1 (iso), and The Climate Registry (tcr).
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setCompliance($value)
    {
        return $this->set('Compliance', $value);
    }

    /**
     * Set the value for the ConstructionYear input for this Lodging Choreo.
     *
     * @param int $value (optional, integer) The year that the establishment was constructed.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setConstructionYear($value)
    {
        return $this->set('ConstructionYear', $value);
    }

    /**
     * Set the value for the Country input for this Lodging Choreo.
     *
     * @param string $value (optional, string) The ISO 3166 country code associated with the establishment.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Date input for this Lodging Choreo.
     *
     * @param string $value (optional, date) The date of the stay at the establishment in YYYY-MM-DD format.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Duration input for this Lodging Choreo.
     *
     * @param int $value (optional, integer) The amount of time spent at the establishment in seconds.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the Floors input for this Lodging Choreo.
     *
     * @param int $value (optional, integer) The number of floors at the establishment.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setFloors($value)
    {
        return $this->set('Floors', $value);
    }

    /**
     * Set the value for the HotTubs input for this Lodging Choreo.
     *
     * @param int $value (optional, integer) The number of hot tubs that the establishment has.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setHotTubs($value)
    {
        return $this->set('HotTubs', $value);
    }

    /**
     * Set the value for the IndoorPools input for this Lodging Choreo.
     *
     * @param int $value (optional, integer) The number of indoor pools that the establishment has.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setIndoorPools($value)
    {
        return $this->set('IndoorPools', $value);
    }

    /**
     * Set the value for the LodgingClass input for this Lodging Choreo.
     *
     * @param string $value (optional, string) The lodging class (i.e. Hotel, Inn, or Motel).
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setLodgingClass($value)
    {
        return $this->set('LodgingClass', $value);
    }

    /**
     * Set the value for the OutdoorPools input for this Lodging Choreo.
     *
     * @param int $value (optional, integer) The number of outdoor pools that the establishment has.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setOutdoorPools($value)
    {
        return $this->set('OutdoorPools', $value);
    }

    /**
     * Set the value for the PropertyRooms input for this Lodging Choreo.
     *
     * @param int $value (optional, integer) The number of rooms on the property.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setPropertyRooms($value)
    {
        return $this->set('PropertyRooms', $value);
    }

    /**
     * Set the value for the Property input for this Lodging Choreo.
     *
     * @param int $value (optional, integer) A property id (or northstart_id) associated with the establishment.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setProperty($value)
    {
        return $this->set('Property', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Lodging Choreo.
     *
     * @param string $value (optional, string) Specify your desired response format. Accepted values are xml and json (the default).
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Rooms input for this Lodging Choreo.
     *
     * @param int $value (optional, integer) The number of rooms.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setRooms($value)
    {
        return $this->set('Rooms', $value);
    }

    /**
     * Set the value for the State input for this Lodging Choreo.
     *
     * @param string $value (optional, string) The postal abbreviation for the state that the establishment is in.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Timeframe input for this Lodging Choreo.
     *
     * @param string $value (optional, string) A date range specified in the following format: 2008-01-01/2008-07-09
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setTimeframe($value)
    {
        return $this->set('Timeframe', $value);
    }

    /**
     * Set the value for the ZipCode input for this Lodging Choreo.
     *
     * @param string $value (optional, string) The postal code associated with the establishment.
     * @return BrighterPlanet_Lodging_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the Lodging Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Lodging_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Lodging Choreo.
     *
     * @param Temboo_Session $session The session that owns this Lodging execution.
     * @param BrighterPlanet_Lodging $choreo The choreography object for this execution.
     * @param BrighterPlanet_Lodging_Inputs|array $inputs (optional) Inputs as BrighterPlanet_Lodging_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return BrighterPlanet_Lodging_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, BrighterPlanet_Lodging $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Lodging execution.
     *
     * @return BrighterPlanet_Lodging_Results New results object.
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
     * Wraps results in appropriate results class for this Lodging execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return BrighterPlanet_Lodging_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new BrighterPlanet_Lodging_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Lodging Choreo.
 *
 * @package Temboo
 * @subpackage BrighterPlanet
 */
class BrighterPlanet_Lodging_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Lodging Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return BrighterPlanet_Lodging_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Lodging execution.
     *
     * @return string The response from Brighter Planet.
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
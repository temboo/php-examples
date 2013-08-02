<?php

/**
 * Temboo PHP SDK Fitbit classes
 *
 * Execute Choreographies from the Temboo Fitbit bundle.
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
 * @subpackage Fitbit
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Gets a list of a user's favorite activities.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetFavoriteActivities extends Temboo_Choreography
{
    /**
     * Gets a list of a user's favorite activities.
     *
     * @param Temboo_Session $session The session that owns this GetFavoriteActivities Choreo.
     * @return Fitbit_Activities_GetFavoriteActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Activities/GetFavoriteActivities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFavoriteActivities Choreo.
     *
     * @param Fitbit_Activities_GetFavoriteActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_GetFavoriteActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_GetFavoriteActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Activities_GetFavoriteActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFavoriteActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Activities_GetFavoriteActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFavoriteActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetFavoriteActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFavoriteActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFavoriteActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFavoriteActivities Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFavoriteActivities Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFavoriteActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFavoriteActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFavoriteActivities Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetFavoriteActivities Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Activities_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFavoriteActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetFavoriteActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFavoriteActivities Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFavoriteActivities execution.
     * @param Fitbit_Activities_GetFavoriteActivities $choreo The choreography object for this execution.
     * @param Fitbit_Activities_GetFavoriteActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_GetFavoriteActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_GetFavoriteActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Activities_GetFavoriteActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFavoriteActivities execution.
     *
     * @return Fitbit_Activities_GetFavoriteActivities_Results New results object.
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
     * Wraps results in appropriate results class for this GetFavoriteActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Activities_GetFavoriteActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Activities_GetFavoriteActivities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFavoriteActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetFavoriteActivities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFavoriteActivities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Activities_GetFavoriteActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFavoriteActivities execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a specified activity to a user's favorite activities list.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_AddFavoriteActivity extends Temboo_Choreography
{
    /**
     * Adds a specified activity to a user's favorite activities list.
     *
     * @param Temboo_Session $session The session that owns this AddFavoriteActivity Choreo.
     * @return Fitbit_Activities_AddFavoriteActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Activities/AddFavoriteActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddFavoriteActivity Choreo.
     *
     * @param Fitbit_Activities_AddFavoriteActivity_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_AddFavoriteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_AddFavoriteActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Activities_AddFavoriteActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddFavoriteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Activities_AddFavoriteActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddFavoriteActivity Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_AddFavoriteActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddFavoriteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddFavoriteActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AddFavoriteActivity Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddFavoriteActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this AddFavoriteActivity Choreo.
     *
     * @param int $value (required, integer) The id of the activity you want to make a favorite.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this AddFavoriteActivity Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this AddFavoriteActivity Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddFavoriteActivity Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this AddFavoriteActivity Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Activities_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the AddFavoriteActivity Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_AddFavoriteActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddFavoriteActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddFavoriteActivity execution.
     * @param Fitbit_Activities_AddFavoriteActivity $choreo The choreography object for this execution.
     * @param Fitbit_Activities_AddFavoriteActivity_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_AddFavoriteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_AddFavoriteActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Activities_AddFavoriteActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddFavoriteActivity execution.
     *
     * @return Fitbit_Activities_AddFavoriteActivity_Results New results object.
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
     * Wraps results in appropriate results class for this AddFavoriteActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Activities_AddFavoriteActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Activities_AddFavoriteActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddFavoriteActivity Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_AddFavoriteActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddFavoriteActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Activities_AddFavoriteActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddFavoriteActivity execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Log a new water entry for a particular date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_LogWater extends Temboo_Choreography
{
    /**
     * Log a new water entry for a particular date.
     *
     * @param Temboo_Session $session The session that owns this LogWater Choreo.
     * @return Fitbit_Foods_LogWater New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/LogWater/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogWater Choreo.
     *
     * @param Fitbit_Foods_LogWater_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_LogWater_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_LogWater_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_LogWater_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogWater Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_LogWater_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_LogWater_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogWater Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_LogWater_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogWater Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_LogWater_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogWater input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogWater Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogWater Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Amount input for this LogWater Choreo.
     *
     * @param float $value (required, decimal) The amount of water consumed. Corresponds to the Unit input.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogWater Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogWater Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogWater Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogWater Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Unit input for this LogWater Choreo.
     *
     * @param string $value (required, string) Unit of measurement for the water entry. Valid values: 'ml', 'fl oz', or 'cup'.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }

    /**
     * Set the value for the UserID input for this LogWater Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_LogWater_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the LogWater Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_LogWater_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogWater Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogWater execution.
     * @param Fitbit_Foods_LogWater $choreo The choreography object for this execution.
     * @param Fitbit_Foods_LogWater_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_LogWater_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_LogWater_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_LogWater $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogWater execution.
     *
     * @return Fitbit_Foods_LogWater_Results New results object.
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
     * Wraps results in appropriate results class for this LogWater execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_LogWater_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_LogWater_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogWater Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_LogWater_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogWater Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_LogWater_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogWater execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets average values and a list of user's heart rate log entries for a given day.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_GetHeartRate extends Temboo_Choreography
{
    /**
     * Gets average values and a list of user's heart rate log entries for a given day.
     *
     * @param Temboo_Session $session The session that owns this GetHeartRate Choreo.
     * @return Fitbit_Heart_GetHeartRate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Heart/GetHeartRate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetHeartRate Choreo.
     *
     * @param Fitbit_Heart_GetHeartRate_Inputs|array $inputs (optional) Inputs as Fitbit_Heart_GetHeartRate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Heart_GetHeartRate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Heart_GetHeartRate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetHeartRate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Heart_GetHeartRate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Heart_GetHeartRate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetHeartRate Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_GetHeartRate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetHeartRate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Heart_GetHeartRate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetHeartRate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Heart_GetHeartRate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Heart_GetHeartRate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetHeartRate Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Heart_GetHeartRate_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetHeartRate Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Heart_GetHeartRate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetHeartRate Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Heart_GetHeartRate_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetHeartRate Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Heart_GetHeartRate_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetHeartRate Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_Heart_GetHeartRate_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetHeartRate Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Heart_GetHeartRate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetHeartRate Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Heart_GetHeartRate_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetHeartRate Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_GetHeartRate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetHeartRate Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetHeartRate execution.
     * @param Fitbit_Heart_GetHeartRate $choreo The choreography object for this execution.
     * @param Fitbit_Heart_GetHeartRate_Inputs|array $inputs (optional) Inputs as Fitbit_Heart_GetHeartRate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Heart_GetHeartRate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Heart_GetHeartRate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetHeartRate execution.
     *
     * @return Fitbit_Heart_GetHeartRate_Results New results object.
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
     * Wraps results in appropriate results class for this GetHeartRate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Heart_GetHeartRate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Heart_GetHeartRate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetHeartRate Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_GetHeartRate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetHeartRate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Heart_GetHeartRate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetHeartRate execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a user's current daily calorie consumption goal or Food Plan.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_UpdateFoodGoal extends Temboo_Choreography
{
    /**
     * Updates a user's current daily calorie consumption goal or Food Plan.
     *
     * @param Temboo_Session $session The session that owns this UpdateFoodGoal Choreo.
     * @return Fitbit_Foods_UpdateFoodGoal New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/UpdateFoodGoal/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateFoodGoal Choreo.
     *
     * @param Fitbit_Foods_UpdateFoodGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_UpdateFoodGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_UpdateFoodGoal_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_UpdateFoodGoal_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateFoodGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_UpdateFoodGoal_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateFoodGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_UpdateFoodGoal_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateFoodGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateFoodGoal input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UpdateFoodGoal Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateFoodGoal Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Calories input for this UpdateFoodGoal Choreo.
     *
     * @param int $value (conditional, integer) The calorie consumption goal; either calories or intensity should be provided.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setCalories($value)
    {
        return $this->set('Calories', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UpdateFoodGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UpdateFoodGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Intensity input for this UpdateFoodGoal Choreo.
     *
     * @param string $value (conditional, string) Food Plan intensity; (MAINTENANCE, EASIER, MEDIUM, KINDAHARD, HARDER); either calories or intensity should be provided.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setIntensity($value)
    {
        return $this->set('Intensity', $value);
    }

    /**
     * Set the value for the Personalized input for this UpdateFoodGoal Choreo.
     *
     * @param bool $value (optional, boolean) Food Plan type; true or false.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setPersonalized($value)
    {
        return $this->set('Personalized', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateFoodGoal Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this UpdateFoodGoal Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_UpdateFoodGoal_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UpdateFoodGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_UpdateFoodGoal_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateFoodGoal Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateFoodGoal execution.
     * @param Fitbit_Foods_UpdateFoodGoal $choreo The choreography object for this execution.
     * @param Fitbit_Foods_UpdateFoodGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_UpdateFoodGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_UpdateFoodGoal_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_UpdateFoodGoal $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateFoodGoal execution.
     *
     * @return Fitbit_Foods_UpdateFoodGoal_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateFoodGoal execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_UpdateFoodGoal_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_UpdateFoodGoal_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateFoodGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_UpdateFoodGoal_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateFoodGoal Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_UpdateFoodGoal_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateFoodGoal execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new log entry for a user's body measurements.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyMeasurements extends Temboo_Choreography
{
    /**
     * Creates a new log entry for a user's body measurements.
     *
     * @param Temboo_Session $session The session that owns this LogBodyMeasurements Choreo.
     * @return Fitbit_Body_LogBodyMeasurements New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/LogBodyMeasurements/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogBodyMeasurements Choreo.
     *
     * @param Fitbit_Body_LogBodyMeasurements_Inputs|array $inputs (optional) Inputs as Fitbit_Body_LogBodyMeasurements_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_LogBodyMeasurements_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_LogBodyMeasurements_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogBodyMeasurements Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_LogBodyMeasurements_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogBodyMeasurements Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyMeasurements_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogBodyMeasurements Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogBodyMeasurements input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogBodyMeasurements Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogBodyMeasurements Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Bicep input for this LogBodyMeasurements Choreo.
     *
     * @param float $value (conditional, decimal) The user's bicep measurement.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setBicep($value)
    {
        return $this->set('Bicep', $value);
    }

    /**
     * Set the value for the Calf input for this LogBodyMeasurements Choreo.
     *
     * @param float $value (conditional, decimal) The user's calf measurement.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setCalf($value)
    {
        return $this->set('Calf', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogBodyMeasurements Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogBodyMeasurements Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogBodyMeasurements Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Forearm input for this LogBodyMeasurements Choreo.
     *
     * @param float $value (conditional, decimal) The user's forearm measurement.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setForearm($value)
    {
        return $this->set('Forearm', $value);
    }

    /**
     * Set the value for the Hips input for this LogBodyMeasurements Choreo.
     *
     * @param float $value (conditional, decimal) The user's hips measurement.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setHips($value)
    {
        return $this->set('Hips', $value);
    }

    /**
     * Set the value for the Neck input for this LogBodyMeasurements Choreo.
     *
     * @param float $value (conditional, decimal) The user's neck measurement.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setNeck($value)
    {
        return $this->set('Neck', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogBodyMeasurements Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Thigh input for this LogBodyMeasurements Choreo.
     *
     * @param float $value (conditional, decimal) The user's thigh measurement.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setThigh($value)
    {
        return $this->set('Thigh', $value);
    }

    /**
     * Set the value for the UserID input for this LogBodyMeasurements Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Waist input for this LogBodyMeasurements Choreo.
     *
     * @param float $value (conditional, decimal) The user's waist measurement.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setWaist($value)
    {
        return $this->set('Waist', $value);
    }

    /**
     * Set the value for the Weight input for this LogBodyMeasurements Choreo.
     *
     * @param float $value (conditional, decimal) The user's weight.
     * @return Fitbit_Body_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setWeight($value)
    {
        return $this->set('Weight', $value);
    }
}


/**
 * Execution object for the LogBodyMeasurements Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyMeasurements_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogBodyMeasurements Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogBodyMeasurements execution.
     * @param Fitbit_Body_LogBodyMeasurements $choreo The choreography object for this execution.
     * @param Fitbit_Body_LogBodyMeasurements_Inputs|array $inputs (optional) Inputs as Fitbit_Body_LogBodyMeasurements_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_LogBodyMeasurements_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_LogBodyMeasurements $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogBodyMeasurements execution.
     *
     * @return Fitbit_Body_LogBodyMeasurements_Results New results object.
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
     * Wraps results in appropriate results class for this LogBodyMeasurements execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_LogBodyMeasurements_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_LogBodyMeasurements_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogBodyMeasurements Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyMeasurements_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogBodyMeasurements Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_LogBodyMeasurements_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogBodyMeasurements execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified activity from a user's favorite activities list.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_DeleteFavoriteActivity extends Temboo_Choreography
{
    /**
     * Deletes a specified activity from a user's favorite activities list.
     *
     * @param Temboo_Session $session The session that owns this DeleteFavoriteActivity Choreo.
     * @return Fitbit_Activities_DeleteFavoriteActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Activities/DeleteFavoriteActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFavoriteActivity Choreo.
     *
     * @param Fitbit_Activities_DeleteFavoriteActivity_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_DeleteFavoriteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Activities_DeleteFavoriteActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFavoriteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Activities_DeleteFavoriteActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFavoriteActivity Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_DeleteFavoriteActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFavoriteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFavoriteActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFavoriteActivity Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFavoriteActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this DeleteFavoriteActivity Choreo.
     *
     * @param int $value (required, integer) The id of the activity you want to delete from your favorites list.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteFavoriteActivity Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteFavoriteActivity Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteFavoriteActivity Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteFavoriteActivity Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteFavoriteActivity Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_DeleteFavoriteActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFavoriteActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFavoriteActivity execution.
     * @param Fitbit_Activities_DeleteFavoriteActivity $choreo The choreography object for this execution.
     * @param Fitbit_Activities_DeleteFavoriteActivity_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_DeleteFavoriteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Activities_DeleteFavoriteActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFavoriteActivity execution.
     *
     * @return Fitbit_Activities_DeleteFavoriteActivity_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteFavoriteActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Activities_DeleteFavoriteActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFavoriteActivity Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_DeleteFavoriteActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFavoriteActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Activities_DeleteFavoriteActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFavoriteActivity execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the list of Fitbit devices for a user.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Devices_GetDevices extends Temboo_Choreography
{
    /**
     * Retrieves the list of Fitbit devices for a user.
     *
     * @param Temboo_Session $session The session that owns this GetDevices Choreo.
     * @return Fitbit_Devices_GetDevices New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Devices/GetDevices/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDevices Choreo.
     *
     * @param Fitbit_Devices_GetDevices_Inputs|array $inputs (optional) Inputs as Fitbit_Devices_GetDevices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Devices_GetDevices_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Devices_GetDevices_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDevices Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Devices_GetDevices_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Devices_GetDevices_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDevices Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Devices_GetDevices_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDevices Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Devices_GetDevices_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDevices input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Devices_GetDevices_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Devices_GetDevices_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetDevices Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Devices_GetDevices_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetDevices Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Devices_GetDevices_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetDevices Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Devices_GetDevices_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetDevices Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Devices_GetDevices_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetDevices Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Devices_GetDevices_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetDevices Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Devices_GetDevices_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetDevices Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Devices_GetDevices_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDevices Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDevices execution.
     * @param Fitbit_Devices_GetDevices $choreo The choreography object for this execution.
     * @param Fitbit_Devices_GetDevices_Inputs|array $inputs (optional) Inputs as Fitbit_Devices_GetDevices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Devices_GetDevices_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Devices_GetDevices $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDevices execution.
     *
     * @return Fitbit_Devices_GetDevices_Results New results object.
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
     * Wraps results in appropriate results class for this GetDevices execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Devices_GetDevices_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Devices_GetDevices_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDevices Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Devices_GetDevices_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDevices Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Devices_GetDevices_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDevices execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create new private food for a user.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_CreateFood extends Temboo_Choreography
{
    /**
     * Create new private food for a user.
     *
     * @param Temboo_Session $session The session that owns this CreateFood Choreo.
     * @return Fitbit_Foods_CreateFood New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/CreateFood/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFood Choreo.
     *
     * @param Fitbit_Foods_CreateFood_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_CreateFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_CreateFood_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_CreateFood_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_CreateFood_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_CreateFood_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_CreateFood_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_CreateFood_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFood input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateFood Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateFood Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Calories input for this CreateFood Choreo.
     *
     * @param int $value (required, integer) The number of calories per serving size.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setCalories($value)
    {
        return $this->set('Calories', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this CreateFood Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CreateFood Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Description input for this CreateFood Choreo.
     *
     * @param string $value (optional, string) A description for the food entry.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the FormType input for this CreateFood Choreo.
     *
     * @param string $value (optional, string) Form type; (LIQUID or DRY).
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setFormType($value)
    {
        return $this->set('FormType', $value);
    }

    /**
     * Set the value for the MeasurementUnitID input for this CreateFood Choreo.
     *
     * @param int $value (required, integer) The default measurement unit.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setMeasurementUnitID($value)
    {
        return $this->set('MeasurementUnitID', $value);
    }

    /**
     * Set the value for the Name input for this CreateFood Choreo.
     *
     * @param string $value (required, string) The name of the food.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateFood Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ServingSize input for this CreateFood Choreo.
     *
     * @param int $value (required, integer) The default serving size.
     * @return Fitbit_Foods_CreateFood_Inputs For method chaining.
     */
    public function setServingSize($value)
    {
        return $this->set('ServingSize', $value);
    }
}


/**
 * Execution object for the CreateFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_CreateFood_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFood Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFood execution.
     * @param Fitbit_Foods_CreateFood $choreo The choreography object for this execution.
     * @param Fitbit_Foods_CreateFood_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_CreateFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_CreateFood_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_CreateFood $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFood execution.
     *
     * @return Fitbit_Foods_CreateFood_Results New results object.
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
     * Wraps results in appropriate results class for this CreateFood execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_CreateFood_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_CreateFood_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_CreateFood_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFood Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_CreateFood_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFood execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Accepts or rejects an invite to become friends with inviting user.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_AcceptInvite extends Temboo_Choreography
{
    /**
     * Accepts or rejects an invite to become friends with inviting user.
     *
     * @param Temboo_Session $session The session that owns this AcceptInvite Choreo.
     * @return Fitbit_Social_AcceptInvite New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Social/AcceptInvite/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AcceptInvite Choreo.
     *
     * @param Fitbit_Social_AcceptInvite_Inputs|array $inputs (optional) Inputs as Fitbit_Social_AcceptInvite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_AcceptInvite_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Social_AcceptInvite_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AcceptInvite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_AcceptInvite_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Social_AcceptInvite_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AcceptInvite Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_AcceptInvite_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AcceptInvite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_AcceptInvite_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AcceptInvite input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Accept input for this AcceptInvite Choreo.
     *
     * @param bool $value (required, boolean) Accept or reject an invite; (true or false).
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function setAccept($value)
    {
        return $this->set('Accept', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AcceptInvite Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AcceptInvite Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this AcceptInvite Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this AcceptInvite Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the FromUserID input for this AcceptInvite Choreo.
     *
     * @param string $value (required, string) The user's id to indicate user to accept or reject invite from.
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function setFromUserID($value)
    {
        return $this->set('FromUserID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AcceptInvite Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this AcceptInvite Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Social_AcceptInvite_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the AcceptInvite Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_AcceptInvite_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AcceptInvite Choreo.
     *
     * @param Temboo_Session $session The session that owns this AcceptInvite execution.
     * @param Fitbit_Social_AcceptInvite $choreo The choreography object for this execution.
     * @param Fitbit_Social_AcceptInvite_Inputs|array $inputs (optional) Inputs as Fitbit_Social_AcceptInvite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_AcceptInvite_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Social_AcceptInvite $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AcceptInvite execution.
     *
     * @return Fitbit_Social_AcceptInvite_Results New results object.
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
     * Wraps results in appropriate results class for this AcceptInvite execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Social_AcceptInvite_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Social_AcceptInvite_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AcceptInvite Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_AcceptInvite_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AcceptInvite Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Social_AcceptInvite_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AcceptInvite execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a user's current weight goal.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyWeightGoal extends Temboo_Choreography
{
    /**
     * Get a user's current weight goal.
     *
     * @param Temboo_Session $session The session that owns this GetBodyWeightGoal Choreo.
     * @return Fitbit_Body_GetBodyWeightGoal New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/GetBodyWeightGoal/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBodyWeightGoal Choreo.
     *
     * @param Fitbit_Body_GetBodyWeightGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyWeightGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyWeightGoal_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_GetBodyWeightGoal_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBodyWeightGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_GetBodyWeightGoal_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBodyWeightGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyWeightGoal_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBodyWeightGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBodyWeightGoal input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBodyWeightGoal Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBodyWeightGoal Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBodyWeightGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBodyWeightGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBodyWeightGoal Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetBodyWeightGoal Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_GetBodyWeightGoal_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetBodyWeightGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyWeightGoal_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBodyWeightGoal Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBodyWeightGoal execution.
     * @param Fitbit_Body_GetBodyWeightGoal $choreo The choreography object for this execution.
     * @param Fitbit_Body_GetBodyWeightGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyWeightGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyWeightGoal_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_GetBodyWeightGoal $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBodyWeightGoal execution.
     *
     * @return Fitbit_Body_GetBodyWeightGoal_Results New results object.
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
     * Wraps results in appropriate results class for this GetBodyWeightGoal execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_GetBodyWeightGoal_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_GetBodyWeightGoal_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBodyWeightGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyWeightGoal_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBodyWeightGoal Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_GetBodyWeightGoal_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBodyWeightGoal execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets time series data for a given resource based on a date range you specify.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetTimeSeriesByDateRange extends Temboo_Choreography
{
    /**
     * Gets time series data for a given resource based on a date range you specify.
     *
     * @param Temboo_Session $session The session that owns this GetTimeSeriesByDateRange Choreo.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Statistics/GetTimeSeriesByDateRange/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTimeSeriesByDateRange Choreo.
     *
     * @param Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs|array $inputs (optional) Inputs as Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Statistics_GetTimeSeriesByDateRange_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTimeSeriesByDateRange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTimeSeriesByDateRange Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTimeSeriesByDateRange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTimeSeriesByDateRange input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetTimeSeriesByDateRange Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetTimeSeriesByDateRange Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetTimeSeriesByDateRange Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetTimeSeriesByDateRange Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the EndDate input for this GetTimeSeriesByDateRange Choreo.
     *
     * @param string $value (required, date) The end date of the date range for the data you want to retrieve (in the format yyyy-MM-dd). You can also specify the value 'today'.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ResourcePath input for this GetTimeSeriesByDateRange Choreo.
     *
     * @param string $value (required, string) The resource path that you want to access (for example: activities/log/distance). See Choreo documentation for a full list of resource paths.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setResourcePath($value)
    {
        return $this->set('ResourcePath', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTimeSeriesByDateRange Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this GetTimeSeriesByDateRange Choreo.
     *
     * @param string $value (required, date) The start date of the date range for the data you want to retrieve (in the format yyyy-MM-dd). You can also specify the value 'today'.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the UserID input for this GetTimeSeriesByDateRange Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetTimeSeriesByDateRange Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetTimeSeriesByDateRange_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTimeSeriesByDateRange Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTimeSeriesByDateRange execution.
     * @param Fitbit_Statistics_GetTimeSeriesByDateRange $choreo The choreography object for this execution.
     * @param Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs|array $inputs (optional) Inputs as Fitbit_Statistics_GetTimeSeriesByDateRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Statistics_GetTimeSeriesByDateRange $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTimeSeriesByDateRange execution.
     *
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Results New results object.
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
     * Wraps results in appropriate results class for this GetTimeSeriesByDateRange execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Statistics_GetTimeSeriesByDateRange_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTimeSeriesByDateRange Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetTimeSeriesByDateRange_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTimeSeriesByDateRange Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Statistics_GetTimeSeriesByDateRange_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTimeSeriesByDateRange execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create or updates user's body fat goal.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_UpdateBodyFatGoal extends Temboo_Choreography
{
    /**
     * Create or updates user's body fat goal.
     *
     * @param Temboo_Session $session The session that owns this UpdateBodyFatGoal Choreo.
     * @return Fitbit_Body_UpdateBodyFatGoal New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/UpdateBodyFatGoal/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateBodyFatGoal Choreo.
     *
     * @param Fitbit_Body_UpdateBodyFatGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Body_UpdateBodyFatGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_UpdateBodyFatGoal_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_UpdateBodyFatGoal_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateBodyFatGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_UpdateBodyFatGoal_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateBodyFatGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_UpdateBodyFatGoal_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateBodyFatGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateBodyFatGoal input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UpdateBodyFatGoal Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateBodyFatGoal Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BodyFat input for this UpdateBodyFatGoal Choreo.
     *
     * @param float $value (required, decimal) Target body fat in %; in the format X.XX.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs For method chaining.
     */
    public function setBodyFat($value)
    {
        return $this->set('BodyFat', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UpdateBodyFatGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UpdateBodyFatGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateBodyFatGoal Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this UpdateBodyFatGoal Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_UpdateBodyFatGoal_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UpdateBodyFatGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_UpdateBodyFatGoal_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateBodyFatGoal Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateBodyFatGoal execution.
     * @param Fitbit_Body_UpdateBodyFatGoal $choreo The choreography object for this execution.
     * @param Fitbit_Body_UpdateBodyFatGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Body_UpdateBodyFatGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_UpdateBodyFatGoal_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_UpdateBodyFatGoal $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateBodyFatGoal execution.
     *
     * @return Fitbit_Body_UpdateBodyFatGoal_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateBodyFatGoal execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_UpdateBodyFatGoal_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_UpdateBodyFatGoal_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateBodyFatGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_UpdateBodyFatGoal_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateBodyFatGoal Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_UpdateBodyFatGoal_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateBodyFatGoal execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets user's activity statistics.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetActivityStats extends Temboo_Choreography
{
    /**
     * Gets user's activity statistics.
     *
     * @param Temboo_Session $session The session that owns this GetActivityStats Choreo.
     * @return Fitbit_Statistics_GetActivityStats New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Statistics/GetActivityStats/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetActivityStats Choreo.
     *
     * @param Fitbit_Statistics_GetActivityStats_Inputs|array $inputs (optional) Inputs as Fitbit_Statistics_GetActivityStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Statistics_GetActivityStats_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Statistics_GetActivityStats_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetActivityStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Statistics_GetActivityStats_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Statistics_GetActivityStats_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetActivityStats Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetActivityStats_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetActivityStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Statistics_GetActivityStats_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetActivityStats input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Statistics_GetActivityStats_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Statistics_GetActivityStats_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetActivityStats Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Statistics_GetActivityStats_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetActivityStats Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Statistics_GetActivityStats_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetActivityStats Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Statistics_GetActivityStats_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetActivityStats Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Statistics_GetActivityStats_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetActivityStats Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Statistics_GetActivityStats_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetActivityStats Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Statistics_GetActivityStats_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetActivityStats Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetActivityStats_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetActivityStats Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetActivityStats execution.
     * @param Fitbit_Statistics_GetActivityStats $choreo The choreography object for this execution.
     * @param Fitbit_Statistics_GetActivityStats_Inputs|array $inputs (optional) Inputs as Fitbit_Statistics_GetActivityStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Statistics_GetActivityStats_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Statistics_GetActivityStats $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetActivityStats execution.
     *
     * @return Fitbit_Statistics_GetActivityStats_Results New results object.
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
     * Wraps results in appropriate results class for this GetActivityStats execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Statistics_GetActivityStats_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Statistics_GetActivityStats_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetActivityStats Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetActivityStats_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetActivityStats Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Statistics_GetActivityStats_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetActivityStats execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a user's profile data.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Profile_UpdateUserInfo extends Temboo_Choreography
{
    /**
     * Updates a user's profile data.
     *
     * @param Temboo_Session $session The session that owns this UpdateUserInfo Choreo.
     * @return Fitbit_Profile_UpdateUserInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Profile/UpdateUserInfo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateUserInfo Choreo.
     *
     * @param Fitbit_Profile_UpdateUserInfo_Inputs|array $inputs (optional) Inputs as Fitbit_Profile_UpdateUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Profile_UpdateUserInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Profile_UpdateUserInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateUserInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Profile_UpdateUserInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateUserInfo Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Profile_UpdateUserInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateUserInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateUserInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AboutMe input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The user's About Me string.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setAboutMe($value)
    {
        return $this->set('AboutMe', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UpdateUserInfo Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateUserInfo Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Birthday input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, date) Date of Birth; in the format yyyy-MM-dd.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setBirthday($value)
    {
        return $this->set('Birthday', $value);
    }

    /**
     * Set the value for the City input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The user's city information.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UpdateUserInfo Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UpdateUserInfo Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Country input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The two-character code for the user's country.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the FoodLocale input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) Food Database Locale; in the format "xx_XX".
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setFoodLocale($value)
    {
        return $this->set('FoodLocale', $value);
    }

    /**
     * Set the value for the FullName input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The user's full name.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setFullName($value)
    {
        return $this->set('FullName', $value);
    }

    /**
     * Set the value for the Gender input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The user's gender (MALE/FEMALE/NA).
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setGender($value)
    {
        return $this->set('Gender', $value);
    }

    /**
     * Set the value for the GlucoseUnit input for this UpdateUserInfo Choreo.
     *
     * @param float $value (optional, decimal) The blood glucose unit of measurement being used. Valid values are: en_US, any,  METRIC.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setGlucoseUnit($value)
    {
        return $this->set('GlucoseUnit', $value);
    }

    /**
     * Set the value for the HeightUnit input for this UpdateUserInfo Choreo.
     *
     * @param float $value (optional, decimal) The height unit being used. Valid values are: en_US, any,  METRIC.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setHeightUnit($value)
    {
        return $this->set('HeightUnit', $value);
    }

    /**
     * Set the value for the Height input for this UpdateUserInfo Choreo.
     *
     * @param float $value (optional, decimal) The user's height; in the format X.XX (inches).
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setHeight($value)
    {
        return $this->set('Height', $value);
    }

    /**
     * Set the value for the Locale input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) Locale of website (country/language); one of the locales, currently – (en_US, fr_FR, de_DE, es_ES, en_GB, en_AU, en_NZ, ja_JP).
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setLocale($value)
    {
        return $this->set('Locale', $value);
    }

    /**
     * Set the value for the Nickname input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The user's nickname.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setNickname($value)
    {
        return $this->set('Nickname', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The two-character state abbreviation for the user.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the StrideLengthRunning input for this UpdateUserInfo Choreo.
     *
     * @param float $value (optional, decimal) Running stride length; in the format X.XX.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setStrideLengthRunning($value)
    {
        return $this->set('StrideLengthRunning', $value);
    }

    /**
     * Set the value for the StrideLengthWalking input for this UpdateUserInfo Choreo.
     *
     * @param float $value (optional, decimal) Walking stride length; in the format X.XX.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setStrideLengthWalking($value)
    {
        return $this->set('StrideLengthWalking', $value);
    }

    /**
     * Set the value for the Timezone input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The user's timezone; in the format "America/Los_Angeles"
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setTimezone($value)
    {
        return $this->set('Timezone', $value);
    }

    /**
     * Set the value for the UserID input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the WaterUnit input for this UpdateUserInfo Choreo.
     *
     * @param float $value (optional, decimal) The water unit being used. Valid values are: en_US, any,  METRIC.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setWaterUnit($value)
    {
        return $this->set('WaterUnit', $value);
    }

    /**
     * Set the value for the WeightUnit input for this UpdateUserInfo Choreo.
     *
     * @param string $value (optional, string) The weight unit being used. Valid values are: en_US, any,  METRIC.
     * @return Fitbit_Profile_UpdateUserInfo_Inputs For method chaining.
     */
    public function setWeightUnit($value)
    {
        return $this->set('WeightUnit', $value);
    }
}


/**
 * Execution object for the UpdateUserInfo Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Profile_UpdateUserInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateUserInfo Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateUserInfo execution.
     * @param Fitbit_Profile_UpdateUserInfo $choreo The choreography object for this execution.
     * @param Fitbit_Profile_UpdateUserInfo_Inputs|array $inputs (optional) Inputs as Fitbit_Profile_UpdateUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Profile_UpdateUserInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Profile_UpdateUserInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateUserInfo execution.
     *
     * @return Fitbit_Profile_UpdateUserInfo_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateUserInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Profile_UpdateUserInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Profile_UpdateUserInfo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateUserInfo Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Profile_UpdateUserInfo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateUserInfo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Profile_UpdateUserInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateUserInfo execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes user's blood pressure log entry with the given id.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_DeleteBloodPressureLog extends Temboo_Choreography
{
    /**
     * Deletes user's blood pressure log entry with the given id.
     *
     * @param Temboo_Session $session The session that owns this DeleteBloodPressureLog Choreo.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/BloodPressure/DeleteBloodPressureLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteBloodPressureLog Choreo.
     *
     * @param Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs|array $inputs (optional) Inputs as Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_BloodPressure_DeleteBloodPressureLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteBloodPressureLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteBloodPressureLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteBloodPressureLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteBloodPressureLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteBloodPressureLog Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteBloodPressureLog Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BloodPressureLogID input for this DeleteBloodPressureLog Choreo.
     *
     * @param int $value (required, integer) The id of the blood pressure log you want to delete.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs For method chaining.
     */
    public function setBloodPressureLogID($value)
    {
        return $this->set('BloodPressureLogID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteBloodPressureLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteBloodPressureLog Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteBloodPressureLog Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteBloodPressureLog Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteBloodPressureLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_DeleteBloodPressureLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteBloodPressureLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteBloodPressureLog execution.
     * @param Fitbit_BloodPressure_DeleteBloodPressureLog $choreo The choreography object for this execution.
     * @param Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs|array $inputs (optional) Inputs as Fitbit_BloodPressure_DeleteBloodPressureLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_BloodPressure_DeleteBloodPressureLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteBloodPressureLog execution.
     *
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteBloodPressureLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_BloodPressure_DeleteBloodPressureLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteBloodPressureLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_DeleteBloodPressureLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteBloodPressureLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_BloodPressure_DeleteBloodPressureLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteBloodPressureLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified activity log entry.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_DeleteActivityLog extends Temboo_Choreography
{
    /**
     * Deletes a specified activity log entry.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivityLog Choreo.
     * @return Fitbit_Activities_DeleteActivityLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Activities/DeleteActivityLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteActivityLog Choreo.
     *
     * @param Fitbit_Activities_DeleteActivityLog_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_DeleteActivityLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_DeleteActivityLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Activities_DeleteActivityLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteActivityLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Activities_DeleteActivityLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteActivityLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_DeleteActivityLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteActivityLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteActivityLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteActivityLog Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteActivityLog Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityLogID input for this DeleteActivityLog Choreo.
     *
     * @param int $value (required, integer) The id of the activity log you want to delete. The Id is returned in the LogActivity response.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs For method chaining.
     */
    public function setActivityLogID($value)
    {
        return $this->set('ActivityLogID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteActivityLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteActivityLog Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteActivityLog Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteActivityLog Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Activities_DeleteActivityLog_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteActivityLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_DeleteActivityLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteActivityLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivityLog execution.
     * @param Fitbit_Activities_DeleteActivityLog $choreo The choreography object for this execution.
     * @param Fitbit_Activities_DeleteActivityLog_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_DeleteActivityLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_DeleteActivityLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Activities_DeleteActivityLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteActivityLog execution.
     *
     * @return Fitbit_Activities_DeleteActivityLog_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteActivityLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Activities_DeleteActivityLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Activities_DeleteActivityLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteActivityLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_DeleteActivityLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteActivityLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Activities_DeleteActivityLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteActivityLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a list of all valid Fitbit food units.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoodUnits extends Temboo_Choreography
{
    /**
     * Get a list of all valid Fitbit food units.
     *
     * @param Temboo_Session $session The session that owns this GetFoodUnits Choreo.
     * @return Fitbit_Foods_GetFoodUnits New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/GetFoodUnits/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFoodUnits Choreo.
     *
     * @param Fitbit_Foods_GetFoodUnits_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFoodUnits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFoodUnits_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_GetFoodUnits_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFoodUnits Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFoodUnits_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_GetFoodUnits_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFoodUnits Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoodUnits_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFoodUnits Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFoodUnits_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFoodUnits input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_GetFoodUnits_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_GetFoodUnits_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFoodUnits Choreo.
     *
     * @param string $value (optional, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFoodUnits_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFoodUnits Choreo.
     *
     * @param string $value (optional, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFoodUnits_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFoodUnits Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_GetFoodUnits_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFoodUnits Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_GetFoodUnits_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFoodUnits Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_GetFoodUnits_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetFoodUnits Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoodUnits_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFoodUnits Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFoodUnits execution.
     * @param Fitbit_Foods_GetFoodUnits $choreo The choreography object for this execution.
     * @param Fitbit_Foods_GetFoodUnits_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFoodUnits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFoodUnits_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_GetFoodUnits $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFoodUnits execution.
     *
     * @return Fitbit_Foods_GetFoodUnits_Results New results object.
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
     * Wraps results in appropriate results class for this GetFoodUnits execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_GetFoodUnits_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_GetFoodUnits_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFoodUnits Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoodUnits_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFoodUnits Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_GetFoodUnits_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFoodUnits execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary and list of a user's activities and activity log entries for a specified date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetActivities extends Temboo_Choreography
{
    /**
     * Gets a summary and list of a user's activities and activity log entries for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetActivities Choreo.
     * @return Fitbit_Activities_GetActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Activities/GetActivities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetActivities Choreo.
     *
     * @param Fitbit_Activities_GetActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_GetActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_GetActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Activities_GetActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_GetActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Activities_GetActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_GetActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Activities_GetActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Activities_GetActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetActivities Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Activities_GetActivities_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetActivities Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Activities_GetActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Activities_GetActivities_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Activities_GetActivities_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetActivities Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_Activities_GetActivities_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetActivities Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Activities_GetActivities_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetActivities Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Activities_GetActivities_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetActivities Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetActivities execution.
     * @param Fitbit_Activities_GetActivities $choreo The choreography object for this execution.
     * @param Fitbit_Activities_GetActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_GetActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_GetActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Activities_GetActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetActivities execution.
     *
     * @return Fitbit_Activities_GetActivities_Results New results object.
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
     * Wraps results in appropriate results class for this GetActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Activities_GetActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Activities_GetActivities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetActivities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetActivities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Activities_GetActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetActivities execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a user's current daily calorie consumption goal.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoodGoal extends Temboo_Choreography
{
    /**
     * Gets a user's current daily calorie consumption goal.
     *
     * @param Temboo_Session $session The session that owns this GetFoodGoal Choreo.
     * @return Fitbit_Foods_GetFoodGoal New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/GetFoodGoal/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFoodGoal Choreo.
     *
     * @param Fitbit_Foods_GetFoodGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFoodGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFoodGoal_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_GetFoodGoal_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFoodGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFoodGoal_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_GetFoodGoal_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFoodGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoodGoal_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFoodGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFoodGoal_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFoodGoal input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_GetFoodGoal_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_GetFoodGoal_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFoodGoal Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFoodGoal_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFoodGoal Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFoodGoal_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFoodGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_GetFoodGoal_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFoodGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_GetFoodGoal_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFoodGoal Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_GetFoodGoal_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetFoodGoal Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_GetFoodGoal_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFoodGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoodGoal_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFoodGoal Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFoodGoal execution.
     * @param Fitbit_Foods_GetFoodGoal $choreo The choreography object for this execution.
     * @param Fitbit_Foods_GetFoodGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFoodGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFoodGoal_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_GetFoodGoal $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFoodGoal execution.
     *
     * @return Fitbit_Foods_GetFoodGoal_Results New results object.
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
     * Wraps results in appropriate results class for this GetFoodGoal execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_GetFoodGoal_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_GetFoodGoal_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFoodGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoodGoal_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFoodGoal Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_GetFoodGoal_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFoodGoal execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a user's current body fat goal.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyFatGoal extends Temboo_Choreography
{
    /**
     * Get a user's current body fat goal.
     *
     * @param Temboo_Session $session The session that owns this GetBodyFatGoal Choreo.
     * @return Fitbit_Body_GetBodyFatGoal New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/GetBodyFatGoal/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBodyFatGoal Choreo.
     *
     * @param Fitbit_Body_GetBodyFatGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyFatGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyFatGoal_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_GetBodyFatGoal_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBodyFatGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_GetBodyFatGoal_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBodyFatGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyFatGoal_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBodyFatGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBodyFatGoal input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBodyFatGoal Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBodyFatGoal Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBodyFatGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBodyFatGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBodyFatGoal Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetBodyFatGoal Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_GetBodyFatGoal_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetBodyFatGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyFatGoal_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBodyFatGoal Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBodyFatGoal execution.
     * @param Fitbit_Body_GetBodyFatGoal $choreo The choreography object for this execution.
     * @param Fitbit_Body_GetBodyFatGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyFatGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyFatGoal_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_GetBodyFatGoal $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBodyFatGoal execution.
     *
     * @return Fitbit_Body_GetBodyFatGoal_Results New results object.
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
     * Wraps results in appropriate results class for this GetBodyFatGoal execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_GetBodyFatGoal_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_GetBodyFatGoal_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBodyFatGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyFatGoal_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBodyFatGoal Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_GetBodyFatGoal_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBodyFatGoal execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete user's sleep log entry with the given id.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_DeleteSleepLog extends Temboo_Choreography
{
    /**
     * Delete user's sleep log entry with the given id.
     *
     * @param Temboo_Session $session The session that owns this DeleteSleepLog Choreo.
     * @return Fitbit_Sleep_DeleteSleepLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Sleep/DeleteSleepLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteSleepLog Choreo.
     *
     * @param Fitbit_Sleep_DeleteSleepLog_Inputs|array $inputs (optional) Inputs as Fitbit_Sleep_DeleteSleepLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Sleep_DeleteSleepLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Sleep_DeleteSleepLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteSleepLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Sleep_DeleteSleepLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteSleepLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_DeleteSleepLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteSleepLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteSleepLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteSleepLog Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteSleepLog Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteSleepLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteSleepLog Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteSleepLog Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SleepLogID input for this DeleteSleepLog Choreo.
     *
     * @param int $value (required, integer) The id of the sleep log you want to delete.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs For method chaining.
     */
    public function setSleepLogID($value)
    {
        return $this->set('SleepLogID', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteSleepLog Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Sleep_DeleteSleepLog_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteSleepLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_DeleteSleepLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteSleepLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteSleepLog execution.
     * @param Fitbit_Sleep_DeleteSleepLog $choreo The choreography object for this execution.
     * @param Fitbit_Sleep_DeleteSleepLog_Inputs|array $inputs (optional) Inputs as Fitbit_Sleep_DeleteSleepLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Sleep_DeleteSleepLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Sleep_DeleteSleepLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteSleepLog execution.
     *
     * @return Fitbit_Sleep_DeleteSleepLog_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteSleepLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Sleep_DeleteSleepLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Sleep_DeleteSleepLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteSleepLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_DeleteSleepLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteSleepLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Sleep_DeleteSleepLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteSleepLog execution.
     *
     * @return string The response from Fitbit. Note that for a successful execution, no content is returned and this output variable should be empty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's recent foods.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetRecentFoods extends Temboo_Choreography
{
    /**
     * Gets a list of a user's recent foods.
     *
     * @param Temboo_Session $session The session that owns this GetRecentFoods Choreo.
     * @return Fitbit_Foods_GetRecentFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/GetRecentFoods/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecentFoods Choreo.
     *
     * @param Fitbit_Foods_GetRecentFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetRecentFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetRecentFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_GetRecentFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetRecentFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_GetRecentFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetRecentFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecentFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetRecentFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_GetRecentFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_GetRecentFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRecentFoods Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_GetRecentFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRecentFoods Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_GetRecentFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetRecentFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_GetRecentFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetRecentFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_GetRecentFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRecentFoods Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_GetRecentFoods_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetRecentFoods Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_GetRecentFoods_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetRecentFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetRecentFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentFoods Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecentFoods execution.
     * @param Fitbit_Foods_GetRecentFoods $choreo The choreography object for this execution.
     * @param Fitbit_Foods_GetRecentFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetRecentFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetRecentFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_GetRecentFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentFoods execution.
     *
     * @return Fitbit_Foods_GetRecentFoods_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecentFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_GetRecentFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_GetRecentFoods_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecentFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetRecentFoods_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecentFoods Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_GetRecentFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecentFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a list of meals that a user has created in his or her food log.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetMeals extends Temboo_Choreography
{
    /**
     * Get a list of meals that a user has created in his or her food log.
     *
     * @param Temboo_Session $session The session that owns this GetMeals Choreo.
     * @return Fitbit_Foods_GetMeals New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/GetMeals/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMeals Choreo.
     *
     * @param Fitbit_Foods_GetMeals_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetMeals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetMeals_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_GetMeals_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMeals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetMeals_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_GetMeals_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMeals Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetMeals_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMeals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetMeals_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMeals input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_GetMeals_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_GetMeals_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetMeals Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_GetMeals_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetMeals Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_GetMeals_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetMeals Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_GetMeals_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetMeals Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_GetMeals_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetMeals Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_GetMeals_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetMeals Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_GetMeals_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetMeals Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetMeals_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMeals Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMeals execution.
     * @param Fitbit_Foods_GetMeals $choreo The choreography object for this execution.
     * @param Fitbit_Foods_GetMeals_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetMeals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetMeals_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_GetMeals $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMeals execution.
     *
     * @return Fitbit_Foods_GetMeals_Results New results object.
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
     * Wraps results in appropriate results class for this GetMeals execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_GetMeals_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_GetMeals_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMeals Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetMeals_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMeals Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_GetMeals_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMeals execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the list of Fitbit device alarms for a specific device.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Devices_GetAlarms extends Temboo_Choreography
{
    /**
     * Retrieves the list of Fitbit device alarms for a specific device.
     *
     * @param Temboo_Session $session The session that owns this GetAlarms Choreo.
     * @return Fitbit_Devices_GetAlarms New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Devices/GetAlarms/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAlarms Choreo.
     *
     * @param Fitbit_Devices_GetAlarms_Inputs|array $inputs (optional) Inputs as Fitbit_Devices_GetAlarms_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Devices_GetAlarms_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Devices_GetAlarms_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAlarms Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Devices_GetAlarms_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Devices_GetAlarms_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAlarms Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Devices_GetAlarms_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAlarms Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Devices_GetAlarms_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAlarms input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Devices_GetAlarms_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Devices_GetAlarms_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetAlarms Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Devices_GetAlarms_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetAlarms Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Devices_GetAlarms_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetAlarms Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Devices_GetAlarms_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetAlarms Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Devices_GetAlarms_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the DeviceID input for this GetAlarms Choreo.
     *
     * @param string $value (required, string) The id of the device you would like to manage the alarm on.
     * @return Fitbit_Devices_GetAlarms_Inputs For method chaining.
     */
    public function setDeviceID($value)
    {
        return $this->set('DeviceID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetAlarms Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Devices_GetAlarms_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetAlarms Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Devices_GetAlarms_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetAlarms Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Devices_GetAlarms_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAlarms Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAlarms execution.
     * @param Fitbit_Devices_GetAlarms $choreo The choreography object for this execution.
     * @param Fitbit_Devices_GetAlarms_Inputs|array $inputs (optional) Inputs as Fitbit_Devices_GetAlarms_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Devices_GetAlarms_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Devices_GetAlarms $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAlarms execution.
     *
     * @return Fitbit_Devices_GetAlarms_Results New results object.
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
     * Wraps results in appropriate results class for this GetAlarms execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Devices_GetAlarms_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Devices_GetAlarms_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAlarms Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Devices_GetAlarms_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAlarms Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Devices_GetAlarms_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAlarms execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Fitbit_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Fitbit_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Fitbit_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_OAuth_InitializeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InitializeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Fitbit_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Fitbit_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Fitbit_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return Fitbit_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Fitbit_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Fitbit_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Fitbit_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Fitbit_OAuth_InitializeOAuth_Results New results object.
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
     * Wraps results in appropriate results class for this InitializeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the application's user needs to go to in order to grant access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizationURL()
    {
        return $this->get('AuthorizationURL');
    }
    /**
     * Retrieve the value for the "CallbackID" output from this InitializeOAuth execution.
     *
     * @return string (string) An ID used to retrieve the callback data that Temboo stores once your application's user authorizes.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCallbackID()
    {
        return $this->get('CallbackID');
    }
    /**
     * Retrieve the value for the "OAuthTokenSecret" output from this InitializeOAuth execution.
     *
     * @return string (string) The temporary OAuth Token Secret that can be exchanged for permanent tokens using the FinalizeOAuth Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthTokenSecret()
    {
        return $this->get('OAuthTokenSecret');
    }
}

/**
 * Search public foods in the Fibit database and private user created foods by keyword search.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_SearchFoods extends Temboo_Choreography
{
    /**
     * Search public foods in the Fibit database and private user created foods by keyword search.
     *
     * @param Temboo_Session $session The session that owns this SearchFoods Choreo.
     * @return Fitbit_Foods_SearchFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/SearchFoods/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchFoods Choreo.
     *
     * @param Fitbit_Foods_SearchFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_SearchFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_SearchFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_SearchFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_SearchFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_SearchFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_SearchFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_SearchFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_SearchFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_SearchFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SearchFoods Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_SearchFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SearchFoods Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_SearchFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_SearchFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_SearchFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Query input for this SearchFoods Choreo.
     *
     * @param string $value (required, string) The search query (i.e. artichoke).
     * @return Fitbit_Foods_SearchFoods_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchFoods Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_SearchFoods_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this SearchFoods Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_SearchFoods_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the SearchFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_SearchFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchFoods Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchFoods execution.
     * @param Fitbit_Foods_SearchFoods $choreo The choreography object for this execution.
     * @param Fitbit_Foods_SearchFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_SearchFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_SearchFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_SearchFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchFoods execution.
     *
     * @return Fitbit_Foods_SearchFoods_Results New results object.
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
     * Wraps results in appropriate results class for this SearchFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_SearchFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_SearchFoods_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_SearchFoods_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchFoods Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_SearchFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified food from a user's favorite foods list.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteFavoriteFood extends Temboo_Choreography
{
    /**
     * Deletes a specified food from a user's favorite foods list.
     *
     * @param Temboo_Session $session The session that owns this DeleteFavoriteFood Choreo.
     * @return Fitbit_Foods_DeleteFavoriteFood New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/DeleteFavoriteFood/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFavoriteFood Choreo.
     *
     * @param Fitbit_Foods_DeleteFavoriteFood_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_DeleteFavoriteFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_DeleteFavoriteFood_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_DeleteFavoriteFood_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFavoriteFood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_DeleteFavoriteFood_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFavoriteFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteFavoriteFood_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFavoriteFood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFavoriteFood input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFavoriteFood Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFavoriteFood Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteFavoriteFood Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteFavoriteFood Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the FoodID input for this DeleteFavoriteFood Choreo.
     *
     * @param int $value (required, integer) The id of the food to delete from you favorites list.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setFoodID($value)
    {
        return $this->set('FoodID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteFavoriteFood Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteFavoriteFood Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteFavoriteFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteFavoriteFood_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFavoriteFood Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFavoriteFood execution.
     * @param Fitbit_Foods_DeleteFavoriteFood $choreo The choreography object for this execution.
     * @param Fitbit_Foods_DeleteFavoriteFood_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_DeleteFavoriteFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_DeleteFavoriteFood_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_DeleteFavoriteFood $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFavoriteFood execution.
     *
     * @return Fitbit_Foods_DeleteFavoriteFood_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteFavoriteFood execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_DeleteFavoriteFood_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_DeleteFavoriteFood_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFavoriteFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteFavoriteFood_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFavoriteFood Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_DeleteFavoriteFood_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFavoriteFood execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates log entry for a blood pressure measurement.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_LogBloodPressure extends Temboo_Choreography
{
    /**
     * Creates log entry for a blood pressure measurement.
     *
     * @param Temboo_Session $session The session that owns this LogBloodPressure Choreo.
     * @return Fitbit_BloodPressure_LogBloodPressure New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/BloodPressure/LogBloodPressure/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogBloodPressure Choreo.
     *
     * @param Fitbit_BloodPressure_LogBloodPressure_Inputs|array $inputs (optional) Inputs as Fitbit_BloodPressure_LogBloodPressure_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_BloodPressure_LogBloodPressure_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_BloodPressure_LogBloodPressure_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogBloodPressure Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_BloodPressure_LogBloodPressure_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogBloodPressure Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_LogBloodPressure_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogBloodPressure Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogBloodPressure input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogBloodPressure Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogBloodPressure Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogBloodPressure Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogBloodPressure Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogBloodPressure Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry (in the format yyyy-MM-dd).
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Diastolic input for this LogBloodPressure Choreo.
     *
     * @param int $value (required, integer) The diastolic measurement.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setDiastolic($value)
    {
        return $this->set('Diastolic', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogBloodPressure Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Systolic input for this LogBloodPressure Choreo.
     *
     * @param int $value (required, integer) The systolic measurement.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setSystolic($value)
    {
        return $this->set('Systolic', $value);
    }

    /**
     * Set the value for the Time input for this LogBloodPressure Choreo.
     *
     * @param string $value (optional, string) Time of the measurement; hours and minutes in the format HH:mm.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the UserID input for this LogBloodPressure Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_BloodPressure_LogBloodPressure_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the LogBloodPressure Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_LogBloodPressure_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogBloodPressure Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogBloodPressure execution.
     * @param Fitbit_BloodPressure_LogBloodPressure $choreo The choreography object for this execution.
     * @param Fitbit_BloodPressure_LogBloodPressure_Inputs|array $inputs (optional) Inputs as Fitbit_BloodPressure_LogBloodPressure_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_BloodPressure_LogBloodPressure_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_BloodPressure_LogBloodPressure $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogBloodPressure execution.
     *
     * @return Fitbit_BloodPressure_LogBloodPressure_Results New results object.
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
     * Wraps results in appropriate results class for this LogBloodPressure execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_BloodPressure_LogBloodPressure_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_BloodPressure_LogBloodPressure_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogBloodPressure Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_LogBloodPressure_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogBloodPressure Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_BloodPressure_LogBloodPressure_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogBloodPressure execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of user's blood glucose and HbA1C measurements for a given day.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Glucose_GetGlucose extends Temboo_Choreography
{
    /**
     * Gets a list of user's blood glucose and HbA1C measurements for a given day.
     *
     * @param Temboo_Session $session The session that owns this GetGlucose Choreo.
     * @return Fitbit_Glucose_GetGlucose New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Glucose/GetGlucose/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetGlucose Choreo.
     *
     * @param Fitbit_Glucose_GetGlucose_Inputs|array $inputs (optional) Inputs as Fitbit_Glucose_GetGlucose_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Glucose_GetGlucose_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Glucose_GetGlucose_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetGlucose Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Glucose_GetGlucose_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Glucose_GetGlucose_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetGlucose Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Glucose_GetGlucose_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetGlucose Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Glucose_GetGlucose_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetGlucose input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Glucose_GetGlucose_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Glucose_GetGlucose_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetGlucose Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Glucose_GetGlucose_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetGlucose Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Glucose_GetGlucose_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetGlucose Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Glucose_GetGlucose_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetGlucose Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Glucose_GetGlucose_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetGlucose Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_Glucose_GetGlucose_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetGlucose Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Glucose_GetGlucose_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetGlucose Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Glucose_GetGlucose_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetGlucose Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Glucose_GetGlucose_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetGlucose Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetGlucose execution.
     * @param Fitbit_Glucose_GetGlucose $choreo The choreography object for this execution.
     * @param Fitbit_Glucose_GetGlucose_Inputs|array $inputs (optional) Inputs as Fitbit_Glucose_GetGlucose_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Glucose_GetGlucose_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Glucose_GetGlucose $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetGlucose execution.
     *
     * @return Fitbit_Glucose_GetGlucose_Results New results object.
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
     * Wraps results in appropriate results class for this GetGlucose execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Glucose_GetGlucose_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Glucose_GetGlucose_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetGlucose Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Glucose_GetGlucose_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetGlucose Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Glucose_GetGlucose_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetGlucose execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a tree of all valid Fitbit public activities from the activities catalog as well as private custom activities the user created.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_BrowseActivities extends Temboo_Choreography
{
    /**
     * Gets a tree of all valid Fitbit public activities from the activities catalog as well as private custom activities the user created.
     *
     * @param Temboo_Session $session The session that owns this BrowseActivities Choreo.
     * @return Fitbit_Activities_BrowseActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Activities/BrowseActivities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this BrowseActivities Choreo.
     *
     * @param Fitbit_Activities_BrowseActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_BrowseActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_BrowseActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Activities_BrowseActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BrowseActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_BrowseActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Activities_BrowseActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BrowseActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_BrowseActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the BrowseActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_BrowseActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BrowseActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Activities_BrowseActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Activities_BrowseActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this BrowseActivities Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Activities_BrowseActivities_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this BrowseActivities Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Activities_BrowseActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this BrowseActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Activities_BrowseActivities_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this BrowseActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Activities_BrowseActivities_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this BrowseActivities Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Activities_BrowseActivities_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the BrowseActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_BrowseActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BrowseActivities Choreo.
     *
     * @param Temboo_Session $session The session that owns this BrowseActivities execution.
     * @param Fitbit_Activities_BrowseActivities $choreo The choreography object for this execution.
     * @param Fitbit_Activities_BrowseActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_BrowseActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_BrowseActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Activities_BrowseActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BrowseActivities execution.
     *
     * @return Fitbit_Activities_BrowseActivities_Results New results object.
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
     * Wraps results in appropriate results class for this BrowseActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Activities_BrowseActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Activities_BrowseActivities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the BrowseActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_BrowseActivities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the BrowseActivities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Activities_BrowseActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this BrowseActivities execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the list of invites to become freinds for a user.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetInvites extends Temboo_Choreography
{
    /**
     * Retrieve the list of invites to become freinds for a user.
     *
     * @param Temboo_Session $session The session that owns this GetInvites Choreo.
     * @return Fitbit_Social_GetInvites New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Social/GetInvites/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetInvites Choreo.
     *
     * @param Fitbit_Social_GetInvites_Inputs|array $inputs (optional) Inputs as Fitbit_Social_GetInvites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_GetInvites_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Social_GetInvites_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetInvites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_GetInvites_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Social_GetInvites_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetInvites Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetInvites_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetInvites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_GetInvites_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetInvites input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Social_GetInvites_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Social_GetInvites_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetInvites Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Social_GetInvites_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetInvites Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Social_GetInvites_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetInvites Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Social_GetInvites_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetInvites Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Social_GetInvites_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetInvites Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Social_GetInvites_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetInvites Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Social_GetInvites_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetInvites Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetInvites_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetInvites Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetInvites execution.
     * @param Fitbit_Social_GetInvites $choreo The choreography object for this execution.
     * @param Fitbit_Social_GetInvites_Inputs|array $inputs (optional) Inputs as Fitbit_Social_GetInvites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_GetInvites_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Social_GetInvites $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetInvites execution.
     *
     * @return Fitbit_Social_GetInvites_Results New results object.
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
     * Wraps results in appropriate results class for this GetInvites execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Social_GetInvites_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Social_GetInvites_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetInvites Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetInvites_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetInvites Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Social_GetInvites_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetInvites execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates log entry for sleep.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_LogSleep extends Temboo_Choreography
{
    /**
     * Creates log entry for sleep.
     *
     * @param Temboo_Session $session The session that owns this LogSleep Choreo.
     * @return Fitbit_Sleep_LogSleep New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Sleep/LogSleep/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogSleep Choreo.
     *
     * @param Fitbit_Sleep_LogSleep_Inputs|array $inputs (optional) Inputs as Fitbit_Sleep_LogSleep_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Sleep_LogSleep_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Sleep_LogSleep_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogSleep Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Sleep_LogSleep_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Sleep_LogSleep_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogSleep Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_LogSleep_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogSleep Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Sleep_LogSleep_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogSleep input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogSleep Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogSleep Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogSleep Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogSleep Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogSleep Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to create (in the format yyyy-MM-dd).
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Duration input for this LogSleep Choreo.
     *
     * @param string $value (required, string) The sleep duration in milliseconds.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogSleep Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartTime input for this LogSleep Choreo.
     *
     * @param string $value (required, string) The sleep start time; hours and minutes in the format HH:mm.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setStartTime($value)
    {
        return $this->set('StartTime', $value);
    }

    /**
     * Set the value for the UserID input for this LogSleep Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Sleep_LogSleep_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the LogSleep Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_LogSleep_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogSleep Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogSleep execution.
     * @param Fitbit_Sleep_LogSleep $choreo The choreography object for this execution.
     * @param Fitbit_Sleep_LogSleep_Inputs|array $inputs (optional) Inputs as Fitbit_Sleep_LogSleep_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Sleep_LogSleep_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Sleep_LogSleep $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogSleep execution.
     *
     * @return Fitbit_Sleep_LogSleep_Results New results object.
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
     * Wraps results in appropriate results class for this LogSleep execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Sleep_LogSleep_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Sleep_LogSleep_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogSleep Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_LogSleep_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogSleep Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Sleep_LogSleep_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogSleep execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates log entry for a blood glucose measurement and/or HbA1c measurement.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Glucose_LogGlucose extends Temboo_Choreography
{
    /**
     * Creates log entry for a blood glucose measurement and/or HbA1c measurement.
     *
     * @param Temboo_Session $session The session that owns this LogGlucose Choreo.
     * @return Fitbit_Glucose_LogGlucose New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Glucose/LogGlucose/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogGlucose Choreo.
     *
     * @param Fitbit_Glucose_LogGlucose_Inputs|array $inputs (optional) Inputs as Fitbit_Glucose_LogGlucose_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Glucose_LogGlucose_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Glucose_LogGlucose_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogGlucose Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Glucose_LogGlucose_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Glucose_LogGlucose_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogGlucose Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Glucose_LogGlucose_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogGlucose Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Glucose_LogGlucose_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogGlucose input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogGlucose Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogGlucose Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogGlucose Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogGlucose Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogGlucose Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry (in the format yyyy-MM-dd).
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Glucose input for this LogGlucose Choreo.
     *
     * @param int $value (conditional, integer) Glucose measurement; in the format X.X, required with tracker parameter, otherwise optional.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setGlucose($value)
    {
        return $this->set('Glucose', $value);
    }

    /**
     * Set the value for the HBA1C input for this LogGlucose Choreo.
     *
     * @param float $value (conditional, decimal) HbA1c measurement; in the format X.X, either hba1c or tracker should be provided (or both).
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setHBA1C($value)
    {
        return $this->set('HBA1C', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogGlucose Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Time input for this LogGlucose Choreo.
     *
     * @param string $value (optional, string) Time of the measurement; hours and minutes in the format HH:mm.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Tracker input for this LogGlucose Choreo.
     *
     * @param string $value (conditional, string) Glucose tracker name; predefined or custom tracker name (matches tracker name on the website, e.g. "Afternoon").
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setTracker($value)
    {
        return $this->set('Tracker', $value);
    }

    /**
     * Set the value for the UserID input for this LogGlucose Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Glucose_LogGlucose_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the LogGlucose Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Glucose_LogGlucose_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogGlucose Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogGlucose execution.
     * @param Fitbit_Glucose_LogGlucose $choreo The choreography object for this execution.
     * @param Fitbit_Glucose_LogGlucose_Inputs|array $inputs (optional) Inputs as Fitbit_Glucose_LogGlucose_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Glucose_LogGlucose_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Glucose_LogGlucose $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogGlucose execution.
     *
     * @return Fitbit_Glucose_LogGlucose_Results New results object.
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
     * Wraps results in appropriate results class for this LogGlucose execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Glucose_LogGlucose_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Glucose_LogGlucose_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogGlucose Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Glucose_LogGlucose_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogGlucose Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Glucose_LogGlucose_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogGlucose execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a user's profile data.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Profile_GetUserInfo extends Temboo_Choreography
{
    /**
     * Gets a user's profile data.
     *
     * @param Temboo_Session $session The session that owns this GetUserInfo Choreo.
     * @return Fitbit_Profile_GetUserInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Profile/GetUserInfo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUserInfo Choreo.
     *
     * @param Fitbit_Profile_GetUserInfo_Inputs|array $inputs (optional) Inputs as Fitbit_Profile_GetUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Profile_GetUserInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Profile_GetUserInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Profile_GetUserInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Profile_GetUserInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserInfo Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Profile_GetUserInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUserInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Profile_GetUserInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Profile_GetUserInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Profile_GetUserInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetUserInfo Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Profile_GetUserInfo_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetUserInfo Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Profile_GetUserInfo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetUserInfo Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Profile_GetUserInfo_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetUserInfo Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Profile_GetUserInfo_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetUserInfo Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Profile_GetUserInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetUserInfo Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Profile_GetUserInfo_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetUserInfo Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Profile_GetUserInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserInfo Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUserInfo execution.
     * @param Fitbit_Profile_GetUserInfo $choreo The choreography object for this execution.
     * @param Fitbit_Profile_GetUserInfo_Inputs|array $inputs (optional) Inputs as Fitbit_Profile_GetUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Profile_GetUserInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Profile_GetUserInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserInfo execution.
     *
     * @return Fitbit_Profile_GetUserInfo_Results New results object.
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
     * Wraps results in appropriate results class for this GetUserInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Profile_GetUserInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Profile_GetUserInfo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUserInfo Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Profile_GetUserInfo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUserInfo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Profile_GetUserInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUserInfo execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Fitbit access token, token secret and encoded user id (UserID) for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Fitbit access token, token secret and encoded user id (UserID) for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Fitbit_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Fitbit_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Fitbit_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FinalizeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The oauth_token_secret retrieved during the OAuth process. This is returned by the InitializeOAuth Choreo.
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Fitbit_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }
}


/**
 * Execution object for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Fitbit_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Fitbit_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Fitbit_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Fitbit_OAuth_FinalizeOAuth_Results New results object.
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
     * Wraps results in appropriate results class for this FinalizeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessTokenSecret" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token Secret retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessTokenSecret()
    {
        return $this->get('AccessTokenSecret');
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "UserID" output from this FinalizeOAuth execution.
     *
     * @return string (string) The user's encoded id associated with the access token that is being retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserID()
    {
        return $this->get('UserID');
    }
}

/**
 * Delete user's body weight log entry with the given id.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_DeleteBodyWeightLog extends Temboo_Choreography
{
    /**
     * Delete user's body weight log entry with the given id.
     *
     * @param Temboo_Session $session The session that owns this DeleteBodyWeightLog Choreo.
     * @return Fitbit_Body_DeleteBodyWeightLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/DeleteBodyWeightLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteBodyWeightLog Choreo.
     *
     * @param Fitbit_Body_DeleteBodyWeightLog_Inputs|array $inputs (optional) Inputs as Fitbit_Body_DeleteBodyWeightLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_DeleteBodyWeightLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_DeleteBodyWeightLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteBodyWeightLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_DeleteBodyWeightLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteBodyWeightLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_DeleteBodyWeightLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteBodyWeightLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteBodyWeightLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteBodyWeightLog Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteBodyWeightLog Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BodyWeightLogID input for this DeleteBodyWeightLog Choreo.
     *
     * @param int $value (required, integer) The id of the body weight log entry.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs For method chaining.
     */
    public function setBodyWeightLogID($value)
    {
        return $this->set('BodyWeightLogID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteBodyWeightLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteBodyWeightLog Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteBodyWeightLog Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteBodyWeightLog Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_DeleteBodyWeightLog_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteBodyWeightLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_DeleteBodyWeightLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteBodyWeightLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteBodyWeightLog execution.
     * @param Fitbit_Body_DeleteBodyWeightLog $choreo The choreography object for this execution.
     * @param Fitbit_Body_DeleteBodyWeightLog_Inputs|array $inputs (optional) Inputs as Fitbit_Body_DeleteBodyWeightLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_DeleteBodyWeightLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_DeleteBodyWeightLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteBodyWeightLog execution.
     *
     * @return Fitbit_Body_DeleteBodyWeightLog_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteBodyWeightLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_DeleteBodyWeightLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_DeleteBodyWeightLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteBodyWeightLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_DeleteBodyWeightLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteBodyWeightLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_DeleteBodyWeightLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteBodyWeightLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets time series data for a given resource based on a date range period you specify.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetTimeSeriesByPeriod extends Temboo_Choreography
{
    /**
     * Gets time series data for a given resource based on a date range period you specify.
     *
     * @param Temboo_Session $session The session that owns this GetTimeSeriesByPeriod Choreo.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Statistics/GetTimeSeriesByPeriod/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTimeSeriesByPeriod Choreo.
     *
     * @param Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs|array $inputs (optional) Inputs as Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Statistics_GetTimeSeriesByPeriod_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTimeSeriesByPeriod Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTimeSeriesByPeriod Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTimeSeriesByPeriod Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTimeSeriesByPeriod input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetTimeSeriesByPeriod Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetTimeSeriesByPeriod Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetTimeSeriesByPeriod Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetTimeSeriesByPeriod Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the EndDate input for this GetTimeSeriesByPeriod Choreo.
     *
     * @param string $value (required, date) The end date of the period for the data you want to retrieve (in the format yyyy-MM-dd). You can also specify the value 'today'.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Period input for this GetTimeSeriesByPeriod Choreo.
     *
     * @param string $value (optional, string) The date range period. Valid values are: 1d, 7d, 30d, 1w, 1m, 3m, 6m, 1y, max. Defaults to 'max'.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setPeriod($value)
    {
        return $this->set('Period', $value);
    }

    /**
     * Set the value for the ResourcePath input for this GetTimeSeriesByPeriod Choreo.
     *
     * @param string $value (required, string) The resource path that you want to access (for example: activities/log/distance). See Choreo documentation for a full list of resource paths.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setResourcePath($value)
    {
        return $this->set('ResourcePath', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTimeSeriesByPeriod Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetTimeSeriesByPeriod Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetTimeSeriesByPeriod Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetTimeSeriesByPeriod_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTimeSeriesByPeriod Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTimeSeriesByPeriod execution.
     * @param Fitbit_Statistics_GetTimeSeriesByPeriod $choreo The choreography object for this execution.
     * @param Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs|array $inputs (optional) Inputs as Fitbit_Statistics_GetTimeSeriesByPeriod_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Statistics_GetTimeSeriesByPeriod $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTimeSeriesByPeriod execution.
     *
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Results New results object.
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
     * Wraps results in appropriate results class for this GetTimeSeriesByPeriod execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Statistics_GetTimeSeriesByPeriod_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTimeSeriesByPeriod Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Statistics_GetTimeSeriesByPeriod_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTimeSeriesByPeriod Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Statistics_GetTimeSeriesByPeriod_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTimeSeriesByPeriod execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's recent activities.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetRecentActivities extends Temboo_Choreography
{
    /**
     * Gets a list of a user's recent activities.
     *
     * @param Temboo_Session $session The session that owns this GetRecentActivities Choreo.
     * @return Fitbit_Activities_GetRecentActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Activities/GetRecentActivities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecentActivities Choreo.
     *
     * @param Fitbit_Activities_GetRecentActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_GetRecentActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_GetRecentActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Activities_GetRecentActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_GetRecentActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Activities_GetRecentActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetRecentActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecentActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_GetRecentActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Activities_GetRecentActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Activities_GetRecentActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRecentActivities Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Activities_GetRecentActivities_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRecentActivities Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Activities_GetRecentActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetRecentActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Activities_GetRecentActivities_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetRecentActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Activities_GetRecentActivities_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRecentActivities Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Activities_GetRecentActivities_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetRecentActivities Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Activities_GetRecentActivities_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetRecentActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetRecentActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentActivities Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecentActivities execution.
     * @param Fitbit_Activities_GetRecentActivities $choreo The choreography object for this execution.
     * @param Fitbit_Activities_GetRecentActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_GetRecentActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_GetRecentActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Activities_GetRecentActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentActivities execution.
     *
     * @return Fitbit_Activities_GetRecentActivities_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecentActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Activities_GetRecentActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Activities_GetRecentActivities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecentActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetRecentActivities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecentActivities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Activities_GetRecentActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecentActivities execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary of a user's body measurements for a specified date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyMeasurements extends Temboo_Choreography
{
    /**
     * Gets a summary of a user's body measurements for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetBodyMeasurements Choreo.
     * @return Fitbit_Body_GetBodyMeasurements New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/GetBodyMeasurements/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBodyMeasurements Choreo.
     *
     * @param Fitbit_Body_GetBodyMeasurements_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyMeasurements_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyMeasurements_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_GetBodyMeasurements_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBodyMeasurements Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_GetBodyMeasurements_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBodyMeasurements Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyMeasurements_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBodyMeasurements Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBodyMeasurements input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBodyMeasurements Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBodyMeasurements Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBodyMeasurements Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBodyMeasurements Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetBodyMeasurements Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_Body_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBodyMeasurements Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetBodyMeasurements Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetBodyMeasurements Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyMeasurements_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBodyMeasurements Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBodyMeasurements execution.
     * @param Fitbit_Body_GetBodyMeasurements $choreo The choreography object for this execution.
     * @param Fitbit_Body_GetBodyMeasurements_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyMeasurements_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyMeasurements_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_GetBodyMeasurements $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBodyMeasurements execution.
     *
     * @return Fitbit_Body_GetBodyMeasurements_Results New results object.
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
     * Wraps results in appropriate results class for this GetBodyMeasurements execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_GetBodyMeasurements_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_GetBodyMeasurements_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBodyMeasurements Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyMeasurements_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBodyMeasurements Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_GetBodyMeasurements_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBodyMeasurements execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates log entry for a heart rate measurement.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_LogHeartRate extends Temboo_Choreography
{
    /**
     * Creates log entry for a heart rate measurement.
     *
     * @param Temboo_Session $session The session that owns this LogHeartRate Choreo.
     * @return Fitbit_Heart_LogHeartRate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Heart/LogHeartRate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogHeartRate Choreo.
     *
     * @param Fitbit_Heart_LogHeartRate_Inputs|array $inputs (optional) Inputs as Fitbit_Heart_LogHeartRate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Heart_LogHeartRate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Heart_LogHeartRate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogHeartRate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Heart_LogHeartRate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Heart_LogHeartRate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogHeartRate Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_LogHeartRate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogHeartRate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Heart_LogHeartRate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogHeartRate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogHeartRate Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogHeartRate Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogHeartRate Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogHeartRate Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogHeartRate Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry (in the format yyyy-MM-dd).
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the HeartRate input for this LogHeartRate Choreo.
     *
     * @param int $value (required, integer) Heart rate measurement.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setHeartRate($value)
    {
        return $this->set('HeartRate', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogHeartRate Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Time input for this LogHeartRate Choreo.
     *
     * @param string $value (optional, string) Time of the measurement; hours and minutes in the format HH:mm.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Tracker input for this LogHeartRate Choreo.
     *
     * @param string $value (required, string) Heart rate tracker name; predefined or custom tracker name (matches tracker name on the website).
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setTracker($value)
    {
        return $this->set('Tracker', $value);
    }

    /**
     * Set the value for the UserID input for this LogHeartRate Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Heart_LogHeartRate_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the LogHeartRate Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_LogHeartRate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogHeartRate Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogHeartRate execution.
     * @param Fitbit_Heart_LogHeartRate $choreo The choreography object for this execution.
     * @param Fitbit_Heart_LogHeartRate_Inputs|array $inputs (optional) Inputs as Fitbit_Heart_LogHeartRate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Heart_LogHeartRate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Heart_LogHeartRate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogHeartRate execution.
     *
     * @return Fitbit_Heart_LogHeartRate_Results New results object.
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
     * Wraps results in appropriate results class for this LogHeartRate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Heart_LogHeartRate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Heart_LogHeartRate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogHeartRate Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_LogHeartRate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogHeartRate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Heart_LogHeartRate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogHeartRate execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets user's friends.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetFriends extends Temboo_Choreography
{
    /**
     * Gets user's friends.
     *
     * @param Temboo_Session $session The session that owns this GetFriends Choreo.
     * @return Fitbit_Social_GetFriends New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Social/GetFriends/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFriends Choreo.
     *
     * @param Fitbit_Social_GetFriends_Inputs|array $inputs (optional) Inputs as Fitbit_Social_GetFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_GetFriends_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Social_GetFriends_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_GetFriends_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Social_GetFriends_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFriends Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetFriends_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_GetFriends_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFriends input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Social_GetFriends_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Social_GetFriends_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFriends Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Social_GetFriends_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFriends Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Social_GetFriends_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFriends Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Social_GetFriends_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFriends Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Social_GetFriends_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFriends Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Social_GetFriends_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetFriends Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Social_GetFriends_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFriends Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetFriends_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFriends Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFriends execution.
     * @param Fitbit_Social_GetFriends $choreo The choreography object for this execution.
     * @param Fitbit_Social_GetFriends_Inputs|array $inputs (optional) Inputs as Fitbit_Social_GetFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_GetFriends_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Social_GetFriends $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFriends execution.
     *
     * @return Fitbit_Social_GetFriends_Results New results object.
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
     * Wraps results in appropriate results class for this GetFriends execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Social_GetFriends_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Social_GetFriends_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFriends Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetFriends_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFriends Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Social_GetFriends_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFriends execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get an average value and a list of user's blood pressure log entries for a given day.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_GetBloodPressure extends Temboo_Choreography
{
    /**
     * Get an average value and a list of user's blood pressure log entries for a given day.
     *
     * @param Temboo_Session $session The session that owns this GetBloodPressure Choreo.
     * @return Fitbit_BloodPressure_GetBloodPressure New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/BloodPressure/GetBloodPressure/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBloodPressure Choreo.
     *
     * @param Fitbit_BloodPressure_GetBloodPressure_Inputs|array $inputs (optional) Inputs as Fitbit_BloodPressure_GetBloodPressure_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_BloodPressure_GetBloodPressure_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_BloodPressure_GetBloodPressure_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBloodPressure Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_BloodPressure_GetBloodPressure_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBloodPressure Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_GetBloodPressure_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBloodPressure Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBloodPressure input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBloodPressure Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBloodPressure Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBloodPressure Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBloodPressure Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetBloodPressure Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBloodPressure Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetBloodPressure Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_BloodPressure_GetBloodPressure_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetBloodPressure Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_GetBloodPressure_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBloodPressure Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBloodPressure execution.
     * @param Fitbit_BloodPressure_GetBloodPressure $choreo The choreography object for this execution.
     * @param Fitbit_BloodPressure_GetBloodPressure_Inputs|array $inputs (optional) Inputs as Fitbit_BloodPressure_GetBloodPressure_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_BloodPressure_GetBloodPressure_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_BloodPressure_GetBloodPressure $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBloodPressure execution.
     *
     * @return Fitbit_BloodPressure_GetBloodPressure_Results New results object.
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
     * Wraps results in appropriate results class for this GetBloodPressure execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_BloodPressure_GetBloodPressure_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_BloodPressure_GetBloodPressure_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBloodPressure Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_BloodPressure_GetBloodPressure_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBloodPressure Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_BloodPressure_GetBloodPressure_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBloodPressure execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary and list of a user's water log entries for a given day.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetWater extends Temboo_Choreography
{
    /**
     * Gets a summary and list of a user's water log entries for a given day.
     *
     * @param Temboo_Session $session The session that owns this GetWater Choreo.
     * @return Fitbit_Foods_GetWater New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/GetWater/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetWater Choreo.
     *
     * @param Fitbit_Foods_GetWater_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetWater_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetWater_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_GetWater_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWater Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetWater_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_GetWater_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWater Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetWater_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetWater Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetWater_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWater input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_GetWater_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_GetWater_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetWater Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_GetWater_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetWater Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_GetWater_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetWater Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_GetWater_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetWater Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_GetWater_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetWater Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_Foods_GetWater_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetWater Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_GetWater_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetWater Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_GetWater_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetWater Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetWater_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWater Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetWater execution.
     * @param Fitbit_Foods_GetWater $choreo The choreography object for this execution.
     * @param Fitbit_Foods_GetWater_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetWater_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetWater_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_GetWater $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWater execution.
     *
     * @return Fitbit_Foods_GetWater_Results New results object.
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
     * Wraps results in appropriate results class for this GetWater execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_GetWater_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_GetWater_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetWater Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetWater_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetWater Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_GetWater_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetWater execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary and list of a user's sleep log entries for a specified date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_GetSleep extends Temboo_Choreography
{
    /**
     * Gets a summary and list of a user's sleep log entries for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetSleep Choreo.
     * @return Fitbit_Sleep_GetSleep New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Sleep/GetSleep/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSleep Choreo.
     *
     * @param Fitbit_Sleep_GetSleep_Inputs|array $inputs (optional) Inputs as Fitbit_Sleep_GetSleep_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Sleep_GetSleep_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Sleep_GetSleep_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSleep Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Sleep_GetSleep_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Sleep_GetSleep_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSleep Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_GetSleep_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSleep Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Sleep_GetSleep_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSleep input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Sleep_GetSleep_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Sleep_GetSleep_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetSleep Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Sleep_GetSleep_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetSleep Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Sleep_GetSleep_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetSleep Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Sleep_GetSleep_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetSleep Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Sleep_GetSleep_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetSleep Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_Sleep_GetSleep_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSleep Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Sleep_GetSleep_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetSleep Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Sleep_GetSleep_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetSleep Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_GetSleep_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSleep Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSleep execution.
     * @param Fitbit_Sleep_GetSleep $choreo The choreography object for this execution.
     * @param Fitbit_Sleep_GetSleep_Inputs|array $inputs (optional) Inputs as Fitbit_Sleep_GetSleep_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Sleep_GetSleep_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Sleep_GetSleep $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSleep execution.
     *
     * @return Fitbit_Sleep_GetSleep_Results New results object.
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
     * Wraps results in appropriate results class for this GetSleep execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Sleep_GetSleep_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Sleep_GetSleep_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSleep Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Sleep_GetSleep_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSleep Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Sleep_GetSleep_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSleep execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified water log entry.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteWaterLog extends Temboo_Choreography
{
    /**
     * Deletes a specified water log entry.
     *
     * @param Temboo_Session $session The session that owns this DeleteWaterLog Choreo.
     * @return Fitbit_Foods_DeleteWaterLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/DeleteWaterLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteWaterLog Choreo.
     *
     * @param Fitbit_Foods_DeleteWaterLog_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_DeleteWaterLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_DeleteWaterLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_DeleteWaterLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteWaterLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_DeleteWaterLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteWaterLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteWaterLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteWaterLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteWaterLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteWaterLog Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteWaterLog Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteWaterLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteWaterLog Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteWaterLog Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteWaterLog Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the WaterLogID input for this DeleteWaterLog Choreo.
     *
     * @param int $value (required, integer) The id of the water log you want to delete. The Id is returned in the LogWater response.
     * @return Fitbit_Foods_DeleteWaterLog_Inputs For method chaining.
     */
    public function setWaterLogID($value)
    {
        return $this->set('WaterLogID', $value);
    }
}


/**
 * Execution object for the DeleteWaterLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteWaterLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteWaterLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteWaterLog execution.
     * @param Fitbit_Foods_DeleteWaterLog $choreo The choreography object for this execution.
     * @param Fitbit_Foods_DeleteWaterLog_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_DeleteWaterLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_DeleteWaterLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_DeleteWaterLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteWaterLog execution.
     *
     * @return Fitbit_Foods_DeleteWaterLog_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteWaterLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_DeleteWaterLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_DeleteWaterLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteWaterLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteWaterLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteWaterLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_DeleteWaterLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteWaterLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a specified food to a user's favorite food list.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_AddFavoriteFood extends Temboo_Choreography
{
    /**
     * Adds a specified food to a user's favorite food list.
     *
     * @param Temboo_Session $session The session that owns this AddFavoriteFood Choreo.
     * @return Fitbit_Foods_AddFavoriteFood New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/AddFavoriteFood/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddFavoriteFood Choreo.
     *
     * @param Fitbit_Foods_AddFavoriteFood_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_AddFavoriteFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_AddFavoriteFood_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_AddFavoriteFood_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddFavoriteFood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_AddFavoriteFood_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddFavoriteFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_AddFavoriteFood_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddFavoriteFood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddFavoriteFood input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AddFavoriteFood Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddFavoriteFood Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this AddFavoriteFood Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this AddFavoriteFood Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the FoodID input for this AddFavoriteFood Choreo.
     *
     * @param int $value (required, integer) The id of the food you want to make a favorite.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs For method chaining.
     */
    public function setFoodID($value)
    {
        return $this->set('FoodID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddFavoriteFood Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this AddFavoriteFood Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_AddFavoriteFood_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the AddFavoriteFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_AddFavoriteFood_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddFavoriteFood Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddFavoriteFood execution.
     * @param Fitbit_Foods_AddFavoriteFood $choreo The choreography object for this execution.
     * @param Fitbit_Foods_AddFavoriteFood_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_AddFavoriteFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_AddFavoriteFood_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_AddFavoriteFood $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddFavoriteFood execution.
     *
     * @return Fitbit_Foods_AddFavoriteFood_Results New results object.
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
     * Wraps results in appropriate results class for this AddFavoriteFood execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_AddFavoriteFood_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_AddFavoriteFood_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddFavoriteFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_AddFavoriteFood_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddFavoriteFood Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_AddFavoriteFood_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddFavoriteFood execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates log entry for a user's body weight.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyWeight extends Temboo_Choreography
{
    /**
     * Creates log entry for a user's body weight.
     *
     * @param Temboo_Session $session The session that owns this LogBodyWeight Choreo.
     * @return Fitbit_Body_LogBodyWeight New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/LogBodyWeight/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogBodyWeight Choreo.
     *
     * @param Fitbit_Body_LogBodyWeight_Inputs|array $inputs (optional) Inputs as Fitbit_Body_LogBodyWeight_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_LogBodyWeight_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_LogBodyWeight_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogBodyWeight Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_LogBodyWeight_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_LogBodyWeight_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogBodyWeight Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyWeight_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogBodyWeight Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_LogBodyWeight_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogBodyWeight input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogBodyWeight Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogBodyWeight Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogBodyWeight Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogBodyWeight Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogBodyWeight Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogBodyWeight Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Time input for this LogBodyWeight Choreo.
     *
     * @param string $value (optional, string) Time of the measurement; hours and minutes in the format HH:mm:ss; set to last second of the day if not provided.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the UserID input for this LogBodyWeight Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Weight input for this LogBodyWeight Choreo.
     *
     * @param float $value (required, decimal) A new value (in pounds) to log for weight. In the format of X.XX.
     * @return Fitbit_Body_LogBodyWeight_Inputs For method chaining.
     */
    public function setWeight($value)
    {
        return $this->set('Weight', $value);
    }
}


/**
 * Execution object for the LogBodyWeight Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyWeight_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogBodyWeight Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogBodyWeight execution.
     * @param Fitbit_Body_LogBodyWeight $choreo The choreography object for this execution.
     * @param Fitbit_Body_LogBodyWeight_Inputs|array $inputs (optional) Inputs as Fitbit_Body_LogBodyWeight_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_LogBodyWeight_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_LogBodyWeight $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogBodyWeight execution.
     *
     * @return Fitbit_Body_LogBodyWeight_Results New results object.
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
     * Wraps results in appropriate results class for this LogBodyWeight execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_LogBodyWeight_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_LogBodyWeight_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogBodyWeight Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyWeight_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogBodyWeight Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_LogBodyWeight_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogBodyWeight execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary and list of a user's food log entries for a specified date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoods extends Temboo_Choreography
{
    /**
     * Gets a summary and list of a user's food log entries for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetFoods Choreo.
     * @return Fitbit_Foods_GetFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/GetFoods/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFoods Choreo.
     *
     * @param Fitbit_Foods_GetFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_GetFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_GetFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_GetFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_GetFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFoods Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFoods Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_GetFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_GetFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetFoods Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_Foods_GetFoods_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFoods Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_GetFoods_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetFoods Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_GetFoods_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFoods Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFoods execution.
     * @param Fitbit_Foods_GetFoods $choreo The choreography object for this execution.
     * @param Fitbit_Foods_GetFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_GetFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFoods execution.
     *
     * @return Fitbit_Foods_GetFoods_Results New results object.
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
     * Wraps results in appropriate results class for this GetFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_GetFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_GetFoods_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFoods_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFoods Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_GetFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates or updates a user's weight goal.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_UpdateBodyWeightGoal extends Temboo_Choreography
{
    /**
     * Creates or updates a user's weight goal.
     *
     * @param Temboo_Session $session The session that owns this UpdateBodyWeightGoal Choreo.
     * @return Fitbit_Body_UpdateBodyWeightGoal New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/UpdateBodyWeightGoal/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateBodyWeightGoal Choreo.
     *
     * @param Fitbit_Body_UpdateBodyWeightGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Body_UpdateBodyWeightGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_UpdateBodyWeightGoal_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateBodyWeightGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_UpdateBodyWeightGoal_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateBodyWeightGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_UpdateBodyWeightGoal_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateBodyWeightGoal Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateBodyWeightGoal input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UpdateBodyWeightGoal Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateBodyWeightGoal Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UpdateBodyWeightGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UpdateBodyWeightGoal Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateBodyWeightGoal Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this UpdateBodyWeightGoal Choreo.
     *
     * @param string $value (required, date) Weight goal start date; in the format yyyy-MM-dd.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the StartWeight input for this UpdateBodyWeightGoal Choreo.
     *
     * @param float $value (required, decimal) Weight goal start weight; in the format X.XX.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setStartWeight($value)
    {
        return $this->set('StartWeight', $value);
    }

    /**
     * Set the value for the UserID input for this UpdateBodyWeightGoal Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the Weight input for this UpdateBodyWeightGoal Choreo.
     *
     * @param float $value (conditional, decimal) Weight goal target weight; in the format X.XX. Required if user doesn't have a weight goal.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Inputs For method chaining.
     */
    public function setWeight($value)
    {
        return $this->set('Weight', $value);
    }
}


/**
 * Execution object for the UpdateBodyWeightGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_UpdateBodyWeightGoal_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateBodyWeightGoal Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateBodyWeightGoal execution.
     * @param Fitbit_Body_UpdateBodyWeightGoal $choreo The choreography object for this execution.
     * @param Fitbit_Body_UpdateBodyWeightGoal_Inputs|array $inputs (optional) Inputs as Fitbit_Body_UpdateBodyWeightGoal_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_UpdateBodyWeightGoal $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateBodyWeightGoal execution.
     *
     * @return Fitbit_Body_UpdateBodyWeightGoal_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateBodyWeightGoal execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_UpdateBodyWeightGoal_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateBodyWeightGoal Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_UpdateBodyWeightGoal_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateBodyWeightGoal Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_UpdateBodyWeightGoal_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateBodyWeightGoal execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary of a user's body weight for a specified date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyWeight extends Temboo_Choreography
{
    /**
     * Gets a summary of a user's body weight for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetBodyWeight Choreo.
     * @return Fitbit_Body_GetBodyWeight New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/GetBodyWeight/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBodyWeight Choreo.
     *
     * @param Fitbit_Body_GetBodyWeight_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyWeight_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyWeight_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_GetBodyWeight_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBodyWeight Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyWeight_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_GetBodyWeight_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBodyWeight Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyWeight_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBodyWeight Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyWeight_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBodyWeight input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_GetBodyWeight_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_GetBodyWeight_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBodyWeight Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyWeight_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBodyWeight Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyWeight_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBodyWeight Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_GetBodyWeight_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBodyWeight Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_GetBodyWeight_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetBodyWeight Choreo.
     *
     * @param string $value (required, string) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd). Time periods and ranges are allowed by passing a range like 2013-03-16/2013-03-18 or 2013-03-18/1w.
     * @return Fitbit_Body_GetBodyWeight_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBodyWeight Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_GetBodyWeight_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetBodyWeight Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_GetBodyWeight_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetBodyWeight Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyWeight_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBodyWeight Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBodyWeight execution.
     * @param Fitbit_Body_GetBodyWeight $choreo The choreography object for this execution.
     * @param Fitbit_Body_GetBodyWeight_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyWeight_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyWeight_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_GetBodyWeight $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBodyWeight execution.
     *
     * @return Fitbit_Body_GetBodyWeight_Results New results object.
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
     * Wraps results in appropriate results class for this GetBodyWeight execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_GetBodyWeight_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_GetBodyWeight_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBodyWeight Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyWeight_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBodyWeight Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_GetBodyWeight_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBodyWeight execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's frequent foods.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFrequentFoods extends Temboo_Choreography
{
    /**
     * Gets a list of a user's frequent foods.
     *
     * @param Temboo_Session $session The session that owns this GetFrequentFoods Choreo.
     * @return Fitbit_Foods_GetFrequentFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/GetFrequentFoods/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFrequentFoods Choreo.
     *
     * @param Fitbit_Foods_GetFrequentFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFrequentFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFrequentFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_GetFrequentFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFrequentFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_GetFrequentFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFrequentFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFrequentFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFrequentFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFrequentFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFrequentFoods Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFrequentFoods Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFrequentFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFrequentFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFrequentFoods Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetFrequentFoods Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_GetFrequentFoods_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFrequentFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFrequentFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFrequentFoods Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFrequentFoods execution.
     * @param Fitbit_Foods_GetFrequentFoods $choreo The choreography object for this execution.
     * @param Fitbit_Foods_GetFrequentFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFrequentFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFrequentFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_GetFrequentFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFrequentFoods execution.
     *
     * @return Fitbit_Foods_GetFrequentFoods_Results New results object.
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
     * Wraps results in appropriate results class for this GetFrequentFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_GetFrequentFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_GetFrequentFoods_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFrequentFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFrequentFoods_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFrequentFoods Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_GetFrequentFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFrequentFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates log entry for a user's body fat.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyFat extends Temboo_Choreography
{
    /**
     * Creates log entry for a user's body fat.
     *
     * @param Temboo_Session $session The session that owns this LogBodyFat Choreo.
     * @return Fitbit_Body_LogBodyFat New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/LogBodyFat/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogBodyFat Choreo.
     *
     * @param Fitbit_Body_LogBodyFat_Inputs|array $inputs (optional) Inputs as Fitbit_Body_LogBodyFat_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_LogBodyFat_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_LogBodyFat_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogBodyFat Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_LogBodyFat_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_LogBodyFat_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogBodyFat Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyFat_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogBodyFat Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_LogBodyFat_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogBodyFat input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogBodyFat Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogBodyFat Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BodyFat input for this LogBodyFat Choreo.
     *
     * @param float $value (required, decimal) Body Fat; in the format X.XX
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setBodyFat($value)
    {
        return $this->set('BodyFat', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogBodyFat Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogBodyFat Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogBodyFat Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogBodyFat Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Time input for this LogBodyFat Choreo.
     *
     * @param string $value (optional, string) Time of the measurement; hours and minutes in the format HH:mm:ss; set to last second of the day if not provided.
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the UserID input for this LogBodyFat Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_LogBodyFat_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the LogBodyFat Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyFat_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogBodyFat Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogBodyFat execution.
     * @param Fitbit_Body_LogBodyFat $choreo The choreography object for this execution.
     * @param Fitbit_Body_LogBodyFat_Inputs|array $inputs (optional) Inputs as Fitbit_Body_LogBodyFat_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_LogBodyFat_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_LogBodyFat $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogBodyFat execution.
     *
     * @return Fitbit_Body_LogBodyFat_Results New results object.
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
     * Wraps results in appropriate results class for this LogBodyFat execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_LogBodyFat_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_LogBodyFat_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogBodyFat Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_LogBodyFat_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogBodyFat Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_LogBodyFat_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogBodyFat execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes user's heart rate log entry with the given id.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_DeleteHeartRateLog extends Temboo_Choreography
{
    /**
     * Deletes user's heart rate log entry with the given id.
     *
     * @param Temboo_Session $session The session that owns this DeleteHeartRateLog Choreo.
     * @return Fitbit_Heart_DeleteHeartRateLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Heart/DeleteHeartRateLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteHeartRateLog Choreo.
     *
     * @param Fitbit_Heart_DeleteHeartRateLog_Inputs|array $inputs (optional) Inputs as Fitbit_Heart_DeleteHeartRateLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Heart_DeleteHeartRateLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Heart_DeleteHeartRateLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteHeartRateLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Heart_DeleteHeartRateLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteHeartRateLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_DeleteHeartRateLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteHeartRateLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteHeartRateLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteHeartRateLog Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteHeartRateLog Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteHeartRateLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteHeartRateLog Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the HeartRateLogID input for this DeleteHeartRateLog Choreo.
     *
     * @param int $value (required, integer) The id of the heart rate log you want to delete.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs For method chaining.
     */
    public function setHeartRateLogID($value)
    {
        return $this->set('HeartRateLogID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteHeartRateLog Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteHeartRateLog Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Heart_DeleteHeartRateLog_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteHeartRateLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_DeleteHeartRateLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteHeartRateLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteHeartRateLog execution.
     * @param Fitbit_Heart_DeleteHeartRateLog $choreo The choreography object for this execution.
     * @param Fitbit_Heart_DeleteHeartRateLog_Inputs|array $inputs (optional) Inputs as Fitbit_Heart_DeleteHeartRateLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Heart_DeleteHeartRateLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Heart_DeleteHeartRateLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteHeartRateLog execution.
     *
     * @return Fitbit_Heart_DeleteHeartRateLog_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteHeartRateLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Heart_DeleteHeartRateLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Heart_DeleteHeartRateLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteHeartRateLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Heart_DeleteHeartRateLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteHeartRateLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Heart_DeleteHeartRateLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteHeartRateLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified food log entry.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteFoodLog extends Temboo_Choreography
{
    /**
     * Deletes a specified food log entry.
     *
     * @param Temboo_Session $session The session that owns this DeleteFoodLog Choreo.
     * @return Fitbit_Foods_DeleteFoodLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/DeleteFoodLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFoodLog Choreo.
     *
     * @param Fitbit_Foods_DeleteFoodLog_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_DeleteFoodLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_DeleteFoodLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_DeleteFoodLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFoodLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_DeleteFoodLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFoodLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteFoodLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFoodLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFoodLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFoodLog Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFoodLog Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteFoodLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteFoodLog Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the FoodLogID input for this DeleteFoodLog Choreo.
     *
     * @param int $value (required, integer) The id of the food log you want to delete. The Id is returned in the LogFood response.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs For method chaining.
     */
    public function setFoodLogID($value)
    {
        return $this->set('FoodLogID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteFoodLog Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteFoodLog Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_DeleteFoodLog_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteFoodLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteFoodLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFoodLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFoodLog execution.
     * @param Fitbit_Foods_DeleteFoodLog $choreo The choreography object for this execution.
     * @param Fitbit_Foods_DeleteFoodLog_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_DeleteFoodLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_DeleteFoodLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_DeleteFoodLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFoodLog execution.
     *
     * @return Fitbit_Foods_DeleteFoodLog_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteFoodLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_DeleteFoodLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_DeleteFoodLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFoodLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_DeleteFoodLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFoodLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_DeleteFoodLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFoodLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a user's friends leaderboard.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetFriendsLeaderboard extends Temboo_Choreography
{
    /**
     * Gets a user's friends leaderboard.
     *
     * @param Temboo_Session $session The session that owns this GetFriendsLeaderboard Choreo.
     * @return Fitbit_Social_GetFriendsLeaderboard New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Social/GetFriendsLeaderboard/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFriendsLeaderboard Choreo.
     *
     * @param Fitbit_Social_GetFriendsLeaderboard_Inputs|array $inputs (optional) Inputs as Fitbit_Social_GetFriendsLeaderboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_GetFriendsLeaderboard_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Social_GetFriendsLeaderboard_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFriendsLeaderboard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Social_GetFriendsLeaderboard_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFriendsLeaderboard Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetFriendsLeaderboard_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFriendsLeaderboard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFriendsLeaderboard input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFriendsLeaderboard Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFriendsLeaderboard Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFriendsLeaderboard Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFriendsLeaderboard Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFriendsLeaderboard Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetFriendsLeaderboard Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Social_GetFriendsLeaderboard_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFriendsLeaderboard Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetFriendsLeaderboard_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFriendsLeaderboard Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFriendsLeaderboard execution.
     * @param Fitbit_Social_GetFriendsLeaderboard $choreo The choreography object for this execution.
     * @param Fitbit_Social_GetFriendsLeaderboard_Inputs|array $inputs (optional) Inputs as Fitbit_Social_GetFriendsLeaderboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_GetFriendsLeaderboard_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Social_GetFriendsLeaderboard $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFriendsLeaderboard execution.
     *
     * @return Fitbit_Social_GetFriendsLeaderboard_Results New results object.
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
     * Wraps results in appropriate results class for this GetFriendsLeaderboard execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Social_GetFriendsLeaderboard_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Social_GetFriendsLeaderboard_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFriendsLeaderboard Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetFriendsLeaderboard_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFriendsLeaderboard Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Social_GetFriendsLeaderboard_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFriendsLeaderboard execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Invites a user to become friends with authorized user.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_CreateInvite extends Temboo_Choreography
{
    /**
     * Invites a user to become friends with authorized user.
     *
     * @param Temboo_Session $session The session that owns this CreateInvite Choreo.
     * @return Fitbit_Social_CreateInvite New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Social/CreateInvite/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateInvite Choreo.
     *
     * @param Fitbit_Social_CreateInvite_Inputs|array $inputs (optional) Inputs as Fitbit_Social_CreateInvite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_CreateInvite_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Social_CreateInvite_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateInvite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_CreateInvite_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Social_CreateInvite_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateInvite Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_CreateInvite_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateInvite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_CreateInvite_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateInvite input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateInvite Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateInvite Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this CreateInvite Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CreateInvite Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the InvitedUserEmail input for this CreateInvite Choreo.
     *
     * @param string $value (conditional, string) The email address of the user to invite; user can be a Fitbit member already. Required unless providing the InvitedUserID.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function setInvitedUserEmail($value)
    {
        return $this->set('InvitedUserEmail', $value);
    }

    /**
     * Set the value for the InvitedUserID input for this CreateInvite Choreo.
     *
     * @param string $value (conditional, string) The Fitbit user id of the user to send an invite to. Required unless providing the InvitedUserEmail.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function setInvitedUserID($value)
    {
        return $this->set('InvitedUserID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateInvite Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this CreateInvite Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Social_CreateInvite_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the CreateInvite Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_CreateInvite_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateInvite Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateInvite execution.
     * @param Fitbit_Social_CreateInvite $choreo The choreography object for this execution.
     * @param Fitbit_Social_CreateInvite_Inputs|array $inputs (optional) Inputs as Fitbit_Social_CreateInvite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_CreateInvite_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Social_CreateInvite $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateInvite execution.
     *
     * @return Fitbit_Social_CreateInvite_Results New results object.
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
     * Wraps results in appropriate results class for this CreateInvite execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Social_CreateInvite_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Social_CreateInvite_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateInvite Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_CreateInvite_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateInvite Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Social_CreateInvite_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateInvite execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's frequent activities.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetFrequentActivities extends Temboo_Choreography
{
    /**
     * Gets a list of a user's frequent activities.
     *
     * @param Temboo_Session $session The session that owns this GetFrequentActivities Choreo.
     * @return Fitbit_Activities_GetFrequentActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Activities/GetFrequentActivities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFrequentActivities Choreo.
     *
     * @param Fitbit_Activities_GetFrequentActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_GetFrequentActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_GetFrequentActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Activities_GetFrequentActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFrequentActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Activities_GetFrequentActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFrequentActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetFrequentActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFrequentActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFrequentActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFrequentActivities Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFrequentActivities Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFrequentActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFrequentActivities Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFrequentActivities Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetFrequentActivities Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Activities_GetFrequentActivities_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFrequentActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetFrequentActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFrequentActivities Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFrequentActivities execution.
     * @param Fitbit_Activities_GetFrequentActivities $choreo The choreography object for this execution.
     * @param Fitbit_Activities_GetFrequentActivities_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_GetFrequentActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_GetFrequentActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Activities_GetFrequentActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFrequentActivities execution.
     *
     * @return Fitbit_Activities_GetFrequentActivities_Results New results object.
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
     * Wraps results in appropriate results class for this GetFrequentActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Activities_GetFrequentActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Activities_GetFrequentActivities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFrequentActivities Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_GetFrequentActivities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFrequentActivities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Activities_GetFrequentActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFrequentActivities execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Log a new food entry for a particular date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_LogFood extends Temboo_Choreography
{
    /**
     * Log a new food entry for a particular date.
     *
     * @param Temboo_Session $session The session that owns this LogFood Choreo.
     * @return Fitbit_Foods_LogFood New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/LogFood/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogFood Choreo.
     *
     * @param Fitbit_Foods_LogFood_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_LogFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_LogFood_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_LogFood_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogFood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_LogFood_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_LogFood_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_LogFood_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogFood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_LogFood_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogFood input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogFood Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogFood Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Amount input for this LogFood Choreo.
     *
     * @param int $value (required, integer) The amount of food consumed formatted like X.XX. Note that this input corresponds with the UnitId input.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogFood Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogFood Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogFood Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Favorite input for this LogFood Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to add food to favorites after creating log entry. Defaults to 0 for false.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setFavorite($value)
    {
        return $this->set('Favorite', $value);
    }

    /**
     * Set the value for the FoodID input for this LogFood Choreo.
     *
     * @param int $value (required, integer) The id of the food to create a log entry for.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setFoodID($value)
    {
        return $this->set('FoodID', $value);
    }

    /**
     * Set the value for the MealType input for this LogFood Choreo.
     *
     * @param string $value (required, string) The type of meal. Valid values: Breakfast, Morning Snack, Lunch, Afternoon Snack, Dinner, Anytime.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setMealType($value)
    {
        return $this->set('MealType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogFood Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UnitID input for this LogFood Choreo.
     *
     * @param int $value (required, integer) This id can be retrieved through other calls such as: Get Foods (Recent, Frequent, Favorite), Search Foods or Get Food Units.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setUnitID($value)
    {
        return $this->set('UnitID', $value);
    }

    /**
     * Set the value for the UserID input for this LogFood Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_LogFood_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the LogFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_LogFood_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogFood Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogFood execution.
     * @param Fitbit_Foods_LogFood $choreo The choreography object for this execution.
     * @param Fitbit_Foods_LogFood_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_LogFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_LogFood_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_LogFood $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogFood execution.
     *
     * @return Fitbit_Foods_LogFood_Results New results object.
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
     * Wraps results in appropriate results class for this LogFood execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_LogFood_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_LogFood_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogFood Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_LogFood_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogFood Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_LogFood_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogFood execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's favorite foods.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFavoriteFoods extends Temboo_Choreography
{
    /**
     * Gets a list of a user's favorite foods.
     *
     * @param Temboo_Session $session The session that owns this GetFavoriteFoods Choreo.
     * @return Fitbit_Foods_GetFavoriteFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Foods/GetFavoriteFoods/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFavoriteFoods Choreo.
     *
     * @param Fitbit_Foods_GetFavoriteFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFavoriteFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFavoriteFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Foods_GetFavoriteFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFavoriteFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Foods_GetFavoriteFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFavoriteFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFavoriteFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFavoriteFoods Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFavoriteFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFavoriteFoods Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFavoriteFoods Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFavoriteFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFavoriteFoods Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFavoriteFoods Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetFavoriteFoods Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Foods_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFavoriteFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFavoriteFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFavoriteFoods Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFavoriteFoods execution.
     * @param Fitbit_Foods_GetFavoriteFoods $choreo The choreography object for this execution.
     * @param Fitbit_Foods_GetFavoriteFoods_Inputs|array $inputs (optional) Inputs as Fitbit_Foods_GetFavoriteFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Foods_GetFavoriteFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Foods_GetFavoriteFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFavoriteFoods execution.
     *
     * @return Fitbit_Foods_GetFavoriteFoods_Results New results object.
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
     * Wraps results in appropriate results class for this GetFavoriteFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Foods_GetFavoriteFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Foods_GetFavoriteFoods_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFavoriteFoods Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Foods_GetFavoriteFoods_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFavoriteFoods Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Foods_GetFavoriteFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFavoriteFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete user's body weight fat log entry with the given id.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_DeleteBodyFatLog extends Temboo_Choreography
{
    /**
     * Delete user's body weight fat log entry with the given id.
     *
     * @param Temboo_Session $session The session that owns this DeleteBodyFatLog Choreo.
     * @return Fitbit_Body_DeleteBodyFatLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/DeleteBodyFatLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteBodyFatLog Choreo.
     *
     * @param Fitbit_Body_DeleteBodyFatLog_Inputs|array $inputs (optional) Inputs as Fitbit_Body_DeleteBodyFatLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_DeleteBodyFatLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_DeleteBodyFatLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteBodyFatLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_DeleteBodyFatLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteBodyFatLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_DeleteBodyFatLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteBodyFatLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteBodyFatLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteBodyFatLog Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteBodyFatLog Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BodyFatLogID input for this DeleteBodyFatLog Choreo.
     *
     * @param int $value (required, integer) The id of the body fat log entry.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs For method chaining.
     */
    public function setBodyFatLogID($value)
    {
        return $this->set('BodyFatLogID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteBodyFatLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteBodyFatLog Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteBodyFatLog Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteBodyFatLog Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_DeleteBodyFatLog_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteBodyFatLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_DeleteBodyFatLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteBodyFatLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteBodyFatLog execution.
     * @param Fitbit_Body_DeleteBodyFatLog $choreo The choreography object for this execution.
     * @param Fitbit_Body_DeleteBodyFatLog_Inputs|array $inputs (optional) Inputs as Fitbit_Body_DeleteBodyFatLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_DeleteBodyFatLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_DeleteBodyFatLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteBodyFatLog execution.
     *
     * @return Fitbit_Body_DeleteBodyFatLog_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteBodyFatLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_DeleteBodyFatLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_DeleteBodyFatLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteBodyFatLog Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_DeleteBodyFatLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteBodyFatLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_DeleteBodyFatLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteBodyFatLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a list of all user's body fat log entries for a given day.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyFat extends Temboo_Choreography
{
    /**
     * Get a list of all user's body fat log entries for a given day.
     *
     * @param Temboo_Session $session The session that owns this GetBodyFat Choreo.
     * @return Fitbit_Body_GetBodyFat New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Body/GetBodyFat/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBodyFat Choreo.
     *
     * @param Fitbit_Body_GetBodyFat_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyFat_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyFat_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Body_GetBodyFat_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBodyFat Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyFat_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Body_GetBodyFat_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBodyFat Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyFat_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBodyFat Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Body_GetBodyFat_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBodyFat input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Body_GetBodyFat_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Body_GetBodyFat_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBodyFat Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyFat_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBodyFat Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Body_GetBodyFat_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBodyFat Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Body_GetBodyFat_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBodyFat Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Body_GetBodyFat_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetBodyFat Choreo.
     *
     * @param string $value (required, string) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd). Time periods and ranges are allowed by passing a range like 2013-03-16/2013-03-18 or 2013-03-18/1w.
     * @return Fitbit_Body_GetBodyFat_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBodyFat Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Body_GetBodyFat_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetBodyFat Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Body_GetBodyFat_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetBodyFat Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyFat_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBodyFat Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBodyFat execution.
     * @param Fitbit_Body_GetBodyFat $choreo The choreography object for this execution.
     * @param Fitbit_Body_GetBodyFat_Inputs|array $inputs (optional) Inputs as Fitbit_Body_GetBodyFat_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Body_GetBodyFat_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Body_GetBodyFat $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBodyFat execution.
     *
     * @return Fitbit_Body_GetBodyFat_Results New results object.
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
     * Wraps results in appropriate results class for this GetBodyFat execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Body_GetBodyFat_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Body_GetBodyFat_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBodyFat Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Body_GetBodyFat_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBodyFat Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Body_GetBodyFat_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBodyFat execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Log a new activity for a particular date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_LogActivity extends Temboo_Choreography
{
    /**
     * Log a new activity for a particular date.
     *
     * @param Temboo_Session $session The session that owns this LogActivity Choreo.
     * @return Fitbit_Activities_LogActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Activities/LogActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LogActivity Choreo.
     *
     * @param Fitbit_Activities_LogActivity_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_LogActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_LogActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Activities_LogActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_LogActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Activities_LogActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogActivity Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_LogActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LogActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Activities_LogActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogActivity Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this LogActivity Choreo.
     *
     * @param int $value (conditional, integer) This can be the id of the activity, directory activity, or intensity level activity.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }

    /**
     * Set the value for the ActivityName input for this LogActivity Choreo.
     *
     * @param string $value (conditional, string) Custom activity name; either activityId or activityName should be provided.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setActivityName($value)
    {
        return $this->set('ActivityName', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogActivity Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogActivity Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogActivity Choreo.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the DistanceUnit input for this LogActivity Choreo.
     *
     * @param string $value (conditional, string) Corresponds with the Distance parameter (i.e. Mile). See Choreo documentation for links to unit charts.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setDistanceUnit($value)
    {
        return $this->set('DistanceUnit', $value);
    }

    /**
     * Set the value for the Distance input for this LogActivity Choreo.
     *
     * @param float $value (conditional, decimal) The activity distance. Used when activityId corresponds to 'Running'  or 'Walking' for example.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the Duration input for this LogActivity Choreo.
     *
     * @param int $value (required, integer) The duration of the activity in milliseconds.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the ManualCalories input for this LogActivity Choreo.
     *
     * @param int $value (conditional, integer) The amount of calories defined manually; required when using the ActivityName parameter, otherwise optional.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setManualCalories($value)
    {
        return $this->set('ManualCalories', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LogActivity Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartTime input for this LogActivity Choreo.
     *
     * @param string $value (required, string) The hour and minutes for the start of the activity formatted like HH:mm.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setStartTime($value)
    {
        return $this->set('StartTime', $value);
    }

    /**
     * Set the value for the UserID input for this LogActivity Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Activities_LogActivity_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the LogActivity Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_LogActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this LogActivity execution.
     * @param Fitbit_Activities_LogActivity $choreo The choreography object for this execution.
     * @param Fitbit_Activities_LogActivity_Inputs|array $inputs (optional) Inputs as Fitbit_Activities_LogActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Activities_LogActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Activities_LogActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogActivity execution.
     *
     * @return Fitbit_Activities_LogActivity_Results New results object.
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
     * Wraps results in appropriate results class for this LogActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Activities_LogActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Activities_LogActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LogActivity Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Activities_LogActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LogActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Activities_LogActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LogActivity execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a user's badges.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetBadges extends Temboo_Choreography
{
    /**
     * Gets a user's badges.
     *
     * @param Temboo_Session $session The session that owns this GetBadges Choreo.
     * @return Fitbit_Social_GetBadges New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/Social/GetBadges/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBadges Choreo.
     *
     * @param Fitbit_Social_GetBadges_Inputs|array $inputs (optional) Inputs as Fitbit_Social_GetBadges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_GetBadges_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_Social_GetBadges_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBadges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_GetBadges_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_Social_GetBadges_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBadges Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetBadges_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBadges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_Social_GetBadges_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBadges input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_Social_GetBadges_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Fitbit_Social_GetBadges_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBadges Choreo.
     *
     * @param string $value (conditional, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_Social_GetBadges_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBadges Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_Social_GetBadges_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBadges Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_Social_GetBadges_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBadges Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_Social_GetBadges_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBadges Choreo.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to json.
     * @return Fitbit_Social_GetBadges_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetBadges Choreo.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_Social_GetBadges_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetBadges Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetBadges_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBadges Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBadges execution.
     * @param Fitbit_Social_GetBadges $choreo The choreography object for this execution.
     * @param Fitbit_Social_GetBadges_Inputs|array $inputs (optional) Inputs as Fitbit_Social_GetBadges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_Social_GetBadges_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_Social_GetBadges $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBadges execution.
     *
     * @return Fitbit_Social_GetBadges_Results New results object.
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
     * Wraps results in appropriate results class for this GetBadges execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_Social_GetBadges_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_Social_GetBadges_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBadges Choreo.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_Social_GetBadges_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBadges Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_Social_GetBadges_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBadges execution.
     *
     * @return string The response from Fitbit.
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
<?php

/**
 * Temboo PHP SDK Utilities classes
 *
 * Execute Choreographies from the Temboo Utilities bundle.
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
 * @subpackage Utilities
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Generates a HTTP PUT request.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Put extends Temboo_Choreography
{
    /**
     * Generates a HTTP PUT request.
     *
     * @param Temboo_Session $session The session that owns this Put Choreo.
     * @return Utilities_HTTP_Put New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/HTTP/Put/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Put Choreo.
     *
     * @param Utilities_HTTP_Put_Inputs|array $inputs (optional) Inputs as Utilities_HTTP_Put_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_HTTP_Put_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_HTTP_Put_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Put Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_HTTP_Put_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_HTTP_Put_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Put Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Put_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Put Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_HTTP_Put_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Put input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_HTTP_Put_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_HTTP_Put_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the RequestBody input for this Put Choreo.
     *
     * @param string $value (optional, multiline) The request body for the PUT request.
     * @return Utilities_HTTP_Put_Inputs For method chaining.
     */
    public function setRequestBody($value)
    {
        return $this->set('RequestBody', $value);
    }

    /**
     * Set the value for the Password input for this Put Choreo.
     *
     * @param string $value (optional, string) A valid password. This is used if the request required basic authentication.
     * @return Utilities_HTTP_Put_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RequestHeaders input for this Put Choreo.
     *
     * @param string $value (optional, json) A JSON object containing up to 10 key/value pairs that will be mapped to the HTTP request headers.
     * @return Utilities_HTTP_Put_Inputs For method chaining.
     */
    public function setRequestHeaders($value)
    {
        return $this->set('RequestHeaders', $value);
    }

    /**
     * Set the value for the RequestParameters input for this Put Choreo.
     *
     * @param string $value (optional, json) A JSON object containing up to 10 key/value pairs that will be mapped to the url string as HTTP parameters.
     * @return Utilities_HTTP_Put_Inputs For method chaining.
     */
    public function setRequestParameters($value)
    {
        return $this->set('RequestParameters', $value);
    }

    /**
     * Set the value for the URL input for this Put Choreo.
     *
     * @param string $value (required, string) The base URL for the request (including http:// or https://).
     * @return Utilities_HTTP_Put_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Username input for this Put Choreo.
     *
     * @param string $value (optional, string) A valid username. This is used if the request required basic authentication.
     * @return Utilities_HTTP_Put_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the Put Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Put_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Put Choreo.
     *
     * @param Temboo_Session $session The session that owns this Put execution.
     * @param Utilities_HTTP_Put $choreo The choreography object for this execution.
     * @param Utilities_HTTP_Put_Inputs|array $inputs (optional) Inputs as Utilities_HTTP_Put_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_HTTP_Put_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_HTTP_Put $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Put execution.
     *
     * @return Utilities_HTTP_Put_Results New results object.
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
     * Wraps results in appropriate results class for this Put execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_HTTP_Put_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_HTTP_Put_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Put Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Put_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Put Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_HTTP_Put_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "HTTPLog" output from this Put execution.
     *
     * @return string (string) A log of the http request that has been generated.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHTTPLog()
    {
        return $this->get('HTTPLog');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this Put execution.
     *
     * @return int (integer) The response status code.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
    /**
     * Retrieve the value for the "Response" output from this Put execution.
     *
     * @return string The response from the server.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Verifies that a given zip code matches the format expected for Russian addresses.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_RussianPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for Russian addresses.
     *
     * @param Temboo_Session $session The session that owns this RussianPostalCodes Choreo.
     * @return Utilities_Validation_RussianPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Validation/RussianPostalCodes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RussianPostalCodes Choreo.
     *
     * @param Utilities_Validation_RussianPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_RussianPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_RussianPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Validation_RussianPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RussianPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_RussianPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Validation_RussianPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RussianPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_RussianPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RussianPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_RussianPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RussianPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Validation_RussianPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Validation_RussianPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this RussianPostalCodes Choreo.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Utilities_Validation_RussianPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the RussianPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_RussianPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RussianPostalCodes Choreo.
     *
     * @param Temboo_Session $session The session that owns this RussianPostalCodes execution.
     * @param Utilities_Validation_RussianPostalCodes $choreo The choreography object for this execution.
     * @param Utilities_Validation_RussianPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_RussianPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_RussianPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Validation_RussianPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RussianPostalCodes execution.
     *
     * @return Utilities_Validation_RussianPostalCodes_Results New results object.
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
     * Wraps results in appropriate results class for this RussianPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Validation_RussianPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Validation_RussianPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RussianPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_RussianPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RussianPostalCodes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Validation_RussianPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Match" output from this RussianPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Returns the specified date parameters as the number of milliseconds since January 1, 1970 (epoch time).
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_FormatDateParameters extends Temboo_Choreography
{
    /**
     * Returns the specified date parameters as the number of milliseconds since January 1, 1970 (epoch time).
     *
     * @param Temboo_Session $session The session that owns this FormatDateParameters Choreo.
     * @return Utilities_Formatting_FormatDateParameters New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Formatting/FormatDateParameters/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FormatDateParameters Choreo.
     *
     * @param Utilities_Formatting_FormatDateParameters_Inputs|array $inputs (optional) Inputs as Utilities_Formatting_FormatDateParameters_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Formatting_FormatDateParameters_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Formatting_FormatDateParameters_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FormatDateParameters Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Formatting_FormatDateParameters_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Formatting_FormatDateParameters_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FormatDateParameters Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_FormatDateParameters_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FormatDateParameters Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Formatting_FormatDateParameters_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FormatDateParameters input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Formatting_FormatDateParameters_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Formatting_FormatDateParameters_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Day input for this FormatDateParameters Choreo.
     *
     * @param int $value (required, integer) Sets the day (1–31) of the timestamp.
     * @return Utilities_Formatting_FormatDateParameters_Inputs For method chaining.
     */
    public function setDay($value)
    {
        return $this->set('Day', $value);
    }

    /**
     * Set the value for the Hour input for this FormatDateParameters Choreo.
     *
     * @param int $value (optional, integer) Sets the hours (0–23) of the timestamp.
     * @return Utilities_Formatting_FormatDateParameters_Inputs For method chaining.
     */
    public function setHour($value)
    {
        return $this->set('Hour', $value);
    }

    /**
     * Set the value for the Minute input for this FormatDateParameters Choreo.
     *
     * @param int $value (optional, integer) Sets the minutes (0–59) of the timestamp.
     * @return Utilities_Formatting_FormatDateParameters_Inputs For method chaining.
     */
    public function setMinute($value)
    {
        return $this->set('Minute', $value);
    }

    /**
     * Set the value for the Month input for this FormatDateParameters Choreo.
     *
     * @param int $value (required, integer) Sets the month (1–12) of the timestamp.
     * @return Utilities_Formatting_FormatDateParameters_Inputs For method chaining.
     */
    public function setMonth($value)
    {
        return $this->set('Month', $value);
    }

    /**
     * Set the value for the Second input for this FormatDateParameters Choreo.
     *
     * @param int $value (optional, integer) Sets the seconds (0–59) of the timestamp.
     * @return Utilities_Formatting_FormatDateParameters_Inputs For method chaining.
     */
    public function setSecond($value)
    {
        return $this->set('Second', $value);
    }

    /**
     * Set the value for the Year input for this FormatDateParameters Choreo.
     *
     * @param int $value (required, integer) Sets the year of the timestamp.
     * @return Utilities_Formatting_FormatDateParameters_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the FormatDateParameters Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_FormatDateParameters_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FormatDateParameters Choreo.
     *
     * @param Temboo_Session $session The session that owns this FormatDateParameters execution.
     * @param Utilities_Formatting_FormatDateParameters $choreo The choreography object for this execution.
     * @param Utilities_Formatting_FormatDateParameters_Inputs|array $inputs (optional) Inputs as Utilities_Formatting_FormatDateParameters_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Formatting_FormatDateParameters_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Formatting_FormatDateParameters $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FormatDateParameters execution.
     *
     * @return Utilities_Formatting_FormatDateParameters_Results New results object.
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
     * Wraps results in appropriate results class for this FormatDateParameters execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Formatting_FormatDateParameters_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Formatting_FormatDateParameters_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FormatDateParameters Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_FormatDateParameters_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FormatDateParameters Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Formatting_FormatDateParameters_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Timestamp" output from this FormatDateParameters execution.
     *
     * @return string (date) A number representing the specified date and time, expressed as the number of milliseconds since January 1, 1970 (epoch time). 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTimestamp()
    {
        return $this->get('Timestamp');
    }
}

/**
 * Converts Excel (.xls) formatted data to XML.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XLSToXML extends Temboo_Choreography
{
    /**
     * Converts Excel (.xls) formatted data to XML.
     *
     * @param Temboo_Session $session The session that owns this XLSToXML Choreo.
     * @return Utilities_DataConversions_XLSToXML New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/XLSToXML/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this XLSToXML Choreo.
     *
     * @param Utilities_DataConversions_XLSToXML_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XLSToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XLSToXML_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_XLSToXML_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this XLSToXML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XLSToXML_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_XLSToXML_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the XLSToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XLSToXML_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the XLSToXML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XLSToXML_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this XLSToXML input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_XLSToXML_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_XLSToXML_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XLS input for this XLSToXML Choreo.
     *
     * @param string $value (conditional, string) The base64-encoded contents of the Excel file that you want to convert to XML. Compatible with Excel 97-2003.
     * @return Utilities_DataConversions_XLSToXML_Inputs For method chaining.
     */
    public function setXLS($value)
    {
        return $this->set('XLS', $value);
    }

}


/**
 * Execution object for the XLSToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XLSToXML_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the XLSToXML Choreo.
     *
     * @param Temboo_Session $session The session that owns this XLSToXML execution.
     * @param Utilities_DataConversions_XLSToXML $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_XLSToXML_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XLSToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XLSToXML_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_XLSToXML $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this XLSToXML execution.
     *
     * @return Utilities_DataConversions_XLSToXML_Results New results object.
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
     * Wraps results in appropriate results class for this XLSToXML execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_XLSToXML_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_XLSToXML_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the XLSToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XLSToXML_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the XLSToXML Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_XLSToXML_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "XML" output from this XLSToXML execution.
     *
     * @return string (xml) The data in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getXML()
    {
        return $this->get('XML');
    }
}

/**
 * Converts an XML file to TSV format (TAB-separated values).
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToTSV extends Temboo_Choreography
{
    /**
     * Converts an XML file to TSV format (TAB-separated values).
     *
     * @param Temboo_Session $session The session that owns this XMLToTSV Choreo.
     * @return Utilities_DataConversions_XMLToTSV New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/XMLToTSV/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this XMLToTSV Choreo.
     *
     * @param Utilities_DataConversions_XMLToTSV_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XMLToTSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XMLToTSV_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_XMLToTSV_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this XMLToTSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XMLToTSV_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_XMLToTSV_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the XMLToTSV Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToTSV_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the XMLToTSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XMLToTSV_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this XMLToTSV input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_XMLToTSV_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_XMLToTSV_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XML input for this XMLToTSV Choreo.
     *
     * @param string $value (required, xml) The XML file to convert to TSV data.
     * @return Utilities_DataConversions_XMLToTSV_Inputs For method chaining.
     */
    public function setXML($value)
    {
        return $this->set('XML', $value);
    }

    /**
     * Set the value for the Path input for this XMLToTSV Choreo.
     *
     * @param string $value (optional, string) If your XML is not in "/rowset/row/column_name" format, specify a path to the rows. See documentation for examples.
     * @return Utilities_DataConversions_XMLToTSV_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the XMLToTSV Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToTSV_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the XMLToTSV Choreo.
     *
     * @param Temboo_Session $session The session that owns this XMLToTSV execution.
     * @param Utilities_DataConversions_XMLToTSV $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_XMLToTSV_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XMLToTSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XMLToTSV_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_XMLToTSV $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this XMLToTSV execution.
     *
     * @return Utilities_DataConversions_XMLToTSV_Results New results object.
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
     * Wraps results in appropriate results class for this XMLToTSV execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_XMLToTSV_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_XMLToTSV_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the XMLToTSV Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToTSV_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the XMLToTSV Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_XMLToTSV_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "TSV" output from this XMLToTSV execution.
     *
     * @return string (multiline) The tab-separated data generated from the XML input.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTSV()
    {
        return $this->get('TSV');
    }
}

/**
 * Returns the specified date serial number in the desired format.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_FormatTimestamp extends Temboo_Choreography
{
    /**
     * Returns the specified date serial number in the desired format.
     *
     * @param Temboo_Session $session The session that owns this FormatTimestamp Choreo.
     * @return Utilities_Formatting_FormatTimestamp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Formatting/FormatTimestamp/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FormatTimestamp Choreo.
     *
     * @param Utilities_Formatting_FormatTimestamp_Inputs|array $inputs (optional) Inputs as Utilities_Formatting_FormatTimestamp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Formatting_FormatTimestamp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Formatting_FormatTimestamp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FormatTimestamp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Formatting_FormatTimestamp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Formatting_FormatTimestamp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FormatTimestamp Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_FormatTimestamp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FormatTimestamp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Formatting_FormatTimestamp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FormatTimestamp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AddDays input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Adds the specified number of days to the specified date serial number. A negative number will subtract.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setAddDays($value)
    {
        return $this->set('AddDays', $value);
    }

    /**
     * Set the value for the AddHours input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Adds the specified number of hours to the specified date serial number. A negative number will subtract.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setAddHours($value)
    {
        return $this->set('AddHours', $value);
    }

    /**
     * Set the value for the AddMinutes input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Adds the specified number of minutes to the specified date serial number. A negative number will subtract.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setAddMinutes($value)
    {
        return $this->set('AddMinutes', $value);
    }

    /**
     * Set the value for the AddMonths input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Adds the specified number of months to the specified date serial number. A negative number will subtract.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setAddMonths($value)
    {
        return $this->set('AddMonths', $value);
    }

    /**
     * Set the value for the AddSeconds input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Adds the specified number of seconds to the specified date serial number. A negative number will subtract.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setAddSeconds($value)
    {
        return $this->set('AddSeconds', $value);
    }

    /**
     * Set the value for the AddYears input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Adds the specified number of years to the specified date serial number. A negative number will subtract.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setAddYears($value)
    {
        return $this->set('AddYears', $value);
    }

    /**
     * Set the value for the Format input for this FormatTimestamp Choreo.
     *
     * @param string $value (conditional, string) The format that the timestamp should be in. Java SimpleDateFormat conventions are supported. Defaults to "yyyy-MM-dd'T'HH:mm:ss.SSSZ".
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the LocaleCountry input for this FormatTimestamp Choreo.
     *
     * @param string $value (optional, string) An ISO country code to specify locale.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setLocaleCountry($value)
    {
        return $this->set('LocaleCountry', $value);
    }

    /**
     * Set the value for the LocaleLanguage input for this FormatTimestamp Choreo.
     *
     * @param string $value (optional, string) An ISO language code to specify locale.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setLocaleLanguage($value)
    {
        return $this->set('LocaleLanguage', $value);
    }

    /**
     * Set the value for the LocaleVariant input for this FormatTimestamp Choreo.
     *
     * @param string $value (optional, string) A local variant code such as "NY" to add additional context for a locale.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setLocaleVariant($value)
    {
        return $this->set('LocaleVariant', $value);
    }

    /**
     * Set the value for the SetDay input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Sets the day of month (1–31) of the specified date serial number.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setSetDay($value)
    {
        return $this->set('SetDay', $value);
    }

    /**
     * Set the value for the SetHour input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Sets the hours (0–23) of the specified date serial number.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setSetHour($value)
    {
        return $this->set('SetHour', $value);
    }

    /**
     * Set the value for the SetMinute input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Sets the minutes (0–59) of the specified date serial number.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setSetMinute($value)
    {
        return $this->set('SetMinute', $value);
    }

    /**
     * Set the value for the SetMonth input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Sets the month (1–12) of the specified date serial number.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setSetMonth($value)
    {
        return $this->set('SetMonth', $value);
    }

    /**
     * Set the value for the SetSecond input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Sets the seconds (0–59) of the specified date serial number.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setSetSecond($value)
    {
        return $this->set('SetSecond', $value);
    }

    /**
     * Set the value for the SetYear input for this FormatTimestamp Choreo.
     *
     * @param int $value (optional, integer) Sets the year (such as 1989) of the specified date serial number.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setSetYear($value)
    {
        return $this->set('SetYear', $value);
    }

    /**
     * Set the value for the TimeZone input for this FormatTimestamp Choreo.
     *
     * @param string $value (optional, string) The timezone to use for the date formatting function. Defaults to UTC.
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setTimeZone($value)
    {
        return $this->set('TimeZone', $value);
    }

    /**
     * Set the value for the Timestamp input for this FormatTimestamp Choreo.
     *
     * @param string $value (conditional, date) A number representing the current date and time, expressed as the number of milliseconds since January 1, 1970 (epoch time).
     * @return Utilities_Formatting_FormatTimestamp_Inputs For method chaining.
     */
    public function setTimestamp($value)
    {
        return $this->set('Timestamp', $value);
    }
}


/**
 * Execution object for the FormatTimestamp Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_FormatTimestamp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FormatTimestamp Choreo.
     *
     * @param Temboo_Session $session The session that owns this FormatTimestamp execution.
     * @param Utilities_Formatting_FormatTimestamp $choreo The choreography object for this execution.
     * @param Utilities_Formatting_FormatTimestamp_Inputs|array $inputs (optional) Inputs as Utilities_Formatting_FormatTimestamp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Formatting_FormatTimestamp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Formatting_FormatTimestamp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FormatTimestamp execution.
     *
     * @return Utilities_Formatting_FormatTimestamp_Results New results object.
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
     * Wraps results in appropriate results class for this FormatTimestamp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Formatting_FormatTimestamp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Formatting_FormatTimestamp_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FormatTimestamp Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_FormatTimestamp_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FormatTimestamp Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Formatting_FormatTimestamp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "FormattedDate" output from this FormatTimestamp execution.
     *
     * @return string (date) The formatted version of the timestamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getFormattedDate()
    {
        return $this->get('FormattedDate');
    }
}

/**
 * Returns the specified formatted text as a compact string with no new lines, tabs, or preceding/trailing white space.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_RemoveWhiteSpace extends Temboo_Choreography
{
    /**
     * Returns the specified formatted text as a compact string with no new lines, tabs, or preceding/trailing white space.
     *
     * @param Temboo_Session $session The session that owns this RemoveWhiteSpace Choreo.
     * @return Utilities_Formatting_RemoveWhiteSpace New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Formatting/RemoveWhiteSpace/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RemoveWhiteSpace Choreo.
     *
     * @param Utilities_Formatting_RemoveWhiteSpace_Inputs|array $inputs (optional) Inputs as Utilities_Formatting_RemoveWhiteSpace_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Formatting_RemoveWhiteSpace_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Formatting_RemoveWhiteSpace_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveWhiteSpace Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Formatting_RemoveWhiteSpace_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Formatting_RemoveWhiteSpace_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveWhiteSpace Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_RemoveWhiteSpace_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RemoveWhiteSpace Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Formatting_RemoveWhiteSpace_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemoveWhiteSpace input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Formatting_RemoveWhiteSpace_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Formatting_RemoveWhiteSpace_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FormattedText input for this RemoveWhiteSpace Choreo.
     *
     * @param string $value (required, multiline) The formatted text that should have line breaks and tabs removed.
     * @return Utilities_Formatting_RemoveWhiteSpace_Inputs For method chaining.
     */
    public function setFormattedText($value)
    {
        return $this->set('FormattedText', $value);
    }
}


/**
 * Execution object for the RemoveWhiteSpace Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_RemoveWhiteSpace_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveWhiteSpace Choreo.
     *
     * @param Temboo_Session $session The session that owns this RemoveWhiteSpace execution.
     * @param Utilities_Formatting_RemoveWhiteSpace $choreo The choreography object for this execution.
     * @param Utilities_Formatting_RemoveWhiteSpace_Inputs|array $inputs (optional) Inputs as Utilities_Formatting_RemoveWhiteSpace_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Formatting_RemoveWhiteSpace_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Formatting_RemoveWhiteSpace $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveWhiteSpace execution.
     *
     * @return Utilities_Formatting_RemoveWhiteSpace_Results New results object.
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
     * Wraps results in appropriate results class for this RemoveWhiteSpace execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Formatting_RemoveWhiteSpace_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Formatting_RemoveWhiteSpace_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RemoveWhiteSpace Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Formatting_RemoveWhiteSpace_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RemoveWhiteSpace Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Formatting_RemoveWhiteSpace_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "CompactText" output from this RemoveWhiteSpace execution.
     *
     * @return string (string) 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCompactText()
    {
        return $this->get('CompactText');
    }
}

/**
 * Returns the specified text string in the application/x-www-form-urlencoded format.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_URLEncode extends Temboo_Choreography
{
    /**
     * Returns the specified text string in the application/x-www-form-urlencoded format.
     *
     * @param Temboo_Session $session The session that owns this URLEncode Choreo.
     * @return Utilities_Encoding_URLEncode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Encoding/URLEncode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this URLEncode Choreo.
     *
     * @param Utilities_Encoding_URLEncode_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_URLEncode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_URLEncode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Encoding_URLEncode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this URLEncode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_URLEncode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Encoding_URLEncode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the URLEncode Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_URLEncode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the URLEncode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_URLEncode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this URLEncode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Encoding_URLEncode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Encoding_URLEncode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Text input for this URLEncode Choreo.
     *
     * @param string $value (required, string) The text that should be URL encoded.
     * @return Utilities_Encoding_URLEncode_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the URLEncode Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_URLEncode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the URLEncode Choreo.
     *
     * @param Temboo_Session $session The session that owns this URLEncode execution.
     * @param Utilities_Encoding_URLEncode $choreo The choreography object for this execution.
     * @param Utilities_Encoding_URLEncode_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_URLEncode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_URLEncode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Encoding_URLEncode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this URLEncode execution.
     *
     * @return Utilities_Encoding_URLEncode_Results New results object.
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
     * Wraps results in appropriate results class for this URLEncode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Encoding_URLEncode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Encoding_URLEncode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the URLEncode Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_URLEncode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the URLEncode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Encoding_URLEncode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URLEncodedText" output from this URLEncode execution.
     *
     * @return string (string) The URL encoded text.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURLEncodedText()
    {
        return $this->get('URLEncodedText');
    }
}

/**
 * Generates a HTTP GET request.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Get extends Temboo_Choreography
{
    /**
     * Generates a HTTP GET request.
     *
     * @param Temboo_Session $session The session that owns this Get Choreo.
     * @return Utilities_HTTP_Get New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/HTTP/Get/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Get Choreo.
     *
     * @param Utilities_HTTP_Get_Inputs|array $inputs (optional) Inputs as Utilities_HTTP_Get_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_HTTP_Get_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_HTTP_Get_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Get Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_HTTP_Get_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_HTTP_Get_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Get Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Get_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Get Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_HTTP_Get_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Get input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_HTTP_Get_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_HTTP_Get_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this Get Choreo.
     *
     * @param string $value (optional, string) A valid password. This is used if the request required basic authentication.
     * @return Utilities_HTTP_Get_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RequestHeaders input for this Get Choreo.
     *
     * @param string $value (optional, json) A JSON object containing up to 10 key/value pairs that will be mapped to the HTTP request headers.
     * @return Utilities_HTTP_Get_Inputs For method chaining.
     */
    public function setRequestHeaders($value)
    {
        return $this->set('RequestHeaders', $value);
    }

    /**
     * Set the value for the RequestParameters input for this Get Choreo.
     *
     * @param string $value (optional, json) A JSON object containing up to 10 key/value pairs that will be mapped to the url string as http parameters.
     * @return Utilities_HTTP_Get_Inputs For method chaining.
     */
    public function setRequestParameters($value)
    {
        return $this->set('RequestParameters', $value);
    }

    /**
     * Set the value for the URL input for this Get Choreo.
     *
     * @param string $value (required, string) The base URL for the request (including http:// or https://).
     * @return Utilities_HTTP_Get_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Username input for this Get Choreo.
     *
     * @param string $value (optional, string) A valid username. This is used if the request required basic authentication.
     * @return Utilities_HTTP_Get_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the Get Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Get_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Get Choreo.
     *
     * @param Temboo_Session $session The session that owns this Get execution.
     * @param Utilities_HTTP_Get $choreo The choreography object for this execution.
     * @param Utilities_HTTP_Get_Inputs|array $inputs (optional) Inputs as Utilities_HTTP_Get_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_HTTP_Get_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_HTTP_Get $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Get execution.
     *
     * @return Utilities_HTTP_Get_Results New results object.
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
     * Wraps results in appropriate results class for this Get execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_HTTP_Get_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_HTTP_Get_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Get Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Get_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Get Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_HTTP_Get_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "HTTPLog" output from this Get execution.
     *
     * @return string (string) A log of the http request that has been generated.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHTTPLog()
    {
        return $this->get('HTTPLog');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this Get execution.
     *
     * @return int (integer) The response status code.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
    /**
     * Retrieve the value for the "Response" output from this Get execution.
     *
     * @return string The response from the server.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the specified text as a Base64 encoded string.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_Base64Encode extends Temboo_Choreography
{
    /**
     * Returns the specified text as a Base64 encoded string.
     *
     * @param Temboo_Session $session The session that owns this Base64Encode Choreo.
     * @return Utilities_Encoding_Base64Encode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Encoding/Base64Encode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Base64Encode Choreo.
     *
     * @param Utilities_Encoding_Base64Encode_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_Base64Encode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_Base64Encode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Encoding_Base64Encode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Base64Encode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_Base64Encode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Encoding_Base64Encode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Base64Encode Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_Base64Encode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Base64Encode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_Base64Encode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Base64Encode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Encoding_Base64Encode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Encoding_Base64Encode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Text input for this Base64Encode Choreo.
     *
     * @param string $value (required, string) The text that should be Base64 encoded.
     * @return Utilities_Encoding_Base64Encode_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the Base64Encode Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_Base64Encode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Base64Encode Choreo.
     *
     * @param Temboo_Session $session The session that owns this Base64Encode execution.
     * @param Utilities_Encoding_Base64Encode $choreo The choreography object for this execution.
     * @param Utilities_Encoding_Base64Encode_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_Base64Encode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_Base64Encode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Encoding_Base64Encode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Base64Encode execution.
     *
     * @return Utilities_Encoding_Base64Encode_Results New results object.
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
     * Wraps results in appropriate results class for this Base64Encode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Encoding_Base64Encode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Encoding_Base64Encode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Base64Encode Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_Base64Encode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Base64Encode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Encoding_Base64Encode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Base64EncodedText" output from this Base64Encode execution.
     *
     * @return string (string) The Base64 encoded text.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getBase64EncodedText()
    {
        return $this->get('Base64EncodedText');
    }
}

/**
 * Sends an email using a specified email server.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Email_SendEmail extends Temboo_Choreography
{
    /**
     * Sends an email using a specified email server.
     *
     * @param Temboo_Session $session The session that owns this SendEmail Choreo.
     * @return Utilities_Email_SendEmail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Email/SendEmail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SendEmail Choreo.
     *
     * @param Utilities_Email_SendEmail_Inputs|array $inputs (optional) Inputs as Utilities_Email_SendEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Email_SendEmail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Email_SendEmail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendEmail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Email_SendEmail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Email_SendEmail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendEmail Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Email_SendEmail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SendEmail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Email_SendEmail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendEmail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AttachmentName input for this SendEmail Choreo.
     *
     * @param string $value (optional, string) The name of the file to attach to the email.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setAttachmentName($value)
    {
        return $this->set('AttachmentName', $value);
    }

    /**
     * Set the value for the Attachment input for this SendEmail Choreo.
     *
     * @param string $value (optional, string) The Base64 encoded contents of the file to attach to the email.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setAttachment($value)
    {
        return $this->set('Attachment', $value);
    }

    /**
     * Set the value for the BCC input for this SendEmail Choreo.
     *
     * @param string $value (optional, string) An email address to BCC on the email you're sending. Can be a comma separated list of email addresses.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setBCC($value)
    {
        return $this->set('BCC', $value);
    }

    /**
     * Set the value for the CC input for this SendEmail Choreo.
     *
     * @param string $value (optional, string) An email address to CC on the email you're sending. Can be a comma separated list of email addresses.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setCC($value)
    {
        return $this->set('CC', $value);
    }

    /**
     * Set the value for the FromAddress input for this SendEmail Choreo.
     *
     * @param string $value (conditional, string) The name and email address that the message is being sent from.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setFromAddress($value)
    {
        return $this->set('FromAddress', $value);
    }

    /**
     * Set the value for the MessageBody input for this SendEmail Choreo.
     *
     * @param string $value (required, string) The message body for the email.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setMessageBody($value)
    {
        return $this->set('MessageBody', $value);
    }

    /**
     * Set the value for the Password input for this SendEmail Choreo.
     *
     * @param string $value (required, password) The password for your email account.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Port input for this SendEmail Choreo.
     *
     * @param int $value (required, integer) Specify the port number (i.e. 25 or 465).
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setPort($value)
    {
        return $this->set('Port', $value);
    }

    /**
     * Set the value for the Server input for this SendEmail Choreo.
     *
     * @param string $value (required, string) The name or IP address of the email server.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Subject input for this SendEmail Choreo.
     *
     * @param string $value (required, string) The subject line of the email.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the ToAddress input for this SendEmail Choreo.
     *
     * @param string $value (required, string) The email address that you want to send an email to. Can be a comma separated list of email addresses.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setToAddress($value)
    {
        return $this->set('ToAddress', $value);
    }

    /**
     * Set the value for the UseSSL input for this SendEmail Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to connect over SSL. Set to 0 for no SSL. Defaults to 1.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setUseSSL($value)
    {
        return $this->set('UseSSL', $value);
    }

    /**
     * Set the value for the Username input for this SendEmail Choreo.
     *
     * @param string $value (required, string) Your username for your email account.
     * @return Utilities_Email_SendEmail_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the SendEmail Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Email_SendEmail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendEmail Choreo.
     *
     * @param Temboo_Session $session The session that owns this SendEmail execution.
     * @param Utilities_Email_SendEmail $choreo The choreography object for this execution.
     * @param Utilities_Email_SendEmail_Inputs|array $inputs (optional) Inputs as Utilities_Email_SendEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Email_SendEmail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Email_SendEmail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendEmail execution.
     *
     * @return Utilities_Email_SendEmail_Results New results object.
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
     * Wraps results in appropriate results class for this SendEmail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Email_SendEmail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Email_SendEmail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SendEmail Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Email_SendEmail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SendEmail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Email_SendEmail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
}

/**
 * Converts Excel (.xls) formatted data to CSV.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XLSToCSV extends Temboo_Choreography
{
    /**
     * Converts Excel (.xls) formatted data to CSV.
     *
     * @param Temboo_Session $session The session that owns this XLSToCSV Choreo.
     * @return Utilities_DataConversions_XLSToCSV New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/XLSToCSV/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this XLSToCSV Choreo.
     *
     * @param Utilities_DataConversions_XLSToCSV_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XLSToCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XLSToCSV_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_XLSToCSV_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this XLSToCSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XLSToCSV_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_XLSToCSV_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the XLSToCSV Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XLSToCSV_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the XLSToCSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XLSToCSV_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this XLSToCSV input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_XLSToCSV_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_XLSToCSV_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XLS input for this XLSToCSV Choreo.
     *
     * @param string $value (conditional, string) The base64-encoded contents of the Excel file that you want to convert to CSV format. Compatible with Excel 97-2003.
     * @return Utilities_DataConversions_XLSToCSV_Inputs For method chaining.
     */
    public function setXLS($value)
    {
        return $this->set('XLS', $value);
    }

}


/**
 * Execution object for the XLSToCSV Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XLSToCSV_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the XLSToCSV Choreo.
     *
     * @param Temboo_Session $session The session that owns this XLSToCSV execution.
     * @param Utilities_DataConversions_XLSToCSV $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_XLSToCSV_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XLSToCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XLSToCSV_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_XLSToCSV $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this XLSToCSV execution.
     *
     * @return Utilities_DataConversions_XLSToCSV_Results New results object.
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
     * Wraps results in appropriate results class for this XLSToCSV execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_XLSToCSV_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_XLSToCSV_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the XLSToCSV Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XLSToCSV_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the XLSToCSV Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_XLSToCSV_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "CSV" output from this XLSToCSV execution.
     *
     * @return string (string) The CSV formatted data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCSV()
    {
        return $this->get('CSV');
    }
}

/**
 * Verifies that a given zip code matches the format expected for German addresses.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_GermanPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for German addresses.
     *
     * @param Temboo_Session $session The session that owns this GermanPostalCodes Choreo.
     * @return Utilities_Validation_GermanPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Validation/GermanPostalCodes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GermanPostalCodes Choreo.
     *
     * @param Utilities_Validation_GermanPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_GermanPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_GermanPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Validation_GermanPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GermanPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_GermanPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Validation_GermanPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GermanPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_GermanPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GermanPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_GermanPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GermanPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Validation_GermanPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Validation_GermanPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this GermanPostalCodes Choreo.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Utilities_Validation_GermanPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the GermanPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_GermanPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GermanPostalCodes Choreo.
     *
     * @param Temboo_Session $session The session that owns this GermanPostalCodes execution.
     * @param Utilities_Validation_GermanPostalCodes $choreo The choreography object for this execution.
     * @param Utilities_Validation_GermanPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_GermanPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_GermanPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Validation_GermanPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GermanPostalCodes execution.
     *
     * @return Utilities_Validation_GermanPostalCodes_Results New results object.
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
     * Wraps results in appropriate results class for this GermanPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Validation_GermanPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Validation_GermanPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GermanPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_GermanPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GermanPostalCodes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Validation_GermanPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Match" output from this GermanPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Generates a HTTP POST request.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Post extends Temboo_Choreography
{
    /**
     * Generates a HTTP POST request.
     *
     * @param Temboo_Session $session The session that owns this Post Choreo.
     * @return Utilities_HTTP_Post New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/HTTP/Post/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Post Choreo.
     *
     * @param Utilities_HTTP_Post_Inputs|array $inputs (optional) Inputs as Utilities_HTTP_Post_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_HTTP_Post_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_HTTP_Post_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Post Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_HTTP_Post_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_HTTP_Post_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Post Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Post_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Post Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_HTTP_Post_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Post input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_HTTP_Post_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_HTTP_Post_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the RequestBody input for this Post Choreo.
     *
     * @param string $value (optional, multiline) The request body for the POST request.
     * @return Utilities_HTTP_Post_Inputs For method chaining.
     */
    public function setRequestBody($value)
    {
        return $this->set('RequestBody', $value);
    }

    /**
     * Set the value for the Password input for this Post Choreo.
     *
     * @param string $value (optional, string) A valid password. This is used if the request required basic authentication.
     * @return Utilities_HTTP_Post_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RequestHeaders input for this Post Choreo.
     *
     * @param string $value (optional, json) A JSON object containing up to 10 key/value pairs that will be mapped to the HTTP request headers.
     * @return Utilities_HTTP_Post_Inputs For method chaining.
     */
    public function setRequestHeaders($value)
    {
        return $this->set('RequestHeaders', $value);
    }

    /**
     * Set the value for the RequestParameters input for this Post Choreo.
     *
     * @param string $value (optional, json) A JSON object containing up to 10 key/value pairs that will be mapped to the url string as http parameters.
     * @return Utilities_HTTP_Post_Inputs For method chaining.
     */
    public function setRequestParameters($value)
    {
        return $this->set('RequestParameters', $value);
    }

    /**
     * Set the value for the URL input for this Post Choreo.
     *
     * @param string $value (required, string) The base URL for the request (including http:// or https://).
     * @return Utilities_HTTP_Post_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Username input for this Post Choreo.
     *
     * @param string $value (optional, string) A valid username. This is used if the request required basic authentication.
     * @return Utilities_HTTP_Post_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the Post Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Post_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Post Choreo.
     *
     * @param Temboo_Session $session The session that owns this Post execution.
     * @param Utilities_HTTP_Post $choreo The choreography object for this execution.
     * @param Utilities_HTTP_Post_Inputs|array $inputs (optional) Inputs as Utilities_HTTP_Post_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_HTTP_Post_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_HTTP_Post $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Post execution.
     *
     * @return Utilities_HTTP_Post_Results New results object.
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
     * Wraps results in appropriate results class for this Post execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_HTTP_Post_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_HTTP_Post_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Post Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Post_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Post Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_HTTP_Post_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "HTTPLog" output from this Post execution.
     *
     * @return string (string) A log of the http request that has been generated.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHTTPLog()
    {
        return $this->get('HTTPLog');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this Post execution.
     *
     * @return int (integer) The response status code.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
    /**
     * Retrieve the value for the "Response" output from this Post execution.
     *
     * @return string The response from the server.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Verifies that a given zip code matches the format expected for Canadian addresses.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_CanadianPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for Canadian addresses.
     *
     * @param Temboo_Session $session The session that owns this CanadianPostalCodes Choreo.
     * @return Utilities_Validation_CanadianPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Validation/CanadianPostalCodes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CanadianPostalCodes Choreo.
     *
     * @param Utilities_Validation_CanadianPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_CanadianPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_CanadianPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Validation_CanadianPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CanadianPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_CanadianPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Validation_CanadianPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CanadianPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_CanadianPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CanadianPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_CanadianPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CanadianPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Validation_CanadianPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Validation_CanadianPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this CanadianPostalCodes Choreo.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Utilities_Validation_CanadianPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the CanadianPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_CanadianPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CanadianPostalCodes Choreo.
     *
     * @param Temboo_Session $session The session that owns this CanadianPostalCodes execution.
     * @param Utilities_Validation_CanadianPostalCodes $choreo The choreography object for this execution.
     * @param Utilities_Validation_CanadianPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_CanadianPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_CanadianPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Validation_CanadianPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CanadianPostalCodes execution.
     *
     * @return Utilities_Validation_CanadianPostalCodes_Results New results object.
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
     * Wraps results in appropriate results class for this CanadianPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Validation_CanadianPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Validation_CanadianPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CanadianPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_CanadianPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CanadianPostalCodes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Validation_CanadianPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Match" output from this CanadianPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Converts a TSV formatted file to XML.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_TSVToXML extends Temboo_Choreography
{
    /**
     * Converts a TSV formatted file to XML.
     *
     * @param Temboo_Session $session The session that owns this TSVToXML Choreo.
     * @return Utilities_DataConversions_TSVToXML New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/TSVToXML/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TSVToXML Choreo.
     *
     * @param Utilities_DataConversions_TSVToXML_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_TSVToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_TSVToXML_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_TSVToXML_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TSVToXML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_TSVToXML_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_TSVToXML_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TSVToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_TSVToXML_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TSVToXML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_TSVToXML_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TSVToXML input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_TSVToXML_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_TSVToXML_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the TSV input for this TSVToXML Choreo.
     *
     * @param string $value (required, multiline) The TSV file to convert to XML. Your TSV data must contain column names.
     * @return Utilities_DataConversions_TSVToXML_Inputs For method chaining.
     */
    public function setTSV($value)
    {
        return $this->set('TSV', $value);
    }
}


/**
 * Execution object for the TSVToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_TSVToXML_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TSVToXML Choreo.
     *
     * @param Temboo_Session $session The session that owns this TSVToXML execution.
     * @param Utilities_DataConversions_TSVToXML $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_TSVToXML_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_TSVToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_TSVToXML_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_TSVToXML $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TSVToXML execution.
     *
     * @return Utilities_DataConversions_TSVToXML_Results New results object.
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
     * Wraps results in appropriate results class for this TSVToXML execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_TSVToXML_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_TSVToXML_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TSVToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_TSVToXML_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TSVToXML Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_TSVToXML_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "XML" output from this TSVToXML execution.
     *
     * @return string (xml) The XML formatted data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getXML()
    {
        return $this->get('XML');
    }
}

/**
 * Returns a checksum of the specified text calculated using the specified algorithm. 
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Hashing_Checksum extends Temboo_Choreography
{
    /**
     * Returns a checksum of the specified text calculated using the specified algorithm. 
     *
     * @param Temboo_Session $session The session that owns this Checksum Choreo.
     * @return Utilities_Hashing_Checksum New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Hashing/Checksum/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Checksum Choreo.
     *
     * @param Utilities_Hashing_Checksum_Inputs|array $inputs (optional) Inputs as Utilities_Hashing_Checksum_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Hashing_Checksum_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Hashing_Checksum_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Checksum Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Hashing_Checksum_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Hashing_Checksum_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Checksum Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Hashing_Checksum_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Checksum Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Hashing_Checksum_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Checksum input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Hashing_Checksum_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Hashing_Checksum_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Algorithm input for this Checksum Choreo.
     *
     * @param string $value (required, string) Algorithm used to calculate the checksum. Valid values are: FIX44,  MD5+BASE64, or MD5+HEX (the default). MD5+BASE64 and MD5+HEX return the result in Base64 and hexadecimal encoding, respectively.
     * @return Utilities_Hashing_Checksum_Inputs For method chaining.
     */
    public function setAlgorithm($value)
    {
        return $this->set('Algorithm', $value);
    }

    /**
     * Set the value for the Base64DecodeValue input for this Checksum Choreo.
     *
     * @param bool $value (optional, boolean) Setting this parameter to 1 indicates that the Text is Base64 encoded, and that the choreo should decode the value before calculating the checksum. Defaults to 0.
     * @return Utilities_Hashing_Checksum_Inputs For method chaining.
     */
    public function setBase64DecodeValue($value)
    {
        return $this->set('Base64DecodeValue', $value);
    }

    /**
     * Set the value for the Text input for this Checksum Choreo.
     *
     * @param string $value (required, string) The text to return a checksum for.
     * @return Utilities_Hashing_Checksum_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the Checksum Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Hashing_Checksum_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Checksum Choreo.
     *
     * @param Temboo_Session $session The session that owns this Checksum execution.
     * @param Utilities_Hashing_Checksum $choreo The choreography object for this execution.
     * @param Utilities_Hashing_Checksum_Inputs|array $inputs (optional) Inputs as Utilities_Hashing_Checksum_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Hashing_Checksum_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Hashing_Checksum $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Checksum execution.
     *
     * @return Utilities_Hashing_Checksum_Results New results object.
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
     * Wraps results in appropriate results class for this Checksum execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Hashing_Checksum_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Hashing_Checksum_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Checksum Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Hashing_Checksum_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Checksum Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Hashing_Checksum_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Checksum" output from this Checksum execution.
     *
     * @return string (string) The checksum result.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getChecksum()
    {
        return $this->get('Checksum');
    }
}

/**
 * Converts an XML file to CSV format.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToCSV extends Temboo_Choreography
{
    /**
     * Converts an XML file to CSV format.
     *
     * @param Temboo_Session $session The session that owns this XMLToCSV Choreo.
     * @return Utilities_DataConversions_XMLToCSV New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/XMLToCSV/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this XMLToCSV Choreo.
     *
     * @param Utilities_DataConversions_XMLToCSV_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XMLToCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XMLToCSV_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_XMLToCSV_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this XMLToCSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XMLToCSV_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_XMLToCSV_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the XMLToCSV Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToCSV_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the XMLToCSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XMLToCSV_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this XMLToCSV input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_XMLToCSV_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_XMLToCSV_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XML input for this XMLToCSV Choreo.
     *
     * @param string $value (required, xml) The XML file to convert to CSV data.
     * @return Utilities_DataConversions_XMLToCSV_Inputs For method chaining.
     */
    public function setXML($value)
    {
        return $this->set('XML', $value);
    }

    /**
     * Set the value for the Path input for this XMLToCSV Choreo.
     *
     * @param string $value (optional, string) If your XML is not in "/rowset/row/column_name" format, specify a path to the rows. See documentation for examples.
     * @return Utilities_DataConversions_XMLToCSV_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the XMLToCSV Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToCSV_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the XMLToCSV Choreo.
     *
     * @param Temboo_Session $session The session that owns this XMLToCSV execution.
     * @param Utilities_DataConversions_XMLToCSV $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_XMLToCSV_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XMLToCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XMLToCSV_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_XMLToCSV $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this XMLToCSV execution.
     *
     * @return Utilities_DataConversions_XMLToCSV_Results New results object.
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
     * Wraps results in appropriate results class for this XMLToCSV execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_XMLToCSV_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_XMLToCSV_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the XMLToCSV Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToCSV_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the XMLToCSV Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_XMLToCSV_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "CSV" output from this XMLToCSV execution.
     *
     * @return string (multiline) The CSV data generated from the XML input.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCSV()
    {
        return $this->get('CSV');
    }
}

/**
 * Generates a HTTP DELETE request.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Delete extends Temboo_Choreography
{
    /**
     * Generates a HTTP DELETE request.
     *
     * @param Temboo_Session $session The session that owns this Delete Choreo.
     * @return Utilities_HTTP_Delete New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/HTTP/Delete/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Delete Choreo.
     *
     * @param Utilities_HTTP_Delete_Inputs|array $inputs (optional) Inputs as Utilities_HTTP_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_HTTP_Delete_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_HTTP_Delete_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_HTTP_Delete_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_HTTP_Delete_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Delete_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_HTTP_Delete_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Delete input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_HTTP_Delete_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_HTTP_Delete_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this Delete Choreo.
     *
     * @param string $value (optional, string) A valid password. This is used if the request required basic authentication.
     * @return Utilities_HTTP_Delete_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RequestHeaders input for this Delete Choreo.
     *
     * @param string $value (optional, json) A JSON object containing up to 10 key/value pairs that will be mapped to the HTTP request headers.
     * @return Utilities_HTTP_Delete_Inputs For method chaining.
     */
    public function setRequestHeaders($value)
    {
        return $this->set('RequestHeaders', $value);
    }

    /**
     * Set the value for the RequestParameters input for this Delete Choreo.
     *
     * @param string $value (optional, json) A JSON object containing up to 10 key/value pairs that will be mapped to the url string as HTTP parameters.
     * @return Utilities_HTTP_Delete_Inputs For method chaining.
     */
    public function setRequestParameters($value)
    {
        return $this->set('RequestParameters', $value);
    }

    /**
     * Set the value for the URL input for this Delete Choreo.
     *
     * @param string $value (required, string) The base URL for the request (including http:// or https://).
     * @return Utilities_HTTP_Delete_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Username input for this Delete Choreo.
     *
     * @param string $value (optional, string) A valid username. This is used if the request required basic authentication.
     * @return Utilities_HTTP_Delete_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Delete_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Delete Choreo.
     *
     * @param Temboo_Session $session The session that owns this Delete execution.
     * @param Utilities_HTTP_Delete $choreo The choreography object for this execution.
     * @param Utilities_HTTP_Delete_Inputs|array $inputs (optional) Inputs as Utilities_HTTP_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_HTTP_Delete_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_HTTP_Delete $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Delete execution.
     *
     * @return Utilities_HTTP_Delete_Results New results object.
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
     * Wraps results in appropriate results class for this Delete execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_HTTP_Delete_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_HTTP_Delete_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_HTTP_Delete_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Delete Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_HTTP_Delete_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "HTTPLog" output from this Delete execution.
     *
     * @return string (string) A log of the http request that has been generated.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHTTPLog()
    {
        return $this->get('HTTPLog');
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this Delete execution.
     *
     * @return int (integer) The response status code.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
    /**
     * Retrieve the value for the "Response" output from this Delete execution.
     *
     * @return string The response from the server.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Converts an XML file to a Base64 encoded Excel file.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToXLS extends Temboo_Choreography
{
    /**
     * Converts an XML file to a Base64 encoded Excel file.
     *
     * @param Temboo_Session $session The session that owns this XMLToXLS Choreo.
     * @return Utilities_DataConversions_XMLToXLS New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/XMLToXLS/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this XMLToXLS Choreo.
     *
     * @param Utilities_DataConversions_XMLToXLS_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XMLToXLS_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XMLToXLS_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_XMLToXLS_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this XMLToXLS Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XMLToXLS_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_XMLToXLS_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the XMLToXLS Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToXLS_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the XMLToXLS Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XMLToXLS_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this XMLToXLS input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_XMLToXLS_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_XMLToXLS_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XML input for this XMLToXLS Choreo.
     *
     * @param string $value (required, xml) The XML file you want to convert to XLS format. See documentation for information on the required XML schema.
     * @return Utilities_DataConversions_XMLToXLS_Inputs For method chaining.
     */
    public function setXML($value)
    {
        return $this->set('XML', $value);
    }
}


/**
 * Execution object for the XMLToXLS Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToXLS_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the XMLToXLS Choreo.
     *
     * @param Temboo_Session $session The session that owns this XMLToXLS execution.
     * @param Utilities_DataConversions_XMLToXLS $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_XMLToXLS_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XMLToXLS_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XMLToXLS_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_XMLToXLS $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this XMLToXLS execution.
     *
     * @return Utilities_DataConversions_XMLToXLS_Results New results object.
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
     * Wraps results in appropriate results class for this XMLToXLS execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_XMLToXLS_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_XMLToXLS_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the XMLToXLS Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToXLS_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the XMLToXLS Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_XMLToXLS_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "XLS" output from this XMLToXLS execution.
     *
     * @return string The Base64 encoded Excel data .
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getXLS()
    {
        return $this->get('XLS');
    }
}

/**
 * Converts a CSV formatted file to XML.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToXML extends Temboo_Choreography
{
    /**
     * Converts a CSV formatted file to XML.
     *
     * @param Temboo_Session $session The session that owns this CSVToXML Choreo.
     * @return Utilities_DataConversions_CSVToXML New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/CSVToXML/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CSVToXML Choreo.
     *
     * @param Utilities_DataConversions_CSVToXML_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_CSVToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_CSVToXML_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_CSVToXML_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CSVToXML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_CSVToXML_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_CSVToXML_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CSVToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToXML_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CSVToXML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_CSVToXML_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CSVToXML input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_CSVToXML_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_CSVToXML_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CSV input for this CSVToXML Choreo.
     *
     * @param string $value (required, multiline) The CSV file to convert to XML. Your CSV data must contain column names.
     * @return Utilities_DataConversions_CSVToXML_Inputs For method chaining.
     */
    public function setCSV($value)
    {
        return $this->set('CSV', $value);
    }
}


/**
 * Execution object for the CSVToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToXML_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CSVToXML Choreo.
     *
     * @param Temboo_Session $session The session that owns this CSVToXML execution.
     * @param Utilities_DataConversions_CSVToXML $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_CSVToXML_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_CSVToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_CSVToXML_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_CSVToXML $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CSVToXML execution.
     *
     * @return Utilities_DataConversions_CSVToXML_Results New results object.
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
     * Wraps results in appropriate results class for this CSVToXML execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_CSVToXML_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_CSVToXML_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CSVToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToXML_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CSVToXML Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_CSVToXML_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "XML" output from this CSVToXML execution.
     *
     * @return string (xml) The XML formatted data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getXML()
    {
        return $this->get('XML');
    }
}

/**
 * Converts a CSV formatted file to JSON.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToJSON extends Temboo_Choreography
{
    /**
     * Converts a CSV formatted file to JSON.
     *
     * @param Temboo_Session $session The session that owns this CSVToJSON Choreo.
     * @return Utilities_DataConversions_CSVToJSON New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/CSVToJSON/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CSVToJSON Choreo.
     *
     * @param Utilities_DataConversions_CSVToJSON_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_CSVToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_CSVToJSON_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_CSVToJSON_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CSVToJSON Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_CSVToJSON_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_CSVToJSON_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CSVToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToJSON_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CSVToJSON Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_CSVToJSON_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CSVToJSON input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_CSVToJSON_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_CSVToJSON_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CSV input for this CSVToJSON Choreo.
     *
     * @param string $value (required, multiline) The CSV file to convert to XML. Your CSV data must contain column names.
     * @return Utilities_DataConversions_CSVToJSON_Inputs For method chaining.
     */
    public function setCSV($value)
    {
        return $this->set('CSV', $value);
    }
}


/**
 * Execution object for the CSVToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToJSON_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CSVToJSON Choreo.
     *
     * @param Temboo_Session $session The session that owns this CSVToJSON execution.
     * @param Utilities_DataConversions_CSVToJSON $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_CSVToJSON_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_CSVToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_CSVToJSON_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_CSVToJSON $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CSVToJSON execution.
     *
     * @return Utilities_DataConversions_CSVToJSON_Results New results object.
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
     * Wraps results in appropriate results class for this CSVToJSON execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_CSVToJSON_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_CSVToJSON_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CSVToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToJSON_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CSVToJSON Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_CSVToJSON_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "JSON" output from this CSVToJSON execution.
     *
     * @return string (json) The JSON formatted data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getJSON()
    {
        return $this->get('JSON');
    }
}

/**
 * Validates XML for basic well-formedness and allows you to check XML against a specified XSD schema file.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_XML extends Temboo_Choreography
{
    /**
     * Validates XML for basic well-formedness and allows you to check XML against a specified XSD schema file.
     *
     * @param Temboo_Session $session The session that owns this XML Choreo.
     * @return Utilities_Validation_XML New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Validation/XML/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this XML Choreo.
     *
     * @param Utilities_Validation_XML_Inputs|array $inputs (optional) Inputs as Utilities_Validation_XML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_XML_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Validation_XML_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this XML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_XML_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Validation_XML_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the XML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_XML_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the XML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_XML_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this XML input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Validation_XML_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Validation_XML_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XMLFile input for this XML Choreo.
     *
     * @param string $value (required, xml) The XML file you want to validate.
     * @return Utilities_Validation_XML_Inputs For method chaining.
     */
    public function setXMLFile($value)
    {
        return $this->set('XMLFile', $value);
    }

    /**
     * Set the value for the XSDFile input for this XML Choreo.
     *
     * @param string $value (optional, xml) The XSD file to validate an XML file against.
     * @return Utilities_Validation_XML_Inputs For method chaining.
     */
    public function setXSDFile($value)
    {
        return $this->set('XSDFile', $value);
    }
}


/**
 * Execution object for the XML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_XML_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the XML Choreo.
     *
     * @param Temboo_Session $session The session that owns this XML execution.
     * @param Utilities_Validation_XML $choreo The choreography object for this execution.
     * @param Utilities_Validation_XML_Inputs|array $inputs (optional) Inputs as Utilities_Validation_XML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_XML_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Validation_XML $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this XML execution.
     *
     * @return Utilities_Validation_XML_Results New results object.
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
     * Wraps results in appropriate results class for this XML execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Validation_XML_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Validation_XML_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the XML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_XML_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the XML Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Validation_XML_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Error" output from this XML execution.
     *
     * @return string (string) The error description that is generated if a validation error occurs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getError()
    {
        return $this->get('Error');
    }
    /**
     * Retrieve the value for the "Result" output from this XML execution.
     *
     * @return string (string) The result of the validation. Returns the string "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResult()
    {
        return $this->get('Result');
    }
}

/**
 * Removes URL encoding from the specified text string.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_URLDecode extends Temboo_Choreography
{
    /**
     * Removes URL encoding from the specified text string.
     *
     * @param Temboo_Session $session The session that owns this URLDecode Choreo.
     * @return Utilities_Encoding_URLDecode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Encoding/URLDecode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this URLDecode Choreo.
     *
     * @param Utilities_Encoding_URLDecode_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_URLDecode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_URLDecode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Encoding_URLDecode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this URLDecode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_URLDecode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Encoding_URLDecode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the URLDecode Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_URLDecode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the URLDecode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_URLDecode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this URLDecode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Encoding_URLDecode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Encoding_URLDecode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Text input for this URLDecode Choreo.
     *
     * @param string $value (required, string) The text that should be URL decoded.
     * @return Utilities_Encoding_URLDecode_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the URLDecode Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_URLDecode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the URLDecode Choreo.
     *
     * @param Temboo_Session $session The session that owns this URLDecode execution.
     * @param Utilities_Encoding_URLDecode $choreo The choreography object for this execution.
     * @param Utilities_Encoding_URLDecode_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_URLDecode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_URLDecode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Encoding_URLDecode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this URLDecode execution.
     *
     * @return Utilities_Encoding_URLDecode_Results New results object.
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
     * Wraps results in appropriate results class for this URLDecode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Encoding_URLDecode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Encoding_URLDecode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the URLDecode Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_URLDecode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the URLDecode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Encoding_URLDecode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URLDecodedText" output from this URLDecode execution.
     *
     * @return string (string) The URL decoded text.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURLDecodedText()
    {
        return $this->get('URLDecodedText');
    }
}

/**
 * Generates a SHA1-encrypted HMAC signature for the specified message text using the specified secret key.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Hashing_HmacSHA1 extends Temboo_Choreography
{
    /**
     * Generates a SHA1-encrypted HMAC signature for the specified message text using the specified secret key.
     *
     * @param Temboo_Session $session The session that owns this HmacSHA1 Choreo.
     * @return Utilities_Hashing_HmacSHA1 New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Hashing/HmacSHA1/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HmacSHA1 Choreo.
     *
     * @param Utilities_Hashing_HmacSHA1_Inputs|array $inputs (optional) Inputs as Utilities_Hashing_HmacSHA1_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Hashing_HmacSHA1_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Hashing_HmacSHA1_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HmacSHA1 Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Hashing_HmacSHA1_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Hashing_HmacSHA1_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HmacSHA1 Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Hashing_HmacSHA1_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HmacSHA1 Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Hashing_HmacSHA1_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HmacSHA1 input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Hashing_HmacSHA1_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Hashing_HmacSHA1_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Key input for this HmacSHA1 Choreo.
     *
     * @param string $value (required, string) The secret key used to generate the SHA1-encrypted HMAC signature.
     * @return Utilities_Hashing_HmacSHA1_Inputs For method chaining.
     */
    public function setKey($value)
    {
        return $this->set('Key', $value);
    }

    /**
     * Set the value for the Text input for this HmacSHA1 Choreo.
     *
     * @param string $value (required, string) The text that should be SHA1-encrypted.
     * @return Utilities_Hashing_HmacSHA1_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the HmacSHA1 Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Hashing_HmacSHA1_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HmacSHA1 Choreo.
     *
     * @param Temboo_Session $session The session that owns this HmacSHA1 execution.
     * @param Utilities_Hashing_HmacSHA1 $choreo The choreography object for this execution.
     * @param Utilities_Hashing_HmacSHA1_Inputs|array $inputs (optional) Inputs as Utilities_Hashing_HmacSHA1_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Hashing_HmacSHA1_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Hashing_HmacSHA1 $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HmacSHA1 execution.
     *
     * @return Utilities_Hashing_HmacSHA1_Results New results object.
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
     * Wraps results in appropriate results class for this HmacSHA1 execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Hashing_HmacSHA1_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Hashing_HmacSHA1_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HmacSHA1 Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Hashing_HmacSHA1_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HmacSHA1 Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Hashing_HmacSHA1_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "HmacSignature" output from this HmacSHA1 execution.
     *
     * @return string (string) The HMAC Signature for the specified string.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHmacSignature()
    {
        return $this->get('HmacSignature');
    }
}

/**
 * Verifies that a given password matches a standard pattern for passwords.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_PasswordCriteria extends Temboo_Choreography
{
    /**
     * Verifies that a given password matches a standard pattern for passwords.
     *
     * @param Temboo_Session $session The session that owns this PasswordCriteria Choreo.
     * @return Utilities_Validation_PasswordCriteria New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Validation/PasswordCriteria/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PasswordCriteria Choreo.
     *
     * @param Utilities_Validation_PasswordCriteria_Inputs|array $inputs (optional) Inputs as Utilities_Validation_PasswordCriteria_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_PasswordCriteria_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Validation_PasswordCriteria_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PasswordCriteria Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_PasswordCriteria_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Validation_PasswordCriteria_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PasswordCriteria Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_PasswordCriteria_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PasswordCriteria Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_PasswordCriteria_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PasswordCriteria input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the MaxLength input for this PasswordCriteria Choreo.
     *
     * @param int $value (optional, integer) The max length you want to allow for the password. Defaults to 14.
     * @return Utilities_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function setMaxLength($value)
    {
        return $this->set('MaxLength', $value);
    }

    /**
     * Set the value for the MinLength input for this PasswordCriteria Choreo.
     *
     * @param int $value (optional, integer) The minimum length you want to allow for the password. Defaults to 6.
     * @return Utilities_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function setMinLength($value)
    {
        return $this->set('MinLength', $value);
    }

    /**
     * Set the value for the Password input for this PasswordCriteria Choreo.
     *
     * @param string $value (required, string) The password to validate.
     * @return Utilities_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the PasswordCriteria Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_PasswordCriteria_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PasswordCriteria Choreo.
     *
     * @param Temboo_Session $session The session that owns this PasswordCriteria execution.
     * @param Utilities_Validation_PasswordCriteria $choreo The choreography object for this execution.
     * @param Utilities_Validation_PasswordCriteria_Inputs|array $inputs (optional) Inputs as Utilities_Validation_PasswordCriteria_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_PasswordCriteria_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Validation_PasswordCriteria $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PasswordCriteria execution.
     *
     * @return Utilities_Validation_PasswordCriteria_Results New results object.
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
     * Wraps results in appropriate results class for this PasswordCriteria execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Validation_PasswordCriteria_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Validation_PasswordCriteria_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PasswordCriteria Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_PasswordCriteria_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PasswordCriteria Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Validation_PasswordCriteria_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Match" output from this PasswordCriteria execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Verifies that a given zip code matches the format expected for Dutch addresses.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_DutchPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for Dutch addresses.
     *
     * @param Temboo_Session $session The session that owns this DutchPostalCodes Choreo.
     * @return Utilities_Validation_DutchPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Validation/DutchPostalCodes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DutchPostalCodes Choreo.
     *
     * @param Utilities_Validation_DutchPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_DutchPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_DutchPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Validation_DutchPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DutchPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_DutchPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Validation_DutchPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DutchPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_DutchPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DutchPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_DutchPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DutchPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Validation_DutchPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Validation_DutchPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this DutchPostalCodes Choreo.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Utilities_Validation_DutchPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the DutchPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_DutchPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DutchPostalCodes Choreo.
     *
     * @param Temboo_Session $session The session that owns this DutchPostalCodes execution.
     * @param Utilities_Validation_DutchPostalCodes $choreo The choreography object for this execution.
     * @param Utilities_Validation_DutchPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_DutchPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_DutchPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Validation_DutchPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DutchPostalCodes execution.
     *
     * @return Utilities_Validation_DutchPostalCodes_Results New results object.
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
     * Wraps results in appropriate results class for this DutchPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Validation_DutchPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Validation_DutchPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DutchPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_DutchPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DutchPostalCodes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Validation_DutchPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Match" output from this DutchPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Verifies that a given zip code matches the format expected for US addresses.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_USPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for US addresses.
     *
     * @param Temboo_Session $session The session that owns this USPostalCodes Choreo.
     * @return Utilities_Validation_USPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Validation/USPostalCodes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this USPostalCodes Choreo.
     *
     * @param Utilities_Validation_USPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_USPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_USPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Validation_USPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this USPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_USPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Validation_USPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the USPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_USPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the USPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_USPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this USPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Validation_USPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Validation_USPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this USPostalCodes Choreo.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Utilities_Validation_USPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the USPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_USPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the USPostalCodes Choreo.
     *
     * @param Temboo_Session $session The session that owns this USPostalCodes execution.
     * @param Utilities_Validation_USPostalCodes $choreo The choreography object for this execution.
     * @param Utilities_Validation_USPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_USPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_USPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Validation_USPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this USPostalCodes execution.
     *
     * @return Utilities_Validation_USPostalCodes_Results New results object.
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
     * Wraps results in appropriate results class for this USPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Validation_USPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Validation_USPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the USPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_USPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the USPostalCodes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Validation_USPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Match" output from this USPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match --"valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Verifies that a given email address matches an expected standard pattern.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_EmailAddress extends Temboo_Choreography
{
    /**
     * Verifies that a given email address matches an expected standard pattern.
     *
     * @param Temboo_Session $session The session that owns this EmailAddress Choreo.
     * @return Utilities_Validation_EmailAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Validation/EmailAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EmailAddress Choreo.
     *
     * @param Utilities_Validation_EmailAddress_Inputs|array $inputs (optional) Inputs as Utilities_Validation_EmailAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_EmailAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Validation_EmailAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EmailAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_EmailAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Validation_EmailAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EmailAddress Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_EmailAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EmailAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_EmailAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EmailAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Validation_EmailAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Validation_EmailAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the EmailAddress input for this EmailAddress Choreo.
     *
     * @param string $value (required, string) The email address to validate.
     * @return Utilities_Validation_EmailAddress_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }
}


/**
 * Execution object for the EmailAddress Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_EmailAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EmailAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this EmailAddress execution.
     * @param Utilities_Validation_EmailAddress $choreo The choreography object for this execution.
     * @param Utilities_Validation_EmailAddress_Inputs|array $inputs (optional) Inputs as Utilities_Validation_EmailAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_EmailAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Validation_EmailAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EmailAddress execution.
     *
     * @return Utilities_Validation_EmailAddress_Results New results object.
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
     * Wraps results in appropriate results class for this EmailAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Validation_EmailAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Validation_EmailAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EmailAddress Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_EmailAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EmailAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Validation_EmailAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Match" output from this EmailAddress execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Retrieves a specified RSS Feed, and converts it to JSON format.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_RSSToJSON extends Temboo_Choreography
{
    /**
     * Retrieves a specified RSS Feed, and converts it to JSON format.
     *
     * @param Temboo_Session $session The session that owns this RSSToJSON Choreo.
     * @return Utilities_DataConversions_RSSToJSON New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/RSSToJSON/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RSSToJSON Choreo.
     *
     * @param Utilities_DataConversions_RSSToJSON_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_RSSToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_RSSToJSON_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_RSSToJSON_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RSSToJSON Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_RSSToJSON_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_RSSToJSON_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RSSToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_RSSToJSON_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RSSToJSON Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_RSSToJSON_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RSSToJSON input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_RSSToJSON_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_RSSToJSON_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the RSSFeed input for this RSSToJSON Choreo.
     *
     * @param string $value (required, string) The URL for an RSS feed that you wish to convert to JSON.
     * @return Utilities_DataConversions_RSSToJSON_Inputs For method chaining.
     */
    public function setRSSFeed($value)
    {
        return $this->set('RSSFeed', $value);
    }
}


/**
 * Execution object for the RSSToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_RSSToJSON_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RSSToJSON Choreo.
     *
     * @param Temboo_Session $session The session that owns this RSSToJSON execution.
     * @param Utilities_DataConversions_RSSToJSON $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_RSSToJSON_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_RSSToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_RSSToJSON_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_RSSToJSON $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RSSToJSON execution.
     *
     * @return Utilities_DataConversions_RSSToJSON_Results New results object.
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
     * Wraps results in appropriate results class for this RSSToJSON execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_RSSToJSON_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_RSSToJSON_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RSSToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_RSSToJSON_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RSSToJSON Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_RSSToJSON_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RSSToJSON execution.
     *
     * @return string (json) The feed data in JSON format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Converts data from JSON format to XML format.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_JSONToXML extends Temboo_Choreography
{
    /**
     * Converts data from JSON format to XML format.
     *
     * @param Temboo_Session $session The session that owns this JSONToXML Choreo.
     * @return Utilities_DataConversions_JSONToXML New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/JSONToXML/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this JSONToXML Choreo.
     *
     * @param Utilities_DataConversions_JSONToXML_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_JSONToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_JSONToXML_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_JSONToXML_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this JSONToXML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_JSONToXML_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_JSONToXML_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the JSONToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_JSONToXML_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the JSONToXML Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_JSONToXML_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this JSONToXML input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_JSONToXML_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_JSONToXML_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the JSON input for this JSONToXML Choreo.
     *
     * @param string $value (required, json) The JSON data that you want to convert to XML.
     * @return Utilities_DataConversions_JSONToXML_Inputs For method chaining.
     */
    public function setJSON($value)
    {
        return $this->set('JSON', $value);
    }
}


/**
 * Execution object for the JSONToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_JSONToXML_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the JSONToXML Choreo.
     *
     * @param Temboo_Session $session The session that owns this JSONToXML execution.
     * @param Utilities_DataConversions_JSONToXML $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_JSONToXML_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_JSONToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_JSONToXML_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_JSONToXML $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this JSONToXML execution.
     *
     * @return Utilities_DataConversions_JSONToXML_Results New results object.
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
     * Wraps results in appropriate results class for this JSONToXML execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_JSONToXML_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_JSONToXML_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the JSONToXML Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_JSONToXML_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the JSONToXML Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_JSONToXML_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "XML" output from this JSONToXML execution.
     *
     * @return string (xml) The converted data in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getXML()
    {
        return $this->get('XML');
    }
}

/**
 * Converts data from XML format to JSON format.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToJSON extends Temboo_Choreography
{
    /**
     * Converts data from XML format to JSON format.
     *
     * @param Temboo_Session $session The session that owns this XMLToJSON Choreo.
     * @return Utilities_DataConversions_XMLToJSON New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/XMLToJSON/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this XMLToJSON Choreo.
     *
     * @param Utilities_DataConversions_XMLToJSON_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XMLToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XMLToJSON_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_XMLToJSON_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this XMLToJSON Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XMLToJSON_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_XMLToJSON_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the XMLToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToJSON_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the XMLToJSON Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_XMLToJSON_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this XMLToJSON input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_XMLToJSON_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_XMLToJSON_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XML input for this XMLToJSON Choreo.
     *
     * @param string $value (required, xml) The XML file that you want to convert to JSON format.
     * @return Utilities_DataConversions_XMLToJSON_Inputs For method chaining.
     */
    public function setXML($value)
    {
        return $this->set('XML', $value);
    }
}


/**
 * Execution object for the XMLToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToJSON_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the XMLToJSON Choreo.
     *
     * @param Temboo_Session $session The session that owns this XMLToJSON execution.
     * @param Utilities_DataConversions_XMLToJSON $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_XMLToJSON_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_XMLToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_XMLToJSON_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_XMLToJSON $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this XMLToJSON execution.
     *
     * @return Utilities_DataConversions_XMLToJSON_Results New results object.
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
     * Wraps results in appropriate results class for this XMLToJSON execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_XMLToJSON_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_XMLToJSON_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the XMLToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_XMLToJSON_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the XMLToJSON Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_XMLToJSON_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "JSON" output from this XMLToJSON execution.
     *
     * @return string (json) The converted data in JSON format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getJSON()
    {
        return $this->get('JSON');
    }
}

/**
 * Replaces character entity names in the specified text with equivalent HTML markup characters.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_HTMLUnescape extends Temboo_Choreography
{
    /**
     * Replaces character entity names in the specified text with equivalent HTML markup characters.
     *
     * @param Temboo_Session $session The session that owns this HTMLUnescape Choreo.
     * @return Utilities_Encoding_HTMLUnescape New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Encoding/HTMLUnescape/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HTMLUnescape Choreo.
     *
     * @param Utilities_Encoding_HTMLUnescape_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_HTMLUnescape_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_HTMLUnescape_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Encoding_HTMLUnescape_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HTMLUnescape Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_HTMLUnescape_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Encoding_HTMLUnescape_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HTMLUnescape Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_HTMLUnescape_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HTMLUnescape Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_HTMLUnescape_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HTMLUnescape input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Encoding_HTMLUnescape_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Encoding_HTMLUnescape_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the EscapedHTML input for this HTMLUnescape Choreo.
     *
     * @param string $value (required, string) The escaped HTML that should be unescaped.
     * @return Utilities_Encoding_HTMLUnescape_Inputs For method chaining.
     */
    public function setEscapedHTML($value)
    {
        return $this->set('EscapedHTML', $value);
    }
}


/**
 * Execution object for the HTMLUnescape Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_HTMLUnescape_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HTMLUnescape Choreo.
     *
     * @param Temboo_Session $session The session that owns this HTMLUnescape execution.
     * @param Utilities_Encoding_HTMLUnescape $choreo The choreography object for this execution.
     * @param Utilities_Encoding_HTMLUnescape_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_HTMLUnescape_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_HTMLUnescape_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Encoding_HTMLUnescape $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HTMLUnescape execution.
     *
     * @return Utilities_Encoding_HTMLUnescape_Results New results object.
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
     * Wraps results in appropriate results class for this HTMLUnescape execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Encoding_HTMLUnescape_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Encoding_HTMLUnescape_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HTMLUnescape Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_HTMLUnescape_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HTMLUnescape Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Encoding_HTMLUnescape_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "UnescapedHTML" output from this HTMLUnescape execution.
     *
     * @return string (string) The unescaped HTML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUnescapedHTML()
    {
        return $this->get('UnescapedHTML');
    }
}

/**
 * Replaces HTML markup characters in the specified text with equivalent character entity names. 
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_HTMLEscape extends Temboo_Choreography
{
    /**
     * Replaces HTML markup characters in the specified text with equivalent character entity names. 
     *
     * @param Temboo_Session $session The session that owns this HTMLEscape Choreo.
     * @return Utilities_Encoding_HTMLEscape New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Encoding/HTMLEscape/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HTMLEscape Choreo.
     *
     * @param Utilities_Encoding_HTMLEscape_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_HTMLEscape_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_HTMLEscape_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Encoding_HTMLEscape_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HTMLEscape Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_HTMLEscape_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Encoding_HTMLEscape_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HTMLEscape Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_HTMLEscape_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HTMLEscape Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Encoding_HTMLEscape_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HTMLEscape input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Encoding_HTMLEscape_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Encoding_HTMLEscape_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the UnescapedHTML input for this HTMLEscape Choreo.
     *
     * @param string $value (required, string) The HTML that needs to be escaped.
     * @return Utilities_Encoding_HTMLEscape_Inputs For method chaining.
     */
    public function setUnescapedHTML($value)
    {
        return $this->set('UnescapedHTML', $value);
    }
}


/**
 * Execution object for the HTMLEscape Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_HTMLEscape_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HTMLEscape Choreo.
     *
     * @param Temboo_Session $session The session that owns this HTMLEscape execution.
     * @param Utilities_Encoding_HTMLEscape $choreo The choreography object for this execution.
     * @param Utilities_Encoding_HTMLEscape_Inputs|array $inputs (optional) Inputs as Utilities_Encoding_HTMLEscape_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Encoding_HTMLEscape_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Encoding_HTMLEscape $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HTMLEscape execution.
     *
     * @return Utilities_Encoding_HTMLEscape_Results New results object.
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
     * Wraps results in appropriate results class for this HTMLEscape execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Encoding_HTMLEscape_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Encoding_HTMLEscape_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HTMLEscape Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Encoding_HTMLEscape_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HTMLEscape Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Encoding_HTMLEscape_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "EscapedHTML" output from this HTMLEscape execution.
     *
     * @return string (string) The escaped HTML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getEscapedHTML()
    {
        return $this->get('EscapedHTML');
    }
}

/**
 * Converts a TSV formatted file to JSON.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_TSVToJSON extends Temboo_Choreography
{
    /**
     * Converts a TSV formatted file to JSON.
     *
     * @param Temboo_Session $session The session that owns this TSVToJSON Choreo.
     * @return Utilities_DataConversions_TSVToJSON New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/TSVToJSON/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TSVToJSON Choreo.
     *
     * @param Utilities_DataConversions_TSVToJSON_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_TSVToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_TSVToJSON_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_TSVToJSON_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TSVToJSON Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_TSVToJSON_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_TSVToJSON_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TSVToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_TSVToJSON_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TSVToJSON Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_TSVToJSON_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TSVToJSON input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_TSVToJSON_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_TSVToJSON_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the TSV input for this TSVToJSON Choreo.
     *
     * @param string $value (required, multiline) The TSV file to convert to XML. Your TSV data must contain column names.
     * @return Utilities_DataConversions_TSVToJSON_Inputs For method chaining.
     */
    public function setTSV($value)
    {
        return $this->set('TSV', $value);
    }
}


/**
 * Execution object for the TSVToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_TSVToJSON_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TSVToJSON Choreo.
     *
     * @param Temboo_Session $session The session that owns this TSVToJSON execution.
     * @param Utilities_DataConversions_TSVToJSON $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_TSVToJSON_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_TSVToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_TSVToJSON_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_TSVToJSON $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TSVToJSON execution.
     *
     * @return Utilities_DataConversions_TSVToJSON_Results New results object.
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
     * Wraps results in appropriate results class for this TSVToJSON execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_TSVToJSON_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_TSVToJSON_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TSVToJSON Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_TSVToJSON_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TSVToJSON Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_TSVToJSON_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "JSON" output from this TSVToJSON execution.
     *
     * @return string (json) The JSON formatted data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getJSON()
    {
        return $this->get('JSON');
    }
}

/**
 * Converts a CSV formatted file to Base64 encoded Excel data.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToXLS extends Temboo_Choreography
{
    /**
     * Converts a CSV formatted file to Base64 encoded Excel data.
     *
     * @param Temboo_Session $session The session that owns this CSVToXLS Choreo.
     * @return Utilities_DataConversions_CSVToXLS New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/DataConversions/CSVToXLS/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CSVToXLS Choreo.
     *
     * @param Utilities_DataConversions_CSVToXLS_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_CSVToXLS_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_CSVToXLS_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_DataConversions_CSVToXLS_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CSVToXLS Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_CSVToXLS_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_DataConversions_CSVToXLS_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CSVToXLS Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToXLS_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CSVToXLS Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_DataConversions_CSVToXLS_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CSVToXLS input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_DataConversions_CSVToXLS_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_DataConversions_CSVToXLS_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CSV input for this CSVToXLS Choreo.
     *
     * @param string $value (conditional, multiline) The CSV data you want to convert to XLS format. Required unless using the VaultFile input alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return Utilities_DataConversions_CSVToXLS_Inputs For method chaining.
     */
    public function setCSV($value)
    {
        return $this->set('CSV', $value);
    }

}


/**
 * Execution object for the CSVToXLS Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToXLS_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CSVToXLS Choreo.
     *
     * @param Temboo_Session $session The session that owns this CSVToXLS execution.
     * @param Utilities_DataConversions_CSVToXLS $choreo The choreography object for this execution.
     * @param Utilities_DataConversions_CSVToXLS_Inputs|array $inputs (optional) Inputs as Utilities_DataConversions_CSVToXLS_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_DataConversions_CSVToXLS_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_DataConversions_CSVToXLS $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CSVToXLS execution.
     *
     * @return Utilities_DataConversions_CSVToXLS_Results New results object.
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
     * Wraps results in appropriate results class for this CSVToXLS execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_DataConversions_CSVToXLS_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_DataConversions_CSVToXLS_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CSVToXLS Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_DataConversions_CSVToXLS_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CSVToXLS Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_DataConversions_CSVToXLS_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "XLS" output from this CSVToXLS execution.
     *
     * @return string (string) The Base64 encoded Excel data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getXLS()
    {
        return $this->get('XLS');
    }
}

/**
 * Verifies that a given zip code matches the format expected for UK addresses.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_UKPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for UK addresses.
     *
     * @param Temboo_Session $session The session that owns this UKPostalCodes Choreo.
     * @return Utilities_Validation_UKPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Utilities/Validation/UKPostalCodes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UKPostalCodes Choreo.
     *
     * @param Utilities_Validation_UKPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_UKPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_UKPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Utilities_Validation_UKPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UKPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_UKPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Utilities_Validation_UKPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UKPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_UKPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UKPostalCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Utilities_Validation_UKPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UKPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Utilities_Validation_UKPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Utilities_Validation_UKPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this UKPostalCodes Choreo.
     *
     * @param string $value (required, string) The zip code to validate. Letters must be in uppercase to be valid.
     * @return Utilities_Validation_UKPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the UKPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_UKPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UKPostalCodes Choreo.
     *
     * @param Temboo_Session $session The session that owns this UKPostalCodes execution.
     * @param Utilities_Validation_UKPostalCodes $choreo The choreography object for this execution.
     * @param Utilities_Validation_UKPostalCodes_Inputs|array $inputs (optional) Inputs as Utilities_Validation_UKPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Utilities_Validation_UKPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Utilities_Validation_UKPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UKPostalCodes execution.
     *
     * @return Utilities_Validation_UKPostalCodes_Results New results object.
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
     * Wraps results in appropriate results class for this UKPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Utilities_Validation_UKPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Utilities_Validation_UKPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UKPostalCodes Choreo.
 *
 * @package Temboo
 * @subpackage Utilities
 */
class Utilities_Validation_UKPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UKPostalCodes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Utilities_Validation_UKPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Match" output from this UKPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


?>
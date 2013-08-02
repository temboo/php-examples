<?php

/**
 * Temboo PHP SDK SchoolFinder classes
 *
 * Execute Choreographies from the Temboo SchoolFinder bundle.
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
 * @subpackage SchoolFinder
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns a list of school profiles and related school information for a zip code, city, state, or other criteria in the search parameters.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_DistrictSearch extends Temboo_Choreography
{
    /**
     * Returns a list of school profiles and related school information for a zip code, city, state, or other criteria in the search parameters.
     *
     * @param Temboo_Session $session The session that owns this DistrictSearch Choreo.
     * @return SchoolFinder_DistrictSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SchoolFinder/DistrictSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DistrictSearch Choreo.
     *
     * @param SchoolFinder_DistrictSearch_Inputs|array $inputs (optional) Inputs as SchoolFinder_DistrictSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_DistrictSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SchoolFinder_DistrictSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DistrictSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_DistrictSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SchoolFinder_DistrictSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DistrictSearch Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_DistrictSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DistrictSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_DistrictSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DistrictSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SchoolFinder_DistrictSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SchoolFinder_DistrictSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DistrictSearch Choreo.
     *
     * @param string $value (required, string) Your School Finder API Key.
     * @return SchoolFinder_DistrictSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the City input for this DistrictSearch Choreo.
     *
     * @param string $value (conditional, string) The name of a city. City requests must also be accompanied by the corresponding state parameter.
     * @return SchoolFinder_DistrictSearch_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the DistrictID input for this DistrictSearch Choreo.
     *
     * @param string $value (conditional, string) The internal Education.com id of a school district.
     * @return SchoolFinder_DistrictSearch_Inputs For method chaining.
     */
    public function setDistrictID($value)
    {
        return $this->set('DistrictID', $value);
    }

    /**
     * Set the value for the DistrictLEA input for this DistrictSearch Choreo.
     *
     * @param string $value (conditional, string) The NCES Local Education Agency (LEA) id of a school district.
     * @return SchoolFinder_DistrictSearch_Inputs For method chaining.
     */
    public function setDistrictLEA($value)
    {
        return $this->set('DistrictLEA', $value);
    }

    /**
     * Set the value for the DistrictName input for this DistrictSearch Choreo.
     *
     * @param string $value (conditional, string) The name of the district.
     * @return SchoolFinder_DistrictSearch_Inputs For method chaining.
     */
    public function setDistrictName($value)
    {
        return $this->set('DistrictName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DistrictSearch Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by Education.com. Defaluts to XML. JSON is also possible.
     * @return SchoolFinder_DistrictSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this DistrictSearch Choreo.
     *
     * @param string $value (conditional, string) The two letter abbreviation of a state e.g. South Caroline should be formatted “SC”.
     * @return SchoolFinder_DistrictSearch_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the DistrictSearch Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_DistrictSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DistrictSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this DistrictSearch execution.
     * @param SchoolFinder_DistrictSearch $choreo The choreography object for this execution.
     * @param SchoolFinder_DistrictSearch_Inputs|array $inputs (optional) Inputs as SchoolFinder_DistrictSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_DistrictSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SchoolFinder_DistrictSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DistrictSearch execution.
     *
     * @return SchoolFinder_DistrictSearch_Results New results object.
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
     * Wraps results in appropriate results class for this DistrictSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SchoolFinder_DistrictSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SchoolFinder_DistrictSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DistrictSearch Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_DistrictSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DistrictSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SchoolFinder_DistrictSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DistrictSearch execution.
     *
     * @return string The response from Education.com.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns teacher statistics for a school, district, or state. 
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTeacherStats extends Temboo_Choreography
{
    /**
     * Returns teacher statistics for a school, district, or state. 
     *
     * @param Temboo_Session $session The session that owns this GetTeacherStats Choreo.
     * @return SchoolFinder_GetTeacherStats New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SchoolFinder/GetTeacherStats/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTeacherStats Choreo.
     *
     * @param SchoolFinder_GetTeacherStats_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetTeacherStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetTeacherStats_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SchoolFinder_GetTeacherStats_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTeacherStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetTeacherStats_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SchoolFinder_GetTeacherStats_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTeacherStats Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTeacherStats_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTeacherStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetTeacherStats_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTeacherStats input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SchoolFinder_GetTeacherStats_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SchoolFinder_GetTeacherStats_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTeacherStats Choreo.
     *
     * @param string $value (required, string) Your School Finder API Key.
     * @return SchoolFinder_GetTeacherStats_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DistrictID input for this GetTeacherStats Choreo.
     *
     * @param string $value (conditional, string) The education.com district id.
     * @return SchoolFinder_GetTeacherStats_Inputs For method chaining.
     */
    public function setDistrictID($value)
    {
        return $this->set('DistrictID', $value);
    }

    /**
     * Set the value for the DistrictLEA input for this GetTeacherStats Choreo.
     *
     * @param string $value (conditional, string) The LEA id of the district.
     * @return SchoolFinder_GetTeacherStats_Inputs For method chaining.
     */
    public function setDistrictLEA($value)
    {
        return $this->set('DistrictLEA', $value);
    }

    /**
     * Set the value for the NCES input for this GetTeacherStats Choreo.
     *
     * @param string $value (conditional, string) The National Center for Education Statistics (NCES) id of the school.
     * @return SchoolFinder_GetTeacherStats_Inputs For method chaining.
     */
    public function setNCES($value)
    {
        return $this->set('NCES', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTeacherStats Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by Education.com. Defaluts to XML. JSON is also possible.
     * @return SchoolFinder_GetTeacherStats_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SchoolID input for this GetTeacherStats Choreo.
     *
     * @param string $value (conditional, string) The Education.com id of the school you want to find.
     * @return SchoolFinder_GetTeacherStats_Inputs For method chaining.
     */
    public function setSchoolID($value)
    {
        return $this->set('SchoolID', $value);
    }
}


/**
 * Execution object for the GetTeacherStats Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTeacherStats_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTeacherStats Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTeacherStats execution.
     * @param SchoolFinder_GetTeacherStats $choreo The choreography object for this execution.
     * @param SchoolFinder_GetTeacherStats_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetTeacherStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetTeacherStats_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SchoolFinder_GetTeacherStats $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTeacherStats execution.
     *
     * @return SchoolFinder_GetTeacherStats_Results New results object.
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
     * Wraps results in appropriate results class for this GetTeacherStats execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SchoolFinder_GetTeacherStats_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SchoolFinder_GetTeacherStats_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTeacherStats Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTeacherStats_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTeacherStats Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SchoolFinder_GetTeacherStats_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTeacherStats execution.
     *
     * @return string The response from Education.com.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns contextual and branding links to Education.com. 
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GBD extends Temboo_Choreography
{
    /**
     * Returns contextual and branding links to Education.com. 
     *
     * @param Temboo_Session $session The session that owns this GBD Choreo.
     * @return SchoolFinder_GBD New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SchoolFinder/GBD/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GBD Choreo.
     *
     * @param SchoolFinder_GBD_Inputs|array $inputs (optional) Inputs as SchoolFinder_GBD_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GBD_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SchoolFinder_GBD_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GBD Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GBD_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SchoolFinder_GBD_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GBD Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GBD_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GBD Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GBD_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GBD input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SchoolFinder_GBD_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SchoolFinder_GBD_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GBD Choreo.
     *
     * @param string $value (required, string) Your School Finder API Key.
     * @return SchoolFinder_GBD_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the City input for this GBD Choreo.
     *
     * @param string $value (conditional, string) The name of a city. Must also be accompanied by the corresponding state parameter.
     * @return SchoolFinder_GBD_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the DistrictID input for this GBD Choreo.
     *
     * @param string $value (conditional, string) The internal Education.com id of a school district.
     * @return SchoolFinder_GBD_Inputs For method chaining.
     */
    public function setDistrictID($value)
    {
        return $this->set('DistrictID', $value);
    }

    /**
     * Set the value for the NCES input for this GBD Choreo.
     *
     * @param string $value (conditional, string) The nces id of the school.
     * @return SchoolFinder_GBD_Inputs For method chaining.
     */
    public function setNCES($value)
    {
        return $this->set('NCES', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GBD Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by Education.com. Defaluts to XML. JSON is also possible.
     * @return SchoolFinder_GBD_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SchoolID input for this GBD Choreo.
     *
     * @param string $value (conditional, string) The id of the school.
     * @return SchoolFinder_GBD_Inputs For method chaining.
     */
    public function setSchoolID($value)
    {
        return $this->set('SchoolID', $value);
    }

    /**
     * Set the value for the State input for this GBD Choreo.
     *
     * @param string $value (conditional, string) The two letter abbreviation of a state e.g. South Caroline should be formatted “SC”.
     * @return SchoolFinder_GBD_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the GBD Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GBD_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GBD Choreo.
     *
     * @param Temboo_Session $session The session that owns this GBD execution.
     * @param SchoolFinder_GBD $choreo The choreography object for this execution.
     * @param SchoolFinder_GBD_Inputs|array $inputs (optional) Inputs as SchoolFinder_GBD_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GBD_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SchoolFinder_GBD $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GBD execution.
     *
     * @return SchoolFinder_GBD_Results New results object.
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
     * Wraps results in appropriate results class for this GBD execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SchoolFinder_GBD_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SchoolFinder_GBD_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GBD Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GBD_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GBD Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SchoolFinder_GBD_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GBD execution.
     *
     * @return string The response from Education.com.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the total number of schools, the number of schools at each level (elementary, middle, high) and the number of each type of school (public, private, charter) in a given city. 
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_NumberOf extends Temboo_Choreography
{
    /**
     * Returns the total number of schools, the number of schools at each level (elementary, middle, high) and the number of each type of school (public, private, charter) in a given city. 
     *
     * @param Temboo_Session $session The session that owns this NumberOf Choreo.
     * @return SchoolFinder_NumberOf New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SchoolFinder/NumberOf/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this NumberOf Choreo.
     *
     * @param SchoolFinder_NumberOf_Inputs|array $inputs (optional) Inputs as SchoolFinder_NumberOf_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_NumberOf_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SchoolFinder_NumberOf_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NumberOf Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_NumberOf_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SchoolFinder_NumberOf_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NumberOf Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_NumberOf_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the NumberOf Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_NumberOf_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NumberOf input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SchoolFinder_NumberOf_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SchoolFinder_NumberOf_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this NumberOf Choreo.
     *
     * @param string $value (required, string) Your School Finder API Key.
     * @return SchoolFinder_NumberOf_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the City input for this NumberOf Choreo.
     *
     * @param string $value (required, string) The name of a city. City requests must also be accompanied by the corresponding state parameter.
     * @return SchoolFinder_NumberOf_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this NumberOf Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by Education.com. Defaluts to XML. JSON is also possible.
     * @return SchoolFinder_NumberOf_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this NumberOf Choreo.
     *
     * @param string $value (required, string) The two letter abbreviation of a state e.g. South Caroline should be formatted “SC”.
     * @return SchoolFinder_NumberOf_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the NumberOf Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_NumberOf_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NumberOf Choreo.
     *
     * @param Temboo_Session $session The session that owns this NumberOf execution.
     * @param SchoolFinder_NumberOf $choreo The choreography object for this execution.
     * @param SchoolFinder_NumberOf_Inputs|array $inputs (optional) Inputs as SchoolFinder_NumberOf_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_NumberOf_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SchoolFinder_NumberOf $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NumberOf execution.
     *
     * @return SchoolFinder_NumberOf_Results New results object.
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
     * Wraps results in appropriate results class for this NumberOf execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SchoolFinder_NumberOf_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SchoolFinder_NumberOf_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the NumberOf Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_NumberOf_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the NumberOf Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SchoolFinder_NumberOf_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this NumberOf execution.
     *
     * @return string The response from Education.com.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of school district profiles and related school information for a zip code, city, state, or other criteria in the search parameters.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_SchoolSearch extends Temboo_Choreography
{
    /**
     * Returns a list of school district profiles and related school information for a zip code, city, state, or other criteria in the search parameters.
     *
     * @param Temboo_Session $session The session that owns this SchoolSearch Choreo.
     * @return SchoolFinder_SchoolSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SchoolFinder/SchoolSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SchoolSearch Choreo.
     *
     * @param SchoolFinder_SchoolSearch_Inputs|array $inputs (optional) Inputs as SchoolFinder_SchoolSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_SchoolSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SchoolFinder_SchoolSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SchoolSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_SchoolSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SchoolFinder_SchoolSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SchoolSearch Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_SchoolSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SchoolSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_SchoolSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SchoolSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SchoolSearch Choreo.
     *
     * @param string $value (required, string) Your School Finder API Key.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the City input for this SchoolSearch Choreo.
     *
     * @param string $value (conditional, string) The name of a city. Must also be accompanied by the corresponding state parameter.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the County input for this SchoolSearch Choreo.
     *
     * @param string $value (conditional, string) The name of a county.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setCounty($value)
    {
        return $this->set('County', $value);
    }

    /**
     * Set the value for the Distance input for this SchoolSearch Choreo.
     *
     * @param float $value (conditional, decimal) A distance in miles from a specific latitude/longitude. The suggested value is around 1.5 miles. Please note that distance is required when using latitude and longitude parameters.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the DistrictID input for this SchoolSearch Choreo.
     *
     * @param string $value (optional, string) The internal Education.com id of a school district.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setDistrictID($value)
    {
        return $this->set('DistrictID', $value);
    }

    /**
     * Set the value for the DistrictLEA input for this SchoolSearch Choreo.
     *
     * @param string $value (optional, string) The NCES Local Education Agency (LEA) id of a school district.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setDistrictLEA($value)
    {
        return $this->set('DistrictLEA', $value);
    }

    /**
     * Set the value for the Latitude input for this SchoolSearch Choreo.
     *
     * @param float $value (conditional, decimal) A latitude which serves as the center for distance searches. Please note that distance is required when using latitude and longitude parameters.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SchoolSearch Choreo.
     *
     * @param float $value (conditional, decimal) A longitude which serves as the center for distance searches. Please note that distance is required when using latitude and longitude parameters.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MinResult input for this SchoolSearch Choreo.
     *
     * @param float $value (optional, decimal) Minimum number of search results to return. The search will be expanded in increments of 0.5 miles until the minresult is reached. minResult is only valid for zip code and latitude/longitude requests.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setMinResult($value)
    {
        return $this->set('MinResult', $value);
    }

    /**
     * Set the value for the NCES input for this SchoolSearch Choreo.
     *
     * @param string $value (optional, string) The National Center for Education Statistics (NCES) id of the school you want to find.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setNCES($value)
    {
        return $this->set('NCES', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SchoolSearch Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by Education.com. Defaluts to XML. JSON is also possible.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SchoolID input for this SchoolSearch Choreo.
     *
     * @param string $value (optional, string) The Education.com id of the school you want to find.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setSchoolID($value)
    {
        return $this->set('SchoolID', $value);
    }

    /**
     * Set the value for the State input for this SchoolSearch Choreo.
     *
     * @param string $value (conditional, string) The two letter abbreviation of a state e.g. South Caroline should be formatted “SC”.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Zip input for this SchoolSearch Choreo.
     *
     * @param int $value (conditional, integer) A five digit US postal code.
     * @return SchoolFinder_SchoolSearch_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the SchoolSearch Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_SchoolSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SchoolSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this SchoolSearch execution.
     * @param SchoolFinder_SchoolSearch $choreo The choreography object for this execution.
     * @param SchoolFinder_SchoolSearch_Inputs|array $inputs (optional) Inputs as SchoolFinder_SchoolSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_SchoolSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SchoolFinder_SchoolSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SchoolSearch execution.
     *
     * @return SchoolFinder_SchoolSearch_Results New results object.
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
     * Wraps results in appropriate results class for this SchoolSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SchoolFinder_SchoolSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SchoolFinder_SchoolSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SchoolSearch Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_SchoolSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SchoolSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SchoolFinder_SchoolSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SchoolSearch execution.
     *
     * @return string The response from Education.com.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns test scores for a school, district, city or state. 


 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTestScores extends Temboo_Choreography
{
    /**
     * Returns test scores for a school, district, city or state. 


     *
     * @param Temboo_Session $session The session that owns this GetTestScores Choreo.
     * @return SchoolFinder_GetTestScores New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SchoolFinder/GetTestScores/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTestScores Choreo.
     *
     * @param SchoolFinder_GetTestScores_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetTestScores_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetTestScores_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SchoolFinder_GetTestScores_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTestScores Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetTestScores_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SchoolFinder_GetTestScores_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTestScores Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTestScores_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTestScores Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetTestScores_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTestScores input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SchoolFinder_GetTestScores_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SchoolFinder_GetTestScores_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTestScores Choreo.
     *
     * @param string $value (required, string) Your School Finder API Key.
     * @return SchoolFinder_GetTestScores_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DistrictID input for this GetTestScores Choreo.
     *
     * @param string $value (conditional, string) The education.com district id.
     * @return SchoolFinder_GetTestScores_Inputs For method chaining.
     */
    public function setDistrictID($value)
    {
        return $this->set('DistrictID', $value);
    }

    /**
     * Set the value for the DistrictLEA input for this GetTestScores Choreo.
     *
     * @param string $value (conditional, string) The LEA id of the district.
     * @return SchoolFinder_GetTestScores_Inputs For method chaining.
     */
    public function setDistrictLEA($value)
    {
        return $this->set('DistrictLEA', $value);
    }

    /**
     * Set the value for the NCES input for this GetTestScores Choreo.
     *
     * @param string $value (conditional, string) The National Center for Education Statistics (NCES) id of the school.
     * @return SchoolFinder_GetTestScores_Inputs For method chaining.
     */
    public function setNCES($value)
    {
        return $this->set('NCES', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTestScores Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by Education.com. Defaluts to XML. JSON is also possible.
     * @return SchoolFinder_GetTestScores_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SchoolID input for this GetTestScores Choreo.
     *
     * @param string $value (conditional, string) The Education.com id of the school you want to find.
     * @return SchoolFinder_GetTestScores_Inputs For method chaining.
     */
    public function setSchoolID($value)
    {
        return $this->set('SchoolID', $value);
    }
}


/**
 * Execution object for the GetTestScores Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTestScores_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTestScores Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTestScores execution.
     * @param SchoolFinder_GetTestScores $choreo The choreography object for this execution.
     * @param SchoolFinder_GetTestScores_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetTestScores_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetTestScores_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SchoolFinder_GetTestScores $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTestScores execution.
     *
     * @return SchoolFinder_GetTestScores_Results New results object.
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
     * Wraps results in appropriate results class for this GetTestScores execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SchoolFinder_GetTestScores_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SchoolFinder_GetTestScores_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTestScores Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTestScores_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTestScores Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SchoolFinder_GetTestScores_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTestScores execution.
     *
     * @return string The response from Education.com.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns student statistics for a single school, city, or state. 
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetStudentStats extends Temboo_Choreography
{
    /**
     * Returns student statistics for a single school, city, or state. 
     *
     * @param Temboo_Session $session The session that owns this GetStudentStats Choreo.
     * @return SchoolFinder_GetStudentStats New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SchoolFinder/GetStudentStats/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetStudentStats Choreo.
     *
     * @param SchoolFinder_GetStudentStats_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetStudentStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetStudentStats_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SchoolFinder_GetStudentStats_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetStudentStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetStudentStats_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SchoolFinder_GetStudentStats_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetStudentStats Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetStudentStats_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetStudentStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetStudentStats_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetStudentStats input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetStudentStats Choreo.
     *
     * @param string $value (required, string) Your School Finder API Key.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the City input for this GetStudentStats Choreo.
     *
     * @param string $value (optional, string) The name of a city. Please note cities composed of two words should be formatted with a plus sign e.g. “san+Francisco.” City requests must also be accompanied by the corresponding state parameter.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the DistrictID input for this GetStudentStats Choreo.
     *
     * @param string $value (conditional, string) The education.com district id.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setDistrictID($value)
    {
        return $this->set('DistrictID', $value);
    }

    /**
     * Set the value for the DistrictLEA input for this GetStudentStats Choreo.
     *
     * @param string $value (conditional, string) The LEA id of the district.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setDistrictLEA($value)
    {
        return $this->set('DistrictLEA', $value);
    }

    /**
     * Set the value for the NCES input for this GetStudentStats Choreo.
     *
     * @param string $value (conditional, string) The National Center for Education Statistics (NCES) id of the school.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setNCES($value)
    {
        return $this->set('NCES', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetStudentStats Choreo.
     *
     * @param string $value (conditional, string) Format of the response returned by Education.com. Defaluts to XML. JSON is also possible.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SchoolID input for this GetStudentStats Choreo.
     *
     * @param string $value (conditional, string) The Education.com id of the school you want to find.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setSchoolID($value)
    {
        return $this->set('SchoolID', $value);
    }

    /**
     * Set the value for the State input for this GetStudentStats Choreo.
     *
     * @param string $value (optional, string) The two letter abbreviation of a state e.g. South Caroline should be formatted “SC”.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Zip input for this GetStudentStats Choreo.
     *
     * @param int $value (optional, integer) A five digit US postal code.
     * @return SchoolFinder_GetStudentStats_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the GetStudentStats Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetStudentStats_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetStudentStats Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetStudentStats execution.
     * @param SchoolFinder_GetStudentStats $choreo The choreography object for this execution.
     * @param SchoolFinder_GetStudentStats_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetStudentStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetStudentStats_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SchoolFinder_GetStudentStats $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetStudentStats execution.
     *
     * @return SchoolFinder_GetStudentStats_Results New results object.
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
     * Wraps results in appropriate results class for this GetStudentStats execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SchoolFinder_GetStudentStats_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SchoolFinder_GetStudentStats_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetStudentStats Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetStudentStats_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetStudentStats Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SchoolFinder_GetStudentStats_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetStudentStats execution.
     *
     * @return string The response from Education.com.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of the most recent school reviews and parent rating for a single school.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetReviews extends Temboo_Choreography
{
    /**
     * Returns a list of the most recent school reviews and parent rating for a single school.
     *
     * @param Temboo_Session $session The session that owns this GetReviews Choreo.
     * @return SchoolFinder_GetReviews New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SchoolFinder/GetReviews/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetReviews Choreo.
     *
     * @param SchoolFinder_GetReviews_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetReviews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetReviews_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SchoolFinder_GetReviews_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReviews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetReviews_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SchoolFinder_GetReviews_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReviews Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetReviews_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetReviews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetReviews_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReviews input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SchoolFinder_GetReviews_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SchoolFinder_GetReviews_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetReviews Choreo.
     *
     * @param string $value (required, string) Your School Finder API Key.
     * @return SchoolFinder_GetReviews_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the NCES input for this GetReviews Choreo.
     *
     * @param string $value (conditional, string) The National Center for Education Statistics (NCES) id of the school. NCES or SchoolID are required.
     * @return SchoolFinder_GetReviews_Inputs For method chaining.
     */
    public function setNCES($value)
    {
        return $this->set('NCES', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetReviews Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by Education.com. Defaluts to XML. JSON is also possible.
     * @return SchoolFinder_GetReviews_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SchoolID input for this GetReviews Choreo.
     *
     * @param string $value (conditional, string) The Education.com id of the school you want to find. NCES or SchoolID are required.
     * @return SchoolFinder_GetReviews_Inputs For method chaining.
     */
    public function setSchoolID($value)
    {
        return $this->set('SchoolID', $value);
    }
}


/**
 * Execution object for the GetReviews Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetReviews_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReviews Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetReviews execution.
     * @param SchoolFinder_GetReviews $choreo The choreography object for this execution.
     * @param SchoolFinder_GetReviews_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetReviews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetReviews_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SchoolFinder_GetReviews $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReviews execution.
     *
     * @return SchoolFinder_GetReviews_Results New results object.
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
     * Wraps results in appropriate results class for this GetReviews execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SchoolFinder_GetReviews_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SchoolFinder_GetReviews_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetReviews Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetReviews_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetReviews Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SchoolFinder_GetReviews_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetReviews execution.
     *
     * @return string The response from Education.com.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the Education.com TestRating for a single school or schools within a city or zip code. 
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTestRating extends Temboo_Choreography
{
    /**
     * Returns the Education.com TestRating for a single school or schools within a city or zip code. 
     *
     * @param Temboo_Session $session The session that owns this GetTestRating Choreo.
     * @return SchoolFinder_GetTestRating New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SchoolFinder/GetTestRating/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTestRating Choreo.
     *
     * @param SchoolFinder_GetTestRating_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetTestRating_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetTestRating_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SchoolFinder_GetTestRating_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTestRating Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetTestRating_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SchoolFinder_GetTestRating_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTestRating Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTestRating_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTestRating Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SchoolFinder_GetTestRating_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTestRating input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SchoolFinder_GetTestRating_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SchoolFinder_GetTestRating_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTestRating Choreo.
     *
     * @param string $value (required, string) Your School Finder API Key.
     * @return SchoolFinder_GetTestRating_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the City input for this GetTestRating Choreo.
     *
     * @param string $value (conditional, string) The name of a city. Must also be accompanied by the corresponding state parameter.
     * @return SchoolFinder_GetTestRating_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the NCES input for this GetTestRating Choreo.
     *
     * @param string $value (conditional, string) The National Center for Education Statistics (NCES) id of the school.
     * @return SchoolFinder_GetTestRating_Inputs For method chaining.
     */
    public function setNCES($value)
    {
        return $this->set('NCES', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTestRating Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by Education.com. Defaluts to XML. JSON is also possible.
     * @return SchoolFinder_GetTestRating_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SchoolID input for this GetTestRating Choreo.
     *
     * @param string $value (conditional, string) The Education.com id of the school you want to find.
     * @return SchoolFinder_GetTestRating_Inputs For method chaining.
     */
    public function setSchoolID($value)
    {
        return $this->set('SchoolID', $value);
    }

    /**
     * Set the value for the State input for this GetTestRating Choreo.
     *
     * @param string $value (conditional, string) The two letter abbreviation of a state e.g. South Caroline should be formatted “SC”.
     * @return SchoolFinder_GetTestRating_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Zip input for this GetTestRating Choreo.
     *
     * @param int $value (conditional, integer) A five digit US postal code.
     * @return SchoolFinder_GetTestRating_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the GetTestRating Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTestRating_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTestRating Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTestRating execution.
     * @param SchoolFinder_GetTestRating $choreo The choreography object for this execution.
     * @param SchoolFinder_GetTestRating_Inputs|array $inputs (optional) Inputs as SchoolFinder_GetTestRating_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SchoolFinder_GetTestRating_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SchoolFinder_GetTestRating $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTestRating execution.
     *
     * @return SchoolFinder_GetTestRating_Results New results object.
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
     * Wraps results in appropriate results class for this GetTestRating execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SchoolFinder_GetTestRating_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SchoolFinder_GetTestRating_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTestRating Choreo.
 *
 * @package Temboo
 * @subpackage SchoolFinder
 */
class SchoolFinder_GetTestRating_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTestRating Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SchoolFinder_GetTestRating_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTestRating execution.
     *
     * @return string The response from Education.com.
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
<?php

/**
 * Temboo PHP SDK UnlockPlaces classes
 *
 * Execute Choreographies from the Temboo UnlockPlaces bundle.
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
 * @subpackage UnlockPlaces
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Search for the specified unique name, returning a single result per feature.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_UniqueNameSearch extends Temboo_Choreography
{
    /**
     * Search for the specified unique name, returning a single result per feature.
     *
     * @param Temboo_Session $session The session that owns this UniqueNameSearch Choreo.
     * @return UnlockPlaces_UniqueNameSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/UniqueNameSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UniqueNameSearch Choreo.
     *
     * @param UnlockPlaces_UniqueNameSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_UniqueNameSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_UniqueNameSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_UniqueNameSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UniqueNameSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_UniqueNameSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_UniqueNameSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UniqueNameSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_UniqueNameSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UniqueNameSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_UniqueNameSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UniqueNameSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_UniqueNameSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_UniqueNameSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this UniqueNameSearch Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_UniqueNameSearch_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this UniqueNameSearch Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_UniqueNameSearch_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the MaxRows input for this UniqueNameSearch Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_UniqueNameSearch_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the Name input for this UniqueNameSearch Choreo.
     *
     * @param string $value (required, string) One or more names of places to search for (separated by commas).
     * @return UnlockPlaces_UniqueNameSearch_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the StartRow input for this UniqueNameSearch Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_UniqueNameSearch_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the UniqueNameSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_UniqueNameSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UniqueNameSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this UniqueNameSearch execution.
     * @param UnlockPlaces_UniqueNameSearch $choreo The choreography object for this execution.
     * @param UnlockPlaces_UniqueNameSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_UniqueNameSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_UniqueNameSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_UniqueNameSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UniqueNameSearch execution.
     *
     * @return UnlockPlaces_UniqueNameSearch_Results New results object.
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
     * Wraps results in appropriate results class for this UniqueNameSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_UniqueNameSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_UniqueNameSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UniqueNameSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_UniqueNameSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UniqueNameSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_UniqueNameSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UniqueNameSearch execution.
     *
     * @return string (xml) The response from Unlock. Defaults to XML based on the format input parameter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for names of places within a specified bounding box.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SpacialNameSearch extends Temboo_Choreography
{
    /**
     * Searches for names of places within a specified bounding box.
     *
     * @param Temboo_Session $session The session that owns this SpacialNameSearch Choreo.
     * @return UnlockPlaces_SpacialNameSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/SpacialNameSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SpacialNameSearch Choreo.
     *
     * @param UnlockPlaces_SpacialNameSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_SpacialNameSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_SpacialNameSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_SpacialNameSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SpacialNameSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_SpacialNameSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_SpacialNameSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SpacialNameSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SpacialNameSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SpacialNameSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_SpacialNameSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SpacialNameSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this SpacialNameSearch Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this SpacialNameSearch Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the MaxLatitude input for this SpacialNameSearch Choreo.
     *
     * @param float $value (required, decimal) The maximum latitude point of a bounding box.
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setMaxLatitude($value)
    {
        return $this->set('MaxLatitude', $value);
    }

    /**
     * Set the value for the MaxLongitude input for this SpacialNameSearch Choreo.
     *
     * @param float $value (required, decimal) The maximum longitude point of a bounding box.
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setMaxLongitude($value)
    {
        return $this->set('MaxLongitude', $value);
    }

    /**
     * Set the value for the MaxRows input for this SpacialNameSearch Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the MinLatitude input for this SpacialNameSearch Choreo.
     *
     * @param float $value (required, decimal) The minimum latitude point of a bounding box.
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setMinLatitude($value)
    {
        return $this->set('MinLatitude', $value);
    }

    /**
     * Set the value for the MinLongitude input for this SpacialNameSearch Choreo.
     *
     * @param float $value (required, decimal) The minimum longitude point of a bounding box.
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setMinLongitude($value)
    {
        return $this->set('MinLongitude', $value);
    }

    /**
     * Set the value for the Name input for this SpacialNameSearch Choreo.
     *
     * @param string $value (required, string) One or more names of places to search for (separated by commas).
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Operator input for this SpacialNameSearch Choreo.
     *
     * @param mixed $value (optional, any) Valid values are: "within" and "intersect". The results will therefore be entirely within, or overlapping with (intersecting), the bounding box. Defaults to "within".
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setOperator($value)
    {
        return $this->set('Operator', $value);
    }

    /**
     * Set the value for the StartRow input for this SpacialNameSearch Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_SpacialNameSearch_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the SpacialNameSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SpacialNameSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SpacialNameSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this SpacialNameSearch execution.
     * @param UnlockPlaces_SpacialNameSearch $choreo The choreography object for this execution.
     * @param UnlockPlaces_SpacialNameSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_SpacialNameSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_SpacialNameSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_SpacialNameSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SpacialNameSearch execution.
     *
     * @return UnlockPlaces_SpacialNameSearch_Results New results object.
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
     * Wraps results in appropriate results class for this SpacialNameSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_SpacialNameSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_SpacialNameSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SpacialNameSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SpacialNameSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SpacialNameSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_SpacialNameSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SpacialNameSearch execution.
     *
     * @return string (xml) The response from Unlock. Defaults to XML based on the format input parameter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for names of places with a specified feature type.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_NameAndFeatureSearch extends Temboo_Choreography
{
    /**
     * Searches for names of places with a specified feature type.
     *
     * @param Temboo_Session $session The session that owns this NameAndFeatureSearch Choreo.
     * @return UnlockPlaces_NameAndFeatureSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/NameAndFeatureSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this NameAndFeatureSearch Choreo.
     *
     * @param UnlockPlaces_NameAndFeatureSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_NameAndFeatureSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_NameAndFeatureSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_NameAndFeatureSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NameAndFeatureSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_NameAndFeatureSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NameAndFeatureSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_NameAndFeatureSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the NameAndFeatureSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NameAndFeatureSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FeatureType input for this NameAndFeatureSearch Choreo.
     *
     * @param string $value (required, string) The feature type that the place is (i.e. "Cities"). See http://unlock.edina.ac.uk/ws/supportedFeatureTypes?format=txt for a complete list of supported Feature Types.
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs For method chaining.
     */
    public function setFeatureType($value)
    {
        return $this->set('FeatureType', $value);
    }

    /**
     * Set the value for the Format input for this NameAndFeatureSearch Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this NameAndFeatureSearch Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the MaxRows input for this NameAndFeatureSearch Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the Name input for this NameAndFeatureSearch Choreo.
     *
     * @param string $value (required, string) One or more names of places to search for (separated by commas).
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the StartRow input for this NameAndFeatureSearch Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_NameAndFeatureSearch_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the NameAndFeatureSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_NameAndFeatureSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NameAndFeatureSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this NameAndFeatureSearch execution.
     * @param UnlockPlaces_NameAndFeatureSearch $choreo The choreography object for this execution.
     * @param UnlockPlaces_NameAndFeatureSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_NameAndFeatureSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_NameAndFeatureSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_NameAndFeatureSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NameAndFeatureSearch execution.
     *
     * @return UnlockPlaces_NameAndFeatureSearch_Results New results object.
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
     * Wraps results in appropriate results class for this NameAndFeatureSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_NameAndFeatureSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_NameAndFeatureSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the NameAndFeatureSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_NameAndFeatureSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the NameAndFeatureSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_NameAndFeatureSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this NameAndFeatureSearch execution.
     *
     * @return string (xml) The response from Unlock. Defaults to XML based on the format input parameter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Basic query for a search by name, which will return a list of matching features for a specified place.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_NameSearch extends Temboo_Choreography
{
    /**
     * Basic query for a search by name, which will return a list of matching features for a specified place.
     *
     * @param Temboo_Session $session The session that owns this NameSearch Choreo.
     * @return UnlockPlaces_NameSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/NameSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this NameSearch Choreo.
     *
     * @param UnlockPlaces_NameSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_NameSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_NameSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_NameSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NameSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_NameSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_NameSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NameSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_NameSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the NameSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_NameSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NameSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_NameSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_NameSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this NameSearch Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_NameSearch_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this NameSearch Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_NameSearch_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the MaxRows input for this NameSearch Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_NameSearch_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the Name input for this NameSearch Choreo.
     *
     * @param string $value (required, string) One or more names of places to search for (separated by commas).
     * @return UnlockPlaces_NameSearch_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the StartRow input for this NameSearch Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_NameSearch_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the NameSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_NameSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NameSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this NameSearch execution.
     * @param UnlockPlaces_NameSearch $choreo The choreography object for this execution.
     * @param UnlockPlaces_NameSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_NameSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_NameSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_NameSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NameSearch execution.
     *
     * @return UnlockPlaces_NameSearch_Results New results object.
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
     * Wraps results in appropriate results class for this NameSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_NameSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_NameSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the NameSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_NameSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the NameSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_NameSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this NameSearch execution.
     *
     * @return string (xml) The response from Unlock. Defaults to XML based on the format input parameter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the footprint for a specified place identifier.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_FootprintLookup extends Temboo_Choreography
{
    /**
     * Retrieves the footprint for a specified place identifier.
     *
     * @param Temboo_Session $session The session that owns this FootprintLookup Choreo.
     * @return UnlockPlaces_FootprintLookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/FootprintLookup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FootprintLookup Choreo.
     *
     * @param UnlockPlaces_FootprintLookup_Inputs|array $inputs (optional) Inputs as UnlockPlaces_FootprintLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_FootprintLookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_FootprintLookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FootprintLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_FootprintLookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_FootprintLookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FootprintLookup Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_FootprintLookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FootprintLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_FootprintLookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FootprintLookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_FootprintLookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_FootprintLookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this FootprintLookup Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_FootprintLookup_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this FootprintLookup Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_FootprintLookup_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the Identifier input for this FootprintLookup Choreo.
     *
     * @param int $value (required, integer) The place identifier that you want to use for the search. Note that this identifier is returned in the <geometryRef> response element of other Unlock Places search Choreos.
     * @return UnlockPlaces_FootprintLookup_Inputs For method chaining.
     */
    public function setIdentifier($value)
    {
        return $this->set('Identifier', $value);
    }

    /**
     * Set the value for the MaxRows input for this FootprintLookup Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_FootprintLookup_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the StartRow input for this FootprintLookup Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_FootprintLookup_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the FootprintLookup Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_FootprintLookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FootprintLookup Choreo.
     *
     * @param Temboo_Session $session The session that owns this FootprintLookup execution.
     * @param UnlockPlaces_FootprintLookup $choreo The choreography object for this execution.
     * @param UnlockPlaces_FootprintLookup_Inputs|array $inputs (optional) Inputs as UnlockPlaces_FootprintLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_FootprintLookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_FootprintLookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FootprintLookup execution.
     *
     * @return UnlockPlaces_FootprintLookup_Results New results object.
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
     * Wraps results in appropriate results class for this FootprintLookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_FootprintLookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_FootprintLookup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FootprintLookup Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_FootprintLookup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FootprintLookup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_FootprintLookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FootprintLookup execution.
     *
     * @return string (xml) The response from Unlock. Defaults to XML based on the format input parameter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for places by postal code.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_PostCodeSearch extends Temboo_Choreography
{
    /**
     * Searches for places by postal code.
     *
     * @param Temboo_Session $session The session that owns this PostCodeSearch Choreo.
     * @return UnlockPlaces_PostCodeSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/PostCodeSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PostCodeSearch Choreo.
     *
     * @param UnlockPlaces_PostCodeSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_PostCodeSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_PostCodeSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_PostCodeSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PostCodeSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_PostCodeSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_PostCodeSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PostCodeSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_PostCodeSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PostCodeSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_PostCodeSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PostCodeSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_PostCodeSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_PostCodeSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this PostCodeSearch Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_PostCodeSearch_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this PostCodeSearch Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_PostCodeSearch_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the MaxRows input for this PostCodeSearch Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_PostCodeSearch_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the PostCode input for this PostCodeSearch Choreo.
     *
     * @param string $value (required, string) A UK postal code to use for the search.
     * @return UnlockPlaces_PostCodeSearch_Inputs For method chaining.
     */
    public function setPostCode($value)
    {
        return $this->set('PostCode', $value);
    }

    /**
     * Set the value for the StartRow input for this PostCodeSearch Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_PostCodeSearch_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the PostCodeSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_PostCodeSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PostCodeSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this PostCodeSearch execution.
     * @param UnlockPlaces_PostCodeSearch $choreo The choreography object for this execution.
     * @param UnlockPlaces_PostCodeSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_PostCodeSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_PostCodeSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_PostCodeSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PostCodeSearch execution.
     *
     * @return UnlockPlaces_PostCodeSearch_Results New results object.
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
     * Wraps results in appropriate results class for this PostCodeSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_PostCodeSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_PostCodeSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PostCodeSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_PostCodeSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PostCodeSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_PostCodeSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PostCodeSearch execution.
     *
     * @return string (xml) The response from Unlock. Defaults to XML based on the format input parameter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for the closest match for a place.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_ClosestMatchSearch extends Temboo_Choreography
{
    /**
     * Searches for the closest match for a place.
     *
     * @param Temboo_Session $session The session that owns this ClosestMatchSearch Choreo.
     * @return UnlockPlaces_ClosestMatchSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/ClosestMatchSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ClosestMatchSearch Choreo.
     *
     * @param UnlockPlaces_ClosestMatchSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_ClosestMatchSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_ClosestMatchSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_ClosestMatchSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ClosestMatchSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_ClosestMatchSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_ClosestMatchSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ClosestMatchSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_ClosestMatchSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ClosestMatchSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_ClosestMatchSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ClosestMatchSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_ClosestMatchSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_ClosestMatchSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this ClosestMatchSearch Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_ClosestMatchSearch_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this ClosestMatchSearch Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_ClosestMatchSearch_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the MaxRows input for this ClosestMatchSearch Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_ClosestMatchSearch_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the Name input for this ClosestMatchSearch Choreo.
     *
     * @param string $value (required, string) One or more names of places to search for (separated by commas).
     * @return UnlockPlaces_ClosestMatchSearch_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the StartRow input for this ClosestMatchSearch Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_ClosestMatchSearch_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the ClosestMatchSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_ClosestMatchSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ClosestMatchSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this ClosestMatchSearch execution.
     * @param UnlockPlaces_ClosestMatchSearch $choreo The choreography object for this execution.
     * @param UnlockPlaces_ClosestMatchSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_ClosestMatchSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_ClosestMatchSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_ClosestMatchSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ClosestMatchSearch execution.
     *
     * @return UnlockPlaces_ClosestMatchSearch_Results New results object.
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
     * Wraps results in appropriate results class for this ClosestMatchSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_ClosestMatchSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_ClosestMatchSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ClosestMatchSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_ClosestMatchSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ClosestMatchSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_ClosestMatchSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ClosestMatchSearch execution.
     *
     * @return string (xml) The response from Unlock. Defaults to XML based on the format input parameter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for features by ID.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_FeatureLookup extends Temboo_Choreography
{
    /**
     * Searches for features by ID.
     *
     * @param Temboo_Session $session The session that owns this FeatureLookup Choreo.
     * @return UnlockPlaces_FeatureLookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/FeatureLookup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FeatureLookup Choreo.
     *
     * @param UnlockPlaces_FeatureLookup_Inputs|array $inputs (optional) Inputs as UnlockPlaces_FeatureLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_FeatureLookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_FeatureLookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FeatureLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_FeatureLookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_FeatureLookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FeatureLookup Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_FeatureLookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FeatureLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_FeatureLookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FeatureLookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_FeatureLookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_FeatureLookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this FeatureLookup Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_FeatureLookup_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this FeatureLookup Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_FeatureLookup_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the ID input for this FeatureLookup Choreo.
     *
     * @param int $value (required, integer) The ID of the feature you want to search for. Note that this identifier is returned in the <id> response element of the NameAndFeatureSearch Choreo.
     * @return UnlockPlaces_FeatureLookup_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the MaxRows input for this FeatureLookup Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_FeatureLookup_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the StartRow input for this FeatureLookup Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_FeatureLookup_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the FeatureLookup Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_FeatureLookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FeatureLookup Choreo.
     *
     * @param Temboo_Session $session The session that owns this FeatureLookup execution.
     * @param UnlockPlaces_FeatureLookup $choreo The choreography object for this execution.
     * @param UnlockPlaces_FeatureLookup_Inputs|array $inputs (optional) Inputs as UnlockPlaces_FeatureLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_FeatureLookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_FeatureLookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FeatureLookup execution.
     *
     * @return UnlockPlaces_FeatureLookup_Results New results object.
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
     * Wraps results in appropriate results class for this FeatureLookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_FeatureLookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_FeatureLookup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FeatureLookup Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_FeatureLookup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FeatureLookup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_FeatureLookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FeatureLookup execution.
     *
     * @return string (xml) The response from Unlock. Defaults to XML based on the format input parameter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for feature types within a specified bounding box.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SpacialFeaturesSearch extends Temboo_Choreography
{
    /**
     * Searches for feature types within a specified bounding box.
     *
     * @param Temboo_Session $session The session that owns this SpacialFeaturesSearch Choreo.
     * @return UnlockPlaces_SpacialFeaturesSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/SpacialFeaturesSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SpacialFeaturesSearch Choreo.
     *
     * @param UnlockPlaces_SpacialFeaturesSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_SpacialFeaturesSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_SpacialFeaturesSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_SpacialFeaturesSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SpacialFeaturesSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_SpacialFeaturesSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SpacialFeaturesSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SpacialFeaturesSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SpacialFeaturesSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SpacialFeaturesSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FeatureType input for this SpacialFeaturesSearch Choreo.
     *
     * @param string $value (string) The feature type that the place is (i.e. "Cities"). See http://unlock.edina.ac.uk/ws/supportedFeatureTypes?format=txt for a complete list of supported Feature Types.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setFeatureType($value)
    {
        return $this->set('FeatureType', $value);
    }

    /**
     * Set the value for the Format input for this SpacialFeaturesSearch Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this SpacialFeaturesSearch Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the MaxLatitude input for this SpacialFeaturesSearch Choreo.
     *
     * @param float $value (decimal) The maximum latitude point of a bounding box.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setMaxLatitude($value)
    {
        return $this->set('MaxLatitude', $value);
    }

    /**
     * Set the value for the MaxLongitude input for this SpacialFeaturesSearch Choreo.
     *
     * @param float $value (decimal) The maximum longitude point of a bounding box.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setMaxLongitude($value)
    {
        return $this->set('MaxLongitude', $value);
    }

    /**
     * Set the value for the MaxRows input for this SpacialFeaturesSearch Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the MinLatitude input for this SpacialFeaturesSearch Choreo.
     *
     * @param float $value (decimal) The minimum latitude point of a bounding box.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setMinLatitude($value)
    {
        return $this->set('MinLatitude', $value);
    }

    /**
     * Set the value for the MinLongitude input for this SpacialFeaturesSearch Choreo.
     *
     * @param float $value (decimal) The minimum longitude point of a bounding box.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setMinLongitude($value)
    {
        return $this->set('MinLongitude', $value);
    }

    /**
     * Set the value for the Operator input for this SpacialFeaturesSearch Choreo.
     *
     * @param string $value Valid values are: "within" and "intersect". The results will therefore be entirely within, or overlapping with (intersecting), the bounding box. Defaults to "within".
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setOperator($value)
    {
        return $this->set('Operator', $value);
    }

    /**
     * Set the value for the StartRow input for this SpacialFeaturesSearch Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_SpacialFeaturesSearch_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the SpacialFeaturesSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SpacialFeaturesSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SpacialFeaturesSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this SpacialFeaturesSearch execution.
     * @param UnlockPlaces_SpacialFeaturesSearch $choreo The choreography object for this execution.
     * @param UnlockPlaces_SpacialFeaturesSearch_Inputs|array $inputs (optional) Inputs as UnlockPlaces_SpacialFeaturesSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_SpacialFeaturesSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_SpacialFeaturesSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SpacialFeaturesSearch execution.
     *
     * @return UnlockPlaces_SpacialFeaturesSearch_Results New results object.
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
     * Wraps results in appropriate results class for this SpacialFeaturesSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_SpacialFeaturesSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_SpacialFeaturesSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SpacialFeaturesSearch Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SpacialFeaturesSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SpacialFeaturesSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_SpacialFeaturesSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SpacialFeaturesSearch execution.
     *
     * @return string (XML) The response from Unlock. Defaults to XML based on the format input parameter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of supported feature types that can be used in searches.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SupportedFeatureTypes extends Temboo_Choreography
{
    /**
     * Retrieves a list of supported feature types that can be used in searches.
     *
     * @param Temboo_Session $session The session that owns this SupportedFeatureTypes Choreo.
     * @return UnlockPlaces_SupportedFeatureTypes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/UnlockPlaces/SupportedFeatureTypes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SupportedFeatureTypes Choreo.
     *
     * @param UnlockPlaces_SupportedFeatureTypes_Inputs|array $inputs (optional) Inputs as UnlockPlaces_SupportedFeatureTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_SupportedFeatureTypes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new UnlockPlaces_SupportedFeatureTypes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SupportedFeatureTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_SupportedFeatureTypes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new UnlockPlaces_SupportedFeatureTypes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SupportedFeatureTypes Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SupportedFeatureTypes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SupportedFeatureTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return UnlockPlaces_SupportedFeatureTypes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SupportedFeatureTypes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return UnlockPlaces_SupportedFeatureTypes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return UnlockPlaces_SupportedFeatureTypes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this SupportedFeatureTypes Choreo.
     *
     * @param string $value (optional, string) The format of the place search results. One of xml, kml, json, georss or txt. Defaults to "xml".
     * @return UnlockPlaces_SupportedFeatureTypes_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Gazetteer input for this SupportedFeatureTypes Choreo.
     *
     * @param string $value (optional, string) The place-name source to take locations from. The options are geonames, os, naturalearth or unlock which combines all the previous. Defaults to "unlock".
     * @return UnlockPlaces_SupportedFeatureTypes_Inputs For method chaining.
     */
    public function setGazetteer($value)
    {
        return $this->set('Gazetteer', $value);
    }

    /**
     * Set the value for the MaxRows input for this SupportedFeatureTypes Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return. Defaults to 20. Cannot exceed 1000.
     * @return UnlockPlaces_SupportedFeatureTypes_Inputs For method chaining.
     */
    public function setMaxRows($value)
    {
        return $this->set('MaxRows', $value);
    }

    /**
     * Set the value for the StartRow input for this SupportedFeatureTypes Choreo.
     *
     * @param int $value (optional, integer) The row to start results display from. Defaults to 1.
     * @return UnlockPlaces_SupportedFeatureTypes_Inputs For method chaining.
     */
    public function setStartRow($value)
    {
        return $this->set('StartRow', $value);
    }
}


/**
 * Execution object for the SupportedFeatureTypes Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SupportedFeatureTypes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SupportedFeatureTypes Choreo.
     *
     * @param Temboo_Session $session The session that owns this SupportedFeatureTypes execution.
     * @param UnlockPlaces_SupportedFeatureTypes $choreo The choreography object for this execution.
     * @param UnlockPlaces_SupportedFeatureTypes_Inputs|array $inputs (optional) Inputs as UnlockPlaces_SupportedFeatureTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return UnlockPlaces_SupportedFeatureTypes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, UnlockPlaces_SupportedFeatureTypes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SupportedFeatureTypes execution.
     *
     * @return UnlockPlaces_SupportedFeatureTypes_Results New results object.
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
     * Wraps results in appropriate results class for this SupportedFeatureTypes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return UnlockPlaces_SupportedFeatureTypes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new UnlockPlaces_SupportedFeatureTypes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SupportedFeatureTypes Choreo.
 *
 * @package Temboo
 * @subpackage UnlockPlaces
 */
class UnlockPlaces_SupportedFeatureTypes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SupportedFeatureTypes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return UnlockPlaces_SupportedFeatureTypes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SupportedFeatureTypes execution.
     *
     * @return string (XML) The response from Unlock. Defaults to XML based on the format input parameter.
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
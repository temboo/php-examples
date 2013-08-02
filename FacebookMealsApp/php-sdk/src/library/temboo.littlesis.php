<?php

/**
 * Temboo PHP SDK LittleSis classes
 *
 * Execute Choreographies from the Temboo LittleSis bundle.
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
 * @subpackage LittleSis
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves a list of Lists in LittleSis the given Entity (person or organization) belongs to.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetListsByEntity extends Temboo_Choreography
{
    /**
     * Retrieves a list of Lists in LittleSis the given Entity (person or organization) belongs to.
     *
     * @param Temboo_Session $session The session that owns this GetListsByEntity Choreo.
     * @return LittleSis_Entity_GetListsByEntity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetListsByEntity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetListsByEntity Choreo.
     *
     * @param LittleSis_Entity_GetListsByEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetListsByEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetListsByEntity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetListsByEntity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListsByEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetListsByEntity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetListsByEntity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListsByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetListsByEntity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetListsByEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetListsByEntity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListsByEntity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetListsByEntity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetListsByEntity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetListsByEntity Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetListsByEntity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this GetListsByEntity Choreo.
     *
     * @param int $value (required, integer) The ID of the record to be returned.
     * @return LittleSis_Entity_GetListsByEntity_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetListsByEntity Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetListsByEntity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetListsByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetListsByEntity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListsByEntity Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetListsByEntity execution.
     * @param LittleSis_Entity_GetListsByEntity $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetListsByEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetListsByEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetListsByEntity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetListsByEntity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListsByEntity execution.
     *
     * @return LittleSis_Entity_GetListsByEntity_Results New results object.
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
     * Wraps results in appropriate results class for this GetListsByEntity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetListsByEntity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetListsByEntity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetListsByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetListsByEntity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetListsByEntity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetListsByEntity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetListsByEntity execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the LittleSis record for a given Entity (person or organization) by its ID.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntity extends Temboo_Choreography
{
    /**
     * Retrieves the LittleSis record for a given Entity (person or organization) by its ID.
     *
     * @param Temboo_Session $session The session that owns this GetEntity Choreo.
     * @return LittleSis_Entity_GetEntity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetEntity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetEntity Choreo.
     *
     * @param LittleSis_Entity_GetEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetEntity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetEntity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetEntity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetEntity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetEntity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEntity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetEntity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetEntity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetEntity Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetEntity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Details input for this GetEntity Choreo.
     *
     * @param string $value (optional, string) Indicate "details" to retrieve detailed information associated with this record, including aliases. Otherwise, only a basic record will be returned.
     * @return LittleSis_Entity_GetEntity_Inputs For method chaining.
     */
    public function setDetails($value)
    {
        return $this->set('Details', $value);
    }

    /**
     * Set the value for the EntityID input for this GetEntity Choreo.
     *
     * @param int $value (required, integer) The EntityID of the person or organization record to be returned.
     * @return LittleSis_Entity_GetEntity_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetEntity Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetEntity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEntity Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetEntity execution.
     * @param LittleSis_Entity_GetEntity $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetEntity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetEntity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEntity execution.
     *
     * @return LittleSis_Entity_GetEntity_Results New results object.
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
     * Wraps results in appropriate results class for this GetEntity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetEntity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetEntity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetEntity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetEntity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetEntity execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a batch of relationships in LittleSis according to the relationship IDs provided.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetBatchRelationships extends Temboo_Choreography
{
    /**
     * Retrieves information about a batch of relationships in LittleSis according to the relationship IDs provided.
     *
     * @param Temboo_Session $session The session that owns this GetBatchRelationships Choreo.
     * @return LittleSis_Relationship_GetBatchRelationships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Relationship/GetBatchRelationships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBatchRelationships Choreo.
     *
     * @param LittleSis_Relationship_GetBatchRelationships_Inputs|array $inputs (optional) Inputs as LittleSis_Relationship_GetBatchRelationships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Relationship_GetBatchRelationships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Relationship_GetBatchRelationships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBatchRelationships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Relationship_GetBatchRelationships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Relationship_GetBatchRelationships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBatchRelationships Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetBatchRelationships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBatchRelationships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Relationship_GetBatchRelationships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBatchRelationships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Relationship_GetBatchRelationships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Relationship_GetBatchRelationships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBatchRelationships Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Relationship_GetBatchRelationships_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Details input for this GetBatchRelationships Choreo.
     *
     * @param int $value (optional, integer) Indicate 1 to include details for each relationship record returned. Otherwise, only a basic record will be returned.
     * @return LittleSis_Relationship_GetBatchRelationships_Inputs For method chaining.
     */
    public function setDetails($value)
    {
        return $this->set('Details', $value);
    }

    /**
     * Set the value for the RelationshipIDs input for this GetBatchRelationships Choreo.
     *
     * @param string $value (required, string) The IDs of the relationship records to be returned as a comma delimited string.
     * @return LittleSis_Relationship_GetBatchRelationships_Inputs For method chaining.
     */
    public function setRelationshipIDs($value)
    {
        return $this->set('RelationshipIDs', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBatchRelationships Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Relationship_GetBatchRelationships_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetBatchRelationships Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetBatchRelationships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBatchRelationships Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBatchRelationships execution.
     * @param LittleSis_Relationship_GetBatchRelationships $choreo The choreography object for this execution.
     * @param LittleSis_Relationship_GetBatchRelationships_Inputs|array $inputs (optional) Inputs as LittleSis_Relationship_GetBatchRelationships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Relationship_GetBatchRelationships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Relationship_GetBatchRelationships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBatchRelationships execution.
     *
     * @return LittleSis_Relationship_GetBatchRelationships_Results New results object.
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
     * Wraps results in appropriate results class for this GetBatchRelationships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Relationship_GetBatchRelationships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Relationship_GetBatchRelationships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBatchRelationships Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetBatchRelationships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBatchRelationships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Relationship_GetBatchRelationships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBatchRelationships execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of Entities (person or organization) to which a known relationship exists in LittleSis for any Entity.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntitiesWithRelationship extends Temboo_Choreography
{
    /**
     * Retrieves a list of Entities (person or organization) to which a known relationship exists in LittleSis for any Entity.
     *
     * @param Temboo_Session $session The session that owns this GetEntitiesWithRelationship Choreo.
     * @return LittleSis_Entity_GetEntitiesWithRelationship New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetEntitiesWithRelationship/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetEntitiesWithRelationship Choreo.
     *
     * @param LittleSis_Entity_GetEntitiesWithRelationship_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetEntitiesWithRelationship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetEntitiesWithRelationship_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEntitiesWithRelationship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetEntitiesWithRelationship_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEntitiesWithRelationship Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntitiesWithRelationship_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetEntitiesWithRelationship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEntitiesWithRelationship input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetEntitiesWithRelationship Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CategoryIDs input for this GetEntitiesWithRelationship Choreo.
     *
     * @param string $value (optional, string) Comma delimited list of category IDs of the categories to which the resulting Entities should belong.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setCategoryIDs($value)
    {
        return $this->set('CategoryIDs', $value);
    }

    /**
     * Set the value for the Current input for this GetEntitiesWithRelationship Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to limit the relationships returned to only past relationships. Set to 0 to limit relationships returned to only current relationships. Defaults to all.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setCurrent($value)
    {
        return $this->set('Current', $value);
    }

    /**
     * Set the value for the EntityID input for this GetEntitiesWithRelationship Choreo.
     *
     * @param int $value (required, integer) The ID of the person or organization fro which a record is to be returned.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the Number input for this GetEntitiesWithRelationship Choreo.
     *
     * @param int $value (optional, integer) Specifies what number of results to show. Used in conjunction with Page parameter, a Number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }

    /**
     * Set the value for the Order input for this GetEntitiesWithRelationship Choreo.
     *
     * @param int $value (optional, integer) Specifies what order the given entity must have in the relationship.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the Page input for this GetEntitiesWithRelationship Choreo.
     *
     * @param int $value (optional, integer) Specifies what page of results to show. Used in conjunction with Number parameter. A number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetEntitiesWithRelationship Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortBy input for this GetEntitiesWithRelationship Choreo.
     *
     * @param string $value (optional, string) Defaults to sorting by entity, which returns a list of relationships grouped by related entity. Specify another sort order for the results. Acceptable inputs: category or relationship.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }
}


/**
 * Execution object for the GetEntitiesWithRelationship Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntitiesWithRelationship_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEntitiesWithRelationship Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetEntitiesWithRelationship execution.
     * @param LittleSis_Entity_GetEntitiesWithRelationship $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetEntitiesWithRelationship_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetEntitiesWithRelationship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetEntitiesWithRelationship $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEntitiesWithRelationship execution.
     *
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Results New results object.
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
     * Wraps results in appropriate results class for this GetEntitiesWithRelationship execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetEntitiesWithRelationship_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetEntitiesWithRelationship Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntitiesWithRelationship_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetEntitiesWithRelationship Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetEntitiesWithRelationship_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetEntitiesWithRelationship execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of organizations of which a given person is an executive or board member.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetLeadershipByPerson extends Temboo_Choreography
{
    /**
     * Retrieves a list of organizations of which a given person is an executive or board member.
     *
     * @param Temboo_Session $session The session that owns this GetLeadershipByPerson Choreo.
     * @return LittleSis_Entity_GetLeadershipByPerson New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetLeadershipByPerson/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLeadershipByPerson Choreo.
     *
     * @param LittleSis_Entity_GetLeadershipByPerson_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetLeadershipByPerson_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetLeadershipByPerson_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetLeadershipByPerson_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLeadershipByPerson Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetLeadershipByPerson_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetLeadershipByPerson_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLeadershipByPerson Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetLeadershipByPerson_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLeadershipByPerson Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetLeadershipByPerson_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLeadershipByPerson input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetLeadershipByPerson_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetLeadershipByPerson_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetLeadershipByPerson Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetLeadershipByPerson_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Current input for this GetLeadershipByPerson Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to limit the relationships returned to only past relationships. Set to 0 to limit relationships returned to only current relationships. Defaults to all.
     * @return LittleSis_Entity_GetLeadershipByPerson_Inputs For method chaining.
     */
    public function setCurrent($value)
    {
        return $this->set('Current', $value);
    }

    /**
     * Set the value for the EntityID input for this GetLeadershipByPerson Choreo.
     *
     * @param int $value (required, integer) The ID of the person.
     * @return LittleSis_Entity_GetLeadershipByPerson_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLeadershipByPerson Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetLeadershipByPerson_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Type input for this GetLeadershipByPerson Choreo.
     *
     * @param string $value (optional, string) Limits results to organizations of the specified type, e.g. "PublicCompany."
     * @return LittleSis_Entity_GetLeadershipByPerson_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the GetLeadershipByPerson Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetLeadershipByPerson_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLeadershipByPerson Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLeadershipByPerson execution.
     * @param LittleSis_Entity_GetLeadershipByPerson $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetLeadershipByPerson_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetLeadershipByPerson_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetLeadershipByPerson_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetLeadershipByPerson $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLeadershipByPerson execution.
     *
     * @return LittleSis_Entity_GetLeadershipByPerson_Results New results object.
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
     * Wraps results in appropriate results class for this GetLeadershipByPerson execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetLeadershipByPerson_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetLeadershipByPerson_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLeadershipByPerson Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetLeadershipByPerson_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLeadershipByPerson Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetLeadershipByPerson_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLeadershipByPerson execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a chain of connections between two Entities (person or organization) in LittleSis.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetChainsByEntity extends Temboo_Choreography
{
    /**
     * Retrieves a chain of connections between two Entities (person or organization) in LittleSis.
     *
     * @param Temboo_Session $session The session that owns this GetChainsByEntity Choreo.
     * @return LittleSis_Entity_GetChainsByEntity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetChainsByEntity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetChainsByEntity Choreo.
     *
     * @param LittleSis_Entity_GetChainsByEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetChainsByEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetChainsByEntity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetChainsByEntity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetChainsByEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetChainsByEntity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetChainsByEntity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetChainsByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetChainsByEntity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetChainsByEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetChainsByEntity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetChainsByEntity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetChainsByEntity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetChainsByEntity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetChainsByEntity Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetChainsByEntity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CategoryID input for this GetChainsByEntity Choreo.
     *
     * @param int $value (optional, integer) Limit the relationships to specific categories by specifying the category number.
     * @return LittleSis_Entity_GetChainsByEntity_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the EntityIDs input for this GetChainsByEntity Choreo.
     *
     * @param int $value (required, integer) The EntityIDs of the two entities for which a relationship chain is to be returned, separated by a semicolon (e.g. 14629;2 ).
     * @return LittleSis_Entity_GetChainsByEntity_Inputs For method chaining.
     */
    public function setEntityIDs($value)
    {
        return $this->set('EntityIDs', $value);
    }

    /**
     * Set the value for the Page input for this GetChainsByEntity Choreo.
     *
     * @param string $value (optional, string) Specifies which of the found chain to expand in detail. Default is 1.
     * @return LittleSis_Entity_GetChainsByEntity_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetChainsByEntity Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetChainsByEntity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetChainsByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetChainsByEntity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetChainsByEntity Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetChainsByEntity execution.
     * @param LittleSis_Entity_GetChainsByEntity $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetChainsByEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetChainsByEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetChainsByEntity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetChainsByEntity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetChainsByEntity execution.
     *
     * @return LittleSis_Entity_GetChainsByEntity_Results New results object.
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
     * Wraps results in appropriate results class for this GetChainsByEntity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetChainsByEntity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetChainsByEntity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetChainsByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetChainsByEntity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetChainsByEntity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetChainsByEntity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetChainsByEntity execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the LittleSis record for a given Entity (person or organization) by its ID.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetBatchEntities extends Temboo_Choreography
{
    /**
     * Retrieves the LittleSis record for a given Entity (person or organization) by its ID.
     *
     * @param Temboo_Session $session The session that owns this GetBatchEntities Choreo.
     * @return LittleSis_Entity_GetBatchEntities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetBatchEntities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBatchEntities Choreo.
     *
     * @param LittleSis_Entity_GetBatchEntities_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetBatchEntities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetBatchEntities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetBatchEntities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBatchEntities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetBatchEntities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetBatchEntities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBatchEntities Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetBatchEntities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBatchEntities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetBatchEntities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBatchEntities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetBatchEntities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetBatchEntities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBatchEntities Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetBatchEntities_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Details input for this GetBatchEntities Choreo.
     *
     * @param int $value (optional, integer) Indicate 1 to retrieve detailed information associated with each record retrieved Otherwise, only a basic record will be returned.
     * @return LittleSis_Entity_GetBatchEntities_Inputs For method chaining.
     */
    public function setDetails($value)
    {
        return $this->set('Details', $value);
    }

    /**
     * Set the value for the EntityIDs input for this GetBatchEntities Choreo.
     *
     * @param string $value (required, string) A comma delimited string of the IDs of the Entities to retrieve.
     * @return LittleSis_Entity_GetBatchEntities_Inputs For method chaining.
     */
    public function setEntityIDs($value)
    {
        return $this->set('EntityIDs', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBatchEntities Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetBatchEntities_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetBatchEntities Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetBatchEntities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBatchEntities Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBatchEntities execution.
     * @param LittleSis_Entity_GetBatchEntities $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetBatchEntities_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetBatchEntities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetBatchEntities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetBatchEntities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBatchEntities execution.
     *
     * @return LittleSis_Entity_GetBatchEntities_Results New results object.
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
     * Wraps results in appropriate results class for this GetBatchEntities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetBatchEntities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetBatchEntities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBatchEntities Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetBatchEntities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBatchEntities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetBatchEntities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBatchEntities execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of relationships for any entity in LittleSis along with references for the relationship data obtained.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Reference_GetRelationshipReferences extends Temboo_Choreography
{
    /**
     * Retrieves a list of relationships for any entity in LittleSis along with references for the relationship data obtained.
     *
     * @param Temboo_Session $session The session that owns this GetRelationshipReferences Choreo.
     * @return LittleSis_Reference_GetRelationshipReferences New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Reference/GetRelationshipReferences/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRelationshipReferences Choreo.
     *
     * @param LittleSis_Reference_GetRelationshipReferences_Inputs|array $inputs (optional) Inputs as LittleSis_Reference_GetRelationshipReferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Reference_GetRelationshipReferences_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Reference_GetRelationshipReferences_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRelationshipReferences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Reference_GetRelationshipReferences_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRelationshipReferences Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Reference_GetRelationshipReferences_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRelationshipReferences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRelationshipReferences input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRelationshipReferences Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CategoryID input for this GetRelationshipReferences Choreo.
     *
     * @param string $value (optional, string) Comma delimited list of category IDs.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the Current input for this GetRelationshipReferences Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to limit the relationships returned to only past relationships. Set to 0 to limit relationships returned to only current relationships. Defaults to all.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setCurrent($value)
    {
        return $this->set('Current', $value);
    }

    /**
     * Set the value for the ID input for this GetRelationshipReferences Choreo.
     *
     * @param float $value (required, decimal) The ID of the record for which you want relationship references.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Number input for this GetRelationshipReferences Choreo.
     *
     * @param int $value (optional, integer) Specifies what number of results to show. Used in conjunction with Page parameter, a Number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }

    /**
     * Set the value for the Order input for this GetRelationshipReferences Choreo.
     *
     * @param int $value (optional, integer) Specifies what order the given entity must have in the relationship.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the Page input for this GetRelationshipReferences Choreo.
     *
     * @param int $value (optional, integer) Specifies what page of results to show. Used in conjunction with Number parameter. A number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRelationshipReferences Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortBy input for this GetRelationshipReferences Choreo.
     *
     * @param string $value (optional, string) Defaults to sorting by entity, which returns a list of relationships grouped by related entity. Specify another sort order for the results. Acceptable inputs: category or relationship.
     * @return LittleSis_Reference_GetRelationshipReferences_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }
}


/**
 * Execution object for the GetRelationshipReferences Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Reference_GetRelationshipReferences_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRelationshipReferences Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRelationshipReferences execution.
     * @param LittleSis_Reference_GetRelationshipReferences $choreo The choreography object for this execution.
     * @param LittleSis_Reference_GetRelationshipReferences_Inputs|array $inputs (optional) Inputs as LittleSis_Reference_GetRelationshipReferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Reference_GetRelationshipReferences_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Reference_GetRelationshipReferences $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRelationshipReferences execution.
     *
     * @return LittleSis_Reference_GetRelationshipReferences_Results New results object.
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
     * Wraps results in appropriate results class for this GetRelationshipReferences execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Reference_GetRelationshipReferences_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Reference_GetRelationshipReferences_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRelationshipReferences Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Reference_GetRelationshipReferences_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRelationshipReferences Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Reference_GetRelationshipReferences_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRelationshipReferences execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the aliases associated with each LittleSis Entity (person or organization).
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetAliasesByEntity extends Temboo_Choreography
{
    /**
     * Retrieves the aliases associated with each LittleSis Entity (person or organization).
     *
     * @param Temboo_Session $session The session that owns this GetAliasesByEntity Choreo.
     * @return LittleSis_Entity_GetAliasesByEntity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetAliasesByEntity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAliasesByEntity Choreo.
     *
     * @param LittleSis_Entity_GetAliasesByEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetAliasesByEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetAliasesByEntity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetAliasesByEntity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAliasesByEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetAliasesByEntity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetAliasesByEntity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAliasesByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetAliasesByEntity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAliasesByEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetAliasesByEntity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAliasesByEntity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetAliasesByEntity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetAliasesByEntity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetAliasesByEntity Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetAliasesByEntity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this GetAliasesByEntity Choreo.
     *
     * @param int $value (required, integer) The ID of the Entity (person or organization) for which aliases are to be retrieved.
     * @return LittleSis_Entity_GetAliasesByEntity_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetAliasesByEntity Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetAliasesByEntity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetAliasesByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetAliasesByEntity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAliasesByEntity Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAliasesByEntity execution.
     * @param LittleSis_Entity_GetAliasesByEntity $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetAliasesByEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetAliasesByEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetAliasesByEntity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetAliasesByEntity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAliasesByEntity execution.
     *
     * @return LittleSis_Entity_GetAliasesByEntity_Results New results object.
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
     * Wraps results in appropriate results class for this GetAliasesByEntity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetAliasesByEntity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetAliasesByEntity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAliasesByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetAliasesByEntity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAliasesByEntity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetAliasesByEntity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAliasesByEntity execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a List in LittleSis according to its ID.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_List_GetList extends Temboo_Choreography
{
    /**
     * Retrieves information about a List in LittleSis according to its ID.
     *
     * @param Temboo_Session $session The session that owns this GetList Choreo.
     * @return LittleSis_List_GetList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/List/GetList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetList Choreo.
     *
     * @param LittleSis_List_GetList_Inputs|array $inputs (optional) Inputs as LittleSis_List_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_List_GetList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_List_GetList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_List_GetList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_List_GetList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_List_GetList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_List_GetList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_List_GetList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_List_GetList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetList Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_List_GetList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Entities input for this GetList Choreo.
     *
     * @param string $value (optional, string) Indicate "entities" to retrieve records of the entities that belong to the list. Otherwise, only a basic record about the list will be returned.
     * @return LittleSis_List_GetList_Inputs For method chaining.
     */
    public function setEntities($value)
    {
        return $this->set('Entities', $value);
    }

    /**
     * Set the value for the ListID input for this GetList Choreo.
     *
     * @param int $value (required, integer) The ID of the list record to be returned.
     * @return LittleSis_List_GetList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Number input for this GetList Choreo.
     *
     * @param int $value (optional, integer) Specifies what number of results to show. Used in conjunction with Page parameter, a Nnumber of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_List_GetList_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }

    /**
     * Set the value for the Page input for this GetList Choreo.
     *
     * @param int $value (optional, integer) Specifies what page of results to show. Used in conjunction with Number parameter. A number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_List_GetList_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetList Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_List_GetList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TypeID input for this GetList Choreo.
     *
     * @param int $value (optional, integer) When the Entities parameter is activated, you can specify type IDs limiting the entities returned to those having the specified types (as a comma-delimited list).
     * @return LittleSis_List_GetList_Inputs For method chaining.
     */
    public function setTypeID($value)
    {
        return $this->set('TypeID', $value);
    }
}


/**
 * Execution object for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_List_GetList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetList execution.
     * @param LittleSis_List_GetList $choreo The choreography object for this execution.
     * @param LittleSis_List_GetList_Inputs|array $inputs (optional) Inputs as LittleSis_List_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_List_GetList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_List_GetList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetList execution.
     *
     * @return LittleSis_List_GetList_Results New results object.
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
     * Wraps results in appropriate results class for this GetList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_List_GetList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_List_GetList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_List_GetList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_List_GetList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetList execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the record for an Entity in LittleSis using the ID of a number of third-party organizations such as the SEC or GovTrack.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntityByOutsideID extends Temboo_Choreography
{
    /**
     * Retrieves the record for an Entity in LittleSis using the ID of a number of third-party organizations such as the SEC or GovTrack.
     *
     * @param Temboo_Session $session The session that owns this GetEntityByOutsideID Choreo.
     * @return LittleSis_Entity_GetEntityByOutsideID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetEntityByOutsideID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetEntityByOutsideID Choreo.
     *
     * @param LittleSis_Entity_GetEntityByOutsideID_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetEntityByOutsideID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetEntityByOutsideID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetEntityByOutsideID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEntityByOutsideID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetEntityByOutsideID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetEntityByOutsideID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEntityByOutsideID Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntityByOutsideID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetEntityByOutsideID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetEntityByOutsideID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEntityByOutsideID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetEntityByOutsideID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetEntityByOutsideID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetEntityByOutsideID Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetEntityByOutsideID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the IDType input for this GetEntityByOutsideID Choreo.
     *
     * @param string $value (required, string) You can search for a record by the IDs of other third-party services. Acceptable inputs: ticker, sec_cik, fec_id, bioguide_id, govtrack_id, crp_id, watchdog_id. See documentation for more information.
     * @return LittleSis_Entity_GetEntityByOutsideID_Inputs For method chaining.
     */
    public function setIDType($value)
    {
        return $this->set('IDType', $value);
    }

    /**
     * Set the value for the ID input for this GetEntityByOutsideID Choreo.
     *
     * @param int $value (required, integer) The ID of the record to be returned.
     * @return LittleSis_Entity_GetEntityByOutsideID_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetEntityByOutsideID Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetEntityByOutsideID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetEntityByOutsideID Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntityByOutsideID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEntityByOutsideID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetEntityByOutsideID execution.
     * @param LittleSis_Entity_GetEntityByOutsideID $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetEntityByOutsideID_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetEntityByOutsideID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetEntityByOutsideID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetEntityByOutsideID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEntityByOutsideID execution.
     *
     * @return LittleSis_Entity_GetEntityByOutsideID_Results New results object.
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
     * Wraps results in appropriate results class for this GetEntityByOutsideID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetEntityByOutsideID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetEntityByOutsideID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetEntityByOutsideID Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetEntityByOutsideID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetEntityByOutsideID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetEntityByOutsideID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetEntityByOutsideID execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of suborganizations of a given organization.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetSubOrganizations extends Temboo_Choreography
{
    /**
     * Retrieves a list of suborganizations of a given organization.
     *
     * @param Temboo_Session $session The session that owns this GetSubOrganizations Choreo.
     * @return LittleSis_Entity_GetSubOrganizations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetSubOrganizations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSubOrganizations Choreo.
     *
     * @param LittleSis_Entity_GetSubOrganizations_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetSubOrganizations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetSubOrganizations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetSubOrganizations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSubOrganizations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetSubOrganizations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetSubOrganizations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSubOrganizations Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetSubOrganizations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSubOrganizations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetSubOrganizations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSubOrganizations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetSubOrganizations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetSubOrganizations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetSubOrganizations Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetSubOrganizations_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this GetSubOrganizations Choreo.
     *
     * @param int $value (required, integer) The ID of the organization.
     * @return LittleSis_Entity_GetSubOrganizations_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSubOrganizations Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetSubOrganizations_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetSubOrganizations Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetSubOrganizations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSubOrganizations Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSubOrganizations execution.
     * @param LittleSis_Entity_GetSubOrganizations $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetSubOrganizations_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetSubOrganizations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetSubOrganizations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetSubOrganizations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSubOrganizations execution.
     *
     * @return LittleSis_Entity_GetSubOrganizations_Results New results object.
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
     * Wraps results in appropriate results class for this GetSubOrganizations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetSubOrganizations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetSubOrganizations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSubOrganizations Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetSubOrganizations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSubOrganizations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetSubOrganizations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSubOrganizations execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all the Relationships possible among people and organizations in LittleSis.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_Categories extends Temboo_Choreography
{
    /**
     * Retrieves a list of all the Relationships possible among people and organizations in LittleSis.
     *
     * @param Temboo_Session $session The session that owns this Categories Choreo.
     * @return LittleSis_Entity_Categories New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/Categories/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Categories Choreo.
     *
     * @param LittleSis_Entity_Categories_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_Categories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_Categories_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_Categories_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Categories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_Categories_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_Categories_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Categories Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_Categories_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Categories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_Categories_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Categories input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_Categories_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_Categories_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ResponseFormat input for this Categories Choreo.
     *
     * @param string $value (optional, string) The format of the response from LittleSis.org. Acceptable inputs: xml or json. Defautls to xml.
     * @return LittleSis_Entity_Categories_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Categories Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_Categories_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Categories Choreo.
     *
     * @param Temboo_Session $session The session that owns this Categories execution.
     * @param LittleSis_Entity_Categories $choreo The choreography object for this execution.
     * @param LittleSis_Entity_Categories_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_Categories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_Categories_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_Categories $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Categories execution.
     *
     * @return LittleSis_Entity_Categories_Results New results object.
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
     * Wraps results in appropriate results class for this Categories execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_Categories_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_Categories_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Categories Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_Categories_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Categories Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_Categories_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Categories execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves references for the data included in any record obtained from LittleSis.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Reference_GetReferences extends Temboo_Choreography
{
    /**
     * Retrieves references for the data included in any record obtained from LittleSis.
     *
     * @param Temboo_Session $session The session that owns this GetReferences Choreo.
     * @return LittleSis_Reference_GetReferences New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Reference/GetReferences/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetReferences Choreo.
     *
     * @param LittleSis_Reference_GetReferences_Inputs|array $inputs (optional) Inputs as LittleSis_Reference_GetReferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Reference_GetReferences_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Reference_GetReferences_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReferences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Reference_GetReferences_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Reference_GetReferences_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReferences Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Reference_GetReferences_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetReferences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Reference_GetReferences_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReferences input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Reference_GetReferences_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Reference_GetReferences_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetReferences Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Reference_GetReferences_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this GetReferences Choreo.
     *
     * @param float $value (required, decimal) The ID of the record for which you want references. This can be either an entity or a relationship ID.
     * @return LittleSis_Reference_GetReferences_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the RecordType input for this GetReferences Choreo.
     *
     * @param string $value (required, string) Specify type of record for which you want to obtain references: entity (for a person or an institution record) or relationship (for a relationship record).
     * @return LittleSis_Reference_GetReferences_Inputs For method chaining.
     */
    public function setRecordType($value)
    {
        return $this->set('RecordType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetReferences Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Reference_GetReferences_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetReferences Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Reference_GetReferences_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReferences Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetReferences execution.
     * @param LittleSis_Reference_GetReferences $choreo The choreography object for this execution.
     * @param LittleSis_Reference_GetReferences_Inputs|array $inputs (optional) Inputs as LittleSis_Reference_GetReferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Reference_GetReferences_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Reference_GetReferences $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReferences execution.
     *
     * @return LittleSis_Reference_GetReferences_Results New results object.
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
     * Wraps results in appropriate results class for this GetReferences execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Reference_GetReferences_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Reference_GetReferences_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetReferences Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Reference_GetReferences_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetReferences Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Reference_GetReferences_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetReferences execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the name and description fields of Lists available in LittleSis that match a keyword search.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_List_ListSearchByKeyword extends Temboo_Choreography
{
    /**
     * Retrieves the name and description fields of Lists available in LittleSis that match a keyword search.
     *
     * @param Temboo_Session $session The session that owns this ListSearchByKeyword Choreo.
     * @return LittleSis_List_ListSearchByKeyword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/List/ListSearchByKeyword/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListSearchByKeyword Choreo.
     *
     * @param LittleSis_List_ListSearchByKeyword_Inputs|array $inputs (optional) Inputs as LittleSis_List_ListSearchByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_List_ListSearchByKeyword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_List_ListSearchByKeyword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListSearchByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_List_ListSearchByKeyword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_List_ListSearchByKeyword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListSearchByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_List_ListSearchByKeyword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListSearchByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_List_ListSearchByKeyword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListSearchByKeyword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_List_ListSearchByKeyword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_List_ListSearchByKeyword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListSearchByKeyword Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_List_ListSearchByKeyword_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Keywords input for this ListSearchByKeyword Choreo.
     *
     * @param string $value (required, string) Enter search text.
     * @return LittleSis_List_ListSearchByKeyword_Inputs For method chaining.
     */
    public function setKeywords($value)
    {
        return $this->set('Keywords', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListSearchByKeyword Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_List_ListSearchByKeyword_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListSearchByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_List_ListSearchByKeyword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListSearchByKeyword Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListSearchByKeyword execution.
     * @param LittleSis_List_ListSearchByKeyword $choreo The choreography object for this execution.
     * @param LittleSis_List_ListSearchByKeyword_Inputs|array $inputs (optional) Inputs as LittleSis_List_ListSearchByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_List_ListSearchByKeyword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_List_ListSearchByKeyword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListSearchByKeyword execution.
     *
     * @return LittleSis_List_ListSearchByKeyword_Results New results object.
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
     * Wraps results in appropriate results class for this ListSearchByKeyword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_List_ListSearchByKeyword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_List_ListSearchByKeyword_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListSearchByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_List_ListSearchByKeyword_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListSearchByKeyword Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_List_ListSearchByKeyword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListSearchByKeyword execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of Relationships (to a person or to an organization) of a given Entity known in LittleSis.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetRelationshipsByEntity extends Temboo_Choreography
{
    /**
     * Retrieves a list of Relationships (to a person or to an organization) of a given Entity known in LittleSis.
     *
     * @param Temboo_Session $session The session that owns this GetRelationshipsByEntity Choreo.
     * @return LittleSis_Entity_GetRelationshipsByEntity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetRelationshipsByEntity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRelationshipsByEntity Choreo.
     *
     * @param LittleSis_Entity_GetRelationshipsByEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetRelationshipsByEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetRelationshipsByEntity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRelationshipsByEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetRelationshipsByEntity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRelationshipsByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetRelationshipsByEntity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRelationshipsByEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRelationshipsByEntity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRelationshipsByEntity Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CategoryIDs input for this GetRelationshipsByEntity Choreo.
     *
     * @param string $value (optional, string) Comma delimited list of category IDs the resulting Relationships must have.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs For method chaining.
     */
    public function setCategoryIDs($value)
    {
        return $this->set('CategoryIDs', $value);
    }

    /**
     * Set the value for the EntityID input for this GetRelationshipsByEntity Choreo.
     *
     * @param int $value (required, integer) The ID of the person or organization fro which a record is to be returned.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the Number input for this GetRelationshipsByEntity Choreo.
     *
     * @param int $value (optional, integer) Specifies what number of results to show. Used in conjunction with Page parameter, a Number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }

    /**
     * Set the value for the Order input for this GetRelationshipsByEntity Choreo.
     *
     * @param int $value (optional, integer) Specifies what order the given entity must have in the relationship.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the Page input for this GetRelationshipsByEntity Choreo.
     *
     * @param int $value (optional, integer) Specifies what page of results to show. Used in conjunction with Number parameter. A number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRelationshipsByEntity Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetRelationshipsByEntity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetRelationshipsByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetRelationshipsByEntity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRelationshipsByEntity Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRelationshipsByEntity execution.
     * @param LittleSis_Entity_GetRelationshipsByEntity $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetRelationshipsByEntity_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetRelationshipsByEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetRelationshipsByEntity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRelationshipsByEntity execution.
     *
     * @return LittleSis_Entity_GetRelationshipsByEntity_Results New results object.
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
     * Wraps results in appropriate results class for this GetRelationshipsByEntity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetRelationshipsByEntity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRelationshipsByEntity Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetRelationshipsByEntity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRelationshipsByEntity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetRelationshipsByEntity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRelationshipsByEntity execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all the Entities (people or organizations) that are two-degrees removed by Relationships from the given Entity.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetSecondDegreeRelationships extends Temboo_Choreography
{
    /**
     * Retrieves a list of all the Entities (people or organizations) that are two-degrees removed by Relationships from the given Entity.
     *
     * @param Temboo_Session $session The session that owns this GetSecondDegreeRelationships Choreo.
     * @return LittleSis_Entity_GetSecondDegreeRelationships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetSecondDegreeRelationships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSecondDegreeRelationships Choreo.
     *
     * @param LittleSis_Entity_GetSecondDegreeRelationships_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetSecondDegreeRelationships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetSecondDegreeRelationships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSecondDegreeRelationships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetSecondDegreeRelationships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSecondDegreeRelationships Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetSecondDegreeRelationships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSecondDegreeRelationships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSecondDegreeRelationships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetSecondDegreeRelationships Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Category1 input for this GetSecondDegreeRelationships Choreo.
     *
     * @param string $value (optional, string) Comma delimited list of Category IDs. Restricts the categories of Relationships that the given Entity and all first degree Entities returned should be connected through.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setCategory1($value)
    {
        return $this->set('Category1', $value);
    }

    /**
     * Set the value for the Category2 input for this GetSecondDegreeRelationships Choreo.
     *
     * @param string $value (optional, string) Comma delimited list of Category IDs. Restricts the categories of Relationships that the given Entity and all second degree Entities returned should be connected through.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setCategory2($value)
    {
        return $this->set('Category2', $value);
    }

    /**
     * Set the value for the EntityID input for this GetSecondDegreeRelationships Choreo.
     *
     * @param int $value (required, integer) The ID of the person or organization for which records are to be returned.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the Number input for this GetSecondDegreeRelationships Choreo.
     *
     * @param int $value (optional, integer) Specifies what number of results to show. Used in conjunction with Page parameter, a Number of 20 and a Page of 6 will show results 100-120. Defaults to 20.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }

    /**
     * Set the value for the Order1 input for this GetSecondDegreeRelationships Choreo.
     *
     * @param int $value (optional, integer) Specifies the order of the Entities returned in the first degree Relationship. Acceptable values: 1 or 2. See documentation for more on Relationship order.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setOrder1($value)
    {
        return $this->set('Order1', $value);
    }

    /**
     * Set the value for the Order2 input for this GetSecondDegreeRelationships Choreo.
     *
     * @param int $value (optional, integer) Specifies the order of the first degree Entity in the second degree Relationship. Acceptable values: 1 or 2. See documentation for more on Relationship order.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setOrder2($value)
    {
        return $this->set('Order2', $value);
    }

    /**
     * Set the value for the Page input for this GetSecondDegreeRelationships Choreo.
     *
     * @param int $value (optional, integer) Specifies what page of results to show. Used in conjunction with Number parameter. A number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSecondDegreeRelationships Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetSecondDegreeRelationships Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetSecondDegreeRelationships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSecondDegreeRelationships Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSecondDegreeRelationships execution.
     * @param LittleSis_Entity_GetSecondDegreeRelationships $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetSecondDegreeRelationships_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetSecondDegreeRelationships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetSecondDegreeRelationships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSecondDegreeRelationships execution.
     *
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Results New results object.
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
     * Wraps results in appropriate results class for this GetSecondDegreeRelationships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetSecondDegreeRelationships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSecondDegreeRelationships Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetSecondDegreeRelationships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSecondDegreeRelationships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetSecondDegreeRelationships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSecondDegreeRelationships execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a specific relationship documented in LittleSis according to its Relationship ID.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetRelationships extends Temboo_Choreography
{
    /**
     * Retrieves information about a specific relationship documented in LittleSis according to its Relationship ID.
     *
     * @param Temboo_Session $session The session that owns this GetRelationships Choreo.
     * @return LittleSis_Relationship_GetRelationships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Relationship/GetRelationships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRelationships Choreo.
     *
     * @param LittleSis_Relationship_GetRelationships_Inputs|array $inputs (optional) Inputs as LittleSis_Relationship_GetRelationships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Relationship_GetRelationships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Relationship_GetRelationships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRelationships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Relationship_GetRelationships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Relationship_GetRelationships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRelationships Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetRelationships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRelationships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Relationship_GetRelationships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRelationships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Relationship_GetRelationships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Relationship_GetRelationships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRelationships Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Relationship_GetRelationships_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Details input for this GetRelationships Choreo.
     *
     * @param string $value (optional, string) Indicate "details" to retrieve detailed information associated with this record, including fields associated with the specific relationship type. Otherwise, only a basic record will be returned.
     * @return LittleSis_Relationship_GetRelationships_Inputs For method chaining.
     */
    public function setDetails($value)
    {
        return $this->set('Details', $value);
    }

    /**
     * Set the value for the RelationshipID input for this GetRelationships Choreo.
     *
     * @param int $value (required, integer) The ID of the relationship record to be returned.
     * @return LittleSis_Relationship_GetRelationships_Inputs For method chaining.
     */
    public function setRelationshipID($value)
    {
        return $this->set('RelationshipID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRelationships Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Relationship_GetRelationships_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetRelationships Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetRelationships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRelationships Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRelationships execution.
     * @param LittleSis_Relationship_GetRelationships $choreo The choreography object for this execution.
     * @param LittleSis_Relationship_GetRelationships_Inputs|array $inputs (optional) Inputs as LittleSis_Relationship_GetRelationships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Relationship_GetRelationships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Relationship_GetRelationships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRelationships execution.
     *
     * @return LittleSis_Relationship_GetRelationships_Results New results object.
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
     * Wraps results in appropriate results class for this GetRelationships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Relationship_GetRelationships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Relationship_GetRelationships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRelationships Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetRelationships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRelationships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Relationship_GetRelationships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRelationships execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of board members and executives for a given organization.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetLeadershipByOrganization extends Temboo_Choreography
{
    /**
     * Retrieves a list of board members and executives for a given organization.
     *
     * @param Temboo_Session $session The session that owns this GetLeadershipByOrganization Choreo.
     * @return LittleSis_Entity_GetLeadershipByOrganization New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/GetLeadershipByOrganization/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLeadershipByOrganization Choreo.
     *
     * @param LittleSis_Entity_GetLeadershipByOrganization_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetLeadershipByOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_GetLeadershipByOrganization_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLeadershipByOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_GetLeadershipByOrganization_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLeadershipByOrganization Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetLeadershipByOrganization_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLeadershipByOrganization Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLeadershipByOrganization input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetLeadershipByOrganization Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Current input for this GetLeadershipByOrganization Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to limit the relationships returned to only past relationships. Set to 0 to limit relationships returned to only current relationships. Defaults to all.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Inputs For method chaining.
     */
    public function setCurrent($value)
    {
        return $this->set('Current', $value);
    }

    /**
     * Set the value for the EntityID input for this GetLeadershipByOrganization Choreo.
     *
     * @param int $value (required, integer) The ID of the organization.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLeadershipByOrganization Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_GetLeadershipByOrganization_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetLeadershipByOrganization Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetLeadershipByOrganization_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLeadershipByOrganization Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLeadershipByOrganization execution.
     * @param LittleSis_Entity_GetLeadershipByOrganization $choreo The choreography object for this execution.
     * @param LittleSis_Entity_GetLeadershipByOrganization_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_GetLeadershipByOrganization_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_GetLeadershipByOrganization $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLeadershipByOrganization execution.
     *
     * @return LittleSis_Entity_GetLeadershipByOrganization_Results New results object.
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
     * Wraps results in appropriate results class for this GetLeadershipByOrganization execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_GetLeadershipByOrganization_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLeadershipByOrganization Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_GetLeadershipByOrganization_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLeadershipByOrganization Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_GetLeadershipByOrganization_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLeadershipByOrganization execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the types of Entities (people or organizations) in LittleSis, along with TypeIDs.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_EntityTypes extends Temboo_Choreography
{
    /**
     * Retrieves a list of the types of Entities (people or organizations) in LittleSis, along with TypeIDs.
     *
     * @param Temboo_Session $session The session that owns this EntityTypes Choreo.
     * @return LittleSis_Entity_EntityTypes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/EntityTypes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EntityTypes Choreo.
     *
     * @param LittleSis_Entity_EntityTypes_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_EntityTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_EntityTypes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_EntityTypes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EntityTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_EntityTypes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_EntityTypes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EntityTypes Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_EntityTypes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EntityTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_EntityTypes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EntityTypes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_EntityTypes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_EntityTypes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ResponseFormat input for this EntityTypes Choreo.
     *
     * @param string $value (optional, string) The format of the response from LittleSis.org. Acceptable inputs: xml or json. Defautls to xml.
     * @return LittleSis_Entity_EntityTypes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the EntityTypes Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_EntityTypes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EntityTypes Choreo.
     *
     * @param Temboo_Session $session The session that owns this EntityTypes execution.
     * @param LittleSis_Entity_EntityTypes $choreo The choreography object for this execution.
     * @param LittleSis_Entity_EntityTypes_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_EntityTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_EntityTypes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_EntityTypes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EntityTypes execution.
     *
     * @return LittleSis_Entity_EntityTypes_Results New results object.
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
     * Wraps results in appropriate results class for this EntityTypes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_EntityTypes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_EntityTypes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EntityTypes Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_EntityTypes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EntityTypes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_EntityTypes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EntityTypes execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about any known relationship between two entities in LittleSis according their IDs.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetOneRelationship extends Temboo_Choreography
{
    /**
     * Retrieves information about any known relationship between two entities in LittleSis according their IDs.
     *
     * @param Temboo_Session $session The session that owns this GetOneRelationship Choreo.
     * @return LittleSis_Relationship_GetOneRelationship New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Relationship/GetOneRelationship/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetOneRelationship Choreo.
     *
     * @param LittleSis_Relationship_GetOneRelationship_Inputs|array $inputs (optional) Inputs as LittleSis_Relationship_GetOneRelationship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Relationship_GetOneRelationship_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Relationship_GetOneRelationship_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetOneRelationship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Relationship_GetOneRelationship_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Relationship_GetOneRelationship_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetOneRelationship Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetOneRelationship_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetOneRelationship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Relationship_GetOneRelationship_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetOneRelationship input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Relationship_GetOneRelationship_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Relationship_GetOneRelationship_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetOneRelationship Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Relationship_GetOneRelationship_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityIDs input for this GetOneRelationship Choreo.
     *
     * @param string $value (required, string) The IDs of the entities between which you want to find relationships. Format is a semicolon delimited string (e.g. 1026;1)
     * @return LittleSis_Relationship_GetOneRelationship_Inputs For method chaining.
     */
    public function setEntityIDs($value)
    {
        return $this->set('EntityIDs', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetOneRelationship Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Relationship_GetOneRelationship_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetOneRelationship Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetOneRelationship_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetOneRelationship Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetOneRelationship execution.
     * @param LittleSis_Relationship_GetOneRelationship $choreo The choreography object for this execution.
     * @param LittleSis_Relationship_GetOneRelationship_Inputs|array $inputs (optional) Inputs as LittleSis_Relationship_GetOneRelationship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Relationship_GetOneRelationship_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Relationship_GetOneRelationship $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetOneRelationship execution.
     *
     * @return LittleSis_Relationship_GetOneRelationship_Results New results object.
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
     * Wraps results in appropriate results class for this GetOneRelationship execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Relationship_GetOneRelationship_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Relationship_GetOneRelationship_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetOneRelationship Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Relationship_GetOneRelationship_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetOneRelationship Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Relationship_GetOneRelationship_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetOneRelationship execution.
     *
     * @return string The response from LittleSis.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves Entities (people or organizations) in LittleSis that match a given keyword search.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_EntitySearchByKeyword extends Temboo_Choreography
{
    /**
     * Retrieves Entities (people or organizations) in LittleSis that match a given keyword search.
     *
     * @param Temboo_Session $session The session that owns this EntitySearchByKeyword Choreo.
     * @return LittleSis_Entity_EntitySearchByKeyword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LittleSis/Entity/EntitySearchByKeyword/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EntitySearchByKeyword Choreo.
     *
     * @param LittleSis_Entity_EntitySearchByKeyword_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_EntitySearchByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_EntitySearchByKeyword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LittleSis_Entity_EntitySearchByKeyword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EntitySearchByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LittleSis_Entity_EntitySearchByKeyword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EntitySearchByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_EntitySearchByKeyword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EntitySearchByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EntitySearchByKeyword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this EntitySearchByKeyword Choreo.
     *
     * @param string $value (required, string) The API Key obtained from LittleSis.org.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Keywords input for this EntitySearchByKeyword Choreo.
     *
     * @param string $value (required, string) Enter search text.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs For method chaining.
     */
    public function setKeywords($value)
    {
        return $this->set('Keywords', $value);
    }

    /**
     * Set the value for the Number input for this EntitySearchByKeyword Choreo.
     *
     * @param int $value (optional, integer) Specifies what number of results to show. Used in conjunction with Page parameter, a Number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs For method chaining.
     */
    public function setNumber($value)
    {
        return $this->set('Number', $value);
    }

    /**
     * Set the value for the Page input for this EntitySearchByKeyword Choreo.
     *
     * @param int $value (optional, integer) Specifies what page of results to show. Used in conjunction with Number parameter. A number of 20 and a Page of 6 will show results 100-120.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EntitySearchByKeyword Choreo.
     *
     * @param string $value (optional, string) Format of the response returned by LittleSis.org. Acceptable inputs: xml or json. Defaults to xml
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SearchAll input for this EntitySearchByKeyword Choreo.
     *
     * @param int $value (optional, integer) Enter 1 to search a record's description and summary fields. When not specified, only the name and aliases fields of each record will be searched.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs For method chaining.
     */
    public function setSearchAll($value)
    {
        return $this->set('SearchAll', $value);
    }

    /**
     * Set the value for the TypeIDs input for this EntitySearchByKeyword Choreo.
     *
     * @param string $value (optional, string) You can specify a TypeIDs value to limit the search results to only those of a given type. Obtain all possible types and type ID's by first running the GetTypes Choreo.
     * @return LittleSis_Entity_EntitySearchByKeyword_Inputs For method chaining.
     */
    public function setTypeIDs($value)
    {
        return $this->set('TypeIDs', $value);
    }
}


/**
 * Execution object for the EntitySearchByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_EntitySearchByKeyword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EntitySearchByKeyword Choreo.
     *
     * @param Temboo_Session $session The session that owns this EntitySearchByKeyword execution.
     * @param LittleSis_Entity_EntitySearchByKeyword $choreo The choreography object for this execution.
     * @param LittleSis_Entity_EntitySearchByKeyword_Inputs|array $inputs (optional) Inputs as LittleSis_Entity_EntitySearchByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LittleSis_Entity_EntitySearchByKeyword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LittleSis_Entity_EntitySearchByKeyword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EntitySearchByKeyword execution.
     *
     * @return LittleSis_Entity_EntitySearchByKeyword_Results New results object.
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
     * Wraps results in appropriate results class for this EntitySearchByKeyword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LittleSis_Entity_EntitySearchByKeyword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LittleSis_Entity_EntitySearchByKeyword_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EntitySearchByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage LittleSis
 */
class LittleSis_Entity_EntitySearchByKeyword_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EntitySearchByKeyword Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LittleSis_Entity_EntitySearchByKeyword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EntitySearchByKeyword execution.
     *
     * @return string The response from LittleSis.org.
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
<?php

/**
 * Temboo PHP SDK 23andMe classes
 *
 * Execute Choreographies from the Temboo 23andMe bundle.
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
 * @subpackage 23andMe
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves the user id, and a list of profiles including their ids and whether or not they are genotyped.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_User extends Temboo_Choreography
{
    /**
     * Retrieves the user id, and a list of profiles including their ids and whether or not they are genotyped.
     *
     * @param Temboo_Session $session The session that owns this User Choreo.
     * @return _23andMe_User New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/23andMe/User/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this User Choreo.
     *
     * @param _23andMe_User_Inputs|array $inputs (optional) Inputs as _23andMe_User_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_User_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _23andMe_User_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this User Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_User_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _23andMe_User_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the User Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_User_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the User Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_User_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this User input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _23andMe_User_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return _23andMe_User_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this User Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after completing the OAuth2 process.
     * @return _23andMe_User_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the TestMode input for this User Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that the request should be made to the "demo" 23andMe endpoint for testing. Set to 1 for test mode. Defaults to 0.
     * @return _23andMe_User_Inputs For method chaining.
     */
    public function setTestMode($value)
    {
        return $this->set('TestMode', $value);
    }
}


/**
 * Execution object for the User Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_User_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the User Choreo.
     *
     * @param Temboo_Session $session The session that owns this User execution.
     * @param _23andMe_User $choreo The choreography object for this execution.
     * @param _23andMe_User_Inputs|array $inputs (optional) Inputs as _23andMe_User_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_User_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _23andMe_User $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this User execution.
     *
     * @return _23andMe_User_Results New results object.
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
     * Wraps results in appropriate results class for this User execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _23andMe_User_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _23andMe_User_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the User Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_User_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the User Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _23andMe_User_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this User execution.
     *
     * @return string (json) The response from 23AndMe.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the ancestral breakdown for the user's profiles.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Ancestry extends Temboo_Choreography
{
    /**
     * Retrieves the ancestral breakdown for the user's profiles.
     *
     * @param Temboo_Session $session The session that owns this Ancestry Choreo.
     * @return _23andMe_Ancestry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/23andMe/Ancestry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Ancestry Choreo.
     *
     * @param _23andMe_Ancestry_Inputs|array $inputs (optional) Inputs as _23andMe_Ancestry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Ancestry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _23andMe_Ancestry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Ancestry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Ancestry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _23andMe_Ancestry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Ancestry Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Ancestry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Ancestry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Ancestry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Ancestry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _23andMe_Ancestry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return _23andMe_Ancestry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Ancestry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after completing the OAuth2 process.
     * @return _23andMe_Ancestry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the TestMode input for this Ancestry Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that the request should be made to the "demo" 23andMe endpoint for testing. Set to 1 for test mode. Defaults to 0.
     * @return _23andMe_Ancestry_Inputs For method chaining.
     */
    public function setTestMode($value)
    {
        return $this->set('TestMode', $value);
    }

    /**
     * Set the value for the Threshold input for this Ancestry Choreo.
     *
     * @param string $value (optional, string) A decimal ranging from 0.5 to 1.0. A higher threshold would increase the unassigned proportions, a lower would speculate (i.e. 0.51 is speculative, 0.75 is standard, and 0.90 is conservative). 
     * @return _23andMe_Ancestry_Inputs For method chaining.
     */
    public function setThreshold($value)
    {
        return $this->set('Threshold', $value);
    }
}


/**
 * Execution object for the Ancestry Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Ancestry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Ancestry Choreo.
     *
     * @param Temboo_Session $session The session that owns this Ancestry execution.
     * @param _23andMe_Ancestry $choreo The choreography object for this execution.
     * @param _23andMe_Ancestry_Inputs|array $inputs (optional) Inputs as _23andMe_Ancestry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Ancestry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _23andMe_Ancestry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Ancestry execution.
     *
     * @return _23andMe_Ancestry_Results New results object.
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
     * Wraps results in appropriate results class for this Ancestry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _23andMe_Ancestry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _23andMe_Ancestry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Ancestry Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Ancestry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Ancestry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _23andMe_Ancestry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Ancestry execution.
     *
     * @return string (json) The response from 23AndMe.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * For each of the user's profiles, retrieves the base-pairs for given locations.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Genotype extends Temboo_Choreography
{
    /**
     * For each of the user's profiles, retrieves the base-pairs for given locations.
     *
     * @param Temboo_Session $session The session that owns this Genotype Choreo.
     * @return _23andMe_Genotype New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/23andMe/Genotype/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Genotype Choreo.
     *
     * @param _23andMe_Genotype_Inputs|array $inputs (optional) Inputs as _23andMe_Genotype_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Genotype_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _23andMe_Genotype_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Genotype Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Genotype_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _23andMe_Genotype_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Genotype Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Genotype_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Genotype Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Genotype_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Genotype input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _23andMe_Genotype_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return _23andMe_Genotype_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Genotype Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after completing the OAuth2 process.
     * @return _23andMe_Genotype_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Locations input for this Genotype Choreo.
     *
     * @param string $value (required, string) A space delimited list of SNPs (i.e. rs3094315 rs3737728).
     * @return _23andMe_Genotype_Inputs For method chaining.
     */
    public function setLocations($value)
    {
        return $this->set('Locations', $value);
    }

    /**
     * Set the value for the TestMode input for this Genotype Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that the request should be made to the "demo" 23andMe endpoint for testing. Set to 1 for test mode. Defaults to 0.
     * @return _23andMe_Genotype_Inputs For method chaining.
     */
    public function setTestMode($value)
    {
        return $this->set('TestMode', $value);
    }
}


/**
 * Execution object for the Genotype Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Genotype_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Genotype Choreo.
     *
     * @param Temboo_Session $session The session that owns this Genotype execution.
     * @param _23andMe_Genotype $choreo The choreography object for this execution.
     * @param _23andMe_Genotype_Inputs|array $inputs (optional) Inputs as _23andMe_Genotype_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Genotype_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _23andMe_Genotype $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Genotype execution.
     *
     * @return _23andMe_Genotype_Results New results object.
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
     * Wraps results in appropriate results class for this Genotype execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _23andMe_Genotype_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _23andMe_Genotype_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Genotype Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Genotype_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Genotype Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _23andMe_Genotype_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Genotype execution.
     *
     * @return string (json) The response from 23AndMe.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves maternal and paternal haplogroups for a user's profiles.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Haplogroups extends Temboo_Choreography
{
    /**
     * Retrieves maternal and paternal haplogroups for a user's profiles.
     *
     * @param Temboo_Session $session The session that owns this Haplogroups Choreo.
     * @return _23andMe_Haplogroups New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/23andMe/Haplogroups/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Haplogroups Choreo.
     *
     * @param _23andMe_Haplogroups_Inputs|array $inputs (optional) Inputs as _23andMe_Haplogroups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Haplogroups_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _23andMe_Haplogroups_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Haplogroups Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Haplogroups_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _23andMe_Haplogroups_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Haplogroups Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Haplogroups_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Haplogroups Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Haplogroups_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Haplogroups input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _23andMe_Haplogroups_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return _23andMe_Haplogroups_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Haplogroups Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after completing the OAuth2 process.
     * @return _23andMe_Haplogroups_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the TestMode input for this Haplogroups Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that the request should be made to the "demo" 23andMe endpoint for testing. Set to 1 for test mode. Defaults to 0.
     * @return _23andMe_Haplogroups_Inputs For method chaining.
     */
    public function setTestMode($value)
    {
        return $this->set('TestMode', $value);
    }
}


/**
 * Execution object for the Haplogroups Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Haplogroups_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Haplogroups Choreo.
     *
     * @param Temboo_Session $session The session that owns this Haplogroups execution.
     * @param _23andMe_Haplogroups $choreo The choreography object for this execution.
     * @param _23andMe_Haplogroups_Inputs|array $inputs (optional) Inputs as _23andMe_Haplogroups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Haplogroups_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _23andMe_Haplogroups $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Haplogroups execution.
     *
     * @return _23andMe_Haplogroups_Results New results object.
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
     * Wraps results in appropriate results class for this Haplogroups execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _23andMe_Haplogroups_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _23andMe_Haplogroups_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Haplogroups Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Haplogroups_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Haplogroups Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _23andMe_Haplogroups_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Haplogroups execution.
     *
     * @return string (json) The response from 23AndMe.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves first and last names for the user and user's profiles.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Names extends Temboo_Choreography
{
    /**
     * Retrieves first and last names for the user and user's profiles.
     *
     * @param Temboo_Session $session The session that owns this Names Choreo.
     * @return _23andMe_Names New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/23andMe/Names/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Names Choreo.
     *
     * @param _23andMe_Names_Inputs|array $inputs (optional) Inputs as _23andMe_Names_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Names_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _23andMe_Names_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Names Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Names_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _23andMe_Names_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Names Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Names_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Names Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Names_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Names input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _23andMe_Names_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return _23andMe_Names_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Names Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after completing the OAuth2 process.
     * @return _23andMe_Names_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the TestMode input for this Names Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that the request should be made to the "demo" 23andMe endpoint for testing. Set to 1 for test mode. Defaults to 0.
     * @return _23andMe_Names_Inputs For method chaining.
     */
    public function setTestMode($value)
    {
        return $this->set('TestMode', $value);
    }
}


/**
 * Execution object for the Names Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Names_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Names Choreo.
     *
     * @param Temboo_Session $session The session that owns this Names execution.
     * @param _23andMe_Names $choreo The choreography object for this execution.
     * @param _23andMe_Names_Inputs|array $inputs (optional) Inputs as _23andMe_Names_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Names_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _23andMe_Names $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Names execution.
     *
     * @return _23andMe_Names_Results New results object.
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
     * Wraps results in appropriate results class for this Names execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _23andMe_Names_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _23andMe_Names_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Names Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Names_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Names Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _23andMe_Names_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Names execution.
     *
     * @return string (json) The response from 23AndMe.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the entire profile's genome as a string of base pairs.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Genomes extends Temboo_Choreography
{
    /**
     * Retrieves the entire profile's genome as a string of base pairs.
     *
     * @param Temboo_Session $session The session that owns this Genomes Choreo.
     * @return _23andMe_Genomes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/23andMe/Genomes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Genomes Choreo.
     *
     * @param _23andMe_Genomes_Inputs|array $inputs (optional) Inputs as _23andMe_Genomes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Genomes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _23andMe_Genomes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Genomes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Genomes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _23andMe_Genomes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Genomes Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Genomes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Genomes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_Genomes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Genomes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _23andMe_Genomes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return _23andMe_Genomes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Genomes Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after completing the OAuth2 process.
     * @return _23andMe_Genomes_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileID input for this Genomes Choreo.
     *
     * @param string $value (required, string) The unique identifier for a profile to retrieve information for. This ID can be retrieved by running the User Choreo.
     * @return _23andMe_Genomes_Inputs For method chaining.
     */
    public function setProfileID($value)
    {
        return $this->set('ProfileID', $value);
    }

    /**
     * Set the value for the TestMode input for this Genomes Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that the request should be made to the "demo" 23andMe endpoint for testing. Set to 1 for test mode. Defaults to 0.
     * @return _23andMe_Genomes_Inputs For method chaining.
     */
    public function setTestMode($value)
    {
        return $this->set('TestMode', $value);
    }
}


/**
 * Execution object for the Genomes Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Genomes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Genomes Choreo.
     *
     * @param Temboo_Session $session The session that owns this Genomes execution.
     * @param _23andMe_Genomes $choreo The choreography object for this execution.
     * @param _23andMe_Genomes_Inputs|array $inputs (optional) Inputs as _23andMe_Genomes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_Genomes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _23andMe_Genomes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Genomes execution.
     *
     * @return _23andMe_Genomes_Results New results object.
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
     * Wraps results in appropriate results class for this Genomes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _23andMe_Genomes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _23andMe_Genomes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Genomes Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_Genomes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Genomes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _23andMe_Genomes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Genomes execution.
     *
     * @return string (json) The response from 23AndMe.
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
 * @subpackage 23andMe
 */
class _23andMe_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return _23andMe_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/23andMe/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param _23andMe_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as _23andMe_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _23andMe_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _23andMe_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return _23andMe_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return _23andMe_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return _23andMe_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return _23andMe_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return _23andMe_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by 23andMe after registering your application.
     * @return _23andMe_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return _23andMe_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application.
     * @return _23andMe_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the Scope input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) A space-delimited list of scopes in your requests to access certain user data. Ex: "basic names ancestry". See note in Description below for full list and link to more documentation.
     * @return _23andMe_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param _23andMe_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param _23andMe_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as _23andMe_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _23andMe_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return _23andMe_OAuth_InitializeOAuth_Results New results object.
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
     * @return _23andMe_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _23andMe_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _23andMe_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the user needs to go to in order to grant access to your application.
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
}

/**
 * Completes the OAuth process by retrieving a 23andMe access token, refresh token, and expiration time for the access token, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a 23andMe access token, refresh token, and expiration time for the access token, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return _23andMe_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/23andMe/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param _23andMe_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as _23andMe_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _23andMe_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _23andMe_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by 23andMe.
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by 23andMe.
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return _23andMe_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage 23andMe
 */
class _23andMe_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param _23andMe_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param _23andMe_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as _23andMe_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _23andMe_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return _23andMe_OAuth_FinalizeOAuth_Results New results object.
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
     * @return _23andMe_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _23andMe_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _23andMe_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "Expires" output from this FinalizeOAuth execution.
     *
     * @return int (integer) The expiration time in seconds of the access token retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "RefreshToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) A valid refresh token used to generate a new access token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRefreshToken()
    {
        return $this->get('RefreshToken');
    }
}

/**
 * Returns the latest access token with a given valid refresh token.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_RefreshToken extends Temboo_Choreography
{
    /**
     * Returns the latest access token with a given valid refresh token.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken Choreo.
     * @return _23andMe_OAuth_RefreshToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/23andMe/OAuth/RefreshToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RefreshToken Choreo.
     *
     * @param _23andMe_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as _23andMe_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_OAuth_RefreshToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _23andMe_OAuth_RefreshToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_OAuth_RefreshToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _23andMe_OAuth_RefreshToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_RefreshToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _23andMe_OAuth_RefreshToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RefreshToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _23andMe_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return _23andMe_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Client ID provided by 23andMe.
     * @return _23andMe_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by 23andMe.
     * @return _23andMe_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the RefreshToken input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) A valid refresh token used to generate a new access token.
     * @return _23andMe_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_RefreshToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefreshToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken execution.
     * @param _23andMe_OAuth_RefreshToken $choreo The choreography object for this execution.
     * @param _23andMe_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as _23andMe_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _23andMe_OAuth_RefreshToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _23andMe_OAuth_RefreshToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefreshToken execution.
     *
     * @return _23andMe_OAuth_RefreshToken_Results New results object.
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
     * Wraps results in appropriate results class for this RefreshToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _23andMe_OAuth_RefreshToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _23andMe_OAuth_RefreshToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage 23andMe
 */
class _23andMe_OAuth_RefreshToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RefreshToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _23andMe_OAuth_RefreshToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this RefreshToken execution.
     *
     * @return string (string) The Access Token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "Expires" output from this RefreshToken execution.
     *
     * @return int (integer) The expiration time in seconds of the Access Token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "NewRefreshToken" output from this RefreshToken execution.
     *
     * @return string (string) The new refresh token which can be used the next time your app needs to get a new access token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewRefreshToken()
    {
        return $this->get('NewRefreshToken');
    }
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


?>
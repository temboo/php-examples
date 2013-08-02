<?php

/**
 * Temboo PHP SDK Kiva classes
 *
 * Execute Choreographies from the Temboo Kiva bundle.
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
 * @subpackage Kiva
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns loans belonging to a particular lender.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderLoans extends Temboo_Choreography
{
    /**
     * Returns loans belonging to a particular lender.
     *
     * @param Temboo_Session $session The session that owns this GetLenderLoans Choreo.
     * @return Kiva_Lenders_GetLenderLoans New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Lenders/GetLenderLoans/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLenderLoans Choreo.
     *
     * @param Kiva_Lenders_GetLenderLoans_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_GetLenderLoans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_GetLenderLoans_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Lenders_GetLenderLoans_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLenderLoans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_GetLenderLoans_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Lenders_GetLenderLoans_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLenderLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderLoans_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLenderLoans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_GetLenderLoans_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLenderLoans input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Lenders_GetLenderLoans_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Lenders_GetLenderLoans_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetLenderLoans Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Lenders_GetLenderLoans_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the LenderName input for this GetLenderLoans Choreo.
     *
     * @param string $value (required, string) The lender name for which to return details.
     * @return Kiva_Lenders_GetLenderLoans_Inputs For method chaining.
     */
    public function setLenderName($value)
    {
        return $this->set('LenderName', $value);
    }

    /**
     * Set the value for the Page input for this GetLenderLoans Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Lenders_GetLenderLoans_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetLenderLoans Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Lenders_GetLenderLoans_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the SortBy input for this GetLenderLoans Choreo.
     *
     * @param string $value (optional, string) The order by which to sort results. Acceptable values: oldest, newest. Defaults to newest.
     * @return Kiva_Lenders_GetLenderLoans_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }
}


/**
 * Execution object for the GetLenderLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderLoans_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLenderLoans Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLenderLoans execution.
     * @param Kiva_Lenders_GetLenderLoans $choreo The choreography object for this execution.
     * @param Kiva_Lenders_GetLenderLoans_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_GetLenderLoans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_GetLenderLoans_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Lenders_GetLenderLoans $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLenderLoans execution.
     *
     * @return Kiva_Lenders_GetLenderLoans_Results New results object.
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
     * Wraps results in appropriate results class for this GetLenderLoans execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Lenders_GetLenderLoans_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Lenders_GetLenderLoans_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLenderLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderLoans_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLenderLoans Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Lenders_GetLenderLoans_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLenderLoans execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns detailed information about one or more lending teams.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeams extends Temboo_Choreography
{
    /**
     * Returns detailed information about one or more lending teams.
     *
     * @param Temboo_Session $session The session that owns this GetTeams Choreo.
     * @return Kiva_Teams_GetTeams New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Teams/GetTeams/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTeams Choreo.
     *
     * @param Kiva_Teams_GetTeams_Inputs|array $inputs (optional) Inputs as Kiva_Teams_GetTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_GetTeams_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Teams_GetTeams_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTeams Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_GetTeams_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Teams_GetTeams_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTeams Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeams_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTeams Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_GetTeams_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTeams input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Teams_GetTeams_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Teams_GetTeams_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTeams Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Teams_GetTeams_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetTeams Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Teams_GetTeams_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the TeamID input for this GetTeams Choreo.
     *
     * @param string $value (required, string) A list of team IDs for which details are to be returned. Max list items: 20.
     * @return Kiva_Teams_GetTeams_Inputs For method chaining.
     */
    public function setTeamID($value)
    {
        return $this->set('TeamID', $value);
    }
}


/**
 * Execution object for the GetTeams Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeams_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTeams Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTeams execution.
     * @param Kiva_Teams_GetTeams $choreo The choreography object for this execution.
     * @param Kiva_Teams_GetTeams_Inputs|array $inputs (optional) Inputs as Kiva_Teams_GetTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_GetTeams_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Teams_GetTeams $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTeams execution.
     *
     * @return Kiva_Teams_GetTeams_Results New results object.
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
     * Wraps results in appropriate results class for this GetTeams execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Teams_GetTeams_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Teams_GetTeams_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTeams Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeams_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTeams Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Teams_GetTeams_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTeams execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns detailed information for multiple loans.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLoanDetails extends Temboo_Choreography
{
    /**
     * Returns detailed information for multiple loans.
     *
     * @param Temboo_Session $session The session that owns this GetLoanDetails Choreo.
     * @return Kiva_Loans_GetLoanDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Loans/GetLoanDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLoanDetails Choreo.
     *
     * @param Kiva_Loans_GetLoanDetails_Inputs|array $inputs (optional) Inputs as Kiva_Loans_GetLoanDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_GetLoanDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Loans_GetLoanDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLoanDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_GetLoanDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Loans_GetLoanDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLoanDetails Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLoanDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLoanDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_GetLoanDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLoanDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Loans_GetLoanDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Loans_GetLoanDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetLoanDetails Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Loans_GetLoanDetails_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the LoanID input for this GetLoanDetails Choreo.
     *
     * @param string $value (required, string) A comma-delimited list of the loan IDs for which to get details. Maximum list items: 10.
     * @return Kiva_Loans_GetLoanDetails_Inputs For method chaining.
     */
    public function setLoanID($value)
    {
        return $this->set('LoanID', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetLoanDetails Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Loans_GetLoanDetails_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetLoanDetails Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLoanDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLoanDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLoanDetails execution.
     * @param Kiva_Loans_GetLoanDetails $choreo The choreography object for this execution.
     * @param Kiva_Loans_GetLoanDetails_Inputs|array $inputs (optional) Inputs as Kiva_Loans_GetLoanDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_GetLoanDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Loans_GetLoanDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLoanDetails execution.
     *
     * @return Kiva_Loans_GetLoanDetails_Results New results object.
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
     * Wraps results in appropriate results class for this GetLoanDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Loans_GetLoanDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Loans_GetLoanDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLoanDetails Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLoanDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLoanDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Loans_GetLoanDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLoanDetails execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of public lenders to a loan.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLenders extends Temboo_Choreography
{
    /**
     * Returns a list of public lenders to a loan.
     *
     * @param Temboo_Session $session The session that owns this GetLenders Choreo.
     * @return Kiva_Loans_GetLenders New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Loans/GetLenders/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLenders Choreo.
     *
     * @param Kiva_Loans_GetLenders_Inputs|array $inputs (optional) Inputs as Kiva_Loans_GetLenders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_GetLenders_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Loans_GetLenders_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLenders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_GetLenders_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Loans_GetLenders_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLenders_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLenders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_GetLenders_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLenders input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Loans_GetLenders_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Loans_GetLenders_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetLenders Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Loans_GetLenders_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the LoanID input for this GetLenders Choreo.
     *
     * @param string $value (required, string) The ID of the loan for which to get details.
     * @return Kiva_Loans_GetLenders_Inputs For method chaining.
     */
    public function setLoanID($value)
    {
        return $this->set('LoanID', $value);
    }

    /**
     * Set the value for the Page input for this GetLenders Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Loans_GetLenders_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetLenders Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Loans_GetLenders_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLenders_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLenders Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLenders execution.
     * @param Kiva_Loans_GetLenders $choreo The choreography object for this execution.
     * @param Kiva_Loans_GetLenders_Inputs|array $inputs (optional) Inputs as Kiva_Loans_GetLenders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_GetLenders_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Loans_GetLenders $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLenders execution.
     *
     * @return Kiva_Loans_GetLenders_Results New results object.
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
     * Wraps results in appropriate results class for this GetLenders execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Loans_GetLenders_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Loans_GetLenders_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLenders_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLenders Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Loans_GetLenders_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLenders execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a keyword search for lenders based on multiple criteria.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_SearchLenders extends Temboo_Choreography
{
    /**
     * Returns a keyword search for lenders based on multiple criteria.
     *
     * @param Temboo_Session $session The session that owns this SearchLenders Choreo.
     * @return Kiva_Lenders_SearchLenders New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Lenders/SearchLenders/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchLenders Choreo.
     *
     * @param Kiva_Lenders_SearchLenders_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_SearchLenders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_SearchLenders_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Lenders_SearchLenders_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchLenders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_SearchLenders_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Lenders_SearchLenders_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_SearchLenders_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchLenders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_SearchLenders_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchLenders input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Lenders_SearchLenders_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Lenders_SearchLenders_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this SearchLenders Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Lenders_SearchLenders_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the CountryCode input for this SearchLenders Choreo.
     *
     * @param string $value (optional, string) An ISO country code by which to filter results.
     * @return Kiva_Lenders_SearchLenders_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the Page input for this SearchLenders Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Lenders_SearchLenders_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Query input for this SearchLenders Choreo.
     *
     * @param string $value (conditional, string) A general search query parameter which matches against lenders’ names occupations, whereabouts, and reasons for lending.
     * @return Kiva_Lenders_SearchLenders_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseType input for this SearchLenders Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Lenders_SearchLenders_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the SortBy input for this SearchLenders Choreo.
     *
     * @param string $value (optional, string) The order by which to sort results. Acceptable values: oldest, newest. Defaults to newest.
     * @return Kiva_Lenders_SearchLenders_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }
}


/**
 * Execution object for the SearchLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_SearchLenders_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchLenders Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchLenders execution.
     * @param Kiva_Lenders_SearchLenders $choreo The choreography object for this execution.
     * @param Kiva_Lenders_SearchLenders_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_SearchLenders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_SearchLenders_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Lenders_SearchLenders $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchLenders execution.
     *
     * @return Kiva_Lenders_SearchLenders_Results New results object.
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
     * Wraps results in appropriate results class for this SearchLenders execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Lenders_SearchLenders_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Lenders_SearchLenders_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_SearchLenders_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchLenders Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Lenders_SearchLenders_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchLenders execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns listings for the lenders who have most recently joined Kiva.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetNewestLenders extends Temboo_Choreography
{
    /**
     * Returns listings for the lenders who have most recently joined Kiva.
     *
     * @param Temboo_Session $session The session that owns this GetNewestLenders Choreo.
     * @return Kiva_Lenders_GetNewestLenders New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Lenders/GetNewestLenders/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetNewestLenders Choreo.
     *
     * @param Kiva_Lenders_GetNewestLenders_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_GetNewestLenders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_GetNewestLenders_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Lenders_GetNewestLenders_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNewestLenders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_GetNewestLenders_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Lenders_GetNewestLenders_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNewestLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetNewestLenders_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetNewestLenders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_GetNewestLenders_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNewestLenders input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Lenders_GetNewestLenders_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Lenders_GetNewestLenders_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetNewestLenders Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Lenders_GetNewestLenders_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Page input for this GetNewestLenders Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Lenders_GetNewestLenders_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetNewestLenders Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Lenders_GetNewestLenders_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetNewestLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetNewestLenders_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNewestLenders Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetNewestLenders execution.
     * @param Kiva_Lenders_GetNewestLenders $choreo The choreography object for this execution.
     * @param Kiva_Lenders_GetNewestLenders_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_GetNewestLenders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_GetNewestLenders_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Lenders_GetNewestLenders $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNewestLenders execution.
     *
     * @return Kiva_Lenders_GetNewestLenders_Results New results object.
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
     * Wraps results in appropriate results class for this GetNewestLenders execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Lenders_GetNewestLenders_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Lenders_GetNewestLenders_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetNewestLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetNewestLenders_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetNewestLenders Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Lenders_GetNewestLenders_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetNewestLenders execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of public lenders belonging to a specific team.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamLenders extends Temboo_Choreography
{
    /**
     * Returns a list of public lenders belonging to a specific team.
     *
     * @param Temboo_Session $session The session that owns this GetTeamLenders Choreo.
     * @return Kiva_Teams_GetTeamLenders New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Teams/GetTeamLenders/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTeamLenders Choreo.
     *
     * @param Kiva_Teams_GetTeamLenders_Inputs|array $inputs (optional) Inputs as Kiva_Teams_GetTeamLenders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_GetTeamLenders_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Teams_GetTeamLenders_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTeamLenders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_GetTeamLenders_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Teams_GetTeamLenders_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTeamLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamLenders_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTeamLenders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_GetTeamLenders_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTeamLenders input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Teams_GetTeamLenders_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Teams_GetTeamLenders_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTeamLenders Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Teams_GetTeamLenders_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Page input for this GetTeamLenders Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Teams_GetTeamLenders_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetTeamLenders Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Teams_GetTeamLenders_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the SortBy input for this GetTeamLenders Choreo.
     *
     * @param string $value (optional, string) The order by which to sort results: oldest  or newest. Defaults to newest.
     * @return Kiva_Teams_GetTeamLenders_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the TeamID input for this GetTeamLenders Choreo.
     *
     * @param string $value (required, string) The TeamID for which to return lenders.
     * @return Kiva_Teams_GetTeamLenders_Inputs For method chaining.
     */
    public function setTeamID($value)
    {
        return $this->set('TeamID', $value);
    }
}


/**
 * Execution object for the GetTeamLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamLenders_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTeamLenders Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTeamLenders execution.
     * @param Kiva_Teams_GetTeamLenders $choreo The choreography object for this execution.
     * @param Kiva_Teams_GetTeamLenders_Inputs|array $inputs (optional) Inputs as Kiva_Teams_GetTeamLenders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_GetTeamLenders_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Teams_GetTeamLenders $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTeamLenders execution.
     *
     * @return Kiva_Teams_GetTeamLenders_Results New results object.
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
     * Wraps results in appropriate results class for this GetTeamLenders execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Teams_GetTeamLenders_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Teams_GetTeamLenders_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTeamLenders Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamLenders_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTeamLenders Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Teams_GetTeamLenders_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTeamLenders execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a keyword search for loan listings by multiple criteria.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_SearchLoans extends Temboo_Choreography
{
    /**
     * Returns a keyword search for loan listings by multiple criteria.
     *
     * @param Temboo_Session $session The session that owns this SearchLoans Choreo.
     * @return Kiva_Loans_SearchLoans New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Loans/SearchLoans/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchLoans Choreo.
     *
     * @param Kiva_Loans_SearchLoans_Inputs|array $inputs (optional) Inputs as Kiva_Loans_SearchLoans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_SearchLoans_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Loans_SearchLoans_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchLoans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_SearchLoans_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Loans_SearchLoans_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_SearchLoans_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchLoans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_SearchLoans_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchLoans input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the CountryCode input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) A list of two-character ISO codes of countries by which to filter results.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the Gender input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) If supplied, results are filtered to loans with entrepreneurs of the specified gender. In the case of group loans, this matches against the predominate gender in the group: male or female.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setGender($value)
    {
        return $this->set('Gender', $value);
    }

    /**
     * Set the value for the Page input for this SearchLoans Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Partner input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) A list of partner IDs for which to filter results.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setPartner($value)
    {
        return $this->set('Partner', $value);
    }

    /**
     * Set the value for the Query input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) A query string against which results should be returned.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Region input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) List of two-letter codes corresponding to regions in which Kiva operates. If supplied, results are filtered to loans only from the specified regions: na, ca, sa, af, as, me, ee.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setRegion($value)
    {
        return $this->set('Region', $value);
    }

    /**
     * Set the value for the ResponseType input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Sector input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) A list of business sectors for which to filter results.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setSector($value)
    {
        return $this->set('Sector', $value);
    }

    /**
     * Set the value for the SortBy input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) The order by which to sort results. Acceptable values: popularity, loan_amount, oldest, expiration, newest, amount_remaining, repayment_term. Defaults to newest.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the Status input for this SearchLoans Choreo.
     *
     * @param string $value (optional, string) The status of loans to return: fundraising, funded, in_repayment, paid, ended_with_loss.
     * @return Kiva_Loans_SearchLoans_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }
}


/**
 * Execution object for the SearchLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_SearchLoans_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchLoans Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchLoans execution.
     * @param Kiva_Loans_SearchLoans $choreo The choreography object for this execution.
     * @param Kiva_Loans_SearchLoans_Inputs|array $inputs (optional) Inputs as Kiva_Loans_SearchLoans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_SearchLoans_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Loans_SearchLoans $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchLoans execution.
     *
     * @return Kiva_Loans_SearchLoans_Results New results object.
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
     * Wraps results in appropriate results class for this SearchLoans execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Loans_SearchLoans_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Loans_SearchLoans_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_SearchLoans_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchLoans Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Loans_SearchLoans_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchLoans execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns details for lenders.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderDetails extends Temboo_Choreography
{
    /**
     * Returns details for lenders.
     *
     * @param Temboo_Session $session The session that owns this GetLenderDetails Choreo.
     * @return Kiva_Lenders_GetLenderDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Lenders/GetLenderDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLenderDetails Choreo.
     *
     * @param Kiva_Lenders_GetLenderDetails_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_GetLenderDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_GetLenderDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Lenders_GetLenderDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLenderDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_GetLenderDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Lenders_GetLenderDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLenderDetails Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLenderDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_GetLenderDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLenderDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Lenders_GetLenderDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Lenders_GetLenderDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetLenderDetails Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Lenders_GetLenderDetails_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the LenderName input for this GetLenderDetails Choreo.
     *
     * @param string $value (required, string) List of comma-delimited lender names for which to return details. Maximum list items: 50.
     * @return Kiva_Lenders_GetLenderDetails_Inputs For method chaining.
     */
    public function setLenderName($value)
    {
        return $this->set('LenderName', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetLenderDetails Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Lenders_GetLenderDetails_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetLenderDetails Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLenderDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLenderDetails execution.
     * @param Kiva_Lenders_GetLenderDetails $choreo The choreography object for this execution.
     * @param Kiva_Lenders_GetLenderDetails_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_GetLenderDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_GetLenderDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Lenders_GetLenderDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLenderDetails execution.
     *
     * @return Kiva_Lenders_GetLenderDetails_Results New results object.
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
     * Wraps results in appropriate results class for this GetLenderDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Lenders_GetLenderDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Lenders_GetLenderDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLenderDetails Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLenderDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Lenders_GetLenderDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLenderDetails execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns detailed listings of all Kiva field partners.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Partners_GetPartners extends Temboo_Choreography
{
    /**
     * Returns detailed listings of all Kiva field partners.
     *
     * @param Temboo_Session $session The session that owns this GetPartners Choreo.
     * @return Kiva_Partners_GetPartners New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Partners/GetPartners/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPartners Choreo.
     *
     * @param Kiva_Partners_GetPartners_Inputs|array $inputs (optional) Inputs as Kiva_Partners_GetPartners_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Partners_GetPartners_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Partners_GetPartners_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPartners Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Partners_GetPartners_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Partners_GetPartners_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPartners Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Partners_GetPartners_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPartners Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Partners_GetPartners_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPartners input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Partners_GetPartners_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Partners_GetPartners_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetPartners Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Partners_GetPartners_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Page input for this GetPartners Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Partners_GetPartners_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetPartners Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Partners_GetPartners_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetPartners Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Partners_GetPartners_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPartners Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPartners execution.
     * @param Kiva_Partners_GetPartners $choreo The choreography object for this execution.
     * @param Kiva_Partners_GetPartners_Inputs|array $inputs (optional) Inputs as Kiva_Partners_GetPartners_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Partners_GetPartners_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Partners_GetPartners $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPartners execution.
     *
     * @return Kiva_Partners_GetPartners_Results New results object.
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
     * Wraps results in appropriate results class for this GetPartners execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Partners_GetPartners_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Partners_GetPartners_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPartners Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Partners_GetPartners_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPartners Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Partners_GetPartners_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPartners execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns loans belonging to a particular team.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamLoans extends Temboo_Choreography
{
    /**
     * Returns loans belonging to a particular team.
     *
     * @param Temboo_Session $session The session that owns this GetTeamLoans Choreo.
     * @return Kiva_Teams_GetTeamLoans New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Teams/GetTeamLoans/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTeamLoans Choreo.
     *
     * @param Kiva_Teams_GetTeamLoans_Inputs|array $inputs (optional) Inputs as Kiva_Teams_GetTeamLoans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_GetTeamLoans_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Teams_GetTeamLoans_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTeamLoans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_GetTeamLoans_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Teams_GetTeamLoans_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTeamLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamLoans_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTeamLoans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_GetTeamLoans_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTeamLoans input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Teams_GetTeamLoans_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Teams_GetTeamLoans_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTeamLoans Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Teams_GetTeamLoans_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Page input for this GetTeamLoans Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Teams_GetTeamLoans_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetTeamLoans Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Teams_GetTeamLoans_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the SortBy input for this GetTeamLoans Choreo.
     *
     * @param string $value (optional, string) The order by which to sort results: oldest  or newest. Defaults to newest.
     * @return Kiva_Teams_GetTeamLoans_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the TeamID input for this GetTeamLoans Choreo.
     *
     * @param string $value (required, string) The TeamID for which to return lenders.
     * @return Kiva_Teams_GetTeamLoans_Inputs For method chaining.
     */
    public function setTeamID($value)
    {
        return $this->set('TeamID', $value);
    }
}


/**
 * Execution object for the GetTeamLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamLoans_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTeamLoans Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTeamLoans execution.
     * @param Kiva_Teams_GetTeamLoans $choreo The choreography object for this execution.
     * @param Kiva_Teams_GetTeamLoans_Inputs|array $inputs (optional) Inputs as Kiva_Teams_GetTeamLoans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_GetTeamLoans_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Teams_GetTeamLoans $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTeamLoans execution.
     *
     * @return Kiva_Teams_GetTeamLoans_Results New results object.
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
     * Wraps results in appropriate results class for this GetTeamLoans execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Teams_GetTeamLoans_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Teams_GetTeamLoans_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTeamLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamLoans_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTeamLoans Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Teams_GetTeamLoans_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTeamLoans execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns detailed information about one or more teams, using team shortnames.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamByShortname extends Temboo_Choreography
{
    /**
     * Returns detailed information about one or more teams, using team shortnames.
     *
     * @param Temboo_Session $session The session that owns this GetTeamByShortname Choreo.
     * @return Kiva_Teams_GetTeamByShortname New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Teams/GetTeamByShortname/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTeamByShortname Choreo.
     *
     * @param Kiva_Teams_GetTeamByShortname_Inputs|array $inputs (optional) Inputs as Kiva_Teams_GetTeamByShortname_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_GetTeamByShortname_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Teams_GetTeamByShortname_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTeamByShortname Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_GetTeamByShortname_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Teams_GetTeamByShortname_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTeamByShortname Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamByShortname_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTeamByShortname Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_GetTeamByShortname_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTeamByShortname input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Teams_GetTeamByShortname_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Teams_GetTeamByShortname_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTeamByShortname Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Teams_GetTeamByShortname_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetTeamByShortname Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Teams_GetTeamByShortname_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the TeamShortname input for this GetTeamByShortname Choreo.
     *
     * @param string $value (required, string) The Team shortname for which to return details.
     * @return Kiva_Teams_GetTeamByShortname_Inputs For method chaining.
     */
    public function setTeamShortname($value)
    {
        return $this->set('TeamShortname', $value);
    }
}


/**
 * Execution object for the GetTeamByShortname Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamByShortname_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTeamByShortname Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTeamByShortname execution.
     * @param Kiva_Teams_GetTeamByShortname $choreo The choreography object for this execution.
     * @param Kiva_Teams_GetTeamByShortname_Inputs|array $inputs (optional) Inputs as Kiva_Teams_GetTeamByShortname_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_GetTeamByShortname_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Teams_GetTeamByShortname $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTeamByShortname execution.
     *
     * @return Kiva_Teams_GetTeamByShortname_Results New results object.
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
     * Wraps results in appropriate results class for this GetTeamByShortname execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Teams_GetTeamByShortname_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Teams_GetTeamByShortname_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTeamByShortname Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_GetTeamByShortname_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTeamByShortname Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Teams_GetTeamByShortname_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTeamByShortname execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns teams that a particular lender is part of.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderTeams extends Temboo_Choreography
{
    /**
     * Returns teams that a particular lender is part of.
     *
     * @param Temboo_Session $session The session that owns this GetLenderTeams Choreo.
     * @return Kiva_Lenders_GetLenderTeams New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Lenders/GetLenderTeams/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLenderTeams Choreo.
     *
     * @param Kiva_Lenders_GetLenderTeams_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_GetLenderTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_GetLenderTeams_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Lenders_GetLenderTeams_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLenderTeams Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_GetLenderTeams_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Lenders_GetLenderTeams_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLenderTeams Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderTeams_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLenderTeams Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Lenders_GetLenderTeams_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLenderTeams input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Lenders_GetLenderTeams_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Lenders_GetLenderTeams_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetLenderTeams Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Lenders_GetLenderTeams_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the LenderName input for this GetLenderTeams Choreo.
     *
     * @param string $value (required, string) The lender name for which to return details.
     * @return Kiva_Lenders_GetLenderTeams_Inputs For method chaining.
     */
    public function setLenderName($value)
    {
        return $this->set('LenderName', $value);
    }

    /**
     * Set the value for the Page input for this GetLenderTeams Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Lenders_GetLenderTeams_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetLenderTeams Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Lenders_GetLenderTeams_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetLenderTeams Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderTeams_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLenderTeams Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLenderTeams execution.
     * @param Kiva_Lenders_GetLenderTeams $choreo The choreography object for this execution.
     * @param Kiva_Lenders_GetLenderTeams_Inputs|array $inputs (optional) Inputs as Kiva_Lenders_GetLenderTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Lenders_GetLenderTeams_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Lenders_GetLenderTeams $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLenderTeams execution.
     *
     * @return Kiva_Lenders_GetLenderTeams_Results New results object.
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
     * Wraps results in appropriate results class for this GetLenderTeams execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Lenders_GetLenderTeams_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Lenders_GetLenderTeams_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLenderTeams Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Lenders_GetLenderTeams_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLenderTeams Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Lenders_GetLenderTeams_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLenderTeams execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a keyword search of all lending teams using multiple criteria.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_SearchTeams extends Temboo_Choreography
{
    /**
     * Returns a keyword search of all lending teams using multiple criteria.
     *
     * @param Temboo_Session $session The session that owns this SearchTeams Choreo.
     * @return Kiva_Teams_SearchTeams New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Teams/SearchTeams/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchTeams Choreo.
     *
     * @param Kiva_Teams_SearchTeams_Inputs|array $inputs (optional) Inputs as Kiva_Teams_SearchTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_SearchTeams_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Teams_SearchTeams_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchTeams Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_SearchTeams_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Teams_SearchTeams_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchTeams Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_SearchTeams_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchTeams Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Teams_SearchTeams_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchTeams input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Teams_SearchTeams_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Teams_SearchTeams_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this SearchTeams Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Teams_SearchTeams_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the MembershipType input for this SearchTeams Choreo.
     *
     * @param string $value (optional, string) If supplied, only teams with the specified membership policy are returned: open or closed.
     * @return Kiva_Teams_SearchTeams_Inputs For method chaining.
     */
    public function setMembershipType($value)
    {
        return $this->set('MembershipType', $value);
    }

    /**
     * Set the value for the Page input for this SearchTeams Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Teams_SearchTeams_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Query input for this SearchTeams Choreo.
     *
     * @param string $value (optional, string) A query string against which results should be returned.
     * @return Kiva_Teams_SearchTeams_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseType input for this SearchTeams Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Teams_SearchTeams_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the SortBy input for this SearchTeams Choreo.
     *
     * @param string $value (optional, string) The order by which to sort results. Acceptable values: popularity, loan_amount, oldest, expiration, newest, amount_remaining, repayment_term. Defaults to newest.
     * @return Kiva_Teams_SearchTeams_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }
}


/**
 * Execution object for the SearchTeams Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_SearchTeams_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchTeams Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchTeams execution.
     * @param Kiva_Teams_SearchTeams $choreo The choreography object for this execution.
     * @param Kiva_Teams_SearchTeams_Inputs|array $inputs (optional) Inputs as Kiva_Teams_SearchTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Teams_SearchTeams_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Teams_SearchTeams $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchTeams execution.
     *
     * @return Kiva_Teams_SearchTeams_Results New results object.
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
     * Wraps results in appropriate results class for this SearchTeams execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Teams_SearchTeams_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Teams_SearchTeams_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchTeams Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Teams_SearchTeams_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchTeams Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Teams_SearchTeams_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchTeams execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all status updates for a loan, newest first.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLoanUpdates extends Temboo_Choreography
{
    /**
     * Returns all status updates for a loan, newest first.
     *
     * @param Temboo_Session $session The session that owns this GetLoanUpdates Choreo.
     * @return Kiva_Loans_GetLoanUpdates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Loans/GetLoanUpdates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLoanUpdates Choreo.
     *
     * @param Kiva_Loans_GetLoanUpdates_Inputs|array $inputs (optional) Inputs as Kiva_Loans_GetLoanUpdates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_GetLoanUpdates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Loans_GetLoanUpdates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLoanUpdates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_GetLoanUpdates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Loans_GetLoanUpdates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLoanUpdates Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLoanUpdates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLoanUpdates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_GetLoanUpdates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLoanUpdates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Loans_GetLoanUpdates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Loans_GetLoanUpdates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetLoanUpdates Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Loans_GetLoanUpdates_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the LoanID input for this GetLoanUpdates Choreo.
     *
     * @param string $value (required, string) The ID of the loan for which to get details.
     * @return Kiva_Loans_GetLoanUpdates_Inputs For method chaining.
     */
    public function setLoanID($value)
    {
        return $this->set('LoanID', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetLoanUpdates Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Loans_GetLoanUpdates_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetLoanUpdates Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLoanUpdates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLoanUpdates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLoanUpdates execution.
     * @param Kiva_Loans_GetLoanUpdates $choreo The choreography object for this execution.
     * @param Kiva_Loans_GetLoanUpdates_Inputs|array $inputs (optional) Inputs as Kiva_Loans_GetLoanUpdates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_GetLoanUpdates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Loans_GetLoanUpdates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLoanUpdates execution.
     *
     * @return Kiva_Loans_GetLoanUpdates_Results New results object.
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
     * Wraps results in appropriate results class for this GetLoanUpdates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Loans_GetLoanUpdates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Loans_GetLoanUpdates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLoanUpdates Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetLoanUpdates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLoanUpdates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Loans_GetLoanUpdates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLoanUpdates execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the 100 most recent loans made on Kiva by public lenders.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_LendingActions_GetRecentLending extends Temboo_Choreography
{
    /**
     * Returns the 100 most recent loans made on Kiva by public lenders.
     *
     * @param Temboo_Session $session The session that owns this GetRecentLending Choreo.
     * @return Kiva_LendingActions_GetRecentLending New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/LendingActions/GetRecentLending/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecentLending Choreo.
     *
     * @param Kiva_LendingActions_GetRecentLending_Inputs|array $inputs (optional) Inputs as Kiva_LendingActions_GetRecentLending_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_LendingActions_GetRecentLending_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_LendingActions_GetRecentLending_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentLending Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_LendingActions_GetRecentLending_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_LendingActions_GetRecentLending_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentLending Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_LendingActions_GetRecentLending_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecentLending Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_LendingActions_GetRecentLending_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentLending input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_LendingActions_GetRecentLending_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_LendingActions_GetRecentLending_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetRecentLending Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_LendingActions_GetRecentLending_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetRecentLending Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_LendingActions_GetRecentLending_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetRecentLending Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_LendingActions_GetRecentLending_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentLending Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecentLending execution.
     * @param Kiva_LendingActions_GetRecentLending $choreo The choreography object for this execution.
     * @param Kiva_LendingActions_GetRecentLending_Inputs|array $inputs (optional) Inputs as Kiva_LendingActions_GetRecentLending_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_LendingActions_GetRecentLending_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_LendingActions_GetRecentLending $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentLending execution.
     *
     * @return Kiva_LendingActions_GetRecentLending_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecentLending execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_LendingActions_GetRecentLending_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_LendingActions_GetRecentLending_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecentLending Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_LendingActions_GetRecentLending_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecentLending Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_LendingActions_GetRecentLending_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecentLending execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of the most recent fundraising loans.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetNewestLoans extends Temboo_Choreography
{
    /**
     * Returns a list of the most recent fundraising loans.
     *
     * @param Temboo_Session $session The session that owns this GetNewestLoans Choreo.
     * @return Kiva_Loans_GetNewestLoans New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/Loans/GetNewestLoans/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetNewestLoans Choreo.
     *
     * @param Kiva_Loans_GetNewestLoans_Inputs|array $inputs (optional) Inputs as Kiva_Loans_GetNewestLoans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_GetNewestLoans_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_Loans_GetNewestLoans_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNewestLoans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_GetNewestLoans_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_Loans_GetNewestLoans_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNewestLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetNewestLoans_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetNewestLoans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_Loans_GetNewestLoans_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNewestLoans input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_Loans_GetNewestLoans_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_Loans_GetNewestLoans_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetNewestLoans Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_Loans_GetNewestLoans_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Page input for this GetNewestLoans Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_Loans_GetNewestLoans_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetNewestLoans Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_Loans_GetNewestLoans_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetNewestLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetNewestLoans_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNewestLoans Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetNewestLoans execution.
     * @param Kiva_Loans_GetNewestLoans $choreo The choreography object for this execution.
     * @param Kiva_Loans_GetNewestLoans_Inputs|array $inputs (optional) Inputs as Kiva_Loans_GetNewestLoans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_Loans_GetNewestLoans_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_Loans_GetNewestLoans $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNewestLoans execution.
     *
     * @return Kiva_Loans_GetNewestLoans_Results New results object.
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
     * Wraps results in appropriate results class for this GetNewestLoans execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_Loans_GetNewestLoans_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_Loans_GetNewestLoans_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetNewestLoans Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_Loans_GetNewestLoans_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetNewestLoans Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_Loans_GetNewestLoans_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetNewestLoans execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns comments for a specified journal entry.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_JournalEntries_GetComments extends Temboo_Choreography
{
    /**
     * Returns comments for a specified journal entry.
     *
     * @param Temboo_Session $session The session that owns this GetComments Choreo.
     * @return Kiva_JournalEntries_GetComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/JournalEntries/GetComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetComments Choreo.
     *
     * @param Kiva_JournalEntries_GetComments_Inputs|array $inputs (optional) Inputs as Kiva_JournalEntries_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_JournalEntries_GetComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_JournalEntries_GetComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_JournalEntries_GetComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_JournalEntries_GetComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_JournalEntries_GetComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_JournalEntries_GetComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_JournalEntries_GetComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_JournalEntries_GetComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetComments Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_JournalEntries_GetComments_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the JournalID input for this GetComments Choreo.
     *
     * @param int $value (required, integer) The ID number of the journal entry for which you want comments.
     * @return Kiva_JournalEntries_GetComments_Inputs For method chaining.
     */
    public function setJournalID($value)
    {
        return $this->set('JournalID', $value);
    }

    /**
     * Set the value for the Page input for this GetComments Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_JournalEntries_GetComments_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetComments Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_JournalEntries_GetComments_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_JournalEntries_GetComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetComments execution.
     * @param Kiva_JournalEntries_GetComments $choreo The choreography object for this execution.
     * @param Kiva_JournalEntries_GetComments_Inputs|array $inputs (optional) Inputs as Kiva_JournalEntries_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_JournalEntries_GetComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_JournalEntries_GetComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComments execution.
     *
     * @return Kiva_JournalEntries_GetComments_Results New results object.
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
     * Wraps results in appropriate results class for this GetComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_JournalEntries_GetComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_JournalEntries_GetComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_JournalEntries_GetComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_JournalEntries_GetComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetComments execution.
     *
     * @return string The response from Kiva.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a keyword search of all journal entries.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_JournalEntries_SearchJournalEntries extends Temboo_Choreography
{
    /**
     * Returns a keyword search of all journal entries.
     *
     * @param Temboo_Session $session The session that owns this SearchJournalEntries Choreo.
     * @return Kiva_JournalEntries_SearchJournalEntries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Kiva/JournalEntries/SearchJournalEntries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchJournalEntries Choreo.
     *
     * @param Kiva_JournalEntries_SearchJournalEntries_Inputs|array $inputs (optional) Inputs as Kiva_JournalEntries_SearchJournalEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_JournalEntries_SearchJournalEntries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Kiva_JournalEntries_SearchJournalEntries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchJournalEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_JournalEntries_SearchJournalEntries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Kiva_JournalEntries_SearchJournalEntries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchJournalEntries Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_JournalEntries_SearchJournalEntries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchJournalEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Kiva_JournalEntries_SearchJournalEntries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchJournalEntries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Kiva_JournalEntries_SearchJournalEntries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Kiva_JournalEntries_SearchJournalEntries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this SearchJournalEntries Choreo.
     *
     * @param string $value (optional, string) Your unique application ID, usually in reverse DNS notation.
     * @return Kiva_JournalEntries_SearchJournalEntries_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Page input for this SearchJournalEntries Choreo.
     *
     * @param int $value (optional, integer) The page position of results to return. Defaults to 1.
     * @return Kiva_JournalEntries_SearchJournalEntries_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Query input for this SearchJournalEntries Choreo.
     *
     * @param string $value (optional, string) Word or phrase used to search for in the journals' content.
     * @return Kiva_JournalEntries_SearchJournalEntries_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseType input for this SearchJournalEntries Choreo.
     *
     * @param string $value (optional, string) Output returned can be XML or JSON. Defaults to JSON.
     * @return Kiva_JournalEntries_SearchJournalEntries_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the SortBy input for this SearchJournalEntries Choreo.
     *
     * @param string $value (optional, string) The order by which to return the results. Acceptable values: newest, oldest, recommendation_count, comment_count. Defaults to newest.
     * @return Kiva_JournalEntries_SearchJournalEntries_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }
}


/**
 * Execution object for the SearchJournalEntries Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_JournalEntries_SearchJournalEntries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchJournalEntries Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchJournalEntries execution.
     * @param Kiva_JournalEntries_SearchJournalEntries $choreo The choreography object for this execution.
     * @param Kiva_JournalEntries_SearchJournalEntries_Inputs|array $inputs (optional) Inputs as Kiva_JournalEntries_SearchJournalEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Kiva_JournalEntries_SearchJournalEntries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Kiva_JournalEntries_SearchJournalEntries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchJournalEntries execution.
     *
     * @return Kiva_JournalEntries_SearchJournalEntries_Results New results object.
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
     * Wraps results in appropriate results class for this SearchJournalEntries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Kiva_JournalEntries_SearchJournalEntries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Kiva_JournalEntries_SearchJournalEntries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchJournalEntries Choreo.
 *
 * @package Temboo
 * @subpackage Kiva
 */
class Kiva_JournalEntries_SearchJournalEntries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchJournalEntries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Kiva_JournalEntries_SearchJournalEntries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchJournalEntries execution.
     *
     * @return string The response from Kiva.
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
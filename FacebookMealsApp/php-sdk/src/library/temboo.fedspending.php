<?php

/**
 * Temboo PHP SDK FedSpending classes
 *
 * Execute Choreographies from the Temboo FedSpending bundle.
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
 * @subpackage FedSpending
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Allows access to the information in the Recovery Act Recipient Reports database.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Recovery extends Temboo_Choreography
{
    /**
     * Allows access to the information in the Recovery Act Recipient Reports database.
     *
     * @param Temboo_Session $session The session that owns this Recovery Choreo.
     * @return FedSpending_Recovery New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedSpending/Recovery/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Recovery Choreo.
     *
     * @param FedSpending_Recovery_Inputs|array $inputs (optional) Inputs as FedSpending_Recovery_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedSpending_Recovery_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedSpending_Recovery_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Recovery Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedSpending_Recovery_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedSpending_Recovery_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Recovery Choreo.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Recovery_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Recovery Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedSpending_Recovery_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Recovery input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Activity input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) Whether or not to search by activity. (Will provide a select list if "y"). y = yes, n = no. Defaults to n if not set.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setActivity($value)
    {
        return $this->set('Activity', $value);
    }

    /**
     * Set the value for the AwardAmount input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) Grants: total Federal dollars. Loans: face value of loan obligated by the Federal Agency. Contracts: total amount obligated by Federal Agency. Vendors: payment amount. Recipients:  amount of award.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setAwardAmount($value)
    {
        return $this->set('AwardAmount', $value);
    }

    /**
     * Set the value for the AwardNumber input for this Recovery Choreo.
     *
     * @param int $value (conditional, integer) Identifying number assigned by the awarding Federal Agency. e.g. federal grant number, federal contract number or federal loan number. For grants and loans, this is assigned by the prime recipient.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setAwardNumber($value)
    {
        return $this->set('AwardNumber', $value);
    }

    /**
     * Set the value for the AwardType input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) Acceptable values: G = Grants only,L = Loans only, C = Contracts only.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setAwardType($value)
    {
        return $this->set('AwardType', $value);
    }

    /**
     * Set the value for the AwardingAgency input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The 4-digit code for a specific governmental awarding agency that awarded and is administering the award on behalf of the funding agency.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setAwardingAgency($value)
    {
        return $this->set('AwardingAgency', $value);
    }

    /**
     * Set the value for the CFDA input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The Catalog of Federal Domestic Number is the number associated with the published description of a Federal Assistance program in the CFDA.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setCFDA($value)
    {
        return $this->set('CFDA', $value);
    }

    /**
     * Set the value for the Detail input for this Recovery Choreo.
     *
     * @param string $value (optional, string) Controls the level of detail of the output. Acceptable values: -1 (summary), 0 (low), 1 (medium), 2 (high), and 3 (extensive). Defaults to -1. See docs for more information.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setDetail($value)
    {
        return $this->set('Detail', $value);
    }

    /**
     * Set the value for the EntityDun input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The prime recipient for the award's Dun & Bradstreet number (no vendor information).
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setEntityDun($value)
    {
        return $this->set('EntityDun', $value);
    }

    /**
     * Set the value for the FirstYearRange input for this Recovery Choreo.
     *
     * @param int $value (conditional, integer) Specifies the first year in a range of years from 2000-2006; if used, must be used with LastYearRange and without FiscalYear.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setFirstYearRange($value)
    {
        return $this->set('FirstYearRange', $value);
    }

    /**
     * Set the value for the FiscalYear input for this Recovery Choreo.
     *
     * @param int $value (conditional, integer) Specifies a single year; defaults to all years.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setFiscalYear($value)
    {
        return $this->set('FiscalYear', $value);
    }

    /**
     * Set the value for the FundingAgency input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The 4-digit code for a specific governmental agency that is responsible for funding/distributing the ARRA funds to recipients.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setFundingAgency($value)
    {
        return $this->set('FundingAgency', $value);
    }

    /**
     * Set the value for the FundingTAS input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The Agency Treasury Account Symbol (TAS) that identifies the funding Program Source. The Program Source is based out of the OMB TAS list.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setFundingTAS($value)
    {
        return $this->set('FundingTAS', $value);
    }

    /**
     * Set the value for the GovtContractOffice input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The agency supplied code of the government contracting office that executed the transaction. (For prime recipients only.)
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setGovtContractOffice($value)
    {
        return $this->set('GovtContractOffice', $value);
    }

    /**
     * Set the value for the LastYearRange input for this Recovery Choreo.
     *
     * @param int $value (conditional, integer) Specifies the last year in a range of years; if used, must be used with FirstYearRange and without FiscalYear.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setLastYearRange($value)
    {
        return $this->set('LastYearRange', $value);
    }

    /**
     * Set the value for the MaxRecords input for this Recovery Choreo.
     *
     * @param int $value (optional, integer) Allows you to set the maximum number of records retrieved. Defaults to 100.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setMaxRecords($value)
    {
        return $this->set('MaxRecords', $value);
    }

    /**
     * Set the value for the NumberOfJobs input for this Recovery Choreo.
     *
     * @param int $value (conditional, integer) The number of Full-Time Equivalent (FTE) jobs created and retained.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setNumberOfJobs($value)
    {
        return $this->set('NumberOfJobs', $value);
    }

    /**
     * Set the value for the OfficerComp input for this Recovery Choreo.
     *
     * @param int $value (conditional, integer) Total compensation of first highly compensated officer.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setOfficerComp($value)
    {
        return $this->set('OfficerComp', $value);
    }

    /**
     * Set the value for the OrderNumber input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) This is an identifying number assigned to the contract.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setOrderNumber($value)
    {
        return $this->set('OrderNumber', $value);
    }

    /**
     * Set the value for the PopCity input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The city in which work was performed.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setPopCity($value)
    {
        return $this->set('PopCity', $value);
    }

    /**
     * Set the value for the PopCountry input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The two-letter country code for the country in which work was performed.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setPopCountry($value)
    {
        return $this->set('PopCountry', $value);
    }

    /**
     * Set the value for the PopDistrict input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The Congressional District in which work was performed.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setPopDistrict($value)
    {
        return $this->set('PopDistrict', $value);
    }

    /**
     * Set the value for the PopState input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The two-letter code for the state in which in which work was performed (the "place of performance").
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setPopState($value)
    {
        return $this->set('PopState', $value);
    }

    /**
     * Set the value for the PopZip input for this Recovery Choreo.
     *
     * @param int $value (conditional, integer) The ZIP code in which work was performed.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setPopZip($value)
    {
        return $this->set('PopZip', $value);
    }

    /**
     * Set the value for the ProjectDescription input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) A description of the project under which the award is funded.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setProjectDescription($value)
    {
        return $this->set('ProjectDescription', $value);
    }

    /**
     * Set the value for the RecipientDistrict input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) A 4-character numeric designation for the Congressional District within which a recipient or vendor is located. (For prime recipients and sub-recipients only.)
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setRecipientDistrict($value)
    {
        return $this->set('RecipientDistrict', $value);
    }

    /**
     * Set the value for the RecipientName input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The name of the recipient (prime recipient, sub-recipient, or vendor); value given is used as a text search.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setRecipientName($value)
    {
        return $this->set('RecipientName', $value);
    }

    /**
     * Set the value for the RecipientStateCode input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) The postal state abbreviation for the state in the recipient's address (can be for prime recipient, sub-recipient, or vendor).
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setRecipientStateCode($value)
    {
        return $this->set('RecipientStateCode', $value);
    }

    /**
     * Set the value for the RecipientType input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) Recipient or vendor type: p = Prime recipients only, s = Sub-recipients only, v = Vendors only.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setRecipientType($value)
    {
        return $this->set('RecipientType', $value);
    }

    /**
     * Set the value for the RecipientZip input for this Recovery Choreo.
     *
     * @param int $value (conditional, integer) The ZIP code of the recipient (prime recipient, sub-recipient, or vendor).
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setRecipientZip($value)
    {
        return $this->set('RecipientZip', $value);
    }

    /**
     * Set the value for the Sort input for this Recovery Choreo.
     *
     * @param string $value (optional, string) Determines the order in which records are sorted. The default value sorts by Recipient/Vendor Name. See doc for all other values.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the TextSearch input for this Recovery Choreo.
     *
     * @param string $value (conditional, string) Full text search.
     * @return FedSpending_Recovery_Inputs For method chaining.
     */
    public function setTextSearch($value)
    {
        return $this->set('TextSearch', $value);
    }
}


/**
 * Execution object for the Recovery Choreo.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Recovery_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Recovery Choreo.
     *
     * @param Temboo_Session $session The session that owns this Recovery execution.
     * @param FedSpending_Recovery $choreo The choreography object for this execution.
     * @param FedSpending_Recovery_Inputs|array $inputs (optional) Inputs as FedSpending_Recovery_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedSpending_Recovery_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedSpending_Recovery $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Recovery execution.
     *
     * @return FedSpending_Recovery_Results New results object.
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
     * Wraps results in appropriate results class for this Recovery execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedSpending_Recovery_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedSpending_Recovery_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Recovery Choreo.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Recovery_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Recovery Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedSpending_Recovery_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Recovery execution.
     *
     * @return string (xml) The response from FedSpending.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows access to the information in the Federal Procurement Data System (FPDS) database, which reports all federal contracts awarded. 
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Contracts extends Temboo_Choreography
{
    /**
     * Allows access to the information in the Federal Procurement Data System (FPDS) database, which reports all federal contracts awarded. 
     *
     * @param Temboo_Session $session The session that owns this Contracts Choreo.
     * @return FedSpending_Contracts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedSpending/Contracts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Contracts Choreo.
     *
     * @param FedSpending_Contracts_Inputs|array $inputs (optional) Inputs as FedSpending_Contracts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedSpending_Contracts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedSpending_Contracts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Contracts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedSpending_Contracts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedSpending_Contracts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Contracts Choreo.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Contracts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Contracts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedSpending_Contracts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Contracts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the City input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The city within a contractor's address.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the CompanyName input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The name of a a contractor or contractor parent company.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setCompanyName($value)
    {
        return $this->set('CompanyName', $value);
    }

    /**
     * Set the value for the Completion input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The competition status of a contract. Valid values: c=Full competition, o=Full competition, one bid, p=Competition, exclusion of sources, n=Not complete, a=Not available, f=Follow-up, u=Unknown.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setCompletion($value)
    {
        return $this->set('Completion', $value);
    }

    /**
     * Set the value for the Detail input for this Contracts Choreo.
     *
     * @param string $value (optional, string) Controls the level of detail of the output. Acceptable values: -1 (summary), 0 (low), 1 (medium), 2 (high), and 3 (extensive). Defaults to -1. See docs for more information.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setDetail($value)
    {
        return $this->set('Detail', $value);
    }

    /**
     * Set the value for the FirstYearRange input for this Contracts Choreo.
     *
     * @param int $value (conditional, integer) Specifies the first year in a range of years; if used, must be used with LastYearRange and without FiscalYear.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setFirstYearRange($value)
    {
        return $this->set('FirstYearRange', $value);
    }

    /**
     * Set the value for the FiscalYear input for this Contracts Choreo.
     *
     * @param int $value (conditional, integer) Specifies a single year; defaults to all years.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setFiscalYear($value)
    {
        return $this->set('FiscalYear', $value);
    }

    /**
     * Set the value for the LastYearRange input for this Contracts Choreo.
     *
     * @param int $value (conditional, integer) Specifies the last year in a range of years; if used, must be used with FirstYearRange and without FiscalYear.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setLastYearRange($value)
    {
        return $this->set('LastYearRange', $value);
    }

    /**
     * Set the value for the MajAgency input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The 2-character code for a major governmental agency issuing contracts.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setMajAgency($value)
    {
        return $this->set('MajAgency', $value);
    }

    /**
     * Set the value for the MaxRecords input for this Contracts Choreo.
     *
     * @param int $value (optional, integer) Allows you to set the maximum number of records retrieved. Defaults to 100.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setMaxRecords($value)
    {
        return $this->set('MaxRecords', $value);
    }

    /**
     * Set the value for the ModAgency input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The 4-digit code for a specific governmental agency issuing contracts.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setModAgency($value)
    {
        return $this->set('ModAgency', $value);
    }

    /**
     * Set the value for the PIID input for this Contracts Choreo.
     *
     * @param int $value (conditional, integer) A Federal ID number for the contract.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setPIID($value)
    {
        return $this->set('PIID', $value);
    }

    /**
     * Set the value for the PSCCategory input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The 2-character code for a major product or service category.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setPSCCategory($value)
    {
        return $this->set('PSCCategory', $value);
    }

    /**
     * Set the value for the PSC input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The 4-character code for a product or service.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setPSC($value)
    {
        return $this->set('PSC', $value);
    }

    /**
     * Set the value for the PopCountryCode input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The two-letter country code for the place of performance country.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setPopCountryCode($value)
    {
        return $this->set('PopCountryCode', $value);
    }

    /**
     * Set the value for the PopDistrict input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The Congressional District of the place of performance.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setPopDistrict($value)
    {
        return $this->set('PopDistrict', $value);
    }

    /**
     * Set the value for the PopZipCode input for this Contracts Choreo.
     *
     * @param int $value (conditional, integer) The ZIP code of the place of performance.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setPopZipCode($value)
    {
        return $this->set('PopZipCode', $value);
    }

    /**
     * Set the value for the SortBy input for this Contracts Choreo.
     *
     * @param string $value (optional, string) Determines how records are sorted. Valid values: r (contractor/recipient name), f (dollars of awards),g (major contracting agency),p (Product or Service Category),d (date of award). Defaults to f.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the StateCode input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The state abbreviation of the state of the place of performance.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setStateCode($value)
    {
        return $this->set('StateCode', $value);
    }

    /**
     * Set the value for the State input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The state abbreviation within a contractor's address.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the TextSearch input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) Free text search within the text that describes what the contract is for.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setTextSearch($value)
    {
        return $this->set('TextSearch', $value);
    }

    /**
     * Set the value for the VendorCountryCode input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The two-letter country code for the country in a contractor's address.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setVendorCountryCode($value)
    {
        return $this->set('VendorCountryCode', $value);
    }

    /**
     * Set the value for the VendorDistrict input for this Contracts Choreo.
     *
     * @param string $value (conditional, string) The 4-character Congressional District within which a contractor is located.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setVendorDistrict($value)
    {
        return $this->set('VendorDistrict', $value);
    }

    /**
     * Set the value for the ZipCode input for this Contracts Choreo.
     *
     * @param int $value (conditional, integer) The ZIP code within a contractor's address.
     * @return FedSpending_Contracts_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the Contracts Choreo.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Contracts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Contracts Choreo.
     *
     * @param Temboo_Session $session The session that owns this Contracts execution.
     * @param FedSpending_Contracts $choreo The choreography object for this execution.
     * @param FedSpending_Contracts_Inputs|array $inputs (optional) Inputs as FedSpending_Contracts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedSpending_Contracts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedSpending_Contracts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Contracts execution.
     *
     * @return FedSpending_Contracts_Results New results object.
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
     * Wraps results in appropriate results class for this Contracts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedSpending_Contracts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedSpending_Contracts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Contracts Choreo.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Contracts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Contracts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedSpending_Contracts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Contracts execution.
     *
     * @return string (xml) The response from FedSpending.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows access to the information in the Federal Assisatance Award Data System (FAADS) database, which reports all financial assistance made by federal agencies.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Assistance extends Temboo_Choreography
{
    /**
     * Allows access to the information in the Federal Assisatance Award Data System (FAADS) database, which reports all financial assistance made by federal agencies.
     *
     * @param Temboo_Session $session The session that owns this Assistance Choreo.
     * @return FedSpending_Assistance New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedSpending/Assistance/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Assistance Choreo.
     *
     * @param FedSpending_Assistance_Inputs|array $inputs (optional) Inputs as FedSpending_Assistance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedSpending_Assistance_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedSpending_Assistance_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Assistance Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedSpending_Assistance_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedSpending_Assistance_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Assistance Choreo.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Assistance_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Assistance Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedSpending_Assistance_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Assistance input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AgencyCode input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The 4-character code for a specific governmental agency providing assistance.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setAgencyCode($value)
    {
        return $this->set('AgencyCode', $value);
    }

    /**
     * Set the value for the AssistanceType input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The type of assistance provided. Valid values are: d = Direct Payments (specified and unrestricted), g = Grants and Cooperative Agreements, i = Insurance, l = Loans (direct and guaranteed), o = Other.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setAssistanceType($value)
    {
        return $this->set('AssistanceType', $value);
    }

    /**
     * Set the value for the CFDAProgram input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) An ID for the governmental program.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setCFDAProgram($value)
    {
        return $this->set('CFDAProgram', $value);
    }

    /**
     * Set the value for the Detail input for this Assistance Choreo.
     *
     * @param string $value (optional, string) Controls the level of detail of the output. Acceptable values: -1 (summary), 0 (low), 1 (medium), 2 (high), and 3 (extensive). Defaults to -1. See docs for more information.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setDetail($value)
    {
        return $this->set('Detail', $value);
    }

    /**
     * Set the value for the FederalID input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) A Federal ID for the award.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setFederalID($value)
    {
        return $this->set('FederalID', $value);
    }

    /**
     * Set the value for the FirstYearRange input for this Assistance Choreo.
     *
     * @param int $value (conditional, integer) Specifies the first year in a range of years from 2000-2006; if used, must be used with LastYearRange and without FiscalYear.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setFirstYearRange($value)
    {
        return $this->set('FirstYearRange', $value);
    }

    /**
     * Set the value for the FiscalYear input for this Assistance Choreo.
     *
     * @param int $value (conditional, integer) Specifies a single year from 2000-2006; defaults to all years.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setFiscalYear($value)
    {
        return $this->set('FiscalYear', $value);
    }

    /**
     * Set the value for the LastYearRange input for this Assistance Choreo.
     *
     * @param int $value (conditional, integer) Specifies the last year in a range of years from 2000-2006; if used, must be used with FirstYearRange and without FiscalYear.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setLastYearRange($value)
    {
        return $this->set('LastYearRange', $value);
    }

    /**
     * Set the value for the MajAgency input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The 2-character code for a major governmental agency providing assistance.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setMajAgency($value)
    {
        return $this->set('MajAgency', $value);
    }

    /**
     * Set the value for the MaxRecords input for this Assistance Choreo.
     *
     * @param int $value (optional, integer) Allows you to set the maximum number of records retrieved. Defaults to 100.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setMaxRecords($value)
    {
        return $this->set('MaxRecords', $value);
    }

    /**
     * Set the value for the PrincipalPlaceCC input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The city or county of the place of performance.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setPrincipalPlaceCC($value)
    {
        return $this->set('PrincipalPlaceCC', $value);
    }

    /**
     * Set the value for the PrincipalPlaceStateCode input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The FIPS state code for the state of the place of performance.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setPrincipalPlaceStateCode($value)
    {
        return $this->set('PrincipalPlaceStateCode', $value);
    }

    /**
     * Set the value for the RecipientCityName input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The city in the address of a recipient.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setRecipientCityName($value)
    {
        return $this->set('RecipientCityName', $value);
    }

    /**
     * Set the value for the RecipientCountyName input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The county in which a recipient is located.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setRecipientCountyName($value)
    {
        return $this->set('RecipientCountyName', $value);
    }

    /**
     * Set the value for the RecipientDistrict input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The Congressional District in which the recipient is located, formatted with four characters.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setRecipientDistrict($value)
    {
        return $this->set('RecipientDistrict', $value);
    }

    /**
     * Set the value for the RecipientName input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The name of a recipient of assistance.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setRecipientName($value)
    {
        return $this->set('RecipientName', $value);
    }

    /**
     * Set the value for the RecipientStateCode input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The FIPS state code for the state in the address of a recipient.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setRecipientStateCode($value)
    {
        return $this->set('RecipientStateCode', $value);
    }

    /**
     * Set the value for the RecipientType input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) The type of recipient. Valid values are: f = For Profits, g = Government,h = Higher Education, i = Individuals,n = Nonprofits, o = Other.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setRecipientType($value)
    {
        return $this->set('RecipientType', $value);
    }

    /**
     * Set the value for the RecipientZip input for this Assistance Choreo.
     *
     * @param int $value (conditional, integer) The ZIP code in the address of a recipient.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setRecipientZip($value)
    {
        return $this->set('RecipientZip', $value);
    }

    /**
     * Set the value for the SortBy input for this Assistance Choreo.
     *
     * @param string $value (optional, string) Determines how records are sorted. Valid values: r (contractor/recipient name), f (dollars of awards),g (major contracting agency), p (CFDA Program), d (date of award). Defaults to f.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the TextSearch input for this Assistance Choreo.
     *
     * @param string $value (conditional, string) A free text search on a description of the project.
     * @return FedSpending_Assistance_Inputs For method chaining.
     */
    public function setTextSearch($value)
    {
        return $this->set('TextSearch', $value);
    }
}


/**
 * Execution object for the Assistance Choreo.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Assistance_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Assistance Choreo.
     *
     * @param Temboo_Session $session The session that owns this Assistance execution.
     * @param FedSpending_Assistance $choreo The choreography object for this execution.
     * @param FedSpending_Assistance_Inputs|array $inputs (optional) Inputs as FedSpending_Assistance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedSpending_Assistance_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedSpending_Assistance $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Assistance execution.
     *
     * @return FedSpending_Assistance_Results New results object.
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
     * Wraps results in appropriate results class for this Assistance execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedSpending_Assistance_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedSpending_Assistance_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Assistance Choreo.
 *
 * @package Temboo
 * @subpackage FedSpending
 */
class FedSpending_Assistance_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Assistance Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedSpending_Assistance_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Assistance execution.
     *
     * @return string (xml) The response from FedSpending.org.
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
<?php

/**
 * Temboo PHP SDK PostgreSQL classes
 *
 * Execute Choreographies from the Temboo PostgreSQL bundle.
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
 * @subpackage PostgreSQL
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Performs a batch operation in PostgreSQL with a set of records in JSON format.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_JSONToDB extends Temboo_Choreography
{
    /**
     * Performs a batch operation in PostgreSQL with a set of records in JSON format.
     *
     * @param Temboo_Session $session The session that owns this JSONToDB Choreo.
     * @return PostgreSQL_JSONToDB New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PostgreSQL/JSONToDB/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this JSONToDB Choreo.
     *
     * @param PostgreSQL_JSONToDB_Inputs|array $inputs (optional) Inputs as PostgreSQL_JSONToDB_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PostgreSQL_JSONToDB_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PostgreSQL_JSONToDB_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this JSONToDB Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PostgreSQL_JSONToDB_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PostgreSQL_JSONToDB_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the JSONToDB Choreo.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_JSONToDB_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the JSONToDB Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PostgreSQL_JSONToDB_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this JSONToDB input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BatchFile input for this JSONToDB Choreo.
     *
     * @param string $value (required, json) The records to send to the database for the batch operation.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setBatchFile($value)
    {
        return $this->set('BatchFile', $value);
    }

    /**
     * Set the value for the BatchMode input for this JSONToDB Choreo.
     *
     * @param string $value (optional, string) The type of batch operation to perform. Accepted values are: insert, update, or upsert.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setBatchMode($value)
    {
        return $this->set('BatchMode', $value);
    }

    /**
     * Set the value for the DatabaseName input for this JSONToDB Choreo.
     *
     * @param string $value (required, string) The name of the database to connect to.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the Password input for this JSONToDB Choreo.
     *
     * @param string $value (required, password) The password for the database user.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Port input for this JSONToDB Choreo.
     *
     * @param int $value (optional, integer) The database port. Defaults to 5432.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setPort($value)
    {
        return $this->set('Port', $value);
    }

    /**
     * Set the value for the RollbackOnError input for this JSONToDB Choreo.
     *
     * @param bool $value (optional, boolean) Rollback if error occurs. Set to 1 to enable. Defaults to 0 (false).
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setRollbackOnError($value)
    {
        return $this->set('RollbackOnError', $value);
    }

    /**
     * Set the value for the Server input for this JSONToDB Choreo.
     *
     * @param string $value (required, string) The name or IP address of the database server.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the TableName input for this JSONToDB Choreo.
     *
     * @param string $value (required, string) The database table that the batch operation is to be performed on.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setTableName($value)
    {
        return $this->set('TableName', $value);
    }

    /**
     * Set the value for the Username input for this JSONToDB Choreo.
     *
     * @param string $value (required, string) The database username.
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Version input for this JSONToDB Choreo.
     *
     * @param float $value (optional, decimal) The version of the Postgres database. Allowed values are 8 and 9 (the default).
     * @return PostgreSQL_JSONToDB_Inputs For method chaining.
     */
    public function setVersion($value)
    {
        return $this->set('Version', $value);
    }
}


/**
 * Execution object for the JSONToDB Choreo.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_JSONToDB_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the JSONToDB Choreo.
     *
     * @param Temboo_Session $session The session that owns this JSONToDB execution.
     * @param PostgreSQL_JSONToDB $choreo The choreography object for this execution.
     * @param PostgreSQL_JSONToDB_Inputs|array $inputs (optional) Inputs as PostgreSQL_JSONToDB_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PostgreSQL_JSONToDB_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PostgreSQL_JSONToDB $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this JSONToDB execution.
     *
     * @return PostgreSQL_JSONToDB_Results New results object.
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
     * Wraps results in appropriate results class for this JSONToDB execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PostgreSQL_JSONToDB_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PostgreSQL_JSONToDB_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the JSONToDB Choreo.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_JSONToDB_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the JSONToDB Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PostgreSQL_JSONToDB_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Success" output from this JSONToDB execution.
     *
     * @return bool (boolean) Indicates the result of the batch operation. The value will be "true" when the SQL transaction executes successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSuccess()
    {
        return $this->get('Success');
    }
}

/**
 * Executes a SQL command for a Postgres database.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_RunCommand extends Temboo_Choreography
{
    /**
     * Executes a SQL command for a Postgres database.
     *
     * @param Temboo_Session $session The session that owns this RunCommand Choreo.
     * @return PostgreSQL_RunCommand New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PostgreSQL/RunCommand/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RunCommand Choreo.
     *
     * @param PostgreSQL_RunCommand_Inputs|array $inputs (optional) Inputs as PostgreSQL_RunCommand_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PostgreSQL_RunCommand_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PostgreSQL_RunCommand_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RunCommand Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PostgreSQL_RunCommand_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PostgreSQL_RunCommand_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RunCommand Choreo.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_RunCommand_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RunCommand Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PostgreSQL_RunCommand_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RunCommand input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DatabaseName input for this RunCommand Choreo.
     *
     * @param string $value (required, string) The name of the database to connect to.
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the Password input for this RunCommand Choreo.
     *
     * @param string $value (required, password) The password for the database user.
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Port input for this RunCommand Choreo.
     *
     * @param int $value (optional, integer) The database port. Defaults to 5432.
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function setPort($value)
    {
        return $this->set('Port', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RunCommand Choreo.
     *
     * @param string $value (optional, string) The preferred format for the database results. Accepted formats are json (the default) and xml. This input only applies when providing a SELECT statement for the SQL input.
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SQL input for this RunCommand Choreo.
     *
     * @param string $value (required, multiline) A SQL statement to execute.
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function setSQL($value)
    {
        return $this->set('SQL', $value);
    }

    /**
     * Set the value for the Server input for this RunCommand Choreo.
     *
     * @param string $value (required, string) The name or IP address of the database server.
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Username input for this RunCommand Choreo.
     *
     * @param string $value (required, string) The database username.
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Version input for this RunCommand Choreo.
     *
     * @param float $value (optional, decimal) The version of the Postgres database. Allowed values are 8 and 9 (the default).
     * @return PostgreSQL_RunCommand_Inputs For method chaining.
     */
    public function setVersion($value)
    {
        return $this->set('Version', $value);
    }
}


/**
 * Execution object for the RunCommand Choreo.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_RunCommand_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RunCommand Choreo.
     *
     * @param Temboo_Session $session The session that owns this RunCommand execution.
     * @param PostgreSQL_RunCommand $choreo The choreography object for this execution.
     * @param PostgreSQL_RunCommand_Inputs|array $inputs (optional) Inputs as PostgreSQL_RunCommand_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PostgreSQL_RunCommand_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PostgreSQL_RunCommand $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RunCommand execution.
     *
     * @return PostgreSQL_RunCommand_Results New results object.
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
     * Wraps results in appropriate results class for this RunCommand execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PostgreSQL_RunCommand_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PostgreSQL_RunCommand_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RunCommand Choreo.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_RunCommand_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RunCommand Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PostgreSQL_RunCommand_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResultData" output from this RunCommand execution.
     *
     * @return string The data returned from the database. This output will only contain a value when a SELECT statement is provided. Results are returned as JSON or XML depending on the ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResultData()
    {
        return $this->get('ResultData');
    }
    /**
     * Retrieve the value for the "Success" output from this RunCommand execution.
     *
     * @return bool (boolean) Indicates the result of the database command. The value will be "true" when the SQL statement executes successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSuccess()
    {
        return $this->get('Success');
    }
}

/**
 * Performs a batch operation in PostgreSQL with a set of records in XML format.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_XMLToDB extends Temboo_Choreography
{
    /**
     * Performs a batch operation in PostgreSQL with a set of records in XML format.
     *
     * @param Temboo_Session $session The session that owns this XMLToDB Choreo.
     * @return PostgreSQL_XMLToDB New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PostgreSQL/XMLToDB/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this XMLToDB Choreo.
     *
     * @param PostgreSQL_XMLToDB_Inputs|array $inputs (optional) Inputs as PostgreSQL_XMLToDB_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PostgreSQL_XMLToDB_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PostgreSQL_XMLToDB_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this XMLToDB Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PostgreSQL_XMLToDB_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PostgreSQL_XMLToDB_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the XMLToDB Choreo.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_XMLToDB_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the XMLToDB Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PostgreSQL_XMLToDB_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this XMLToDB input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BatchFile input for this XMLToDB Choreo.
     *
     * @param string $value (required, xml) The records to send to the database for the batch operation.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setBatchFile($value)
    {
        return $this->set('BatchFile', $value);
    }

    /**
     * Set the value for the BatchMode input for this XMLToDB Choreo.
     *
     * @param string $value (optional, string) The type of batch operation to perform. Accepted values are: insert, update, or upsert.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setBatchMode($value)
    {
        return $this->set('BatchMode', $value);
    }

    /**
     * Set the value for the DatabaseName input for this XMLToDB Choreo.
     *
     * @param string $value (required, string) The name of the database to connect to.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setDatabaseName($value)
    {
        return $this->set('DatabaseName', $value);
    }

    /**
     * Set the value for the Password input for this XMLToDB Choreo.
     *
     * @param string $value (required, password) The password for the database user.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Port input for this XMLToDB Choreo.
     *
     * @param int $value (optional, integer) The database port. Defaults to 5432.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setPort($value)
    {
        return $this->set('Port', $value);
    }

    /**
     * Set the value for the RollbackOnError input for this XMLToDB Choreo.
     *
     * @param bool $value (optional, boolean) Rollback if error occurs. Set to 1 to enable. Defaults to 0 (false).
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setRollbackOnError($value)
    {
        return $this->set('RollbackOnError', $value);
    }

    /**
     * Set the value for the Server input for this XMLToDB Choreo.
     *
     * @param string $value (required, string) The name or IP address of the database server.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the TableName input for this XMLToDB Choreo.
     *
     * @param string $value (required, string) The database table that the batch operation is to be performed on.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setTableName($value)
    {
        return $this->set('TableName', $value);
    }

    /**
     * Set the value for the Username input for this XMLToDB Choreo.
     *
     * @param string $value (required, string) The database username.
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Version input for this XMLToDB Choreo.
     *
     * @param float $value (optional, decimal) The version of the Postgres database. Allowed values are 8 and 9 (the default).
     * @return PostgreSQL_XMLToDB_Inputs For method chaining.
     */
    public function setVersion($value)
    {
        return $this->set('Version', $value);
    }
}


/**
 * Execution object for the XMLToDB Choreo.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_XMLToDB_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the XMLToDB Choreo.
     *
     * @param Temboo_Session $session The session that owns this XMLToDB execution.
     * @param PostgreSQL_XMLToDB $choreo The choreography object for this execution.
     * @param PostgreSQL_XMLToDB_Inputs|array $inputs (optional) Inputs as PostgreSQL_XMLToDB_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PostgreSQL_XMLToDB_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PostgreSQL_XMLToDB $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this XMLToDB execution.
     *
     * @return PostgreSQL_XMLToDB_Results New results object.
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
     * Wraps results in appropriate results class for this XMLToDB execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PostgreSQL_XMLToDB_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PostgreSQL_XMLToDB_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the XMLToDB Choreo.
 *
 * @package Temboo
 * @subpackage PostgreSQL
 */
class PostgreSQL_XMLToDB_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the XMLToDB Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PostgreSQL_XMLToDB_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Success" output from this XMLToDB execution.
     *
     * @return bool (boolean) Indicates the result of the batch operation. The value will be "true" when the SQL transaction executes successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSuccess()
    {
        return $this->get('Success');
    }
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


?>
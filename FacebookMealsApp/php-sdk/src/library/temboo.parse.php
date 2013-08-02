<?php

/**
 * Temboo PHP SDK Parse classes
 *
 * Execute Choreographies from the Temboo Parse bundle.
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
 * @subpackage Parse
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Allows your application to sign up a new user.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_SignUp extends Temboo_Choreography
{
    /**
     * Allows your application to sign up a new user.
     *
     * @param Temboo_Session $session The session that owns this SignUp Choreo.
     * @return Parse_Users_SignUp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Users/SignUp/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SignUp Choreo.
     *
     * @param Parse_Users_SignUp_Inputs|array $inputs (optional) Inputs as Parse_Users_SignUp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_SignUp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Users_SignUp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SignUp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_SignUp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Users_SignUp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SignUp Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_SignUp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SignUp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_SignUp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SignUp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Users_SignUp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Users_SignUp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the User input for this SignUp Choreo.
     *
     * @param string $value (required, json) A JSON string containing the new user information.
     * @return Parse_Users_SignUp_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }

    /**
     * Set the value for the ApplicationID input for this SignUp Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Users_SignUp_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this SignUp Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Users_SignUp_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the SignUp Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_SignUp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SignUp Choreo.
     *
     * @param Temboo_Session $session The session that owns this SignUp execution.
     * @param Parse_Users_SignUp $choreo The choreography object for this execution.
     * @param Parse_Users_SignUp_Inputs|array $inputs (optional) Inputs as Parse_Users_SignUp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_SignUp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Users_SignUp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SignUp execution.
     *
     * @return Parse_Users_SignUp_Results New results object.
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
     * Wraps results in appropriate results class for this SignUp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Users_SignUp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Users_SignUp_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SignUp Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_SignUp_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SignUp Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Users_SignUp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SignUp execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a given object.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_DeleteObject extends Temboo_Choreography
{
    /**
     * Deletes a given object.
     *
     * @param Temboo_Session $session The session that owns this DeleteObject Choreo.
     * @return Parse_Objects_DeleteObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Objects/DeleteObject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteObject Choreo.
     *
     * @param Parse_Objects_DeleteObject_Inputs|array $inputs (optional) Inputs as Parse_Objects_DeleteObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Objects_DeleteObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Objects_DeleteObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Objects_DeleteObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Objects_DeleteObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_DeleteObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Objects_DeleteObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Objects_DeleteObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Objects_DeleteObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this DeleteObject Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Objects_DeleteObject_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ClassName input for this DeleteObject Choreo.
     *
     * @param string $value (required, string) The class name for the object being deleted.
     * @return Parse_Objects_DeleteObject_Inputs For method chaining.
     */
    public function setClassName($value)
    {
        return $this->set('ClassName', $value);
    }

    /**
     * Set the value for the ObjectID input for this DeleteObject Choreo.
     *
     * @param string $value (required, string) The ID of the object to delete.
     * @return Parse_Objects_DeleteObject_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this DeleteObject Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Objects_DeleteObject_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the DeleteObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_DeleteObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteObject Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteObject execution.
     * @param Parse_Objects_DeleteObject $choreo The choreography object for this execution.
     * @param Parse_Objects_DeleteObject_Inputs|array $inputs (optional) Inputs as Parse_Objects_DeleteObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Objects_DeleteObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Objects_DeleteObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteObject execution.
     *
     * @return Parse_Objects_DeleteObject_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Objects_DeleteObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Objects_DeleteObject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_DeleteObject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteObject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Objects_DeleteObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteObject execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads a file to Parse.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_UploadFile extends Temboo_Choreography
{
    /**
     * Uploads a file to Parse.
     *
     * @param Temboo_Session $session The session that owns this UploadFile Choreo.
     * @return Parse_Files_UploadFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Files/UploadFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadFile Choreo.
     *
     * @param Parse_Files_UploadFile_Inputs|array $inputs (optional) Inputs as Parse_Files_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Files_UploadFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Files_UploadFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Files_UploadFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Files_UploadFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_UploadFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Files_UploadFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Files_UploadFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Files_UploadFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this UploadFile Choreo.
     *
     * @param string $value (conditional, string) The Base64-encoded contents of the file you want to upload.
     * @return Parse_Files_UploadFile_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the ApplicationID input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Files_UploadFile_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The content type of the file that is being uploaded (i.e. text/plain, image/jpeg, etc).
     * @return Parse_Files_UploadFile_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileName input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The name of the file you are uploading to Parse.
     * @return Parse_Files_UploadFile_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Files_UploadFile_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }

}


/**
 * Execution object for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_UploadFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadFile execution.
     * @param Parse_Files_UploadFile $choreo The choreography object for this execution.
     * @param Parse_Files_UploadFile_Inputs|array $inputs (optional) Inputs as Parse_Files_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Files_UploadFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Files_UploadFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadFile execution.
     *
     * @return Parse_Files_UploadFile_Results New results object.
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
     * Wraps results in appropriate results class for this UploadFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Files_UploadFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Files_UploadFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_UploadFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Files_UploadFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UploadFile execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates information for an existing user.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_UpdateUser extends Temboo_Choreography
{
    /**
     * Updates information for an existing user.
     *
     * @param Temboo_Session $session The session that owns this UpdateUser Choreo.
     * @return Parse_Users_UpdateUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Users/UpdateUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateUser Choreo.
     *
     * @param Parse_Users_UpdateUser_Inputs|array $inputs (optional) Inputs as Parse_Users_UpdateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_UpdateUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Users_UpdateUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_UpdateUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Users_UpdateUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_UpdateUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_UpdateUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Users_UpdateUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Users_UpdateUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the UserInformation input for this UpdateUser Choreo.
     *
     * @param string $value (required, json) A JSON string containing the user information to update.
     * @return Parse_Users_UpdateUser_Inputs For method chaining.
     */
    public function setUserInformation($value)
    {
        return $this->set('UserInformation', $value);
    }

    /**
     * Set the value for the ApplicationID input for this UpdateUser Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Users_UpdateUser_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ObjectID input for this UpdateUser Choreo.
     *
     * @param string $value (required, string) The ID of the user to update.
     * @return Parse_Users_UpdateUser_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this UpdateUser Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Users_UpdateUser_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }

    /**
     * Set the value for the SessionToken input for this UpdateUser Choreo.
     *
     * @param string $value (required, string) A valid Session Token. Note that Session Tokens can be retrieved by the Login and SignUp Choreos.
     * @return Parse_Users_UpdateUser_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }
}


/**
 * Execution object for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_UpdateUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateUser execution.
     * @param Parse_Users_UpdateUser $choreo The choreography object for this execution.
     * @param Parse_Users_UpdateUser_Inputs|array $inputs (optional) Inputs as Parse_Users_UpdateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_UpdateUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Users_UpdateUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateUser execution.
     *
     * @return Parse_Users_UpdateUser_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Users_UpdateUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Users_UpdateUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_UpdateUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Users_UpdateUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateUser execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new object on Parse.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_CreateObject extends Temboo_Choreography
{
    /**
     * Creates a new object on Parse.
     *
     * @param Temboo_Session $session The session that owns this CreateObject Choreo.
     * @return Parse_Objects_CreateObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Objects/CreateObject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateObject Choreo.
     *
     * @param Parse_Objects_CreateObject_Inputs|array $inputs (optional) Inputs as Parse_Objects_CreateObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Objects_CreateObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Objects_CreateObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Objects_CreateObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Objects_CreateObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_CreateObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Objects_CreateObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Objects_CreateObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Objects_CreateObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ObjectContents input for this CreateObject Choreo.
     *
     * @param string $value (required, json) A JSON string containing the object contents.
     * @return Parse_Objects_CreateObject_Inputs For method chaining.
     */
    public function setObjectContents($value)
    {
        return $this->set('ObjectContents', $value);
    }

    /**
     * Set the value for the ApplicationID input for this CreateObject Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Objects_CreateObject_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ClassName input for this CreateObject Choreo.
     *
     * @param string $value (required, string) The class name for the object being created.
     * @return Parse_Objects_CreateObject_Inputs For method chaining.
     */
    public function setClassName($value)
    {
        return $this->set('ClassName', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this CreateObject Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Objects_CreateObject_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the CreateObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_CreateObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateObject Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateObject execution.
     * @param Parse_Objects_CreateObject $choreo The choreography object for this execution.
     * @param Parse_Objects_CreateObject_Inputs|array $inputs (optional) Inputs as Parse_Objects_CreateObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Objects_CreateObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Objects_CreateObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateObject execution.
     *
     * @return Parse_Objects_CreateObject_Results New results object.
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
     * Wraps results in appropriate results class for this CreateObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Objects_CreateObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Objects_CreateObject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_CreateObject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateObject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Objects_CreateObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateObject execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves multiple installations at once and allows you to narrow results by specifying query constraints.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_Query extends Temboo_Choreography
{
    /**
     * Retrieves multiple installations at once and allows you to narrow results by specifying query constraints.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return Parse_PushNotifications_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/PushNotifications/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param Parse_PushNotifications_Query_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_PushNotifications_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_PushNotifications_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_Query_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Query input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_PushNotifications_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_PushNotifications_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this Query Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_PushNotifications_Query_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the Count input for this Query Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating to include a count of objects in the response. Set to 1 to include a count. Defaults to 0.
     * @return Parse_PushNotifications_Query_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Include input for this Query Choreo.
     *
     * @param string $value (optional, string) Specify a field to return multiple types of related objects in this query.  For example, enter: post.author, to retrieve posts and their authors related to this class.
     * @return Parse_PushNotifications_Query_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the Limit input for this Query Choreo.
     *
     * @param int $value (optional, integer) The number of objects to return.
     * @return Parse_PushNotifications_Query_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MasterKey input for this Query Choreo.
     *
     * @param string $value (required, string) The Master Key provided by Parse.
     * @return Parse_PushNotifications_Query_Inputs For method chaining.
     */
    public function setMasterKey($value)
    {
        return $this->set('MasterKey', $value);
    }

    /**
     * Set the value for the Skip input for this Query Choreo.
     *
     * @param int $value (optional, integer) Returns only records after this number. Used in combination with the Limit input to page through many results.
     * @return Parse_PushNotifications_Query_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Where input for this Query Choreo.
     *
     * @param string $value (optional, json) A valid query constraint formatted as a JSON-encoded string. See documentation for syntax rules.
     * @return Parse_PushNotifications_Query_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Parse_PushNotifications_Query $choreo The choreography object for this execution.
     * @param Parse_PushNotifications_Query_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_PushNotifications_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Parse_PushNotifications_Query_Results New results object.
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
     * Wraps results in appropriate results class for this Query execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_PushNotifications_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_PushNotifications_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_PushNotifications_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sends a push notification.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_SendNotification extends Temboo_Choreography
{
    /**
     * Sends a push notification.
     *
     * @param Temboo_Session $session The session that owns this SendNotification Choreo.
     * @return Parse_PushNotifications_SendNotification New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/PushNotifications/SendNotification/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SendNotification Choreo.
     *
     * @param Parse_PushNotifications_SendNotification_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_SendNotification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_SendNotification_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_PushNotifications_SendNotification_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendNotification Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_SendNotification_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_PushNotifications_SendNotification_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendNotification Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_SendNotification_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SendNotification Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_SendNotification_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendNotification input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_PushNotifications_SendNotification_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_PushNotifications_SendNotification_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Notifcation input for this SendNotification Choreo.
     *
     * @param string $value (required, json) A JSON string containing the push notification data. See documentation for syntax examples.
     * @return Parse_PushNotifications_SendNotification_Inputs For method chaining.
     */
    public function setNotifcation($value)
    {
        return $this->set('Notifcation', $value);
    }

    /**
     * Set the value for the ApplicationID input for this SendNotification Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_PushNotifications_SendNotification_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this SendNotification Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_PushNotifications_SendNotification_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the SendNotification Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_SendNotification_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendNotification Choreo.
     *
     * @param Temboo_Session $session The session that owns this SendNotification execution.
     * @param Parse_PushNotifications_SendNotification $choreo The choreography object for this execution.
     * @param Parse_PushNotifications_SendNotification_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_SendNotification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_SendNotification_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_PushNotifications_SendNotification $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendNotification execution.
     *
     * @return Parse_PushNotifications_SendNotification_Results New results object.
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
     * Wraps results in appropriate results class for this SendNotification execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_PushNotifications_SendNotification_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_PushNotifications_SendNotification_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SendNotification Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_SendNotification_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SendNotification Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_PushNotifications_SendNotification_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SendNotification execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves details for a specific user.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_RetrieveUser extends Temboo_Choreography
{
    /**
     * Retrieves details for a specific user.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUser Choreo.
     * @return Parse_Users_RetrieveUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Users/RetrieveUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveUser Choreo.
     *
     * @param Parse_Users_RetrieveUser_Inputs|array $inputs (optional) Inputs as Parse_Users_RetrieveUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_RetrieveUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Users_RetrieveUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_RetrieveUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Users_RetrieveUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_RetrieveUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_RetrieveUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Users_RetrieveUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Users_RetrieveUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this RetrieveUser Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Users_RetrieveUser_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ObjectID input for this RetrieveUser Choreo.
     *
     * @param string $value (required, string) The ID of the user to retrieve.
     * @return Parse_Users_RetrieveUser_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this RetrieveUser Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Users_RetrieveUser_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the RetrieveUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_RetrieveUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUser execution.
     * @param Parse_Users_RetrieveUser $choreo The choreography object for this execution.
     * @param Parse_Users_RetrieveUser_Inputs|array $inputs (optional) Inputs as Parse_Users_RetrieveUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_RetrieveUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Users_RetrieveUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveUser execution.
     *
     * @return Parse_Users_RetrieveUser_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Users_RetrieveUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Users_RetrieveUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_RetrieveUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Users_RetrieveUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveUser execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing installation object on Parse.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_UpdateInstallation extends Temboo_Choreography
{
    /**
     * Updates an existing installation object on Parse.
     *
     * @param Temboo_Session $session The session that owns this UpdateInstallation Choreo.
     * @return Parse_PushNotifications_UpdateInstallation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/PushNotifications/UpdateInstallation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateInstallation Choreo.
     *
     * @param Parse_PushNotifications_UpdateInstallation_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_UpdateInstallation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_UpdateInstallation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_PushNotifications_UpdateInstallation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateInstallation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_UpdateInstallation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_PushNotifications_UpdateInstallation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateInstallation Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_UpdateInstallation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateInstallation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_UpdateInstallation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateInstallation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_PushNotifications_UpdateInstallation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_PushNotifications_UpdateInstallation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Installation input for this UpdateInstallation Choreo.
     *
     * @param string $value (required, json) A JSON string containing the installation data. See documentation for syntax examples.
     * @return Parse_PushNotifications_UpdateInstallation_Inputs For method chaining.
     */
    public function setInstallation($value)
    {
        return $this->set('Installation', $value);
    }

    /**
     * Set the value for the ApplicationID input for this UpdateInstallation Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_PushNotifications_UpdateInstallation_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ObjectID input for this UpdateInstallation Choreo.
     *
     * @param string $value (required, string) The ID of the installation to update.
     * @return Parse_PushNotifications_UpdateInstallation_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this UpdateInstallation Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_PushNotifications_UpdateInstallation_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the UpdateInstallation Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_UpdateInstallation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateInstallation Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateInstallation execution.
     * @param Parse_PushNotifications_UpdateInstallation $choreo The choreography object for this execution.
     * @param Parse_PushNotifications_UpdateInstallation_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_UpdateInstallation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_UpdateInstallation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_PushNotifications_UpdateInstallation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateInstallation execution.
     *
     * @return Parse_PushNotifications_UpdateInstallation_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateInstallation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_PushNotifications_UpdateInstallation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_PushNotifications_UpdateInstallation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateInstallation Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_UpdateInstallation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateInstallation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_PushNotifications_UpdateInstallation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateInstallation execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows your application to authenticate a given user; returns user information, user-provided fields, and a session token.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_Login extends Temboo_Choreography
{
    /**
     * Allows your application to authenticate a given user; returns user information, user-provided fields, and a session token.
     *
     * @param Temboo_Session $session The session that owns this Login Choreo.
     * @return Parse_Users_Login New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Users/Login/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Login Choreo.
     *
     * @param Parse_Users_Login_Inputs|array $inputs (optional) Inputs as Parse_Users_Login_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_Login_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Users_Login_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Login Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_Login_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Users_Login_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Login Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_Login_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Login Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_Login_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Login input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Users_Login_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Users_Login_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this Login Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Users_Login_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the Password input for this Login Choreo.
     *
     * @param string $value (required, string) The password for the user that is loggin in.
     * @return Parse_Users_Login_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this Login Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Users_Login_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }

    /**
     * Set the value for the Username input for this Login Choreo.
     *
     * @param string $value (required, string) The username for the user that is authenticating.
     * @return Parse_Users_Login_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the Login Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_Login_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Login Choreo.
     *
     * @param Temboo_Session $session The session that owns this Login execution.
     * @param Parse_Users_Login $choreo The choreography object for this execution.
     * @param Parse_Users_Login_Inputs|array $inputs (optional) Inputs as Parse_Users_Login_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_Login_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Users_Login $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Login execution.
     *
     * @return Parse_Users_Login_Results New results object.
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
     * Wraps results in appropriate results class for this Login execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Users_Login_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Users_Login_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Login Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_Login_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Login Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Users_Login_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Login execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to associate a previously uploaded file with Parse objects.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_AssociateWithObject extends Temboo_Choreography
{
    /**
     * Allows you to associate a previously uploaded file with Parse objects.
     *
     * @param Temboo_Session $session The session that owns this AssociateWithObject Choreo.
     * @return Parse_Files_AssociateWithObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Files/AssociateWithObject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AssociateWithObject Choreo.
     *
     * @param Parse_Files_AssociateWithObject_Inputs|array $inputs (optional) Inputs as Parse_Files_AssociateWithObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Files_AssociateWithObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Files_AssociateWithObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AssociateWithObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Files_AssociateWithObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Files_AssociateWithObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AssociateWithObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_AssociateWithObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AssociateWithObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Files_AssociateWithObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AssociateWithObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Files_AssociateWithObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Files_AssociateWithObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Association input for this AssociateWithObject Choreo.
     *
     * @param string $value (required, json) A JSON string containing the file information that is to be associated with the Parse object. See documentation for formatting examples.
     * @return Parse_Files_AssociateWithObject_Inputs For method chaining.
     */
    public function setAssociation($value)
    {
        return $this->set('Association', $value);
    }

    /**
     * Set the value for the ApplicationID input for this AssociateWithObject Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Files_AssociateWithObject_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ClassName input for this AssociateWithObject Choreo.
     *
     * @param string $value (required, string) The name of the class that a file is being associated with.
     * @return Parse_Files_AssociateWithObject_Inputs For method chaining.
     */
    public function setClassName($value)
    {
        return $this->set('ClassName', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this AssociateWithObject Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Files_AssociateWithObject_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the AssociateWithObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_AssociateWithObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AssociateWithObject Choreo.
     *
     * @param Temboo_Session $session The session that owns this AssociateWithObject execution.
     * @param Parse_Files_AssociateWithObject $choreo The choreography object for this execution.
     * @param Parse_Files_AssociateWithObject_Inputs|array $inputs (optional) Inputs as Parse_Files_AssociateWithObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Files_AssociateWithObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Files_AssociateWithObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AssociateWithObject execution.
     *
     * @return Parse_Files_AssociateWithObject_Results New results object.
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
     * Wraps results in appropriate results class for this AssociateWithObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Files_AssociateWithObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Files_AssociateWithObject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AssociateWithObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_AssociateWithObject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AssociateWithObject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Files_AssociateWithObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AssociateWithObject execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows your application to link an existing user with a service like Facebook or Twitter.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_LinkExistingUser extends Temboo_Choreography
{
    /**
     * Allows your application to link an existing user with a service like Facebook or Twitter.
     *
     * @param Temboo_Session $session The session that owns this LinkExistingUser Choreo.
     * @return Parse_Users_LinkExistingUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Users/LinkExistingUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LinkExistingUser Choreo.
     *
     * @param Parse_Users_LinkExistingUser_Inputs|array $inputs (optional) Inputs as Parse_Users_LinkExistingUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_LinkExistingUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Users_LinkExistingUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LinkExistingUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_LinkExistingUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Users_LinkExistingUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LinkExistingUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_LinkExistingUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LinkExistingUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_LinkExistingUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LinkExistingUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Users_LinkExistingUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Users_LinkExistingUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthData input for this LinkExistingUser Choreo.
     *
     * @param string $value (required, json) A JSON string containing the authentication data of the user you want to link with another service. See documentation for more formatting details.
     * @return Parse_Users_LinkExistingUser_Inputs For method chaining.
     */
    public function setAuthData($value)
    {
        return $this->set('AuthData', $value);
    }

    /**
     * Set the value for the ApplicationID input for this LinkExistingUser Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Users_LinkExistingUser_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ObjectID input for this LinkExistingUser Choreo.
     *
     * @param string $value (required, string) The ID of the user that is being linked to another service.
     * @return Parse_Users_LinkExistingUser_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this LinkExistingUser Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Users_LinkExistingUser_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }

    /**
     * Set the value for the SessionToken input for this LinkExistingUser Choreo.
     *
     * @param string $value (required, string) A valid Session Token. Note that Session Tokens can be retrieved by the Login and SignUp Choreos.
     * @return Parse_Users_LinkExistingUser_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }
}


/**
 * Execution object for the LinkExistingUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_LinkExistingUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LinkExistingUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this LinkExistingUser execution.
     * @param Parse_Users_LinkExistingUser $choreo The choreography object for this execution.
     * @param Parse_Users_LinkExistingUser_Inputs|array $inputs (optional) Inputs as Parse_Users_LinkExistingUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_LinkExistingUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Users_LinkExistingUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LinkExistingUser execution.
     *
     * @return Parse_Users_LinkExistingUser_Results New results object.
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
     * Wraps results in appropriate results class for this LinkExistingUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Users_LinkExistingUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Users_LinkExistingUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LinkExistingUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_LinkExistingUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LinkExistingUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Users_LinkExistingUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LinkExistingUser execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a given role.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_DeleteRole extends Temboo_Choreography
{
    /**
     * Retrieves a given role.
     *
     * @param Temboo_Session $session The session that owns this DeleteRole Choreo.
     * @return Parse_Roles_DeleteRole New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Roles/DeleteRole/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteRole Choreo.
     *
     * @param Parse_Roles_DeleteRole_Inputs|array $inputs (optional) Inputs as Parse_Roles_DeleteRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Roles_DeleteRole_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Roles_DeleteRole_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Roles_DeleteRole_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Roles_DeleteRole_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_DeleteRole_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Roles_DeleteRole_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRole input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Roles_DeleteRole_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Roles_DeleteRole_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ObjectID input for this DeleteRole Choreo.
     *
     * @param string $value (required, json) The ID of the role to retrieve.
     * @return Parse_Roles_DeleteRole_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ApplicationID input for this DeleteRole Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Roles_DeleteRole_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this DeleteRole Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Roles_DeleteRole_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the DeleteRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_DeleteRole_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRole Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteRole execution.
     * @param Parse_Roles_DeleteRole $choreo The choreography object for this execution.
     * @param Parse_Roles_DeleteRole_Inputs|array $inputs (optional) Inputs as Parse_Roles_DeleteRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Roles_DeleteRole_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Roles_DeleteRole $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRole execution.
     *
     * @return Parse_Roles_DeleteRole_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteRole execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Roles_DeleteRole_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Roles_DeleteRole_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_DeleteRole_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteRole Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Roles_DeleteRole_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteRole execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a file stored on Parse.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_DeleteFile extends Temboo_Choreography
{
    /**
     * Deletes a file stored on Parse.
     *
     * @param Temboo_Session $session The session that owns this DeleteFile Choreo.
     * @return Parse_Files_DeleteFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Files/DeleteFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFile Choreo.
     *
     * @param Parse_Files_DeleteFile_Inputs|array $inputs (optional) Inputs as Parse_Files_DeleteFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Files_DeleteFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Files_DeleteFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Files_DeleteFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Files_DeleteFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFile Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_DeleteFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Files_DeleteFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Files_DeleteFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Files_DeleteFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileName input for this DeleteFile Choreo.
     *
     * @param string $value (required, json) The name of the file to delete. Note that this is the name generated and returned by Parse after uploading the file.
     * @return Parse_Files_DeleteFile_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the ApplicationID input for this DeleteFile Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Files_DeleteFile_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the MasterKey input for this DeleteFile Choreo.
     *
     * @param string $value (required, string) The Master Key provided by Parse.
     * @return Parse_Files_DeleteFile_Inputs For method chaining.
     */
    public function setMasterKey($value)
    {
        return $this->set('MasterKey', $value);
    }
}


/**
 * Execution object for the DeleteFile Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_DeleteFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFile execution.
     * @param Parse_Files_DeleteFile $choreo The choreography object for this execution.
     * @param Parse_Files_DeleteFile_Inputs|array $inputs (optional) Inputs as Parse_Files_DeleteFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Files_DeleteFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Files_DeleteFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFile execution.
     *
     * @return Parse_Files_DeleteFile_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Files_DeleteFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Files_DeleteFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFile Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Files_DeleteFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Files_DeleteFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFile execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the contents of an installation object.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_RetrieveInstallation extends Temboo_Choreography
{
    /**
     * Retrieves the contents of an installation object.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInstallation Choreo.
     * @return Parse_PushNotifications_RetrieveInstallation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/PushNotifications/RetrieveInstallation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveInstallation Choreo.
     *
     * @param Parse_PushNotifications_RetrieveInstallation_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_RetrieveInstallation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_RetrieveInstallation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_PushNotifications_RetrieveInstallation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveInstallation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_RetrieveInstallation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_PushNotifications_RetrieveInstallation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveInstallation Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_RetrieveInstallation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveInstallation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_RetrieveInstallation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveInstallation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_PushNotifications_RetrieveInstallation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_PushNotifications_RetrieveInstallation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ObjectID input for this RetrieveInstallation Choreo.
     *
     * @param string $value (required, string) The ID of the installation to retrieve.
     * @return Parse_PushNotifications_RetrieveInstallation_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ApplicationID input for this RetrieveInstallation Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_PushNotifications_RetrieveInstallation_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this RetrieveInstallation Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_PushNotifications_RetrieveInstallation_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the RetrieveInstallation Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_RetrieveInstallation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveInstallation Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInstallation execution.
     * @param Parse_PushNotifications_RetrieveInstallation $choreo The choreography object for this execution.
     * @param Parse_PushNotifications_RetrieveInstallation_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_RetrieveInstallation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_RetrieveInstallation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_PushNotifications_RetrieveInstallation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveInstallation execution.
     *
     * @return Parse_PushNotifications_RetrieveInstallation_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveInstallation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_PushNotifications_RetrieveInstallation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_PushNotifications_RetrieveInstallation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveInstallation Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_RetrieveInstallation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveInstallation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_PushNotifications_RetrieveInstallation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveInstallation execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to request a password reset email.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_PasswordReset extends Temboo_Choreography
{
    /**
     * Allows a user to request a password reset email.
     *
     * @param Temboo_Session $session The session that owns this PasswordReset Choreo.
     * @return Parse_Users_PasswordReset New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Users/PasswordReset/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PasswordReset Choreo.
     *
     * @param Parse_Users_PasswordReset_Inputs|array $inputs (optional) Inputs as Parse_Users_PasswordReset_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_PasswordReset_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Users_PasswordReset_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PasswordReset Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_PasswordReset_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Users_PasswordReset_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PasswordReset Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_PasswordReset_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PasswordReset Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_PasswordReset_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PasswordReset input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Users_PasswordReset_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Users_PasswordReset_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the EmailAddress input for this PasswordReset Choreo.
     *
     * @param string $value (required, json) The email address for the user who wishes to reset their password.
     * @return Parse_Users_PasswordReset_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the ApplicationID input for this PasswordReset Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Users_PasswordReset_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this PasswordReset Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Users_PasswordReset_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the PasswordReset Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_PasswordReset_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PasswordReset Choreo.
     *
     * @param Temboo_Session $session The session that owns this PasswordReset execution.
     * @param Parse_Users_PasswordReset $choreo The choreography object for this execution.
     * @param Parse_Users_PasswordReset_Inputs|array $inputs (optional) Inputs as Parse_Users_PasswordReset_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_PasswordReset_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Users_PasswordReset $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PasswordReset execution.
     *
     * @return Parse_Users_PasswordReset_Results New results object.
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
     * Wraps results in appropriate results class for this PasswordReset execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Users_PasswordReset_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Users_PasswordReset_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PasswordReset Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_PasswordReset_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PasswordReset Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Users_PasswordReset_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PasswordReset execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Queries Parse and retrieves objects based on given constraints.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Queries_Query extends Temboo_Choreography
{
    /**
     * Queries Parse and retrieves objects based on given constraints.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return Parse_Queries_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Queries/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param Parse_Queries_Query_Inputs|array $inputs (optional) Inputs as Parse_Queries_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Queries_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Queries_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Queries_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Queries_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Queries_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Queries_Query_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Query input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this Query Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ClassName input for this Query Choreo.
     *
     * @param string $value (required, string) The class name for the object being created.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function setClassName($value)
    {
        return $this->set('ClassName', $value);
    }

    /**
     * Set the value for the Count input for this Query Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating to include a count of objects in the response. Set to 1 to include a count. Defaults to 0.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Include input for this Query Choreo.
     *
     * @param string $value (optional, string) Specify a field to return multiple types of related objects in this query.  For example, enter: post.author, to retrieve posts and their authors related to this class.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the Limit input for this Query Choreo.
     *
     * @param int $value (optional, integer) The number of objects to return.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this Query Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }

    /**
     * Set the value for the Skip input for this Query Choreo.
     *
     * @param int $value (optional, integer) Returns only records after this number. Used in combination with the Limit input to page through many results.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Where input for this Query Choreo.
     *
     * @param string $value (optional, json) A valid query constraint formatted as a JSON-encoded string. See documentation for syntax rules.
     * @return Parse_Queries_Query_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Queries_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Parse_Queries_Query $choreo The choreography object for this execution.
     * @param Parse_Queries_Query_Inputs|array $inputs (optional) Inputs as Parse_Queries_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Queries_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Queries_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Parse_Queries_Query_Results New results object.
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
     * Wraps results in appropriate results class for this Query execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Queries_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Queries_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Queries_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Queries_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a given object.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_RetrieveObject extends Temboo_Choreography
{
    /**
     * Retrieves a given object.
     *
     * @param Temboo_Session $session The session that owns this RetrieveObject Choreo.
     * @return Parse_Objects_RetrieveObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Objects/RetrieveObject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveObject Choreo.
     *
     * @param Parse_Objects_RetrieveObject_Inputs|array $inputs (optional) Inputs as Parse_Objects_RetrieveObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Objects_RetrieveObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Objects_RetrieveObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Objects_RetrieveObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Objects_RetrieveObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_RetrieveObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Objects_RetrieveObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Objects_RetrieveObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Objects_RetrieveObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this RetrieveObject Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Objects_RetrieveObject_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ClassName input for this RetrieveObject Choreo.
     *
     * @param string $value (required, string) The class name for the object being retrieved.
     * @return Parse_Objects_RetrieveObject_Inputs For method chaining.
     */
    public function setClassName($value)
    {
        return $this->set('ClassName', $value);
    }

    /**
     * Set the value for the ObjectID input for this RetrieveObject Choreo.
     *
     * @param string $value (required, string) The ID of the object to retrieve.
     * @return Parse_Objects_RetrieveObject_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this RetrieveObject Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Objects_RetrieveObject_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the RetrieveObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_RetrieveObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveObject Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveObject execution.
     * @param Parse_Objects_RetrieveObject $choreo The choreography object for this execution.
     * @param Parse_Objects_RetrieveObject_Inputs|array $inputs (optional) Inputs as Parse_Objects_RetrieveObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Objects_RetrieveObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Objects_RetrieveObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveObject execution.
     *
     * @return Parse_Objects_RetrieveObject_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Objects_RetrieveObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Objects_RetrieveObject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_RetrieveObject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveObject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Objects_RetrieveObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveObject execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new role.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_CreateRole extends Temboo_Choreography
{
    /**
     * Creates a new role.
     *
     * @param Temboo_Session $session The session that owns this CreateRole Choreo.
     * @return Parse_Roles_CreateRole New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Roles/CreateRole/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateRole Choreo.
     *
     * @param Parse_Roles_CreateRole_Inputs|array $inputs (optional) Inputs as Parse_Roles_CreateRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Roles_CreateRole_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Roles_CreateRole_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Roles_CreateRole_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Roles_CreateRole_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_CreateRole_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Roles_CreateRole_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateRole input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Roles_CreateRole_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Roles_CreateRole_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Role input for this CreateRole Choreo.
     *
     * @param string $value (required, json) A JSON string containing the role information. See documentation for formatting details.
     * @return Parse_Roles_CreateRole_Inputs For method chaining.
     */
    public function setRole($value)
    {
        return $this->set('Role', $value);
    }

    /**
     * Set the value for the ApplicationID input for this CreateRole Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Roles_CreateRole_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this CreateRole Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Roles_CreateRole_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the CreateRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_CreateRole_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateRole Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateRole execution.
     * @param Parse_Roles_CreateRole $choreo The choreography object for this execution.
     * @param Parse_Roles_CreateRole_Inputs|array $inputs (optional) Inputs as Parse_Roles_CreateRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Roles_CreateRole_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Roles_CreateRole $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateRole execution.
     *
     * @return Parse_Roles_CreateRole_Results New results object.
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
     * Wraps results in appropriate results class for this CreateRole execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Roles_CreateRole_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Roles_CreateRole_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_CreateRole_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateRole Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Roles_CreateRole_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateRole execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified user.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_DeleteUser extends Temboo_Choreography
{
    /**
     * Deletes a specified user.
     *
     * @param Temboo_Session $session The session that owns this DeleteUser Choreo.
     * @return Parse_Users_DeleteUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Users/DeleteUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteUser Choreo.
     *
     * @param Parse_Users_DeleteUser_Inputs|array $inputs (optional) Inputs as Parse_Users_DeleteUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_DeleteUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Users_DeleteUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_DeleteUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Users_DeleteUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_DeleteUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_DeleteUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Users_DeleteUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Users_DeleteUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this DeleteUser Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Users_DeleteUser_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ObjectID input for this DeleteUser Choreo.
     *
     * @param string $value (required, string) The ID of the user to retrieve.
     * @return Parse_Users_DeleteUser_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this DeleteUser Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Users_DeleteUser_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_DeleteUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteUser execution.
     * @param Parse_Users_DeleteUser $choreo The choreography object for this execution.
     * @param Parse_Users_DeleteUser_Inputs|array $inputs (optional) Inputs as Parse_Users_DeleteUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_DeleteUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Users_DeleteUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteUser execution.
     *
     * @return Parse_Users_DeleteUser_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Users_DeleteUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Users_DeleteUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_DeleteUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Users_DeleteUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteUser execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates an installation object on Parse.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_UploadInstallationData extends Temboo_Choreography
{
    /**
     * Creates an installation object on Parse.
     *
     * @param Temboo_Session $session The session that owns this UploadInstallationData Choreo.
     * @return Parse_PushNotifications_UploadInstallationData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/PushNotifications/UploadInstallationData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadInstallationData Choreo.
     *
     * @param Parse_PushNotifications_UploadInstallationData_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_UploadInstallationData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_UploadInstallationData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_PushNotifications_UploadInstallationData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadInstallationData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_UploadInstallationData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_PushNotifications_UploadInstallationData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadInstallationData Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_UploadInstallationData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadInstallationData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_UploadInstallationData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadInstallationData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_PushNotifications_UploadInstallationData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_PushNotifications_UploadInstallationData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Installation input for this UploadInstallationData Choreo.
     *
     * @param string $value (required, json) A JSON string containing the installation data. See documentation for syntax examples.
     * @return Parse_PushNotifications_UploadInstallationData_Inputs For method chaining.
     */
    public function setInstallation($value)
    {
        return $this->set('Installation', $value);
    }

    /**
     * Set the value for the ApplicationID input for this UploadInstallationData Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_PushNotifications_UploadInstallationData_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this UploadInstallationData Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_PushNotifications_UploadInstallationData_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the UploadInstallationData Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_UploadInstallationData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadInstallationData Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadInstallationData execution.
     * @param Parse_PushNotifications_UploadInstallationData $choreo The choreography object for this execution.
     * @param Parse_PushNotifications_UploadInstallationData_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_UploadInstallationData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_UploadInstallationData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_PushNotifications_UploadInstallationData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadInstallationData execution.
     *
     * @return Parse_PushNotifications_UploadInstallationData_Results New results object.
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
     * Wraps results in appropriate results class for this UploadInstallationData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_PushNotifications_UploadInstallationData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_PushNotifications_UploadInstallationData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadInstallationData Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_UploadInstallationData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadInstallationData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_PushNotifications_UploadInstallationData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UploadInstallationData execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified role.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_RetrieveRole extends Temboo_Choreography
{
    /**
     * Deletes a specified role.
     *
     * @param Temboo_Session $session The session that owns this RetrieveRole Choreo.
     * @return Parse_Roles_RetrieveRole New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Roles/RetrieveRole/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveRole Choreo.
     *
     * @param Parse_Roles_RetrieveRole_Inputs|array $inputs (optional) Inputs as Parse_Roles_RetrieveRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Roles_RetrieveRole_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Roles_RetrieveRole_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Roles_RetrieveRole_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Roles_RetrieveRole_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_RetrieveRole_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Roles_RetrieveRole_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveRole input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Roles_RetrieveRole_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Roles_RetrieveRole_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ObjectID input for this RetrieveRole Choreo.
     *
     * @param string $value (required, json) The ID of the role to be retrieved.
     * @return Parse_Roles_RetrieveRole_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ApplicationID input for this RetrieveRole Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Roles_RetrieveRole_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this RetrieveRole Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Roles_RetrieveRole_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the RetrieveRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_RetrieveRole_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveRole Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveRole execution.
     * @param Parse_Roles_RetrieveRole $choreo The choreography object for this execution.
     * @param Parse_Roles_RetrieveRole_Inputs|array $inputs (optional) Inputs as Parse_Roles_RetrieveRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Roles_RetrieveRole_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Roles_RetrieveRole $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveRole execution.
     *
     * @return Parse_Roles_RetrieveRole_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveRole execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Roles_RetrieveRole_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Roles_RetrieveRole_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_RetrieveRole_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveRole Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Roles_RetrieveRole_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveRole execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing object.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_UpdateObject extends Temboo_Choreography
{
    /**
     * Updates an existing object.
     *
     * @param Temboo_Session $session The session that owns this UpdateObject Choreo.
     * @return Parse_Objects_UpdateObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Objects/UpdateObject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateObject Choreo.
     *
     * @param Parse_Objects_UpdateObject_Inputs|array $inputs (optional) Inputs as Parse_Objects_UpdateObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Objects_UpdateObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Objects_UpdateObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Objects_UpdateObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Objects_UpdateObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_UpdateObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Objects_UpdateObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Objects_UpdateObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ObjectContents input for this UpdateObject Choreo.
     *
     * @param string $value (required, json) A JSON string containing the object contents.
     * @return Parse_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setObjectContents($value)
    {
        return $this->set('ObjectContents', $value);
    }

    /**
     * Set the value for the ApplicationID input for this UpdateObject Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ClassName input for this UpdateObject Choreo.
     *
     * @param string $value (required, string) The class name for the object being updated.
     * @return Parse_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setClassName($value)
    {
        return $this->set('ClassName', $value);
    }

    /**
     * Set the value for the ObjectID input for this UpdateObject Choreo.
     *
     * @param string $value (required, string) The ID of the object to update.
     * @return Parse_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this UpdateObject Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the UpdateObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_UpdateObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateObject Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateObject execution.
     * @param Parse_Objects_UpdateObject $choreo The choreography object for this execution.
     * @param Parse_Objects_UpdateObject_Inputs|array $inputs (optional) Inputs as Parse_Objects_UpdateObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Objects_UpdateObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Objects_UpdateObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateObject execution.
     *
     * @return Parse_Objects_UpdateObject_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Objects_UpdateObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Objects_UpdateObject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateObject Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Objects_UpdateObject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateObject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Objects_UpdateObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateObject execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Associates a Geo point with an existing object.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_GeoPoints_GeoPoint extends Temboo_Choreography
{
    /**
     * Associates a Geo point with an existing object.
     *
     * @param Temboo_Session $session The session that owns this GeoPoint Choreo.
     * @return Parse_GeoPoints_GeoPoint New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/GeoPoints/GeoPoint/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GeoPoint Choreo.
     *
     * @param Parse_GeoPoints_GeoPoint_Inputs|array $inputs (optional) Inputs as Parse_GeoPoints_GeoPoint_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_GeoPoints_GeoPoint_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_GeoPoints_GeoPoint_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GeoPoint Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_GeoPoints_GeoPoint_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_GeoPoints_GeoPoint_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GeoPoint Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_GeoPoints_GeoPoint_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GeoPoint Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_GeoPoints_GeoPoint_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GeoPoint input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_GeoPoints_GeoPoint_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_GeoPoints_GeoPoint_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this GeoPoint Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_GeoPoints_GeoPoint_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ClassName input for this GeoPoint Choreo.
     *
     * @param string $value (required, string) The class name for the object being created.
     * @return Parse_GeoPoints_GeoPoint_Inputs For method chaining.
     */
    public function setClassName($value)
    {
        return $this->set('ClassName', $value);
    }

    /**
     * Set the value for the Latitude input for this GeoPoint Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate of the Geo Point.
     * @return Parse_GeoPoints_GeoPoint_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GeoPoint Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate of the Geo Point.
     * @return Parse_GeoPoints_GeoPoint_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this GeoPoint Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_GeoPoints_GeoPoint_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the GeoPoint Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_GeoPoints_GeoPoint_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GeoPoint Choreo.
     *
     * @param Temboo_Session $session The session that owns this GeoPoint execution.
     * @param Parse_GeoPoints_GeoPoint $choreo The choreography object for this execution.
     * @param Parse_GeoPoints_GeoPoint_Inputs|array $inputs (optional) Inputs as Parse_GeoPoints_GeoPoint_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_GeoPoints_GeoPoint_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_GeoPoints_GeoPoint $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GeoPoint execution.
     *
     * @return Parse_GeoPoints_GeoPoint_Results New results object.
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
     * Wraps results in appropriate results class for this GeoPoint execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_GeoPoints_GeoPoint_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_GeoPoints_GeoPoint_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GeoPoint Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_GeoPoints_GeoPoint_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GeoPoint Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_GeoPoints_GeoPoint_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GeoPoint execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows your application to sign up and login users by linking them to other services such as Twitter or Facebook.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_LinkNewUser extends Temboo_Choreography
{
    /**
     * Allows your application to sign up and login users by linking them to other services such as Twitter or Facebook.
     *
     * @param Temboo_Session $session The session that owns this LinkNewUser Choreo.
     * @return Parse_Users_LinkNewUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Users/LinkNewUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LinkNewUser Choreo.
     *
     * @param Parse_Users_LinkNewUser_Inputs|array $inputs (optional) Inputs as Parse_Users_LinkNewUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_LinkNewUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Users_LinkNewUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LinkNewUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_LinkNewUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Users_LinkNewUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LinkNewUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_LinkNewUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LinkNewUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_LinkNewUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LinkNewUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Users_LinkNewUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Users_LinkNewUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthData input for this LinkNewUser Choreo.
     *
     * @param string $value (required, json) A JSON string containing the authentication data of the user you want to link with another service. See documentation for more formatting details.
     * @return Parse_Users_LinkNewUser_Inputs For method chaining.
     */
    public function setAuthData($value)
    {
        return $this->set('AuthData', $value);
    }

    /**
     * Set the value for the ApplicationID input for this LinkNewUser Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Users_LinkNewUser_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this LinkNewUser Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Users_LinkNewUser_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the LinkNewUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_LinkNewUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LinkNewUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this LinkNewUser execution.
     * @param Parse_Users_LinkNewUser $choreo The choreography object for this execution.
     * @param Parse_Users_LinkNewUser_Inputs|array $inputs (optional) Inputs as Parse_Users_LinkNewUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_LinkNewUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Users_LinkNewUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LinkNewUser execution.
     *
     * @return Parse_Users_LinkNewUser_Results New results object.
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
     * Wraps results in appropriate results class for this LinkNewUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Users_LinkNewUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Users_LinkNewUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LinkNewUser Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_LinkNewUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LinkNewUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Users_LinkNewUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LinkNewUser execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing role.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_UpdateRole extends Temboo_Choreography
{
    /**
     * Updates an existing role.
     *
     * @param Temboo_Session $session The session that owns this UpdateRole Choreo.
     * @return Parse_Roles_UpdateRole New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Roles/UpdateRole/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateRole Choreo.
     *
     * @param Parse_Roles_UpdateRole_Inputs|array $inputs (optional) Inputs as Parse_Roles_UpdateRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Roles_UpdateRole_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Roles_UpdateRole_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Roles_UpdateRole_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Roles_UpdateRole_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_UpdateRole_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Roles_UpdateRole_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateRole input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Roles_UpdateRole_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Roles_UpdateRole_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Role input for this UpdateRole Choreo.
     *
     * @param string $value (required, json) A JSON string containing the role information to be updated. See documentation for formatting details.
     * @return Parse_Roles_UpdateRole_Inputs For method chaining.
     */
    public function setRole($value)
    {
        return $this->set('Role', $value);
    }

    /**
     * Set the value for the ApplicationID input for this UpdateRole Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Roles_UpdateRole_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ObjectID input for this UpdateRole Choreo.
     *
     * @param string $value (required, string) The ID of the role to update.
     * @return Parse_Roles_UpdateRole_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this UpdateRole Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Roles_UpdateRole_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }
}


/**
 * Execution object for the UpdateRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_UpdateRole_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateRole Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateRole execution.
     * @param Parse_Roles_UpdateRole $choreo The choreography object for this execution.
     * @param Parse_Roles_UpdateRole_Inputs|array $inputs (optional) Inputs as Parse_Roles_UpdateRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Roles_UpdateRole_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Roles_UpdateRole $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateRole execution.
     *
     * @return Parse_Roles_UpdateRole_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateRole execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Roles_UpdateRole_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Roles_UpdateRole_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateRole Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Roles_UpdateRole_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateRole Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Roles_UpdateRole_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateRole execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns objects associated with Geo points near a specified set of coordinates.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_GeoPoints_Query extends Temboo_Choreography
{
    /**
     * Returns objects associated with Geo points near a specified set of coordinates.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return Parse_GeoPoints_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/GeoPoints/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param Parse_GeoPoints_Query_Inputs|array $inputs (optional) Inputs as Parse_GeoPoints_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_GeoPoints_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_GeoPoints_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_GeoPoints_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_GeoPoints_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_GeoPoints_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_GeoPoints_Query_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Query input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this Query Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the ClassName input for this Query Choreo.
     *
     * @param string $value (required, string) The class name for the object being created.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setClassName($value)
    {
        return $this->set('ClassName', $value);
    }

    /**
     * Set the value for the Count input for this Query Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating to include a count of objects in the response. Set to 1 to include a count. Defaults to 0.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Include input for this Query Choreo.
     *
     * @param string $value (optional, string) Specify a field to return multiple types of related objects in this query.  For example, enter: post.author, to retrieve posts and their authors related to this class.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the Latitude input for this Query Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate of the Geo Point.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this Query Choreo.
     *
     * @param int $value (optional, integer) The number of results to return.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this Query Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate of the Geo Point.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this Query Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }

    /**
     * Set the value for the Skip input for this Query Choreo.
     *
     * @param int $value (optional, integer) Returns only records after this number. Used in combination with the Limit input to page through many results.
     * @return Parse_GeoPoints_Query_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_GeoPoints_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Parse_GeoPoints_Query $choreo The choreography object for this execution.
     * @param Parse_GeoPoints_Query_Inputs|array $inputs (optional) Inputs as Parse_GeoPoints_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_GeoPoints_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_GeoPoints_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Parse_GeoPoints_Query_Results New results object.
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
     * Wraps results in appropriate results class for this Query execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_GeoPoints_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_GeoPoints_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_GeoPoints_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_GeoPoints_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves multiple users at once and allows you to specify query constraints.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_Query extends Temboo_Choreography
{
    /**
     * Retrieves multiple users at once and allows you to specify query constraints.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return Parse_Users_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/Users/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param Parse_Users_Query_Inputs|array $inputs (optional) Inputs as Parse_Users_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_Users_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_Users_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_Users_Query_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Query input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_Users_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_Users_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApplicationID input for this Query Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_Users_Query_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the Count input for this Query Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating to include a count of users in the response. Set to 1 to include a count. Defaults to 0.
     * @return Parse_Users_Query_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Include input for this Query Choreo.
     *
     * @param string $value (optional, string) Specify a field to return multiple types of related objects in this query.  For example, enter: post.author, to retrieve posts and their authors related to this class.
     * @return Parse_Users_Query_Inputs For method chaining.
     */
    public function setInclude($value)
    {
        return $this->set('Include', $value);
    }

    /**
     * Set the value for the Limit input for this Query Choreo.
     *
     * @param int $value (optional, integer) The number of users to return.
     * @return Parse_Users_Query_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the RESTAPIKey input for this Query Choreo.
     *
     * @param string $value (required, string) The REST API Key provided by Parse.
     * @return Parse_Users_Query_Inputs For method chaining.
     */
    public function setRESTAPIKey($value)
    {
        return $this->set('RESTAPIKey', $value);
    }

    /**
     * Set the value for the Where input for this Query Choreo.
     *
     * @param string $value (optional, json) A valid query constraint formatted as a JSON-encoded string. See documentation for syntax rules.
     * @return Parse_Users_Query_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Parse_Users_Query $choreo The choreography object for this execution.
     * @param Parse_Users_Query_Inputs|array $inputs (optional) Inputs as Parse_Users_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_Users_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_Users_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Parse_Users_Query_Results New results object.
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
     * Wraps results in appropriate results class for this Query execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_Users_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_Users_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_Users_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_Users_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (json) The response from Parse.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes an installation object.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_DeleteInstallation extends Temboo_Choreography
{
    /**
     * Deletes an installation object.
     *
     * @param Temboo_Session $session The session that owns this DeleteInstallation Choreo.
     * @return Parse_PushNotifications_DeleteInstallation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Parse/PushNotifications/DeleteInstallation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteInstallation Choreo.
     *
     * @param Parse_PushNotifications_DeleteInstallation_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_DeleteInstallation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_DeleteInstallation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Parse_PushNotifications_DeleteInstallation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteInstallation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_DeleteInstallation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Parse_PushNotifications_DeleteInstallation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteInstallation Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_DeleteInstallation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteInstallation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Parse_PushNotifications_DeleteInstallation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteInstallation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Parse_PushNotifications_DeleteInstallation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Parse_PushNotifications_DeleteInstallation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ObjectID input for this DeleteInstallation Choreo.
     *
     * @param string $value (required, string) The ID of the installation to retrieve.
     * @return Parse_PushNotifications_DeleteInstallation_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ApplicationID input for this DeleteInstallation Choreo.
     *
     * @param string $value (required, string) The Application ID provided by Parse.
     * @return Parse_PushNotifications_DeleteInstallation_Inputs For method chaining.
     */
    public function setApplicationID($value)
    {
        return $this->set('ApplicationID', $value);
    }

    /**
     * Set the value for the MasterKey input for this DeleteInstallation Choreo.
     *
     * @param string $value (required, string) The Master Key provided by Parse.
     * @return Parse_PushNotifications_DeleteInstallation_Inputs For method chaining.
     */
    public function setMasterKey($value)
    {
        return $this->set('MasterKey', $value);
    }
}


/**
 * Execution object for the DeleteInstallation Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_DeleteInstallation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteInstallation Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteInstallation execution.
     * @param Parse_PushNotifications_DeleteInstallation $choreo The choreography object for this execution.
     * @param Parse_PushNotifications_DeleteInstallation_Inputs|array $inputs (optional) Inputs as Parse_PushNotifications_DeleteInstallation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Parse_PushNotifications_DeleteInstallation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Parse_PushNotifications_DeleteInstallation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteInstallation execution.
     *
     * @return Parse_PushNotifications_DeleteInstallation_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteInstallation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Parse_PushNotifications_DeleteInstallation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Parse_PushNotifications_DeleteInstallation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteInstallation Choreo.
 *
 * @package Temboo
 * @subpackage Parse
 */
class Parse_PushNotifications_DeleteInstallation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteInstallation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Parse_PushNotifications_DeleteInstallation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteInstallation execution.
     *
     * @return string (json) The response from Parse.
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
<?php

/**
 * Temboo PHP SDK Box classes
 *
 * Execute Choreographies from the Temboo Box bundle.
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
 * @subpackage Box
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Deletes a single collaboration.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_DeleteCollaboration extends Temboo_Choreography
{
    /**
     * Deletes a single collaboration.
     *
     * @param Temboo_Session $session The session that owns this DeleteCollaboration Choreo.
     * @return Box_Collaborations_DeleteCollaboration New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Collaborations/DeleteCollaboration/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteCollaboration Choreo.
     *
     * @param Box_Collaborations_DeleteCollaboration_Inputs|array $inputs (optional) Inputs as Box_Collaborations_DeleteCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_DeleteCollaboration_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Collaborations_DeleteCollaboration_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteCollaboration Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_DeleteCollaboration_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Collaborations_DeleteCollaboration_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_DeleteCollaboration_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteCollaboration Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_DeleteCollaboration_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteCollaboration input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Collaborations_DeleteCollaboration_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Collaborations_DeleteCollaboration_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteCollaboration Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Collaborations_DeleteCollaboration_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CollaborationID input for this DeleteCollaboration Choreo.
     *
     * @param string $value (required, string) The id of the collaboration to remove from a folder.
     * @return Box_Collaborations_DeleteCollaboration_Inputs For method chaining.
     */
    public function setCollaborationID($value)
    {
        return $this->set('CollaborationID', $value);
    }

}


/**
 * Execution object for the DeleteCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_DeleteCollaboration_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteCollaboration Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteCollaboration execution.
     * @param Box_Collaborations_DeleteCollaboration $choreo The choreography object for this execution.
     * @param Box_Collaborations_DeleteCollaboration_Inputs|array $inputs (optional) Inputs as Box_Collaborations_DeleteCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_DeleteCollaboration_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Collaborations_DeleteCollaboration $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteCollaboration execution.
     *
     * @return Box_Collaborations_DeleteCollaboration_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteCollaboration execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Collaborations_DeleteCollaboration_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Collaborations_DeleteCollaboration_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_DeleteCollaboration_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteCollaboration Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Collaborations_DeleteCollaboration_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteCollaboration execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specific comment.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_DeleteComment extends Temboo_Choreography
{
    /**
     * Deletes a specific comment.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment Choreo.
     * @return Box_Comments_DeleteComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Comments/DeleteComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteComment Choreo.
     *
     * @param Box_Comments_DeleteComment_Inputs|array $inputs (optional) Inputs as Box_Comments_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Comments_DeleteComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Comments_DeleteComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Comments_DeleteComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Comments_DeleteComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_DeleteComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Comments_DeleteComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Comments_DeleteComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Comments_DeleteComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Comments_DeleteComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CommentID input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The id of the comment to update.
     * @return Box_Comments_DeleteComment_Inputs For method chaining.
     */
    public function setCommentID($value)
    {
        return $this->set('CommentID', $value);
    }

}


/**
 * Execution object for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_DeleteComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment execution.
     * @param Box_Comments_DeleteComment $choreo The choreography object for this execution.
     * @param Box_Comments_DeleteComment_Inputs|array $inputs (optional) Inputs as Box_Comments_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Comments_DeleteComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Comments_DeleteComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteComment execution.
     *
     * @return Box_Comments_DeleteComment_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Comments_DeleteComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Comments_DeleteComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_DeleteComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Comments_DeleteComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteComment execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new folder in the parent folder you specify.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CreateFolder extends Temboo_Choreography
{
    /**
     * Creates a new folder in the parent folder you specify.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder Choreo.
     * @return Box_Folders_CreateFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Folders/CreateFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFolder Choreo.
     *
     * @param Box_Folders_CreateFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_CreateFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Folders_CreateFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_CreateFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Folders_CreateFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CreateFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_CreateFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Folders_CreateFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Folders_CreateFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Folders_CreateFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this CreateFolder Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Folders_CreateFolder_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Name input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The name of the folder to create.
     * @return Box_Folders_CreateFolder_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ParentID input for this CreateFolder Choreo.
     *
     * @param string $value (optional, string) The ID of the parent folder in which to create the new folder. Defaults to 0 indicating the "root" folder.
     * @return Box_Folders_CreateFolder_Inputs For method chaining.
     */
    public function setParentID($value)
    {
        return $this->set('ParentID', $value);
    }
}


/**
 * Execution object for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CreateFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder execution.
     * @param Box_Folders_CreateFolder $choreo The choreography object for this execution.
     * @param Box_Folders_CreateFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_CreateFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Folders_CreateFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFolder execution.
     *
     * @return Box_Folders_CreateFolder_Results New results object.
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
     * Wraps results in appropriate results class for this CreateFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Folders_CreateFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Folders_CreateFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CreateFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Folders_CreateFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFolder execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves comments for a specific discussion.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_GetComments extends Temboo_Choreography
{
    /**
     * Retrieves comments for a specific discussion.
     *
     * @param Temboo_Session $session The session that owns this GetComments Choreo.
     * @return Box_Discussions_GetComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Discussions/GetComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetComments Choreo.
     *
     * @param Box_Discussions_GetComments_Inputs|array $inputs (optional) Inputs as Box_Discussions_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Discussions_GetComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Discussions_GetComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Discussions_GetComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Discussions_GetComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_GetComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Discussions_GetComments_Inputs New instance.
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
     * @return Box_Discussions_GetComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Discussions_GetComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetComments Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Discussions_GetComments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the DiscussionID input for this GetComments Choreo.
     *
     * @param string $value (required, string) The id of the discussion to retrieve.
     * @return Box_Discussions_GetComments_Inputs For method chaining.
     */
    public function setDiscussionID($value)
    {
        return $this->set('DiscussionID', $value);
    }

    /**
     * Set the value for the Fields input for this GetComments Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Discussions_GetComments_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

}


/**
 * Execution object for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_GetComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetComments execution.
     * @param Box_Discussions_GetComments $choreo The choreography object for this execution.
     * @param Box_Discussions_GetComments_Inputs|array $inputs (optional) Inputs as Box_Discussions_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Discussions_GetComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Discussions_GetComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComments execution.
     *
     * @return Box_Discussions_GetComments_Results New results object.
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
     * @return Box_Discussions_GetComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Discussions_GetComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_GetComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Discussions_GetComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetComments execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new user in an enterprise.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_CreateUser extends Temboo_Choreography
{
    /**
     * Creates a new user in an enterprise.
     *
     * @param Temboo_Session $session The session that owns this CreateUser Choreo.
     * @return Box_Users_CreateUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Users/CreateUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateUser Choreo.
     *
     * @param Box_Users_CreateUser_Inputs|array $inputs (optional) Inputs as Box_Users_CreateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Users_CreateUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Users_CreateUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Users_CreateUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Users_CreateUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_CreateUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Users_CreateUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Users_CreateUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Users_CreateUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the UserObject input for this CreateUser Choreo.
     *
     * @param string $value (required, json) A JSON object representing the new user. See documentation for formatting examples.
     * @return Box_Users_CreateUser_Inputs For method chaining.
     */
    public function setUserObject($value)
    {
        return $this->set('UserObject', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateUser Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Users_CreateUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this CreateUser Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Users_CreateUser_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }
}


/**
 * Execution object for the CreateUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_CreateUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateUser execution.
     * @param Box_Users_CreateUser $choreo The choreography object for this execution.
     * @param Box_Users_CreateUser_Inputs|array $inputs (optional) Inputs as Box_Users_CreateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Users_CreateUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Users_CreateUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateUser execution.
     *
     * @return Box_Users_CreateUser_Results New results object.
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
     * Wraps results in appropriate results class for this CreateUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Users_CreateUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Users_CreateUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_CreateUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Users_CreateUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateUser execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a comment to a specific discussion.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_AddComment extends Temboo_Choreography
{
    /**
     * Adds a comment to a specific discussion.
     *
     * @param Temboo_Session $session The session that owns this AddComment Choreo.
     * @return Box_Discussions_AddComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Discussions/AddComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddComment Choreo.
     *
     * @param Box_Discussions_AddComment_Inputs|array $inputs (optional) Inputs as Box_Discussions_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Discussions_AddComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Discussions_AddComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Discussions_AddComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Discussions_AddComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_AddComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Discussions_AddComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Discussions_AddComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Discussions_AddComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddComment Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Discussions_AddComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the DiscussionID input for this AddComment Choreo.
     *
     * @param string $value (required, string) The id of the file that you want to view comments for.
     * @return Box_Discussions_AddComment_Inputs For method chaining.
     */
    public function setDiscussionID($value)
    {
        return $this->set('DiscussionID', $value);
    }

    /**
     * Set the value for the Fields input for this AddComment Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Discussions_AddComment_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Message input for this AddComment Choreo.
     *
     * @param string $value (required, string) The text of the comment to added to the discussion.
     * @return Box_Discussions_AddComment_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

}


/**
 * Execution object for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_AddComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddComment execution.
     * @param Box_Discussions_AddComment $choreo The choreography object for this execution.
     * @param Box_Discussions_AddComment_Inputs|array $inputs (optional) Inputs as Box_Discussions_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Discussions_AddComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Discussions_AddComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddComment execution.
     *
     * @return Box_Discussions_AddComment_Results New results object.
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
     * Wraps results in appropriate results class for this AddComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Discussions_AddComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Discussions_AddComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_AddComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Discussions_AddComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddComment execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a zipped version of the specified Box file and returns a link to the new compressed file.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_ZipFile extends Temboo_Choreography
{
    /**
     * Creates a zipped version of the specified Box file and returns a link to the new compressed file.
     *
     * @param Temboo_Session $session The session that owns this ZipFile Choreo.
     * @return Box_Files_ZipFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Files/ZipFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ZipFile Choreo.
     *
     * @param Box_Files_ZipFile_Inputs|array $inputs (optional) Inputs as Box_Files_ZipFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_ZipFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Files_ZipFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ZipFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_ZipFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Files_ZipFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ZipFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_ZipFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ZipFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_ZipFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ZipFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Files_ZipFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Files_ZipFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ZipFile Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Files_ZipFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the FileID input for this ZipFile Choreo.
     *
     * @param string $value (required, string) The id of the file to zip.
     * @return Box_Files_ZipFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

    /**
     * Set the value for the SharedLink input for this ZipFile Choreo.
     *
     * @param string $value (conditional, json) A JSON object  representing the item’s shared link and associated permissions. See documentation for formatting examples.
     * @return Box_Files_ZipFile_Inputs For method chaining.
     */
    public function setSharedLink($value)
    {
        return $this->set('SharedLink', $value);
    }

    /**
     * Set the value for the ZipFileLocation input for this ZipFile Choreo.
     *
     * @param string $value (conditional, string) The id of the folder to put the new zip file in. When not specified, the zip file will be put in the root folder.
     * @return Box_Files_ZipFile_Inputs For method chaining.
     */
    public function setZipFileLocation($value)
    {
        return $this->set('ZipFileLocation', $value);
    }

    /**
     * Set the value for the ZipFileName input for this ZipFile Choreo.
     *
     * @param string $value (required, string) The name of the zip file that will be created.
     * @return Box_Files_ZipFile_Inputs For method chaining.
     */
    public function setZipFileName($value)
    {
        return $this->set('ZipFileName', $value);
    }

}


/**
 * Execution object for the ZipFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_ZipFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ZipFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this ZipFile execution.
     * @param Box_Files_ZipFile $choreo The choreography object for this execution.
     * @param Box_Files_ZipFile_Inputs|array $inputs (optional) Inputs as Box_Files_ZipFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_ZipFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Files_ZipFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ZipFile execution.
     *
     * @return Box_Files_ZipFile_Results New results object.
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
     * Wraps results in appropriate results class for this ZipFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Files_ZipFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Files_ZipFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ZipFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_ZipFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ZipFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Files_ZipFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ZipFile execution.
     *
     * @return string (string) The response from Box. This contains the newly created zip file metadata.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URL" output from this ZipFile execution.
     *
     * @return string (string) The url for the newly created zip file.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
}

/**
 * Retrieves the message and metadata for a specific comment.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_GetComment extends Temboo_Choreography
{
    /**
     * Retrieves the message and metadata for a specific comment.
     *
     * @param Temboo_Session $session The session that owns this GetComment Choreo.
     * @return Box_Comments_GetComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Comments/GetComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetComment Choreo.
     *
     * @param Box_Comments_GetComment_Inputs|array $inputs (optional) Inputs as Box_Comments_GetComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Comments_GetComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Comments_GetComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Comments_GetComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Comments_GetComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_GetComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Comments_GetComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Comments_GetComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Comments_GetComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetComment Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Comments_GetComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CommentID input for this GetComment Choreo.
     *
     * @param string $value (required, string) The id of the comment to retrieve.
     * @return Box_Comments_GetComment_Inputs For method chaining.
     */
    public function setCommentID($value)
    {
        return $this->set('CommentID', $value);
    }

    /**
     * Set the value for the Fields input for this GetComment Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Comments_GetComment_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

}


/**
 * Execution object for the GetComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_GetComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetComment execution.
     * @param Box_Comments_GetComment $choreo The choreography object for this execution.
     * @param Box_Comments_GetComment_Inputs|array $inputs (optional) Inputs as Box_Comments_GetComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Comments_GetComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Comments_GetComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComment execution.
     *
     * @return Box_Comments_GetComment_Results New results object.
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
     * Wraps results in appropriate results class for this GetComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Comments_GetComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Comments_GetComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_GetComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Comments_GetComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetComment execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the contents of a specified file.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_DownloadFile extends Temboo_Choreography
{
    /**
     * Retrieves the contents of a specified file.
     *
     * @param Temboo_Session $session The session that owns this DownloadFile Choreo.
     * @return Box_Files_DownloadFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Files/DownloadFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DownloadFile Choreo.
     *
     * @param Box_Files_DownloadFile_Inputs|array $inputs (optional) Inputs as Box_Files_DownloadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_DownloadFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Files_DownloadFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DownloadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_DownloadFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Files_DownloadFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DownloadFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_DownloadFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DownloadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_DownloadFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DownloadFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Files_DownloadFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Files_DownloadFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DownloadFile Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Files_DownloadFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the FileID input for this DownloadFile Choreo.
     *
     * @param string $value (required, string) The id of the file to download.
     * @return Box_Files_DownloadFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

}


/**
 * Execution object for the DownloadFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_DownloadFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DownloadFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this DownloadFile execution.
     * @param Box_Files_DownloadFile $choreo The choreography object for this execution.
     * @param Box_Files_DownloadFile_Inputs|array $inputs (optional) Inputs as Box_Files_DownloadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_DownloadFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Files_DownloadFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DownloadFile execution.
     *
     * @return Box_Files_DownloadFile_Results New results object.
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
     * Wraps results in appropriate results class for this DownloadFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Files_DownloadFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Files_DownloadFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DownloadFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_DownloadFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DownloadFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Files_DownloadFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DownloadFile execution.
     *
     * @return string (string) The Base64 encoded contents of the downloaded file.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a specified folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_GetFolderInformation extends Temboo_Choreography
{
    /**
     * Retrieves information for a specified folder.
     *
     * @param Temboo_Session $session The session that owns this GetFolderInformation Choreo.
     * @return Box_Folders_GetFolderInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Folders/GetFolderInformation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFolderInformation Choreo.
     *
     * @param Box_Folders_GetFolderInformation_Inputs|array $inputs (optional) Inputs as Box_Folders_GetFolderInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_GetFolderInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Folders_GetFolderInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFolderInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_GetFolderInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Folders_GetFolderInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFolderInformation Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_GetFolderInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFolderInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_GetFolderInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFolderInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Folders_GetFolderInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Folders_GetFolderInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetFolderInformation Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Folders_GetFolderInformation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this GetFolderInformation Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Folders_GetFolderInformation_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FolderID input for this GetFolderInformation Choreo.
     *
     * @param string $value (conditional, string) The id of the folder that you want to retrieve information for. Defaults to 0 indicating the "root" folder.
     * @return Box_Folders_GetFolderInformation_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

}


/**
 * Execution object for the GetFolderInformation Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_GetFolderInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFolderInformation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFolderInformation execution.
     * @param Box_Folders_GetFolderInformation $choreo The choreography object for this execution.
     * @param Box_Folders_GetFolderInformation_Inputs|array $inputs (optional) Inputs as Box_Folders_GetFolderInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_GetFolderInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Folders_GetFolderInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFolderInformation execution.
     *
     * @return Box_Folders_GetFolderInformation_Results New results object.
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
     * Wraps results in appropriate results class for this GetFolderInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Folders_GetFolderInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Folders_GetFolderInformation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFolderInformation Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_GetFolderInformation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFolderInformation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Folders_GetFolderInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFolderInformation execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an existing collaboration.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_GetCollaboration extends Temboo_Choreography
{
    /**
     * Retrieves an existing collaboration.
     *
     * @param Temboo_Session $session The session that owns this GetCollaboration Choreo.
     * @return Box_Collaborations_GetCollaboration New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Collaborations/GetCollaboration/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCollaboration Choreo.
     *
     * @param Box_Collaborations_GetCollaboration_Inputs|array $inputs (optional) Inputs as Box_Collaborations_GetCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_GetCollaboration_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Collaborations_GetCollaboration_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCollaboration Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_GetCollaboration_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Collaborations_GetCollaboration_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_GetCollaboration_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCollaboration Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_GetCollaboration_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCollaboration input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Collaborations_GetCollaboration_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Collaborations_GetCollaboration_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCollaboration Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth process.
     * @return Box_Collaborations_GetCollaboration_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CollaborationID input for this GetCollaboration Choreo.
     *
     * @param string $value (required, string) The id of the collaboration to retrieve.
     * @return Box_Collaborations_GetCollaboration_Inputs For method chaining.
     */
    public function setCollaborationID($value)
    {
        return $this->set('CollaborationID', $value);
    }

    /**
     * Set the value for the Fields input for this GetCollaboration Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Collaborations_GetCollaboration_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

}


/**
 * Execution object for the GetCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_GetCollaboration_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCollaboration Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCollaboration execution.
     * @param Box_Collaborations_GetCollaboration $choreo The choreography object for this execution.
     * @param Box_Collaborations_GetCollaboration_Inputs|array $inputs (optional) Inputs as Box_Collaborations_GetCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_GetCollaboration_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Collaborations_GetCollaboration $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCollaboration execution.
     *
     * @return Box_Collaborations_GetCollaboration_Results New results object.
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
     * Wraps results in appropriate results class for this GetCollaboration execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Collaborations_GetCollaboration_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Collaborations_GetCollaboration_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_GetCollaboration_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCollaboration Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Collaborations_GetCollaboration_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCollaboration execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the metadata for a specific discussion.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_GetDiscussion extends Temboo_Choreography
{
    /**
     * Retrieves the metadata for a specific discussion.
     *
     * @param Temboo_Session $session The session that owns this GetDiscussion Choreo.
     * @return Box_Discussions_GetDiscussion New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Discussions/GetDiscussion/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDiscussion Choreo.
     *
     * @param Box_Discussions_GetDiscussion_Inputs|array $inputs (optional) Inputs as Box_Discussions_GetDiscussion_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Discussions_GetDiscussion_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Discussions_GetDiscussion_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDiscussion Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Discussions_GetDiscussion_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Discussions_GetDiscussion_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDiscussion Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_GetDiscussion_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDiscussion Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Discussions_GetDiscussion_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDiscussion input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Discussions_GetDiscussion_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Discussions_GetDiscussion_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetDiscussion Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Discussions_GetDiscussion_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the DiscussionID input for this GetDiscussion Choreo.
     *
     * @param string $value (required, string) The id of the discussion to retrieve.
     * @return Box_Discussions_GetDiscussion_Inputs For method chaining.
     */
    public function setDiscussionID($value)
    {
        return $this->set('DiscussionID', $value);
    }

    /**
     * Set the value for the Fields input for this GetDiscussion Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Discussions_GetDiscussion_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

}


/**
 * Execution object for the GetDiscussion Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_GetDiscussion_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDiscussion Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDiscussion execution.
     * @param Box_Discussions_GetDiscussion $choreo The choreography object for this execution.
     * @param Box_Discussions_GetDiscussion_Inputs|array $inputs (optional) Inputs as Box_Discussions_GetDiscussion_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Discussions_GetDiscussion_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Discussions_GetDiscussion $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDiscussion execution.
     *
     * @return Box_Discussions_GetDiscussion_Results New results object.
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
     * Wraps results in appropriate results class for this GetDiscussion execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Discussions_GetDiscussion_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Discussions_GetDiscussion_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDiscussion Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_GetDiscussion_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDiscussion Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Discussions_GetDiscussion_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDiscussion execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_DeleteFolder extends Temboo_Choreography
{
    /**
     * Deletes a specified folder.
     *
     * @param Temboo_Session $session The session that owns this DeleteFolder Choreo.
     * @return Box_Folders_DeleteFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Folders/DeleteFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFolder Choreo.
     *
     * @param Box_Folders_DeleteFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_DeleteFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_DeleteFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Folders_DeleteFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_DeleteFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Folders_DeleteFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_DeleteFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_DeleteFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Folders_DeleteFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Folders_DeleteFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFolder Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Folders_DeleteFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the FolderID input for this DeleteFolder Choreo.
     *
     * @param string $value (required, string) The id of the folder that you want to delete.
     * @return Box_Folders_DeleteFolder_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

    /**
     * Set the value for the Recursive input for this DeleteFolder Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to delete this folder if it has items within in. Defaults to true.
     * @return Box_Folders_DeleteFolder_Inputs For method chaining.
     */
    public function setRecursive($value)
    {
        return $this->set('Recursive', $value);
    }

}


/**
 * Execution object for the DeleteFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_DeleteFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFolder execution.
     * @param Box_Folders_DeleteFolder $choreo The choreography object for this execution.
     * @param Box_Folders_DeleteFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_DeleteFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_DeleteFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Folders_DeleteFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFolder execution.
     *
     * @return Box_Folders_DeleteFolder_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Folders_DeleteFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Folders_DeleteFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_DeleteFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Folders_DeleteFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFolder execution.
     *
     * @return string (json) The response from Box.
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
 * @subpackage Box
 */
class Box_Users_UpdateUser extends Temboo_Choreography
{
    /**
     * Updates information for an existing user.
     *
     * @param Temboo_Session $session The session that owns this UpdateUser Choreo.
     * @return Box_Users_UpdateUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Users/UpdateUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateUser Choreo.
     *
     * @param Box_Users_UpdateUser_Inputs|array $inputs (optional) Inputs as Box_Users_UpdateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Users_UpdateUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Users_UpdateUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Users_UpdateUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Users_UpdateUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_UpdateUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Users_UpdateUser_Inputs New instance.
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
     * @return Box_Users_UpdateUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Users_UpdateUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the UserObject input for this UpdateUser Choreo.
     *
     * @param string $value (required, json) A JSON object representing the user's information that should be updated. See documentation for formatting examples.
     * @return Box_Users_UpdateUser_Inputs For method chaining.
     */
    public function setUserObject($value)
    {
        return $this->set('UserObject', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateUser Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Users_UpdateUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this UpdateUser Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Users_UpdateUser_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the UserID input for this UpdateUser Choreo.
     *
     * @param string $value (required, string) The id of the user whose information should be updated.
     * @return Box_Users_UpdateUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_UpdateUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateUser execution.
     * @param Box_Users_UpdateUser $choreo The choreography object for this execution.
     * @param Box_Users_UpdateUser_Inputs|array $inputs (optional) Inputs as Box_Users_UpdateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Users_UpdateUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Users_UpdateUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateUser execution.
     *
     * @return Box_Users_UpdateUser_Results New results object.
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
     * @return Box_Users_UpdateUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Users_UpdateUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_UpdateUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Users_UpdateUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateUser execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Box access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Box access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Box_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Box_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Box_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Box_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Box_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Box_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Box_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Box_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Box after registering your application.
     * @return Box_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Box after registering your application.
     * @return Box_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Box_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Box
 */
class Box_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Box_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Box_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Box_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Box_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Box_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The access token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "Expires" output from this FinalizeOAuth execution.
     *
     * @return int (integer) The expiration time of the access_token retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "RefreshToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) A token that may be used to obtain a new access token when the short-lived access token expires.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRefreshToken()
    {
        return $this->get('RefreshToken');
    }
}

/**
 * Deletes a specified user.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_DeleteUser extends Temboo_Choreography
{
    /**
     * Deletes a specified user.
     *
     * @param Temboo_Session $session The session that owns this DeleteUser Choreo.
     * @return Box_Users_DeleteUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Users/DeleteUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteUser Choreo.
     *
     * @param Box_Users_DeleteUser_Inputs|array $inputs (optional) Inputs as Box_Users_DeleteUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Users_DeleteUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Users_DeleteUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Users_DeleteUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Users_DeleteUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_DeleteUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Users_DeleteUser_Inputs New instance.
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
     * @return Box_Users_DeleteUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Users_DeleteUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteUser Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Users_DeleteUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Force input for this DeleteUser Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not the user should be deleted even when they still own files.
     * @return Box_Users_DeleteUser_Inputs For method chaining.
     */
    public function setForce($value)
    {
        return $this->set('Force', $value);
    }

    /**
     * Set the value for the Notify input for this DeleteUser Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the user should receive an email notification of the transfer.
     * @return Box_Users_DeleteUser_Inputs For method chaining.
     */
    public function setNotify($value)
    {
        return $this->set('Notify', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteUser Choreo.
     *
     * @param string $value (required, string) The id of the user whose information should be updated.
     * @return Box_Users_DeleteUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_DeleteUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteUser execution.
     * @param Box_Users_DeleteUser $choreo The choreography object for this execution.
     * @param Box_Users_DeleteUser_Inputs|array $inputs (optional) Inputs as Box_Users_DeleteUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Users_DeleteUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Users_DeleteUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteUser execution.
     *
     * @return Box_Users_DeleteUser_Results New results object.
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
     * @return Box_Users_DeleteUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Users_DeleteUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_DeleteUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Users_DeleteUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteUser execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Moves a file to the trash.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_DeleteFile extends Temboo_Choreography
{
    /**
     * Moves a file to the trash.
     *
     * @param Temboo_Session $session The session that owns this DeleteFile Choreo.
     * @return Box_Files_DeleteFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Files/DeleteFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFile Choreo.
     *
     * @param Box_Files_DeleteFile_Inputs|array $inputs (optional) Inputs as Box_Files_DeleteFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_DeleteFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Files_DeleteFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_DeleteFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Files_DeleteFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_DeleteFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_DeleteFile_Inputs New instance.
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
     * @return Box_Files_DeleteFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Files_DeleteFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFile Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Files_DeleteFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the FileID input for this DeleteFile Choreo.
     *
     * @param string $value (required, string) The id of the file that you want to delete.
     * @return Box_Files_DeleteFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

}


/**
 * Execution object for the DeleteFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_DeleteFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFile execution.
     * @param Box_Files_DeleteFile $choreo The choreography object for this execution.
     * @param Box_Files_DeleteFile_Inputs|array $inputs (optional) Inputs as Box_Files_DeleteFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_DeleteFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Files_DeleteFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFile execution.
     *
     * @return Box_Files_DeleteFile_Results New results object.
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
     * @return Box_Files_DeleteFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Files_DeleteFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_DeleteFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Files_DeleteFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFile execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a copy of a folder in another folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CopyFolder extends Temboo_Choreography
{
    /**
     * Creates a copy of a folder in another folder.
     *
     * @param Temboo_Session $session The session that owns this CopyFolder Choreo.
     * @return Box_Folders_CopyFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Folders/CopyFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CopyFolder Choreo.
     *
     * @param Box_Folders_CopyFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_CopyFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_CopyFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Folders_CopyFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CopyFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_CopyFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Folders_CopyFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CopyFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CopyFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CopyFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_CopyFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CopyFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Folders_CopyFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Folders_CopyFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CopyFolder Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Folders_CopyFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this CopyFolder Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Folders_CopyFolder_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FolderID input for this CopyFolder Choreo.
     *
     * @param string $value (required, string) The id of the folder to copy.
     * @return Box_Folders_CopyFolder_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

    /**
     * Set the value for the Name input for this CopyFolder Choreo.
     *
     * @param string $value (required, string) An optional new name for the folder.
     * @return Box_Folders_CopyFolder_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ParentID input for this CopyFolder Choreo.
     *
     * @param string $value (required, string) The ID of the destination folder to copy the folder to.
     * @return Box_Folders_CopyFolder_Inputs For method chaining.
     */
    public function setParentID($value)
    {
        return $this->set('ParentID', $value);
    }
}


/**
 * Execution object for the CopyFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CopyFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CopyFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this CopyFolder execution.
     * @param Box_Folders_CopyFolder $choreo The choreography object for this execution.
     * @param Box_Folders_CopyFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_CopyFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_CopyFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Folders_CopyFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CopyFolder execution.
     *
     * @return Box_Folders_CopyFolder_Results New results object.
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
     * Wraps results in appropriate results class for this CopyFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Folders_CopyFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Folders_CopyFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CopyFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CopyFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CopyFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Folders_CopyFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CopyFolder execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new discussion for a particular folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_CreateDiscussion extends Temboo_Choreography
{
    /**
     * Creates a new discussion for a particular folder.
     *
     * @param Temboo_Session $session The session that owns this CreateDiscussion Choreo.
     * @return Box_Discussions_CreateDiscussion New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Discussions/CreateDiscussion/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateDiscussion Choreo.
     *
     * @param Box_Discussions_CreateDiscussion_Inputs|array $inputs (optional) Inputs as Box_Discussions_CreateDiscussion_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Discussions_CreateDiscussion_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Discussions_CreateDiscussion_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateDiscussion Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Discussions_CreateDiscussion_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Discussions_CreateDiscussion_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateDiscussion Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_CreateDiscussion_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateDiscussion Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Discussions_CreateDiscussion_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateDiscussion input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Discussions_CreateDiscussion_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Discussions_CreateDiscussion_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateDiscussion Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Discussions_CreateDiscussion_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Description input for this CreateDiscussion Choreo.
     *
     * @param string $value (optional, string) The description of the discussion.
     * @return Box_Discussions_CreateDiscussion_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Fields input for this CreateDiscussion Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Discussions_CreateDiscussion_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FolderID input for this CreateDiscussion Choreo.
     *
     * @param string $value (required, string) The id of the folder to create a discussion for.
     * @return Box_Discussions_CreateDiscussion_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

    /**
     * Set the value for the Name input for this CreateDiscussion Choreo.
     *
     * @param string $value (required, string) The name of the discussion.
     * @return Box_Discussions_CreateDiscussion_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

}


/**
 * Execution object for the CreateDiscussion Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_CreateDiscussion_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateDiscussion Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateDiscussion execution.
     * @param Box_Discussions_CreateDiscussion $choreo The choreography object for this execution.
     * @param Box_Discussions_CreateDiscussion_Inputs|array $inputs (optional) Inputs as Box_Discussions_CreateDiscussion_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Discussions_CreateDiscussion_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Discussions_CreateDiscussion $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateDiscussion execution.
     *
     * @return Box_Discussions_CreateDiscussion_Results New results object.
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
     * Wraps results in appropriate results class for this CreateDiscussion execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Discussions_CreateDiscussion_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Discussions_CreateDiscussion_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateDiscussion Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Discussions_CreateDiscussion_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateDiscussion Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Discussions_CreateDiscussion_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateDiscussion execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Edits an existing collaboration.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_UpdateCollaboration extends Temboo_Choreography
{
    /**
     * Edits an existing collaboration.
     *
     * @param Temboo_Session $session The session that owns this UpdateCollaboration Choreo.
     * @return Box_Collaborations_UpdateCollaboration New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Collaborations/UpdateCollaboration/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateCollaboration Choreo.
     *
     * @param Box_Collaborations_UpdateCollaboration_Inputs|array $inputs (optional) Inputs as Box_Collaborations_UpdateCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_UpdateCollaboration_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Collaborations_UpdateCollaboration_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateCollaboration Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_UpdateCollaboration_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Collaborations_UpdateCollaboration_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_UpdateCollaboration_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateCollaboration Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_UpdateCollaboration_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateCollaboration input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Collaborations_UpdateCollaboration_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Collaborations_UpdateCollaboration_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UpdateCollaboration Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Collaborations_UpdateCollaboration_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CollaborationID input for this UpdateCollaboration Choreo.
     *
     * @param string $value (required, string) The id of the collaboration to edit.
     * @return Box_Collaborations_UpdateCollaboration_Inputs For method chaining.
     */
    public function setCollaborationID($value)
    {
        return $this->set('CollaborationID', $value);
    }

    /**
     * Set the value for the Fields input for this UpdateCollaboration Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Collaborations_UpdateCollaboration_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Role input for this UpdateCollaboration Choreo.
     *
     * @param string $value (conditional, string) The access level of the collaboration. Valid values are "viewer" or "editor". Defaults to "viewer". This value can only be updated by the owner of the folder.
     * @return Box_Collaborations_UpdateCollaboration_Inputs For method chaining.
     */
    public function setRole($value)
    {
        return $this->set('Role', $value);
    }

    /**
     * Set the value for the Status input for this UpdateCollaboration Choreo.
     *
     * @param string $value (conditional, string) Whether this collaboration has been accepted. Valid values are: "accepted" or "rejected". This value can only be updated by the user who has been invited to the collaboration.
     * @return Box_Collaborations_UpdateCollaboration_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }

}


/**
 * Execution object for the UpdateCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_UpdateCollaboration_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateCollaboration Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateCollaboration execution.
     * @param Box_Collaborations_UpdateCollaboration $choreo The choreography object for this execution.
     * @param Box_Collaborations_UpdateCollaboration_Inputs|array $inputs (optional) Inputs as Box_Collaborations_UpdateCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_UpdateCollaboration_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Collaborations_UpdateCollaboration $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateCollaboration execution.
     *
     * @return Box_Collaborations_UpdateCollaboration_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateCollaboration execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Collaborations_UpdateCollaboration_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Collaborations_UpdateCollaboration_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_UpdateCollaboration_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateCollaboration Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Collaborations_UpdateCollaboration_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateCollaboration execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves comments for a specified file.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_GetComments extends Temboo_Choreography
{
    /**
     * Retrieves comments for a specified file.
     *
     * @param Temboo_Session $session The session that owns this GetComments Choreo.
     * @return Box_Files_GetComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Files/GetComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetComments Choreo.
     *
     * @param Box_Files_GetComments_Inputs|array $inputs (optional) Inputs as Box_Files_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_GetComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Files_GetComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_GetComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Files_GetComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_GetComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_GetComments_Inputs New instance.
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
     * @return Box_Files_GetComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Files_GetComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetComments Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Files_GetComments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this GetComments Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Files_GetComments_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FileID input for this GetComments Choreo.
     *
     * @param string $value (required, string) The id of the file that you want to view comments for.
     * @return Box_Files_GetComments_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

}


/**
 * Execution object for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_GetComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetComments execution.
     * @param Box_Files_GetComments $choreo The choreography object for this execution.
     * @param Box_Files_GetComments_Inputs|array $inputs (optional) Inputs as Box_Files_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_GetComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Files_GetComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComments execution.
     *
     * @return Box_Files_GetComments_Results New results object.
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
     * @return Box_Files_GetComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Files_GetComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_GetComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Files_GetComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetComments execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing comment.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_UpdateComment extends Temboo_Choreography
{
    /**
     * Updates an existing comment.
     *
     * @param Temboo_Session $session The session that owns this UpdateComment Choreo.
     * @return Box_Comments_UpdateComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Comments/UpdateComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateComment Choreo.
     *
     * @param Box_Comments_UpdateComment_Inputs|array $inputs (optional) Inputs as Box_Comments_UpdateComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Comments_UpdateComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Comments_UpdateComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Comments_UpdateComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Comments_UpdateComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_UpdateComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Comments_UpdateComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Comments_UpdateComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Comments_UpdateComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UpdateComment Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Comments_UpdateComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CommentID input for this UpdateComment Choreo.
     *
     * @param string $value (required, string) The id of the comment to update.
     * @return Box_Comments_UpdateComment_Inputs For method chaining.
     */
    public function setCommentID($value)
    {
        return $this->set('CommentID', $value);
    }

    /**
     * Set the value for the Fields input for this UpdateComment Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Comments_UpdateComment_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Message input for this UpdateComment Choreo.
     *
     * @param string $value (required, string) The text of the comment to be posted.
     * @return Box_Comments_UpdateComment_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

}


/**
 * Execution object for the UpdateComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_UpdateComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateComment execution.
     * @param Box_Comments_UpdateComment $choreo The choreography object for this execution.
     * @param Box_Comments_UpdateComment_Inputs|array $inputs (optional) Inputs as Box_Comments_UpdateComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Comments_UpdateComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Comments_UpdateComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateComment execution.
     *
     * @return Box_Comments_UpdateComment_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Comments_UpdateComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Comments_UpdateComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_UpdateComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Comments_UpdateComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateComment execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates the information about a folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_UpdateFolder extends Temboo_Choreography
{
    /**
     * Updates the information about a folder.
     *
     * @param Temboo_Session $session The session that owns this UpdateFolder Choreo.
     * @return Box_Folders_UpdateFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Folders/UpdateFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateFolder Choreo.
     *
     * @param Box_Folders_UpdateFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_UpdateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_UpdateFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Folders_UpdateFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_UpdateFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Folders_UpdateFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_UpdateFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_UpdateFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Folders_UpdateFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Folders_UpdateFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FolderObject input for this UpdateFolder Choreo.
     *
     * @param string $value (required, json) A JSON object representing the new folder information. See documentation for formatting examples.
     * @return Box_Folders_UpdateFolder_Inputs For method chaining.
     */
    public function setFolderObject($value)
    {
        return $this->set('FolderObject', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateFolder Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Folders_UpdateFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this UpdateFolder Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Folders_UpdateFolder_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FolderID input for this UpdateFolder Choreo.
     *
     * @param string $value (required, string) The id of the folder to update.
     * @return Box_Folders_UpdateFolder_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }
}


/**
 * Execution object for the UpdateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_UpdateFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateFolder execution.
     * @param Box_Folders_UpdateFolder $choreo The choreography object for this execution.
     * @param Box_Folders_UpdateFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_UpdateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_UpdateFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Folders_UpdateFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateFolder execution.
     *
     * @return Box_Folders_UpdateFolder_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Folders_UpdateFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Folders_UpdateFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_UpdateFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Folders_UpdateFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateFolder execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a specified file.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_GetFileInformation extends Temboo_Choreography
{
    /**
     * Retrieves information for a specified file.
     *
     * @param Temboo_Session $session The session that owns this GetFileInformation Choreo.
     * @return Box_Files_GetFileInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Files/GetFileInformation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFileInformation Choreo.
     *
     * @param Box_Files_GetFileInformation_Inputs|array $inputs (optional) Inputs as Box_Files_GetFileInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_GetFileInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Files_GetFileInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFileInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_GetFileInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Files_GetFileInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFileInformation Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_GetFileInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFileInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_GetFileInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFileInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Files_GetFileInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Files_GetFileInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetFileInformation Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Files_GetFileInformation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this GetFileInformation Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Files_GetFileInformation_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FileID input for this GetFileInformation Choreo.
     *
     * @param string $value (required, string) The id of the file that you want to retrieve information for.
     * @return Box_Files_GetFileInformation_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

}


/**
 * Execution object for the GetFileInformation Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_GetFileInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFileInformation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFileInformation execution.
     * @param Box_Files_GetFileInformation $choreo The choreography object for this execution.
     * @param Box_Files_GetFileInformation_Inputs|array $inputs (optional) Inputs as Box_Files_GetFileInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_GetFileInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Files_GetFileInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFileInformation execution.
     *
     * @return Box_Files_GetFileInformation_Results New results object.
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
     * Wraps results in appropriate results class for this GetFileInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Files_GetFileInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Files_GetFileInformation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFileInformation Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_GetFileInformation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFileInformation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Files_GetFileInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFileInformation execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a shared link for a particular folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CreateSharedLink extends Temboo_Choreography
{
    /**
     * Creates a shared link for a particular folder.
     *
     * @param Temboo_Session $session The session that owns this CreateSharedLink Choreo.
     * @return Box_Folders_CreateSharedLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Folders/CreateSharedLink/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateSharedLink Choreo.
     *
     * @param Box_Folders_CreateSharedLink_Inputs|array $inputs (optional) Inputs as Box_Folders_CreateSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_CreateSharedLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Folders_CreateSharedLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_CreateSharedLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Folders_CreateSharedLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CreateSharedLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_CreateSharedLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateSharedLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Folders_CreateSharedLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Folders_CreateSharedLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the SharedLink input for this CreateSharedLink Choreo.
     *
     * @param string $value (required, json) A JSON object  representing the item’s shared link and associated permissions. See documentation for formatting examples.
     * @return Box_Folders_CreateSharedLink_Inputs For method chaining.
     */
    public function setSharedLink($value)
    {
        return $this->set('SharedLink', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateSharedLink Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Folders_CreateSharedLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this CreateSharedLink Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Folders_CreateSharedLink_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FolderID input for this CreateSharedLink Choreo.
     *
     * @param string $value (required, string) The id of the folder to get a shared link for.
     * @return Box_Folders_CreateSharedLink_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }
}


/**
 * Execution object for the CreateSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CreateSharedLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateSharedLink Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateSharedLink execution.
     * @param Box_Folders_CreateSharedLink $choreo The choreography object for this execution.
     * @param Box_Folders_CreateSharedLink_Inputs|array $inputs (optional) Inputs as Box_Folders_CreateSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_CreateSharedLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Folders_CreateSharedLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateSharedLink execution.
     *
     * @return Box_Folders_CreateSharedLink_Results New results object.
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
     * Wraps results in appropriate results class for this CreateSharedLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Folders_CreateSharedLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Folders_CreateSharedLink_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_CreateSharedLink_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateSharedLink Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Folders_CreateSharedLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateSharedLink execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a copy of a file in another folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_CopyFile extends Temboo_Choreography
{
    /**
     * Creates a copy of a file in another folder.
     *
     * @param Temboo_Session $session The session that owns this CopyFile Choreo.
     * @return Box_Files_CopyFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Files/CopyFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CopyFile Choreo.
     *
     * @param Box_Files_CopyFile_Inputs|array $inputs (optional) Inputs as Box_Files_CopyFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_CopyFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Files_CopyFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CopyFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_CopyFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Files_CopyFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CopyFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_CopyFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CopyFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_CopyFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CopyFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Files_CopyFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Files_CopyFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CopyFile Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Files_CopyFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this CopyFile Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Files_CopyFile_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FileID input for this CopyFile Choreo.
     *
     * @param string $value (required, string) The id of the file to copy.
     * @return Box_Files_CopyFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

    /**
     * Set the value for the Name input for this CopyFile Choreo.
     *
     * @param string $value (required, string) An optional new name for the file.
     * @return Box_Files_CopyFile_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ParentID input for this CopyFile Choreo.
     *
     * @param string $value (required, string) The ID of the destination folder to copy the file into.
     * @return Box_Files_CopyFile_Inputs For method chaining.
     */
    public function setParentID($value)
    {
        return $this->set('ParentID', $value);
    }
}


/**
 * Execution object for the CopyFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_CopyFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CopyFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this CopyFile execution.
     * @param Box_Files_CopyFile $choreo The choreography object for this execution.
     * @param Box_Files_CopyFile_Inputs|array $inputs (optional) Inputs as Box_Files_CopyFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_CopyFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Files_CopyFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CopyFile execution.
     *
     * @return Box_Files_CopyFile_Results New results object.
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
     * Wraps results in appropriate results class for this CopyFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Files_CopyFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Files_CopyFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CopyFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_CopyFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CopyFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Files_CopyFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CopyFile execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads a new file to a user's account. This can also be used when updating the contents of an existing file.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_UploadFile extends Temboo_Choreography
{
    /**
     * Uploads a new file to a user's account. This can also be used when updating the contents of an existing file.
     *
     * @param Temboo_Session $session The session that owns this UploadFile Choreo.
     * @return Box_Files_UploadFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Files/UploadFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadFile Choreo.
     *
     * @param Box_Files_UploadFile_Inputs|array $inputs (optional) Inputs as Box_Files_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_UploadFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Files_UploadFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_UploadFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Files_UploadFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_UploadFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_UploadFile_Inputs New instance.
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
     * @return Box_Files_UploadFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Files_UploadFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this UploadFile Choreo.
     *
     * @param string $value (conditional, string) The Base64 encoded contents of the file you want to upload.
     * @return Box_Files_UploadFile_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the AccessToken input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Files_UploadFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the FileID input for this UploadFile Choreo.
     *
     * @param string $value (optional, string) When providing the id of an existing file, the content of the file will be updated.
     * @return Box_Files_UploadFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

    /**
     * Set the value for the FileName input for this UploadFile Choreo.
     *
     * @param string $value (conditional, string) The name of the new file to upload. Note that when providing the FileID in order to perform an update to a file, it is not necessary to provide the FileName.
     * @return Box_Files_UploadFile_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the FolderID input for this UploadFile Choreo.
     *
     * @param string $value (optional, string) The ID of the target folder to upload the file to. Defaults to 0 indicating the root folder.
     * @return Box_Files_UploadFile_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

}


/**
 * Execution object for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_UploadFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadFile execution.
     * @param Box_Files_UploadFile $choreo The choreography object for this execution.
     * @param Box_Files_UploadFile_Inputs|array $inputs (optional) Inputs as Box_Files_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_UploadFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Files_UploadFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadFile execution.
     *
     * @return Box_Files_UploadFile_Results New results object.
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
     * @return Box_Files_UploadFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Files_UploadFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_UploadFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Files_UploadFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UploadFile execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a zip file containing all files within the specified folder and returns a link to the new compressed file.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_ZipFolder extends Temboo_Choreography
{
    /**
     * Creates a zip file containing all files within the specified folder and returns a link to the new compressed file.
     *
     * @param Temboo_Session $session The session that owns this ZipFolder Choreo.
     * @return Box_Folders_ZipFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Folders/ZipFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ZipFolder Choreo.
     *
     * @param Box_Folders_ZipFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_ZipFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_ZipFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Folders_ZipFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ZipFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_ZipFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Folders_ZipFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ZipFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_ZipFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ZipFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_ZipFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ZipFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Folders_ZipFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Folders_ZipFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ZipFolder Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Folders_ZipFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the FolderID input for this ZipFolder Choreo.
     *
     * @param string $value (conditional, string) The id of the folder that you want to retrieve items for to zip. To indicate the root folder, specify 0.
     * @return Box_Folders_ZipFolder_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

    /**
     * Set the value for the SharedLink input for this ZipFolder Choreo.
     *
     * @param string $value (conditional, json) A JSON object  representing the item’s shared link and associated permissions. See documentation for formatting examples.
     * @return Box_Folders_ZipFolder_Inputs For method chaining.
     */
    public function setSharedLink($value)
    {
        return $this->set('SharedLink', $value);
    }

    /**
     * Set the value for the ZipFileLocation input for this ZipFolder Choreo.
     *
     * @param string $value (optional, string) The id of the folder to put the new zip file in. When not specified, the zip file will be put in the root folder.
     * @return Box_Folders_ZipFolder_Inputs For method chaining.
     */
    public function setZipFileLocation($value)
    {
        return $this->set('ZipFileLocation', $value);
    }

    /**
     * Set the value for the ZipFileName input for this ZipFolder Choreo.
     *
     * @param string $value (required, string) The name of the zip file that will be created.
     * @return Box_Folders_ZipFolder_Inputs For method chaining.
     */
    public function setZipFileName($value)
    {
        return $this->set('ZipFileName', $value);
    }

}


/**
 * Execution object for the ZipFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_ZipFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ZipFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this ZipFolder execution.
     * @param Box_Folders_ZipFolder $choreo The choreography object for this execution.
     * @param Box_Folders_ZipFolder_Inputs|array $inputs (optional) Inputs as Box_Folders_ZipFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_ZipFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Folders_ZipFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ZipFolder execution.
     *
     * @return Box_Folders_ZipFolder_Results New results object.
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
     * Wraps results in appropriate results class for this ZipFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Folders_ZipFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Folders_ZipFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ZipFolder Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_ZipFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ZipFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Folders_ZipFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ZipFolder execution.
     *
     * @return string (json) The response from Box. This contains the newly created zip file metadata.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URL" output from this ZipFolder execution.
     *
     * @return string (string) The url for the newly created zip file.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
}

/**
 * Adds a comment to a specific file.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_AddComment extends Temboo_Choreography
{
    /**
     * Adds a comment to a specific file.
     *
     * @param Temboo_Session $session The session that owns this AddComment Choreo.
     * @return Box_Comments_AddComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Comments/AddComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddComment Choreo.
     *
     * @param Box_Comments_AddComment_Inputs|array $inputs (optional) Inputs as Box_Comments_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Comments_AddComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Comments_AddComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Comments_AddComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Comments_AddComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_AddComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Comments_AddComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Comments_AddComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Comments_AddComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddComment Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Comments_AddComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this AddComment Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Comments_AddComment_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FileID input for this AddComment Choreo.
     *
     * @param string $value (required, string) The id of the file that you want to view comments for.
     * @return Box_Comments_AddComment_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

    /**
     * Set the value for the Message input for this AddComment Choreo.
     *
     * @param string $value (required, string) The text of the comment to be posted.
     * @return Box_Comments_AddComment_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

}


/**
 * Execution object for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_AddComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddComment execution.
     * @param Box_Comments_AddComment $choreo The choreography object for this execution.
     * @param Box_Comments_AddComment_Inputs|array $inputs (optional) Inputs as Box_Comments_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Comments_AddComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Comments_AddComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddComment execution.
     *
     * @return Box_Comments_AddComment_Results New results object.
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
     * Wraps results in appropriate results class for this AddComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Comments_AddComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Comments_AddComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Comments_AddComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Comments_AddComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddComment execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about the authenticated user.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_GetCurrentUser extends Temboo_Choreography
{
    /**
     * Retrieves information about the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this GetCurrentUser Choreo.
     * @return Box_Users_GetCurrentUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Users/GetCurrentUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCurrentUser Choreo.
     *
     * @param Box_Users_GetCurrentUser_Inputs|array $inputs (optional) Inputs as Box_Users_GetCurrentUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Users_GetCurrentUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Users_GetCurrentUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCurrentUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Users_GetCurrentUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Users_GetCurrentUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCurrentUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_GetCurrentUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCurrentUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Users_GetCurrentUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCurrentUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Users_GetCurrentUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Users_GetCurrentUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCurrentUser Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Users_GetCurrentUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this GetCurrentUser Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Users_GetCurrentUser_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

}


/**
 * Execution object for the GetCurrentUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_GetCurrentUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCurrentUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCurrentUser execution.
     * @param Box_Users_GetCurrentUser $choreo The choreography object for this execution.
     * @param Box_Users_GetCurrentUser_Inputs|array $inputs (optional) Inputs as Box_Users_GetCurrentUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Users_GetCurrentUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Users_GetCurrentUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCurrentUser execution.
     *
     * @return Box_Users_GetCurrentUser_Results New results object.
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
     * Wraps results in appropriate results class for this GetCurrentUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Users_GetCurrentUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Users_GetCurrentUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCurrentUser Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Users_GetCurrentUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCurrentUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Users_GetCurrentUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCurrentUser execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all pending collaboration invites for a user.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_GetPendingCollaborations extends Temboo_Choreography
{
    /**
     * Retrieves all pending collaboration invites for a user.
     *
     * @param Temboo_Session $session The session that owns this GetPendingCollaborations Choreo.
     * @return Box_Collaborations_GetPendingCollaborations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Collaborations/GetPendingCollaborations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPendingCollaborations Choreo.
     *
     * @param Box_Collaborations_GetPendingCollaborations_Inputs|array $inputs (optional) Inputs as Box_Collaborations_GetPendingCollaborations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_GetPendingCollaborations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Collaborations_GetPendingCollaborations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPendingCollaborations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_GetPendingCollaborations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Collaborations_GetPendingCollaborations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPendingCollaborations Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_GetPendingCollaborations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPendingCollaborations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_GetPendingCollaborations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPendingCollaborations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Collaborations_GetPendingCollaborations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Collaborations_GetPendingCollaborations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetPendingCollaborations Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Collaborations_GetPendingCollaborations_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this GetPendingCollaborations Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Collaborations_GetPendingCollaborations_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

}


/**
 * Execution object for the GetPendingCollaborations Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_GetPendingCollaborations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPendingCollaborations Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPendingCollaborations execution.
     * @param Box_Collaborations_GetPendingCollaborations $choreo The choreography object for this execution.
     * @param Box_Collaborations_GetPendingCollaborations_Inputs|array $inputs (optional) Inputs as Box_Collaborations_GetPendingCollaborations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_GetPendingCollaborations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Collaborations_GetPendingCollaborations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPendingCollaborations execution.
     *
     * @return Box_Collaborations_GetPendingCollaborations_Results New results object.
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
     * Wraps results in appropriate results class for this GetPendingCollaborations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Collaborations_GetPendingCollaborations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Collaborations_GetPendingCollaborations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPendingCollaborations Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_GetPendingCollaborations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPendingCollaborations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Collaborations_GetPendingCollaborations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPendingCollaborations execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates a new access token with a given valid refresh token.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_OAuth_RefreshToken extends Temboo_Choreography
{
    /**
     * Generates a new access token with a given valid refresh token.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken Choreo.
     * @return Box_OAuth_RefreshToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/OAuth/RefreshToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RefreshToken Choreo.
     *
     * @param Box_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as Box_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_OAuth_RefreshToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_OAuth_RefreshToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_OAuth_RefreshToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_OAuth_RefreshToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_OAuth_RefreshToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_OAuth_RefreshToken_Inputs New instance.
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
     * @return Box_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Box after registering your application.
     * @return Box_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Box after registering your application.
     * @return Box_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the RefreshToken input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) A valid refresh token used to generate a new access token.
     * @return Box_OAuth_RefreshToken_Inputs For method chaining.
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
 * @subpackage Box
 */
class Box_OAuth_RefreshToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefreshToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken execution.
     * @param Box_OAuth_RefreshToken $choreo The choreography object for this execution.
     * @param Box_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as Box_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_OAuth_RefreshToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_OAuth_RefreshToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefreshToken execution.
     *
     * @return Box_OAuth_RefreshToken_Results New results object.
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
     * @return Box_OAuth_RefreshToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_OAuth_RefreshToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_OAuth_RefreshToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RefreshToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_OAuth_RefreshToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this RefreshToken execution.
     *
     * @return string (string) The access token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "Expires" output from this RefreshToken execution.
     *
     * @return int (integer) The expiration time of the access_token retrieved.
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

/**
 * Updates individual or multiple fields in the file object.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_UpdateFile extends Temboo_Choreography
{
    /**
     * Updates individual or multiple fields in the file object.
     *
     * @param Temboo_Session $session The session that owns this UpdateFile Choreo.
     * @return Box_Files_UpdateFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Files/UpdateFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateFile Choreo.
     *
     * @param Box_Files_UpdateFile_Inputs|array $inputs (optional) Inputs as Box_Files_UpdateFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_UpdateFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Files_UpdateFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_UpdateFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Files_UpdateFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_UpdateFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Files_UpdateFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Files_UpdateFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Files_UpdateFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileObject input for this UpdateFile Choreo.
     *
     * @param string $value (required, json) A JSON object representing the new file information. See documentation for formatting examples.
     * @return Box_Files_UpdateFile_Inputs For method chaining.
     */
    public function setFileObject($value)
    {
        return $this->set('FileObject', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateFile Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Files_UpdateFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this UpdateFile Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Files_UpdateFile_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FileID input for this UpdateFile Choreo.
     *
     * @param string $value (required, string) The id of the file to update.
     * @return Box_Files_UpdateFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }
}


/**
 * Execution object for the UpdateFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_UpdateFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateFile execution.
     * @param Box_Files_UpdateFile $choreo The choreography object for this execution.
     * @param Box_Files_UpdateFile_Inputs|array $inputs (optional) Inputs as Box_Files_UpdateFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Files_UpdateFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Files_UpdateFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateFile execution.
     *
     * @return Box_Files_UpdateFile_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Files_UpdateFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Files_UpdateFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateFile Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Files_UpdateFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Files_UpdateFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateFile execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches a user's Box account for items that match a specified keyword.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Search_Query extends Temboo_Choreography
{
    /**
     * Searches a user's Box account for items that match a specified keyword.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return Box_Search_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Search/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param Box_Search_Query_Inputs|array $inputs (optional) Inputs as Box_Search_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Search_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Search_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Search_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Search_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Search_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Search_Query_Inputs New instance.
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
     * @return Box_Search_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Search_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Query Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Search_Query_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this Query Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Search_Query_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Limit input for this Query Choreo.
     *
     * @param int $value (optional, integer) The number of search results to return. Defaults to 30.
     * @return Box_Search_Query_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this Query Choreo.
     *
     * @param int $value (optional, integer) The search result at which to start the response. Defaults to 0.
     * @return Box_Search_Query_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this Query Choreo.
     *
     * @param string $value (required, string) The string to search for; can be matched against item names, descriptions, text content of a file, and other fields of the different item types.
     * @return Box_Search_Query_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Search_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Box_Search_Query $choreo The choreography object for this execution.
     * @param Box_Search_Query_Inputs|array $inputs (optional) Inputs as Box_Search_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Search_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Search_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Box_Search_Query_Results New results object.
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
     * @return Box_Search_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Search_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Search_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Search_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves only the files and/or folders contained within the specified folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_RetrieveFolderItems extends Temboo_Choreography
{
    /**
     * Retrieves only the files and/or folders contained within the specified folder.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFolderItems Choreo.
     * @return Box_Folders_RetrieveFolderItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Folders/RetrieveFolderItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveFolderItems Choreo.
     *
     * @param Box_Folders_RetrieveFolderItems_Inputs|array $inputs (optional) Inputs as Box_Folders_RetrieveFolderItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_RetrieveFolderItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Folders_RetrieveFolderItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveFolderItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_RetrieveFolderItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Folders_RetrieveFolderItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveFolderItems Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_RetrieveFolderItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveFolderItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Folders_RetrieveFolderItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveFolderItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Folders_RetrieveFolderItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Folders_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveFolderItems Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Folders_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this RetrieveFolderItems Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Folders_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FolderID input for this RetrieveFolderItems Choreo.
     *
     * @param string $value (conditional, string) The id of the folder that you want to retrieve items for. Defaults to 0 indicating the "root" folder.
     * @return Box_Folders_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveFolderItems Choreo.
     *
     * @param int $value (optional, integer) The number of items to return.
     * @return Box_Folders_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveFolderItems Choreo.
     *
     * @param int $value (optional, integer) The item at which to begin the response.
     * @return Box_Folders_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

}


/**
 * Execution object for the RetrieveFolderItems Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_RetrieveFolderItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveFolderItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFolderItems execution.
     * @param Box_Folders_RetrieveFolderItems $choreo The choreography object for this execution.
     * @param Box_Folders_RetrieveFolderItems_Inputs|array $inputs (optional) Inputs as Box_Folders_RetrieveFolderItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Folders_RetrieveFolderItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Folders_RetrieveFolderItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveFolderItems execution.
     *
     * @return Box_Folders_RetrieveFolderItems_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveFolderItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Folders_RetrieveFolderItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Folders_RetrieveFolderItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveFolderItems Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Folders_RetrieveFolderItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveFolderItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Folders_RetrieveFolderItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveFolderItems execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a collaboration for a single user to a specific folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_AddCollaboration extends Temboo_Choreography
{
    /**
     * Adds a collaboration for a single user to a specific folder.
     *
     * @param Temboo_Session $session The session that owns this AddCollaboration Choreo.
     * @return Box_Collaborations_AddCollaboration New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Collaborations/AddCollaboration/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddCollaboration Choreo.
     *
     * @param Box_Collaborations_AddCollaboration_Inputs|array $inputs (optional) Inputs as Box_Collaborations_AddCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_AddCollaboration_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Collaborations_AddCollaboration_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddCollaboration Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_AddCollaboration_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Collaborations_AddCollaboration_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_AddCollaboration_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddCollaboration Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Collaborations_AddCollaboration_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddCollaboration input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Collaborations_AddCollaboration_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_Collaborations_AddCollaboration_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddCollaboration Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth2 process.
     * @return Box_Collaborations_AddCollaboration_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Fields input for this AddCollaboration Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include in the response.
     * @return Box_Collaborations_AddCollaboration_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FolderID input for this AddCollaboration Choreo.
     *
     * @param string $value (required, string) The id of the folder that you want to create a collaboration for.
     * @return Box_Collaborations_AddCollaboration_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

    /**
     * Set the value for the Login input for this AddCollaboration Choreo.
     *
     * @param string $value (conditional, string) The email address of someone who this collaboration applies to. Required unless providing the UserID. Note, this does not need to be a Box user.
     * @return Box_Collaborations_AddCollaboration_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Role input for this AddCollaboration Choreo.
     *
     * @param string $value (optional, string) The access level of the collaboration. Valid values are "viewer" or "editor". Defaults to "viewer".
     * @return Box_Collaborations_AddCollaboration_Inputs For method chaining.
     */
    public function setRole($value)
    {
        return $this->set('Role', $value);
    }

    /**
     * Set the value for the UserID input for this AddCollaboration Choreo.
     *
     * @param string $value (conditional, string) The id of a Box user who this collaboration applies to. Required unless providing the EmailAddress.
     * @return Box_Collaborations_AddCollaboration_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

}


/**
 * Execution object for the AddCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_AddCollaboration_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddCollaboration Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddCollaboration execution.
     * @param Box_Collaborations_AddCollaboration $choreo The choreography object for this execution.
     * @param Box_Collaborations_AddCollaboration_Inputs|array $inputs (optional) Inputs as Box_Collaborations_AddCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Collaborations_AddCollaboration_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Collaborations_AddCollaboration $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddCollaboration execution.
     *
     * @return Box_Collaborations_AddCollaboration_Results New results object.
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
     * Wraps results in appropriate results class for this AddCollaboration execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Collaborations_AddCollaboration_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Collaborations_AddCollaboration_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddCollaboration Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Collaborations_AddCollaboration_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddCollaboration Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Collaborations_AddCollaboration_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddCollaboration execution.
     *
     * @return string (json) The response from Box.
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
 * @subpackage Box
 */
class Box_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Box_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Box_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Box_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Box_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Box_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Box_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Box_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Box_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Box after registering your application.
     * @return Box_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Box_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return Box_OAuth_InitializeOAuth_Inputs For method chaining.
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
 * @subpackage Box
 */
class Box_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Box_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Box_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Box_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Box_OAuth_InitializeOAuth_Results New results object.
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
     * @return Box_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_OAuth_InitializeOAuth_Results New instance.
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
     * Retrieve the value for the "AuthorizeURL" output from this InitializeOAuth execution.
     *
     * @return string (string) (Deprecated) Please refer to the AuthorizationURL output variable in your code. This output variable will be removed soon.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizeURL()
    {
        return $this->get('AuthorizeURL');
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


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


?>
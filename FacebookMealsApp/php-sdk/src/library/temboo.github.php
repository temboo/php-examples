<?php

/**
 * Temboo PHP SDK GitHub classes
 *
 * Execute Choreographies from the Temboo GitHub bundle.
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
 * @subpackage GitHub
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Deletes a specified gist.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_DeleteGist extends Temboo_Choreography
{
    /**
     * Deletes a specified gist.
     *
     * @param Temboo_Session $session The session that owns this DeleteGist Choreo.
     * @return GitHub_GistsAPI_Gists_DeleteGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/DeleteGist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteGist Choreo.
     *
     * @param GitHub_GistsAPI_Gists_DeleteGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_DeleteGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_DeleteGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_DeleteGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_DeleteGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteGist Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this DeleteGist Choreo.
     *
     * @param string $value (required, string) The id for the gist you want to delete.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the DeleteGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_DeleteGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteGist Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteGist execution.
     * @param GitHub_GistsAPI_Gists_DeleteGist $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_DeleteGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_DeleteGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_DeleteGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteGist execution.
     *
     * @return GitHub_GistsAPI_Gists_DeleteGist_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_DeleteGist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_DeleteGist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteGist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this DeleteGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this DeleteGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of comments for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommentsForRepo extends Temboo_Choreography
{
    /**
     * Retrieves a list of comments for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListCommentsForRepo Choreo.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/ListCommentsForRepo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCommentsForRepo Choreo.
     *
     * @param GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_ListCommentsForRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCommentsForRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCommentsForRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCommentsForRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCommentsForRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListCommentsForRepo Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListCommentsForRepo Choreo.
     *
     * @param string $value (required, string) The name of the repo to list comments for.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListCommentsForRepo Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListCommentsForRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommentsForRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCommentsForRepo Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCommentsForRepo execution.
     * @param GitHub_ReposAPI_Comments_ListCommentsForRepo $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_ListCommentsForRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCommentsForRepo execution.
     *
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Results New results object.
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
     * Wraps results in appropriate results class for this ListCommentsForRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_ListCommentsForRepo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCommentsForRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommentsForRepo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCommentsForRepo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListCommentsForRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListCommentsForRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListCommentsForRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of branches for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListBranches extends Temboo_Choreography
{
    /**
     * Retrieves a list of branches for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListBranches Choreo.
     * @return GitHub_ReposAPI_Repos_ListBranches New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListBranches/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListBranches Choreo.
     *
     * @param GitHub_ReposAPI_Repos_ListBranches_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListBranches_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListBranches_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListBranches_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListBranches Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListBranches_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListBranches Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListBranches_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListBranches Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListBranches input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListBranches Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListBranches Choreo.
     *
     * @param string $value (required, string) The name of the repo to list branches for.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListBranches Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListBranches Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListBranches_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListBranches Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListBranches execution.
     * @param GitHub_ReposAPI_Repos_ListBranches $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_ListBranches_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListBranches_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListBranches_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListBranches $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListBranches execution.
     *
     * @return GitHub_ReposAPI_Repos_ListBranches_Results New results object.
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
     * Wraps results in appropriate results class for this ListBranches execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListBranches_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListBranches_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListBranches Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListBranches_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListBranches Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListBranches_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListBranches execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListBranches execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListBranches execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of gists for a given user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsByUser extends Temboo_Choreography
{
    /**
     * Returns a list of gists for a given user.
     *
     * @param Temboo_Session $session The session that owns this ListGistsByUser Choreo.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/ListGistsByUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListGistsByUser Choreo.
     *
     * @param GitHub_GistsAPI_Gists_ListGistsByUser_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListGistsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_ListGistsByUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListGistsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_ListGistsByUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListGistsByUser Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsByUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListGistsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListGistsByUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListGistsByUser Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Page input for this ListGistsByUser Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the User input for this ListGistsByUser Choreo.
     *
     * @param string $value (required, string) The username for which you want to retrieve a list of gists.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListGistsByUser Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsByUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListGistsByUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListGistsByUser execution.
     * @param GitHub_GistsAPI_Gists_ListGistsByUser $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_ListGistsByUser_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListGistsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_ListGistsByUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListGistsByUser execution.
     *
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Results New results object.
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
     * Wraps results in appropriate results class for this ListGistsByUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_ListGistsByUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListGistsByUser Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsByUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListGistsByUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListGistsByUser execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListGistsByUser execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListGistsByUser execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListGistsByUser execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListGistsByUser execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an individual commit comment.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_GetCommitComment extends Temboo_Choreography
{
    /**
     * Retrieves an individual commit comment.
     *
     * @param Temboo_Session $session The session that owns this GetCommitComment Choreo.
     * @return GitHub_ReposAPI_Comments_GetCommitComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/GetCommitComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCommitComment Choreo.
     *
     * @param GitHub_ReposAPI_Comments_GetCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_GetCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_GetCommitComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCommitComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_GetCommitComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCommitComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_GetCommitComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCommitComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCommitComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCommitComment Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this GetCommitComment Choreo.
     *
     * @param string $value (required, string) The comment id.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Repo input for this GetCommitComment Choreo.
     *
     * @param string $value (required, string) The name of the repo that the comment is associated with.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetCommitComment Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetCommitComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_GetCommitComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCommitComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCommitComment execution.
     * @param GitHub_ReposAPI_Comments_GetCommitComment $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Comments_GetCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_GetCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_GetCommitComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCommitComment execution.
     *
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Results New results object.
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
     * Wraps results in appropriate results class for this GetCommitComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_GetCommitComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCommitComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_GetCommitComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCommitComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetCommitComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetCommitComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetCommitComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of languages for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListLanguages extends Temboo_Choreography
{
    /**
     * Retrieves a list of languages for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListLanguages Choreo.
     * @return GitHub_ReposAPI_Repos_ListLanguages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListLanguages/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListLanguages Choreo.
     *
     * @param GitHub_ReposAPI_Repos_ListLanguages_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListLanguages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListLanguages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListLanguages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListLanguages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListLanguages Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListLanguages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListLanguages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListLanguages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListLanguages Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListLanguages Choreo.
     *
     * @param string $value (required, string) The name of the repo to list languages for.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListLanguages Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListLanguages Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListLanguages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListLanguages Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListLanguages execution.
     * @param GitHub_ReposAPI_Repos_ListLanguages $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_ListLanguages_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListLanguages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListLanguages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListLanguages execution.
     *
     * @return GitHub_ReposAPI_Repos_ListLanguages_Results New results object.
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
     * Wraps results in appropriate results class for this ListLanguages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListLanguages_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListLanguages Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListLanguages_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListLanguages Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListLanguages execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListLanguages execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListLanguages execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of comments for a single commit.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommitComments extends Temboo_Choreography
{
    /**
     * Retrieves a list of comments for a single commit.
     *
     * @param Temboo_Session $session The session that owns this ListCommitComments Choreo.
     * @return GitHub_ReposAPI_Comments_ListCommitComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/ListCommitComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCommitComments Choreo.
     *
     * @param GitHub_ReposAPI_Comments_ListCommitComments_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_ListCommitComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_ListCommitComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCommitComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_ListCommitComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCommitComments Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommitComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCommitComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCommitComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListCommitComments Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListCommitComments Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this ListCommitComments Choreo.
     *
     * @param string $value (required, string) The SHA of the commit.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this ListCommitComments Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListCommitComments Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommitComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCommitComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCommitComments execution.
     * @param GitHub_ReposAPI_Comments_ListCommitComments $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Comments_ListCommitComments_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_ListCommitComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_ListCommitComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCommitComments execution.
     *
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Results New results object.
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
     * Wraps results in appropriate results class for this ListCommitComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_ListCommitComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCommitComments Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommitComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCommitComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListCommitComments execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListCommitComments execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListCommitComments execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an array of all the references on the system, including things like notes and stashes if they exist on the server.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetAllReferences extends Temboo_Choreography
{
    /**
     * Retrieves an array of all the references on the system, including things like notes and stashes if they exist on the server.
     *
     * @param Temboo_Session $session The session that owns this GetAllReferences Choreo.
     * @return GitHub_GitDataAPI_References_GetAllReferences New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/References/GetAllReferences/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAllReferences Choreo.
     *
     * @param GitHub_GitDataAPI_References_GetAllReferences_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_GetAllReferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_References_GetAllReferences_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllReferences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_References_GetAllReferences_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllReferences Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetAllReferences_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAllReferences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllReferences input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetAllReferences Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetAllReferences Choreo.
     *
     * @param string $value (required, string) The name of the repo associated with the references to retrieve.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetAllReferences Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetAllReferences Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetAllReferences_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllReferences Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAllReferences execution.
     * @param GitHub_GitDataAPI_References_GetAllReferences $choreo The choreography object for this execution.
     * @param GitHub_GitDataAPI_References_GetAllReferences_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_GetAllReferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_References_GetAllReferences $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllReferences execution.
     *
     * @return GitHub_GitDataAPI_References_GetAllReferences_Results New results object.
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
     * Wraps results in appropriate results class for this GetAllReferences execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_References_GetAllReferences_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAllReferences Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetAllReferences_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAllReferences Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetAllReferences execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetAllReferences execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetAllReferences execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of gists for the authenticated user or if called anonymously, return all public gists.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser extends Temboo_Choreography
{
    /**
     * Returns a list of gists for the authenticated user or if called anonymously, return all public gists.
     *
     * @param Temboo_Session $session The session that owns this ListGistsForAuthenticatedUser Choreo.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/ListGistsForAuthenticatedUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListGistsForAuthenticatedUser Choreo.
     *
     * @param GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListGistsForAuthenticatedUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListGistsForAuthenticatedUser Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListGistsForAuthenticatedUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListGistsForAuthenticatedUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListGistsForAuthenticatedUser Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. If not provided, all public gists are returned.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Page input for this ListGistsForAuthenticatedUser Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the ListGistsForAuthenticatedUser Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListGistsForAuthenticatedUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListGistsForAuthenticatedUser execution.
     * @param GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListGistsForAuthenticatedUser execution.
     *
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results New results object.
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
     * Wraps results in appropriate results class for this ListGistsForAuthenticatedUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListGistsForAuthenticatedUser Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListGistsForAuthenticatedUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Unstars a gist using a specified gist id.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_UnstarGist extends Temboo_Choreography
{
    /**
     * Unstars a gist using a specified gist id.
     *
     * @param Temboo_Session $session The session that owns this UnstarGist Choreo.
     * @return GitHub_GistsAPI_Gists_UnstarGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/UnstarGist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UnstarGist Choreo.
     *
     * @param GitHub_GistsAPI_Gists_UnstarGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_UnstarGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_UnstarGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnstarGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_UnstarGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnstarGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_UnstarGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UnstarGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnstarGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UnstarGist Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this UnstarGist Choreo.
     *
     * @param string $value (required, string) The id for the gist you want to unstar.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the UnstarGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_UnstarGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnstarGist Choreo.
     *
     * @param Temboo_Session $session The session that owns this UnstarGist execution.
     * @param GitHub_GistsAPI_Gists_UnstarGist $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_UnstarGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_UnstarGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_UnstarGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnstarGist execution.
     *
     * @return GitHub_GistsAPI_Gists_UnstarGist_Results New results object.
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
     * Wraps results in appropriate results class for this UnstarGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_UnstarGist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UnstarGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_UnstarGist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UnstarGist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this UnstarGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this UnstarGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this UnstarGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetRepo extends Temboo_Choreography
{
    /**
     * Retrieves information for a specified repository.
     *
     * @param Temboo_Session $session The session that owns this GetRepo Choreo.
     * @return GitHub_ReposAPI_Repos_GetRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/GetRepo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRepo Choreo.
     *
     * @param GitHub_ReposAPI_Repos_GetRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_GetRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_GetRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_GetRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_GetRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetRepo Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetRepo Choreo.
     *
     * @param string $value (required, string) The name of the repo to retrieve.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetRepo Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRepo Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRepo execution.
     * @param GitHub_ReposAPI_Repos_GetRepo $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_GetRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_GetRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_GetRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_GetRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRepo execution.
     *
     * @return GitHub_ReposAPI_Repos_GetRepo_Results New results object.
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
     * Wraps results in appropriate results class for this GetRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_GetRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_GetRepo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetRepo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRepo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_GetRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a specified commit from a repo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Commits_GetCommit extends Temboo_Choreography
{
    /**
     * Retrieves a specified commit from a repo.
     *
     * @param Temboo_Session $session The session that owns this GetCommit Choreo.
     * @return GitHub_GitDataAPI_Commits_GetCommit New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/Commits/GetCommit/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCommit Choreo.
     *
     * @param GitHub_GitDataAPI_Commits_GetCommit_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Commits_GetCommit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_Commits_GetCommit_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCommit Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_Commits_GetCommit_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCommit Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Commits_GetCommit_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCommit Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCommit input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCommit Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetCommit Choreo.
     *
     * @param string $value (required, string) The repo associated with the commit.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this GetCommit Choreo.
     *
     * @param string $value (required, string) The unique commit SHA associated with the commit to retrieve.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this GetCommit Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetCommit Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Commits_GetCommit_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCommit Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCommit execution.
     * @param GitHub_GitDataAPI_Commits_GetCommit $choreo The choreography object for this execution.
     * @param GitHub_GitDataAPI_Commits_GetCommit_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Commits_GetCommit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_Commits_GetCommit $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCommit execution.
     *
     * @return GitHub_GitDataAPI_Commits_GetCommit_Results New results object.
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
     * Wraps results in appropriate results class for this GetCommit execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_Commits_GetCommit_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCommit Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Commits_GetCommit_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCommit Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetCommit execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetCommit execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetCommit execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of repositories for the authenticated user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListYourRepos extends Temboo_Choreography
{
    /**
     * Retrieves a list of repositories for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this ListYourRepos Choreo.
     * @return GitHub_ReposAPI_Repos_ListYourRepos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListYourRepos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListYourRepos Choreo.
     *
     * @param GitHub_ReposAPI_Repos_ListYourRepos_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListYourRepos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListYourRepos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListYourRepos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListYourRepos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListYourRepos Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListYourRepos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListYourRepos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListYourRepos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListYourRepos Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Direction input for this ListYourRepos Choreo.
     *
     * @param string $value (optional, string) Valid values are asc or desc. Default behavior is desc unless sorting by full_name in which case, the direction is asc.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setDirection($value)
    {
        return $this->set('Direction', $value);
    }

    /**
     * Set the value for the Page input for this ListYourRepos Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Sort input for this ListYourRepos Choreo.
     *
     * @param string $value (optional, string) The sort order of the results. Valid values are: created, updated, pushed, or full_name (the default).
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the Type input for this ListYourRepos Choreo.
     *
     * @param string $value (optional, string) The type of repos to return. Valid values are: all (the default), owner, public, private, or member.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the ListYourRepos Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListYourRepos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListYourRepos Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListYourRepos execution.
     * @param GitHub_ReposAPI_Repos_ListYourRepos $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_ListYourRepos_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListYourRepos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListYourRepos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListYourRepos execution.
     *
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Results New results object.
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
     * Wraps results in appropriate results class for this ListYourRepos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListYourRepos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListYourRepos Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListYourRepos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListYourRepos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListYourRepos execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListYourRepos execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListYourRepos execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListYourRepos execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListYourRepos execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified comment.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_DeleteComment extends Temboo_Choreography
{
    /**
     * Deletes a specified comment.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment Choreo.
     * @return GitHub_GistsAPI_Comments_DeleteComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Comments/DeleteComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteComment Choreo.
     *
     * @param GitHub_GistsAPI_Comments_DeleteComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Comments_DeleteComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Comments_DeleteComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_DeleteComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs New instance.
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
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The id of the comment to delete.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_DeleteComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment execution.
     * @param GitHub_GistsAPI_Comments_DeleteComment $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Comments_DeleteComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Comments_DeleteComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteComment execution.
     *
     * @return GitHub_GistsAPI_Comments_DeleteComment_Results New results object.
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
     * @return GitHub_GistsAPI_Comments_DeleteComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Comments_DeleteComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_DeleteComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this DeleteComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this DeleteComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves comments for a specified gist.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_ListComments extends Temboo_Choreography
{
    /**
     * Retrieves comments for a specified gist.
     *
     * @param Temboo_Session $session The session that owns this ListComments Choreo.
     * @return GitHub_GistsAPI_Comments_ListComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Comments/ListComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListComments Choreo.
     *
     * @param GitHub_GistsAPI_Comments_ListComments_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_ListComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_ListComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Comments_ListComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Comments_ListComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListComments Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_ListComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ID input for this ListComments Choreo.
     *
     * @param string $value (required, string) The id of the gist to fetch comments for.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListComments Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the ListComments Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_ListComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListComments execution.
     * @param GitHub_GistsAPI_Comments_ListComments $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Comments_ListComments_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_ListComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_ListComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Comments_ListComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListComments execution.
     *
     * @return GitHub_GistsAPI_Comments_ListComments_Results New results object.
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
     * Wraps results in appropriate results class for this ListComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_ListComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Comments_ListComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListComments Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_ListComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_ListComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListComments execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListComments execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListComments execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListComments execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListComments execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all issues associated with the provided access token.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListYourIssues extends Temboo_Choreography
{
    /**
     * Lists all issues associated with the provided access token.
     *
     * @param Temboo_Session $session The session that owns this ListYourIssues Choreo.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/IssuesAPI/Issues/ListYourIssues/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListYourIssues Choreo.
     *
     * @param GitHub_IssuesAPI_Issues_ListYourIssues_Inputs|array $inputs (optional) Inputs as GitHub_IssuesAPI_Issues_ListYourIssues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_IssuesAPI_Issues_ListYourIssues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListYourIssues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_IssuesAPI_Issues_ListYourIssues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListYourIssues Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListYourIssues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListYourIssues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListYourIssues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListYourIssues Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Direction input for this ListYourIssues Choreo.
     *
     * @param string $value (optional, string) The direction of the sort order. Valid values are: asc or desc (the default).
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setDirection($value)
    {
        return $this->set('Direction', $value);
    }

    /**
     * Set the value for the Filter input for this ListYourIssues Choreo.
     *
     * @param string $value (optional, string) Filters issues using one of the following strings: assigned (the default), created, mentioned, subscribed.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Labels input for this ListYourIssues Choreo.
     *
     * @param string $value (optional, string) A comma separated list of label names (i.e. bug, ui, etc).
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setLabels($value)
    {
        return $this->set('Labels', $value);
    }

    /**
     * Set the value for the Page input for this ListYourIssues Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Since input for this ListYourIssues Choreo.
     *
     * @param string $value (optional, date) A timestamp in ISO 8601 format (YYYY-MM-DDTHH:MM:SSZ). Returns issues since this date.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the Sort input for this ListYourIssues Choreo.
     *
     * @param string $value (optional, string) Indicates how the issues will be sorted in the response. Valid sort options are: created (the default), updated, comments.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the State input for this ListYourIssues Choreo.
     *
     * @param string $value (optional, string) Returns issues with a particular state: open (the default) or closed.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the ListYourIssues Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListYourIssues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListYourIssues Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListYourIssues execution.
     * @param GitHub_IssuesAPI_Issues_ListYourIssues $choreo The choreography object for this execution.
     * @param GitHub_IssuesAPI_Issues_ListYourIssues_Inputs|array $inputs (optional) Inputs as GitHub_IssuesAPI_Issues_ListYourIssues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_IssuesAPI_Issues_ListYourIssues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListYourIssues execution.
     *
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Results New results object.
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
     * Wraps results in appropriate results class for this ListYourIssues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_IssuesAPI_Issues_ListYourIssues_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListYourIssues Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListYourIssues_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListYourIssues Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListYourIssues execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListYourIssues execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListYourIssues execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListYourIssues execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListYourIssues execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a tarball or zipball archive for a repository. 
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetContents extends Temboo_Choreography
{
    /**
     * Returns a tarball or zipball archive for a repository. 
     *
     * @param Temboo_Session $session The session that owns this GetContents Choreo.
     * @return GitHub_ReposAPI_Contents_GetContents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Contents/GetContents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetContents Choreo.
     *
     * @param GitHub_ReposAPI_Contents_GetContents_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetContents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetContents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Contents_GetContents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetContents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Contents_GetContents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetContents Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetContents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetContents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetContents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetContents Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ArchiveFormat input for this GetContents Choreo.
     *
     * @param string $value (required, string) Either tarball or zipball. Defaults to "tarball".
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setArchiveFormat($value)
    {
        return $this->set('ArchiveFormat', $value);
    }

    /**
     * Set the value for the Ref input for this GetContents Choreo.
     *
     * @param string $value (optional, string) A valid Git reference. Defaults to "master".
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this GetContents Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetContents Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetContents Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetContents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetContents Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetContents execution.
     * @param GitHub_ReposAPI_Contents_GetContents $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Contents_GetContents_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetContents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetContents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Contents_GetContents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetContents execution.
     *
     * @return GitHub_ReposAPI_Contents_GetContents_Results New results object.
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
     * Wraps results in appropriate results class for this GetContents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetContents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Contents_GetContents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetContents Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetContents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetContents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetContents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetContents execution.
     *
     * @return string (string) The response from GitHub.
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
 * @subpackage GitHub
 */
class GitHub_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return GitHub_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param GitHub_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as GitHub_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return GitHub_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return GitHub_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return GitHub_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return GitHub_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by GitHub after registering your application.
     * @return GitHub_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return GitHub_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return GitHub_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the Scope input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A comma separated list of scopes to associate with the access token. See description for more information. Ex.: user,repo,public_repo.
     * @return GitHub_OAuth_InitializeOAuth_Inputs For method chaining.
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
 * @subpackage GitHub
 */
class GitHub_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param GitHub_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param GitHub_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as GitHub_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return GitHub_OAuth_InitializeOAuth_Results New results object.
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
     * @return GitHub_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_OAuth_InitializeOAuth_Results New instance.
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
 * Retrieves a specified tag object.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_GetTag extends Temboo_Choreography
{
    /**
     * Retrieves a specified tag object.
     *
     * @param Temboo_Session $session The session that owns this GetTag Choreo.
     * @return GitHub_GitDataAPI_Tags_GetTag New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/Tags/GetTag/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTag Choreo.
     *
     * @param GitHub_GitDataAPI_Tags_GetTag_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Tags_GetTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Tags_GetTag_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_Tags_GetTag_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTag Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_Tags_GetTag_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTag Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_GetTag_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTag Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTag input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetTag Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetTag Choreo.
     *
     * @param string $value (required, string) The name of the repo associated with the tag to retrieve.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this GetTag Choreo.
     *
     * @param string $value (required, string) The SHA associated with the tag to retrieve.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this GetTag Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTag Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_GetTag_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTag Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTag execution.
     * @param GitHub_GitDataAPI_Tags_GetTag $choreo The choreography object for this execution.
     * @param GitHub_GitDataAPI_Tags_GetTag_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Tags_GetTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Tags_GetTag_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_Tags_GetTag $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTag execution.
     *
     * @return GitHub_GitDataAPI_Tags_GetTag_Results New results object.
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
     * Wraps results in appropriate results class for this GetTag execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_Tags_GetTag_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_Tags_GetTag_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTag Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_GetTag_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTag Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_Tags_GetTag_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetTag execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetTag execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetTag execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of public repositories for the specified user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListUserRepos extends Temboo_Choreography
{
    /**
     * Retrieves a list of public repositories for the specified user.
     *
     * @param Temboo_Session $session The session that owns this ListUserRepos Choreo.
     * @return GitHub_ReposAPI_Repos_ListUserRepos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListUserRepos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUserRepos Choreo.
     *
     * @param GitHub_ReposAPI_Repos_ListUserRepos_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListUserRepos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListUserRepos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUserRepos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListUserRepos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUserRepos Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListUserRepos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUserRepos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUserRepos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Direction input for this ListUserRepos Choreo.
     *
     * @param string $value (optional, string) Valid values are asc or desc. Default behavior is desc unless sorting by full_name in which case, the direction is asc.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setDirection($value)
    {
        return $this->set('Direction', $value);
    }

    /**
     * Set the value for the Page input for this ListUserRepos Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Sort input for this ListUserRepos Choreo.
     *
     * @param string $value (optional, string) The sort order of the results. Valid values are: created, updated, pushed, or full_name (the default).
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the Type input for this ListUserRepos Choreo.
     *
     * @param string $value (optional, string) The type of repos to return. Valid values are: all (the default), owner, public, or member.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the User input for this ListUserRepos Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListUserRepos Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListUserRepos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUserRepos Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUserRepos execution.
     * @param GitHub_ReposAPI_Repos_ListUserRepos $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_ListUserRepos_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListUserRepos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListUserRepos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUserRepos execution.
     *
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Results New results object.
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
     * Wraps results in appropriate results class for this ListUserRepos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListUserRepos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUserRepos Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListUserRepos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUserRepos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListUserRepos execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListUserRepos execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListUserRepos execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListUserRepos execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListUserRepos execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of starred gists for the authenticated user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListStarredGists extends Temboo_Choreography
{
    /**
     * Returns a list of starred gists for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this ListStarredGists Choreo.
     * @return GitHub_GistsAPI_Gists_ListStarredGists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/ListStarredGists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListStarredGists Choreo.
     *
     * @param GitHub_GistsAPI_Gists_ListStarredGists_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListStarredGists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_ListStarredGists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListStarredGists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_ListStarredGists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListStarredGists Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListStarredGists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListStarredGists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListStarredGists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListStarredGists Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Page input for this ListStarredGists Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the ListStarredGists Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListStarredGists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListStarredGists Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListStarredGists execution.
     * @param GitHub_GistsAPI_Gists_ListStarredGists $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_ListStarredGists_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListStarredGists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_ListStarredGists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListStarredGists execution.
     *
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Results New results object.
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
     * Wraps results in appropriate results class for this ListStarredGists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_ListStarredGists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListStarredGists Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListStarredGists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListStarredGists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListStarredGists execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListStarredGists execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListStarredGists execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListStarredGists execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListStarredGists execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a GitHub access token for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a GitHub access token for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return GitHub_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param GitHub_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as GitHub_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return GitHub_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return GitHub_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return GitHub_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return GitHub_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return GitHub_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by GitHub after registering your application.
     * @return GitHub_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by GitHub after registering your application.
     * @return GitHub_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return GitHub_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage GitHub
 */
class GitHub_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param GitHub_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param GitHub_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as GitHub_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return GitHub_OAuth_FinalizeOAuth_Results New results object.
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
     * @return GitHub_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_OAuth_FinalizeOAuth_Results New instance.
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
}

/**
 * Creates a new repository for the authenticated user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_CreateRepo extends Temboo_Choreography
{
    /**
     * Creates a new repository for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this CreateRepo Choreo.
     * @return GitHub_ReposAPI_Repos_CreateRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/CreateRepo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateRepo Choreo.
     *
     * @param GitHub_ReposAPI_Repos_CreateRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_CreateRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_CreateRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_CreateRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_CreateRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateRepo Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Description input for this CreateRepo Choreo.
     *
     * @param string $value (optional, string) A text description for the repo.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the HasDownloads input for this CreateRepo Choreo.
     *
     * @param bool $value (optional, boolean) Se to "true" to enable downloads for this repository. Defaults to "true".
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setHasDownloads($value)
    {
        return $this->set('HasDownloads', $value);
    }

    /**
     * Set the value for the HasIssues input for this CreateRepo Choreo.
     *
     * @param bool $value (optional, boolean) Set to "true" to enable issues for this repository. Defaults to "true."
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setHasIssues($value)
    {
        return $this->set('HasIssues', $value);
    }

    /**
     * Set the value for the HasWiki input for this CreateRepo Choreo.
     *
     * @param bool $value (optional, boolean) Set to "true" to enable the wiki for this repository. Defaults to "true".
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setHasWiki($value)
    {
        return $this->set('HasWiki', $value);
    }

    /**
     * Set the value for the Homepage input for this CreateRepo Choreo.
     *
     * @param string $value (optional, string) A homepage link.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setHomepage($value)
    {
        return $this->set('Homepage', $value);
    }

    /**
     * Set the value for the Name input for this CreateRepo Choreo.
     *
     * @param string $value (required, string) The name of the repo being created.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Private input for this CreateRepo Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating the the repo is private or public. Set to "true" to create a private repository. Defaults to "false".
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setPrivate($value)
    {
        return $this->set('Private', $value);
    }

    /**
     * Set the value for the TeamID input for this CreateRepo Choreo.
     *
     * @param int $value (optional, integer) The id of the team that will be granted access to this repository. Only valid when creating a repo in an organization.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setTeamID($value)
    {
        return $this->set('TeamID', $value);
    }
}


/**
 * Execution object for the CreateRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_CreateRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateRepo Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateRepo execution.
     * @param GitHub_ReposAPI_Repos_CreateRepo $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_CreateRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_CreateRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_CreateRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateRepo execution.
     *
     * @return GitHub_ReposAPI_Repos_CreateRepo_Results New results object.
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
     * Wraps results in appropriate results class for this CreateRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_CreateRepo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_CreateRepo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateRepo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this CreateRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this CreateRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this CreateRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_DeleteRepo extends Temboo_Choreography
{
    /**
     * Deletes a specified repository.
     *
     * @param Temboo_Session $session The session that owns this DeleteRepo Choreo.
     * @return GitHub_ReposAPI_Repos_DeleteRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/DeleteRepo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteRepo Choreo.
     *
     * @param GitHub_ReposAPI_Repos_DeleteRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_DeleteRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_DeleteRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_DeleteRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_DeleteRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteRepo Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this DeleteRepo Choreo.
     *
     * @param string $value (required, string) The name of the repo to delete.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this DeleteRepo Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the DeleteRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_DeleteRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRepo Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteRepo execution.
     * @param GitHub_ReposAPI_Repos_DeleteRepo $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_DeleteRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_DeleteRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_DeleteRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRepo execution.
     *
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_DeleteRepo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_DeleteRepo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteRepo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this DeleteRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this DeleteRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a comparison between two commits.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_CompareCommits extends Temboo_Choreography
{
    /**
     * Retrieves a comparison between two commits.
     *
     * @param Temboo_Session $session The session that owns this CompareCommits Choreo.
     * @return GitHub_ReposAPI_Commits_CompareCommits New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Commits/CompareCommits/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CompareCommits Choreo.
     *
     * @param GitHub_ReposAPI_Commits_CompareCommits_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_CompareCommits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Commits_CompareCommits_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompareCommits Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Commits_CompareCommits_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompareCommits Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_CompareCommits_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CompareCommits Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompareCommits input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CompareCommits Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Base input for this CompareCommits Choreo.
     *
     * @param string $value (required, string) The base commit (i.e. "master").
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setBase($value)
    {
        return $this->set('Base', $value);
    }

    /**
     * Set the value for the Head input for this CompareCommits Choreo.
     *
     * @param string $value (required, string) The head commit.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setHead($value)
    {
        return $this->set('Head', $value);
    }

    /**
     * Set the value for the Repo input for this CompareCommits Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this CompareCommits Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CompareCommits Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_CompareCommits_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompareCommits Choreo.
     *
     * @param Temboo_Session $session The session that owns this CompareCommits execution.
     * @param GitHub_ReposAPI_Commits_CompareCommits $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Commits_CompareCommits_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_CompareCommits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Commits_CompareCommits $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompareCommits execution.
     *
     * @return GitHub_ReposAPI_Commits_CompareCommits_Results New results object.
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
     * Wraps results in appropriate results class for this CompareCommits execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Commits_CompareCommits_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CompareCommits Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_CompareCommits_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CompareCommits Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this CompareCommits execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this CompareCommits execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this CompareCommits execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * List all issues for a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListIssuesForRepo extends Temboo_Choreography
{
    /**
     * List all issues for a specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListIssuesForRepo Choreo.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/IssuesAPI/Issues/ListIssuesForRepo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListIssuesForRepo Choreo.
     *
     * @param GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs|array $inputs (optional) Inputs as GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_IssuesAPI_Issues_ListIssuesForRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListIssuesForRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListIssuesForRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListIssuesForRepo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListIssuesForRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Assignee input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (required, string) Can be set to a username, "none" for issues with no assinged user, or * for issues with any assigned user.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setAssignee($value)
    {
        return $this->set('Assignee', $value);
    }

    /**
     * Set the value for the Direction input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (optional, string) The direction of the sort order. Valid values are: asc or desc (the default).
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setDirection($value)
    {
        return $this->set('Direction', $value);
    }

    /**
     * Set the value for the Labels input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (optional, string) A comma separated list of label names (i.e. bug, ui, etc).
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setLabels($value)
    {
        return $this->set('Labels', $value);
    }

    /**
     * Set the value for the Mentioned input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (optional, string) A Github username that is mentioned.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setMentioned($value)
    {
        return $this->set('Mentioned', $value);
    }

    /**
     * Set the value for the Milestone input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (required, string) Can be set to a milestone number, "none" for issues with no milestone, or * for issues with any milestone.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setMilestone($value)
    {
        return $this->set('Milestone', $value);
    }

    /**
     * Set the value for the Page input for this ListIssuesForRepo Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Repo input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (required, string) The name of the repo.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the Since input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (optional, date) A timestamp in ISO 8601 format (YYYY-MM-DDTHH:MM:SSZ). Returns issues since this date.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the Sort input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (optional, string) Indicates how the issues will be sorted in the response. Valid sort options are: created (the default), updated, comments.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the State input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (optional, string) Returns issues with a particular state: open (the default) or closed.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the User input for this ListIssuesForRepo Choreo.
     *
     * @param string $value (required, string) A GitHub username.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListIssuesForRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListIssuesForRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListIssuesForRepo Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListIssuesForRepo execution.
     * @param GitHub_IssuesAPI_Issues_ListIssuesForRepo $choreo The choreography object for this execution.
     * @param GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs|array $inputs (optional) Inputs as GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_IssuesAPI_Issues_ListIssuesForRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListIssuesForRepo execution.
     *
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results New results object.
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
     * Wraps results in appropriate results class for this ListIssuesForRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListIssuesForRepo Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListIssuesForRepo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListIssuesForRepo execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListIssuesForRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListIssuesForRepo execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListIssuesForRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListIssuesForRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an individual commit.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_GetCommit extends Temboo_Choreography
{
    /**
     * Retrieves an individual commit.
     *
     * @param Temboo_Session $session The session that owns this GetCommit Choreo.
     * @return GitHub_ReposAPI_Commits_GetCommit New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Commits/GetCommit/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCommit Choreo.
     *
     * @param GitHub_ReposAPI_Commits_GetCommit_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_GetCommit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_GetCommit_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Commits_GetCommit_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCommit Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Commits_GetCommit_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCommit Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_GetCommit_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCommit Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCommit input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCommit Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetCommit Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this GetCommit Choreo.
     *
     * @param string $value (required, string) The SHA of the commit to return.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this GetCommit Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetCommit Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_GetCommit_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCommit Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCommit execution.
     * @param GitHub_ReposAPI_Commits_GetCommit $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Commits_GetCommit_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_GetCommit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_GetCommit_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Commits_GetCommit $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCommit execution.
     *
     * @return GitHub_ReposAPI_Commits_GetCommit_Results New results object.
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
     * Wraps results in appropriate results class for this GetCommit execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_GetCommit_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Commits_GetCommit_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCommit Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_GetCommit_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCommit Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_GetCommit_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetCommit execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetCommit execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetCommit execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an individual reference on the system, including things like notes and statshes if they exist on the server.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetReference extends Temboo_Choreography
{
    /**
     * Retrieves an individual reference on the system, including things like notes and statshes if they exist on the server.
     *
     * @param Temboo_Session $session The session that owns this GetReference Choreo.
     * @return GitHub_GitDataAPI_References_GetReference New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/References/GetReference/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetReference Choreo.
     *
     * @param GitHub_GitDataAPI_References_GetReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_GetReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_GetReference_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_References_GetReference_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_References_GetReference_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReference Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetReference_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetReference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReference input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetReference Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Ref input for this GetReference Choreo.
     *
     * @param string $value (required, string) The reference to retrieve. Must be formatted as refs/heads/branch. Refs can be retrieved by running the GetAllReferences and parsing the value for "ref".
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this GetReference Choreo.
     *
     * @param string $value (required, string) The name of the repo associated with the references to retrieve.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetReference Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetReference Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetReference_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReference Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetReference execution.
     * @param GitHub_GitDataAPI_References_GetReference $choreo The choreography object for this execution.
     * @param GitHub_GitDataAPI_References_GetReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_GetReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_GetReference_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_References_GetReference $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReference execution.
     *
     * @return GitHub_GitDataAPI_References_GetReference_Results New results object.
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
     * Wraps results in appropriate results class for this GetReference execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_GetReference_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_References_GetReference_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetReference Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetReference_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetReference Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_GetReference_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetReference execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetReference execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetReference execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a specified branch.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetBranch extends Temboo_Choreography
{
    /**
     * Retrieves information for a specified branch.
     *
     * @param Temboo_Session $session The session that owns this GetBranch Choreo.
     * @return GitHub_ReposAPI_Repos_GetBranch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/GetBranch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBranch Choreo.
     *
     * @param GitHub_ReposAPI_Repos_GetBranch_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_GetBranch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_GetBranch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_GetBranch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBranch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_GetBranch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBranch Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetBranch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBranch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBranch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetBranch Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Branch input for this GetBranch Choreo.
     *
     * @param string $value (required, string) The name of the branch to retrieve.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setBranch($value)
    {
        return $this->set('Branch', $value);
    }

    /**
     * Set the value for the Repo input for this GetBranch Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetBranch Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetBranch Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetBranch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBranch Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBranch execution.
     * @param GitHub_ReposAPI_Repos_GetBranch $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_GetBranch_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_GetBranch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_GetBranch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_GetBranch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBranch execution.
     *
     * @return GitHub_ReposAPI_Repos_GetBranch_Results New results object.
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
     * Wraps results in appropriate results class for this GetBranch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_GetBranch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_GetBranch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBranch Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetBranch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBranch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_GetBranch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetBranch execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetBranch execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetBranch execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Checks to see if the provided user is a collaborator.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_GetCollaboratorStatus extends Temboo_Choreography
{
    /**
     * Checks to see if the provided user is a collaborator.
     *
     * @param Temboo_Session $session The session that owns this GetCollaboratorStatus Choreo.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Collaborators/GetCollaboratorStatus/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCollaboratorStatus Choreo.
     *
     * @param GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCollaboratorStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCollaboratorStatus Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCollaboratorStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCollaboratorStatus input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCollaboratorStatus Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Collaborator input for this GetCollaboratorStatus Choreo.
     *
     * @param string $value (required, string) The username of the collaborator to check.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setCollaborator($value)
    {
        return $this->set('Collaborator', $value);
    }

    /**
     * Set the value for the Repo input for this GetCollaboratorStatus Choreo.
     *
     * @param string $value (required, string) The name of the repo that has the collaborators to retrieve.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetCollaboratorStatus Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetCollaboratorStatus Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCollaboratorStatus Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCollaboratorStatus execution.
     * @param GitHub_ReposAPI_Collaborators_GetCollaboratorStatus $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Collaborators_GetCollaboratorStatus $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCollaboratorStatus execution.
     *
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results New results object.
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
     * Wraps results in appropriate results class for this GetCollaboratorStatus execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCollaboratorStatus Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCollaboratorStatus Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetCollaboratorStatus execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetCollaboratorStatus execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetCollaboratorStatus execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes a collaborator from a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_RemoveCollaborator extends Temboo_Choreography
{
    /**
     * Removes a collaborator from a specified repository.
     *
     * @param Temboo_Session $session The session that owns this RemoveCollaborator Choreo.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Collaborators/RemoveCollaborator/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RemoveCollaborator Choreo.
     *
     * @param GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Collaborators_RemoveCollaborator_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveCollaborator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveCollaborator Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RemoveCollaborator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemoveCollaborator input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RemoveCollaborator Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Collaborator input for this RemoveCollaborator Choreo.
     *
     * @param string $value (required, string) The username of the collaborator to remove.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setCollaborator($value)
    {
        return $this->set('Collaborator', $value);
    }

    /**
     * Set the value for the Repo input for this RemoveCollaborator Choreo.
     *
     * @param string $value (required, string) The name of the repo that the collaborator will be removed from.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this RemoveCollaborator Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the RemoveCollaborator Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_RemoveCollaborator_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveCollaborator Choreo.
     *
     * @param Temboo_Session $session The session that owns this RemoveCollaborator execution.
     * @param GitHub_ReposAPI_Collaborators_RemoveCollaborator $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Collaborators_RemoveCollaborator $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveCollaborator execution.
     *
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results New results object.
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
     * Wraps results in appropriate results class for this RemoveCollaborator execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RemoveCollaborator Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RemoveCollaborator Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this RemoveCollaborator execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this RemoveCollaborator execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this RemoveCollaborator execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a gist.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CreateGist extends Temboo_Choreography
{
    /**
     * Creates a gist.
     *
     * @param Temboo_Session $session The session that owns this CreateGist Choreo.
     * @return GitHub_GistsAPI_Gists_CreateGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/CreateGist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateGist Choreo.
     *
     * @param GitHub_GistsAPI_Gists_CreateGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_CreateGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_CreateGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_CreateGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_CreateGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CreateGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateGist Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Description input for this CreateGist Choreo.
     *
     * @param string $value (optional, string) The description for this gist.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the FileContents input for this CreateGist Choreo.
     *
     * @param string $value (required, string) The file contents of the gist.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the FileName input for this CreateGist Choreo.
     *
     * @param string $value (required, string) The file name of the gist (i.e. myProject.py).
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Public input for this CreateGist Choreo.
     *
     * @param bool $value (required, boolean) Indicates whether or not the gist is public or private.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setPublic($value)
    {
        return $this->set('Public', $value);
    }

    /**
     * Set the value for the User input for this CreateGist Choreo.
     *
     * @param string $value (required, string) The user who is creating the gist.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CreateGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateGist Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateGist execution.
     * @param GitHub_GistsAPI_Gists_CreateGist $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_CreateGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_CreateGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_CreateGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_CreateGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateGist execution.
     *
     * @return GitHub_GistsAPI_Gists_CreateGist_Results New results object.
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
     * Wraps results in appropriate results class for this CreateGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_CreateGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_CreateGist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CreateGist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateGist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_CreateGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this CreateGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this CreateGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this CreateGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of all public gists.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListPublicGists extends Temboo_Choreography
{
    /**
     * Returns a list of all public gists.
     *
     * @param Temboo_Session $session The session that owns this ListPublicGists Choreo.
     * @return GitHub_GistsAPI_Gists_ListPublicGists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/ListPublicGists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPublicGists Choreo.
     *
     * @param GitHub_GistsAPI_Gists_ListPublicGists_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListPublicGists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_ListPublicGists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPublicGists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_ListPublicGists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPublicGists Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListPublicGists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPublicGists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPublicGists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Page input for this ListPublicGists Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the ListPublicGists Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListPublicGists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPublicGists Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPublicGists execution.
     * @param GitHub_GistsAPI_Gists_ListPublicGists $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_ListPublicGists_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListPublicGists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_ListPublicGists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPublicGists execution.
     *
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Results New results object.
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
     * Wraps results in appropriate results class for this ListPublicGists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_ListPublicGists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPublicGists Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListPublicGists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPublicGists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListPublicGists execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListPublicGists execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListPublicGists execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListPublicGists execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListPublicGists execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of teams for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTeams extends Temboo_Choreography
{
    /**
     * Retrieves a list of teams for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListTeams Choreo.
     * @return GitHub_ReposAPI_Repos_ListTeams New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListTeams/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTeams Choreo.
     *
     * @param GitHub_ReposAPI_Repos_ListTeams_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListTeams_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListTeams_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTeams Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListTeams_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTeams Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTeams_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTeams Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTeams input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListTeams Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListTeams Choreo.
     *
     * @param string $value (required, string) The name of the repo to list teams for.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListTeams Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListTeams Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTeams_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTeams Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTeams execution.
     * @param GitHub_ReposAPI_Repos_ListTeams $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_ListTeams_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListTeams_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListTeams $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTeams execution.
     *
     * @return GitHub_ReposAPI_Repos_ListTeams_Results New results object.
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
     * Wraps results in appropriate results class for this ListTeams execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListTeams_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListTeams_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTeams Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTeams_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTeams Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListTeams_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListTeams execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListTeams execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListTeams execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Stars a gist using a specified gist id.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_StarGist extends Temboo_Choreography
{
    /**
     * Stars a gist using a specified gist id.
     *
     * @param Temboo_Session $session The session that owns this StarGist Choreo.
     * @return GitHub_GistsAPI_Gists_StarGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/StarGist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this StarGist Choreo.
     *
     * @param GitHub_GistsAPI_Gists_StarGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_StarGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_StarGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_StarGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StarGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_StarGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StarGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_StarGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the StarGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StarGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this StarGist Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this StarGist Choreo.
     *
     * @param string $value (required, string) The id for the gist you want to star.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the StarGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_StarGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StarGist Choreo.
     *
     * @param Temboo_Session $session The session that owns this StarGist execution.
     * @param GitHub_GistsAPI_Gists_StarGist $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_StarGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_StarGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_StarGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_StarGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StarGist execution.
     *
     * @return GitHub_GistsAPI_Gists_StarGist_Results New results object.
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
     * Wraps results in appropriate results class for this StarGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_StarGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_StarGist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the StarGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_StarGist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the StarGist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_StarGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this StarGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this StarGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this StarGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists commits for a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_ListCommits extends Temboo_Choreography
{
    /**
     * Lists commits for a specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListCommits Choreo.
     * @return GitHub_ReposAPI_Commits_ListCommits New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Commits/ListCommits/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCommits Choreo.
     *
     * @param GitHub_ReposAPI_Commits_ListCommits_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_ListCommits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_ListCommits_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Commits_ListCommits_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCommits Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Commits_ListCommits_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCommits Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_ListCommits_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCommits Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCommits input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListCommits Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this ListCommits Choreo.
     *
     * @param string $value (optional, string) Returns only commits containing this file path.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Repo input for this ListCommits Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this ListCommits Choreo.
     *
     * @param string $value (optional, string) The SHA or branch to start listing commits from.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this ListCommits Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListCommits Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_ListCommits_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCommits Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCommits execution.
     * @param GitHub_ReposAPI_Commits_ListCommits $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Commits_ListCommits_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_ListCommits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_ListCommits_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Commits_ListCommits $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCommits execution.
     *
     * @return GitHub_ReposAPI_Commits_ListCommits_Results New results object.
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
     * Wraps results in appropriate results class for this ListCommits execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_ListCommits_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Commits_ListCommits_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCommits Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_ListCommits_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCommits Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_ListCommits_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListCommits execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListCommits execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListCommits execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of contributors for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListContributors extends Temboo_Choreography
{
    /**
     * Retrieves a list of contributors for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListContributors Choreo.
     * @return GitHub_ReposAPI_Repos_ListContributors New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListContributors/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListContributors Choreo.
     *
     * @param GitHub_ReposAPI_Repos_ListContributors_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListContributors_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListContributors_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListContributors_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListContributors Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListContributors_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListContributors Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListContributors_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListContributors Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListContributors input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListContributors Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Anonymous input for this ListContributors Choreo.
     *
     * @param bool $value (optional, boolean) Flag indicating that the response should include anonymous contributors. Set to 1 or true to include anonymous contributors.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setAnonymous($value)
    {
        return $this->set('Anonymous', $value);
    }

    /**
     * Set the value for the Repo input for this ListContributors Choreo.
     *
     * @param string $value (required, string) The name of the repo that has the contributors to retrieve.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListContributors Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListContributors Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListContributors_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListContributors Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListContributors execution.
     * @param GitHub_ReposAPI_Repos_ListContributors $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_ListContributors_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListContributors_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListContributors_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListContributors $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListContributors execution.
     *
     * @return GitHub_ReposAPI_Repos_ListContributors_Results New results object.
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
     * Wraps results in appropriate results class for this ListContributors execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListContributors_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListContributors_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListContributors Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListContributors_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListContributors Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListContributors_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListContributors execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListContributors execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListContributors execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified commit comment.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_DeleteCommitComment extends Temboo_Choreography
{
    /**
     * Deletes a specified commit comment.
     *
     * @param Temboo_Session $session The session that owns this DeleteCommitComment Choreo.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/DeleteCommitComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteCommitComment Choreo.
     *
     * @param GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_DeleteCommitComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteCommitComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteCommitComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteCommitComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteCommitComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteCommitComment Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this DeleteCommitComment Choreo.
     *
     * @param string $value (required, string) The comment id.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Repo input for this DeleteCommitComment Choreo.
     *
     * @param string $value (required, string) The name of the repo that the comment is associated with.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this DeleteCommitComment Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the DeleteCommitComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_DeleteCommitComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteCommitComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteCommitComment execution.
     * @param GitHub_ReposAPI_Comments_DeleteCommitComment $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_DeleteCommitComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteCommitComment execution.
     *
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteCommitComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_DeleteCommitComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteCommitComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_DeleteCommitComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteCommitComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this DeleteCommitComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this DeleteCommitComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteCommitComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a reference on the system.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_CreateReference extends Temboo_Choreography
{
    /**
     * Creates a reference on the system.
     *
     * @param Temboo_Session $session The session that owns this CreateReference Choreo.
     * @return GitHub_GitDataAPI_References_CreateReference New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/References/CreateReference/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateReference Choreo.
     *
     * @param GitHub_GitDataAPI_References_CreateReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_CreateReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_CreateReference_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_References_CreateReference_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateReference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_References_CreateReference_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateReference Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_CreateReference_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateReference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateReference input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateReference Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Ref input for this CreateReference Choreo.
     *
     * @param string $value (required, string) The name of the fully qualified reference. Must be formatted as refs/heads/branch. Refs can be retrieved by running the GetAllReferences and parsing the value for "ref".
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this CreateReference Choreo.
     *
     * @param string $value (required, string) The name of the repo associated with the reference being created.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this CreateReference Choreo.
     *
     * @param string $value (required, string) The SHA1 value to set this reference to.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this CreateReference Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateReference Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_CreateReference_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateReference Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateReference execution.
     * @param GitHub_GitDataAPI_References_CreateReference $choreo The choreography object for this execution.
     * @param GitHub_GitDataAPI_References_CreateReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_CreateReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_CreateReference_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_References_CreateReference $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateReference execution.
     *
     * @return GitHub_GitDataAPI_References_CreateReference_Results New results object.
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
     * Wraps results in appropriate results class for this CreateReference execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_CreateReference_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_References_CreateReference_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateReference Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_CreateReference_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateReference Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_CreateReference_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this CreateReference execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this CreateReference execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this CreateReference execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a comment for a specified gist.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_CreateComment extends Temboo_Choreography
{
    /**
     * Creates a comment for a specified gist.
     *
     * @param Temboo_Session $session The session that owns this CreateComment Choreo.
     * @return GitHub_GistsAPI_Comments_CreateComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Comments/CreateComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateComment Choreo.
     *
     * @param GitHub_GistsAPI_Comments_CreateComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_CreateComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_CreateComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Comments_CreateComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Comments_CreateComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_CreateComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateComment Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Body input for this CreateComment Choreo.
     *
     * @param string $value (required, string) The text for the comment.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the ID input for this CreateComment Choreo.
     *
     * @param string $value (required, string) The id of the gist to comment on.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the CreateComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_CreateComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateComment execution.
     * @param GitHub_GistsAPI_Comments_CreateComment $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Comments_CreateComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_CreateComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_CreateComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Comments_CreateComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateComment execution.
     *
     * @return GitHub_GistsAPI_Comments_CreateComment_Results New results object.
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
     * Wraps results in appropriate results class for this CreateComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_CreateComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Comments_CreateComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_CreateComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_CreateComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this CreateComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this CreateComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this CreateComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a collaborator to a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_AddCollaborator extends Temboo_Choreography
{
    /**
     * Adds a collaborator to a specified repository.
     *
     * @param Temboo_Session $session The session that owns this AddCollaborator Choreo.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Collaborators/AddCollaborator/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddCollaborator Choreo.
     *
     * @param GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Collaborators_AddCollaborator_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddCollaborator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddCollaborator Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddCollaborator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddCollaborator input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddCollaborator Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Collaborator input for this AddCollaborator Choreo.
     *
     * @param string $value (required, string) The username of the collaborator to check.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setCollaborator($value)
    {
        return $this->set('Collaborator', $value);
    }

    /**
     * Set the value for the Repo input for this AddCollaborator Choreo.
     *
     * @param string $value (required, string) The name of the repo to add a collaborator to.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this AddCollaborator Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the AddCollaborator Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_AddCollaborator_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddCollaborator Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddCollaborator execution.
     * @param GitHub_ReposAPI_Collaborators_AddCollaborator $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Collaborators_AddCollaborator $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddCollaborator execution.
     *
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Results New results object.
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
     * Wraps results in appropriate results class for this AddCollaborator execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Collaborators_AddCollaborator_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddCollaborator Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_AddCollaborator_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddCollaborator Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this AddCollaborator execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this AddCollaborator execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this AddCollaborator execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Checks whether or not a gist is starred.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CheckGist extends Temboo_Choreography
{
    /**
     * Checks whether or not a gist is starred.
     *
     * @param Temboo_Session $session The session that owns this CheckGist Choreo.
     * @return GitHub_GistsAPI_Gists_CheckGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/CheckGist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CheckGist Choreo.
     *
     * @param GitHub_GistsAPI_Gists_CheckGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_CheckGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_CheckGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_CheckGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CheckGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_CheckGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CheckGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CheckGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CheckGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CheckGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CheckGist Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this CheckGist Choreo.
     *
     * @param string $value (required, string) The id for the gist you want to check.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the CheckGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CheckGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CheckGist Choreo.
     *
     * @param Temboo_Session $session The session that owns this CheckGist execution.
     * @param GitHub_GistsAPI_Gists_CheckGist $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_CheckGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_CheckGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_CheckGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_CheckGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CheckGist execution.
     *
     * @return GitHub_GistsAPI_Gists_CheckGist_Results New results object.
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
     * Wraps results in appropriate results class for this CheckGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_CheckGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_CheckGist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CheckGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CheckGist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CheckGist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_CheckGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this CheckGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this CheckGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this CheckGist execution.
     *
     * @return string (string) A boolean flag that indicates whether or not the gist is starred.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a tag object.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_CreateTag extends Temboo_Choreography
{
    /**
     * Creates a tag object.
     *
     * @param Temboo_Session $session The session that owns this CreateTag Choreo.
     * @return GitHub_GitDataAPI_Tags_CreateTag New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/Tags/CreateTag/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateTag Choreo.
     *
     * @param GitHub_GitDataAPI_Tags_CreateTag_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Tags_CreateTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_Tags_CreateTag_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateTag Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_Tags_CreateTag_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateTag Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_CreateTag_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateTag Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateTag input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateTag Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Message input for this CreateTag Choreo.
     *
     * @param string $value (required, string) The tag message.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the Object input for this CreateTag Choreo.
     *
     * @param string $value (required, string) The SHA of the git object that is being tagged.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setObject($value)
    {
        return $this->set('Object', $value);
    }

    /**
     * Set the value for the Repo input for this CreateTag Choreo.
     *
     * @param string $value (required, string) The name of the repo associated with the tag being created.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the Tag input for this CreateTag Choreo.
     *
     * @param string $value (required, string) A string to use for the tag (i.e. v0.0.1).
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }

    /**
     * Set the value for the TaggerDate input for this CreateTag Choreo.
     *
     * @param string $value (required, date) A timestamp of when the object is tagged. Should be formatted like: 2011-06-17T14:53:35-07:00.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setTaggerDate($value)
    {
        return $this->set('TaggerDate', $value);
    }

    /**
     * Set the value for the TaggerEmail input for this CreateTag Choreo.
     *
     * @param string $value (required, string) The email of the author of the tag.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setTaggerEmail($value)
    {
        return $this->set('TaggerEmail', $value);
    }

    /**
     * Set the value for the TaggerName input for this CreateTag Choreo.
     *
     * @param string $value (required, string) The name of the author of the tag.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setTaggerName($value)
    {
        return $this->set('TaggerName', $value);
    }

    /**
     * Set the value for the Type input for this CreateTag Choreo.
     *
     * @param string $value (required, string) The type of object that is being tagged. Valid values are: commit, tree, or blob.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the User input for this CreateTag Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateTag Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_CreateTag_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateTag Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateTag execution.
     * @param GitHub_GitDataAPI_Tags_CreateTag $choreo The choreography object for this execution.
     * @param GitHub_GitDataAPI_Tags_CreateTag_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Tags_CreateTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_Tags_CreateTag $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateTag execution.
     *
     * @return GitHub_GitDataAPI_Tags_CreateTag_Results New results object.
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
     * Wraps results in appropriate results class for this CreateTag execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_Tags_CreateTag_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateTag Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_CreateTag_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateTag Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this CreateTag execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this CreateTag execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this CreateTag execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of collaborators for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_ListCollaborators extends Temboo_Choreography
{
    /**
     * Retrieves a list of collaborators for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListCollaborators Choreo.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Collaborators/ListCollaborators/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCollaborators Choreo.
     *
     * @param GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Collaborators_ListCollaborators_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCollaborators Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCollaborators Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCollaborators Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCollaborators input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListCollaborators Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListCollaborators Choreo.
     *
     * @param string $value (required, string) The name of the repo that has the collaborators to retrieve.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListCollaborators Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListCollaborators Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_ListCollaborators_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCollaborators Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCollaborators execution.
     * @param GitHub_ReposAPI_Collaborators_ListCollaborators $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Collaborators_ListCollaborators $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCollaborators execution.
     *
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Results New results object.
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
     * Wraps results in appropriate results class for this ListCollaborators execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Collaborators_ListCollaborators_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCollaborators Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_ListCollaborators_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCollaborators Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListCollaborators execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListCollaborators execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListCollaborators execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified reference.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_DeleteReference extends Temboo_Choreography
{
    /**
     * Deletes a specified reference.
     *
     * @param Temboo_Session $session The session that owns this DeleteReference Choreo.
     * @return GitHub_GitDataAPI_References_DeleteReference New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/References/DeleteReference/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteReference Choreo.
     *
     * @param GitHub_GitDataAPI_References_DeleteReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_DeleteReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_DeleteReference_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_References_DeleteReference_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteReference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_References_DeleteReference_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteReference Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_DeleteReference_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteReference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteReference input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteReference Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Ref input for this DeleteReference Choreo.
     *
     * @param string $value (required, string) The name of the fully qualified reference to delete. Must be formatted as refs/heads/branch. Refs can be retrieved by running the GetAllReferences and parsing the value for "ref".
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this DeleteReference Choreo.
     *
     * @param string $value (required, string) The name of the repo associated with the reference that's being deleted.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this DeleteReference Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the DeleteReference Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_DeleteReference_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteReference Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteReference execution.
     * @param GitHub_GitDataAPI_References_DeleteReference $choreo The choreography object for this execution.
     * @param GitHub_GitDataAPI_References_DeleteReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_DeleteReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_DeleteReference_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_References_DeleteReference $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteReference execution.
     *
     * @return GitHub_GitDataAPI_References_DeleteReference_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteReference execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_DeleteReference_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_References_DeleteReference_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteReference Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_DeleteReference_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteReference Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_DeleteReference_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this DeleteReference execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this DeleteReference execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteReference execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of tags for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTags extends Temboo_Choreography
{
    /**
     * Retrieves a list of tags for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListTags Choreo.
     * @return GitHub_ReposAPI_Repos_ListTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListTags/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTags Choreo.
     *
     * @param GitHub_ReposAPI_Repos_ListTags_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTags Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListTags Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListTags Choreo.
     *
     * @param string $value (required, string) The name of the repo to list tags for.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListTags Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListTags Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTags Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTags execution.
     * @param GitHub_ReposAPI_Repos_ListTags $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_ListTags_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTags execution.
     *
     * @return GitHub_ReposAPI_Repos_ListTags_Results New results object.
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
     * Wraps results in appropriate results class for this ListTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListTags_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTags Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTags_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTags Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this ListTags execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListTags execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListTags execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves forks for a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_GetForks extends Temboo_Choreography
{
    /**
     * Retrieves forks for a specified repository.
     *
     * @param Temboo_Session $session The session that owns this GetForks Choreo.
     * @return GitHub_ReposAPI_Forks_GetForks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Forks/GetForks/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetForks Choreo.
     *
     * @param GitHub_ReposAPI_Forks_GetForks_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Forks_GetForks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Forks_GetForks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Forks_GetForks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetForks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Forks_GetForks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetForks Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_GetForks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetForks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetForks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetForks Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetForks Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the Sort input for this GetForks Choreo.
     *
     * @param string $value (optional, string) Valid values are: newest, oldest, or watchers. Default is "newest".
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the User input for this GetForks Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetForks Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_GetForks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetForks Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetForks execution.
     * @param GitHub_ReposAPI_Forks_GetForks $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Forks_GetForks_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Forks_GetForks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Forks_GetForks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Forks_GetForks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetForks execution.
     *
     * @return GitHub_ReposAPI_Forks_GetForks_Results New results object.
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
     * Wraps results in appropriate results class for this GetForks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Forks_GetForks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Forks_GetForks_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetForks Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_GetForks_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetForks Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Forks_GetForks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetForks execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetForks execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetForks execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a comment on a specified commit.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_CreateCommitComment extends Temboo_Choreography
{
    /**
     * Creates a comment on a specified commit.
     *
     * @param Temboo_Session $session The session that owns this CreateCommitComment Choreo.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/CreateCommitComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateCommitComment Choreo.
     *
     * @param GitHub_ReposAPI_Comments_CreateCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_CreateCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_CreateCommitComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCommitComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_CreateCommitComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCommitComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_CreateCommitComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateCommitComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCommitComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateCommitComment Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Body input for this CreateCommitComment Choreo.
     *
     * @param string $value (required, string) The comment text.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the Line input for this CreateCommitComment Choreo.
     *
     * @param int $value (required, integer) The line number in the file to comment on.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setLine($value)
    {
        return $this->set('Line', $value);
    }

    /**
     * Set the value for the Path input for this CreateCommitComment Choreo.
     *
     * @param string $value (required, string) The relative path of the file to comment on.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Position input for this CreateCommitComment Choreo.
     *
     * @param int $value (required, integer) The line index in the diff to comment on.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setPosition($value)
    {
        return $this->set('Position', $value);
    }

    /**
     * Set the value for the Repo input for this CreateCommitComment Choreo.
     *
     * @param string $value (required, string) The name of the repo that the comment is associated with.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this CreateCommitComment Choreo.
     *
     * @param string $value (required, string) The SHA or id of the commit.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this CreateCommitComment Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateCommitComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_CreateCommitComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCommitComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateCommitComment execution.
     * @param GitHub_ReposAPI_Comments_CreateCommitComment $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Comments_CreateCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_CreateCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_CreateCommitComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCommitComment execution.
     *
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Results New results object.
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
     * Wraps results in appropriate results class for this CreateCommitComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_CreateCommitComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateCommitComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_CreateCommitComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateCommitComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this CreateCommitComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this CreateCommitComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this CreateCommitComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single comment.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_GetComment extends Temboo_Choreography
{
    /**
     * Retrieves a single comment.
     *
     * @param Temboo_Session $session The session that owns this GetComment Choreo.
     * @return GitHub_GistsAPI_Comments_GetComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Comments/GetComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetComment Choreo.
     *
     * @param GitHub_GistsAPI_Comments_GetComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_GetComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_GetComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Comments_GetComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Comments_GetComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_GetComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs New instance.
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
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ID input for this GetComment Choreo.
     *
     * @param string $value (required, string) The id of the comment to retrieve.
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the GetComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_GetComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetComment execution.
     * @param GitHub_GistsAPI_Comments_GetComment $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Comments_GetComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_GetComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_GetComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Comments_GetComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComment execution.
     *
     * @return GitHub_GistsAPI_Comments_GetComment_Results New results object.
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
     * @return GitHub_GistsAPI_Comments_GetComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Comments_GetComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetComment Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_GetComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_GetComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a fork for the authenticated user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_CreateFork extends Temboo_Choreography
{
    /**
     * Creates a fork for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this CreateFork Choreo.
     * @return GitHub_ReposAPI_Forks_CreateFork New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Forks/CreateFork/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFork Choreo.
     *
     * @param GitHub_ReposAPI_Forks_CreateFork_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Forks_CreateFork_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Forks_CreateFork_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Forks_CreateFork_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFork Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Forks_CreateFork_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFork Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_CreateFork_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFork Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFork input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateFork Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Org input for this CreateFork Choreo.
     *
     * @param string $value (optional, string) The organization login. The repository will be forked into this organization.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setOrg($value)
    {
        return $this->set('Org', $value);
    }

    /**
     * Set the value for the Repo input for this CreateFork Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this CreateFork Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateFork Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_CreateFork_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFork Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFork execution.
     * @param GitHub_ReposAPI_Forks_CreateFork $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Forks_CreateFork_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Forks_CreateFork_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Forks_CreateFork_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Forks_CreateFork $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFork execution.
     *
     * @return GitHub_ReposAPI_Forks_CreateFork_Results New results object.
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
     * Wraps results in appropriate results class for this CreateFork execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Forks_CreateFork_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Forks_CreateFork_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFork Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_CreateFork_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFork Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Forks_CreateFork_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this CreateFork execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this CreateFork execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFork execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieces a list of repositories for the specified organization.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListReposByOrg extends Temboo_Choreography
{
    /**
     * Retrieces a list of repositories for the specified organization.
     *
     * @param Temboo_Session $session The session that owns this ListReposByOrg Choreo.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListReposByOrg/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListReposByOrg Choreo.
     *
     * @param GitHub_ReposAPI_Repos_ListReposByOrg_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListReposByOrg_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListReposByOrg_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListReposByOrg Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListReposByOrg_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListReposByOrg Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListReposByOrg_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListReposByOrg Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListReposByOrg input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListReposByOrg Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Org input for this ListReposByOrg Choreo.
     *
     * @param string $value (required, string) The name of the organization.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setOrg($value)
    {
        return $this->set('Org', $value);
    }

    /**
     * Set the value for the Page input for this ListReposByOrg Choreo.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Type input for this ListReposByOrg Choreo.
     *
     * @param string $value (optional, string) The type of repos to return. Valid values are: all (the default), public, member, or private.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the ListReposByOrg Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListReposByOrg_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListReposByOrg Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListReposByOrg execution.
     * @param GitHub_ReposAPI_Repos_ListReposByOrg $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Repos_ListReposByOrg_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListReposByOrg_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListReposByOrg $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListReposByOrg execution.
     *
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Results New results object.
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
     * Wraps results in appropriate results class for this ListReposByOrg execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListReposByOrg_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListReposByOrg Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListReposByOrg_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListReposByOrg Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LastPage" output from this ListReposByOrg execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }
    /**
     * Retrieve the value for the "Limit" output from this ListReposByOrg execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "NextPage" output from this ListReposByOrg execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }
    /**
     * Retrieve the value for the "Remaining" output from this ListReposByOrg execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this ListReposByOrg execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns an individual gist with a given id.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_GetGist extends Temboo_Choreography
{
    /**
     * Returns an individual gist with a given id.
     *
     * @param Temboo_Session $session The session that owns this GetGist Choreo.
     * @return GitHub_GistsAPI_Gists_GetGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/GetGist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetGist Choreo.
     *
     * @param GitHub_GistsAPI_Gists_GetGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_GetGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_GetGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_GetGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_GetGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_GetGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetGist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetGist Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this GetGist Choreo.
     *
     * @param string $value (required, string) The id for the gist you want to retrieve.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the GetGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_GetGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetGist Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetGist execution.
     * @param GitHub_GistsAPI_Gists_GetGist $choreo The choreography object for this execution.
     * @param GitHub_GistsAPI_Gists_GetGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_GetGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_GetGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_GetGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetGist execution.
     *
     * @return GitHub_GistsAPI_Gists_GetGist_Results New results object.
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
     * Wraps results in appropriate results class for this GetGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_GetGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_GetGist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetGist Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_GetGist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetGist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_GetGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the contents of any file or directory in a repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetArchive extends Temboo_Choreography
{
    /**
     * Returns the contents of any file or directory in a repository.
     *
     * @param Temboo_Session $session The session that owns this GetArchive Choreo.
     * @return GitHub_ReposAPI_Contents_GetArchive New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Contents/GetArchive/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetArchive Choreo.
     *
     * @param GitHub_ReposAPI_Contents_GetArchive_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetArchive_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetArchive_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Contents_GetArchive_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetArchive Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Contents_GetArchive_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetArchive Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetArchive_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetArchive Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetArchive input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetArchive Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this GetArchive Choreo.
     *
     * @param string $value (optional, string) The content path.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Ref input for this GetArchive Choreo.
     *
     * @param string $value (optional, string) The name of the commit, branch, or tag. Defaults to "master".
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this GetArchive Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetArchive Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetArchive Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetArchive_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetArchive Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetArchive execution.
     * @param GitHub_ReposAPI_Contents_GetArchive $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Contents_GetArchive_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetArchive_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetArchive_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Contents_GetArchive $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetArchive execution.
     *
     * @return GitHub_ReposAPI_Contents_GetArchive_Results New results object.
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
     * Wraps results in appropriate results class for this GetArchive execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetArchive_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Contents_GetArchive_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetArchive Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetArchive_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetArchive Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetArchive_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetArchive execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetArchive execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetArchive execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the README file for a repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetReadMe extends Temboo_Choreography
{
    /**
     * Retrieves the README file for a repository.
     *
     * @param Temboo_Session $session The session that owns this GetReadMe Choreo.
     * @return GitHub_ReposAPI_Contents_GetReadMe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Contents/GetReadMe/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetReadMe Choreo.
     *
     * @param GitHub_ReposAPI_Contents_GetReadMe_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetReadMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Contents_GetReadMe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReadMe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Contents_GetReadMe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReadMe Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetReadMe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetReadMe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReadMe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetReadMe Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Ref input for this GetReadMe Choreo.
     *
     * @param string $value (optional, string) The name of the commit, branch, or tag. Defaults to "master".
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this GetReadMe Choreo.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetReadMe Choreo.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetReadMe Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetReadMe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReadMe Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetReadMe execution.
     * @param GitHub_ReposAPI_Contents_GetReadMe $choreo The choreography object for this execution.
     * @param GitHub_ReposAPI_Contents_GetReadMe_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetReadMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Contents_GetReadMe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReadMe execution.
     *
     * @return GitHub_ReposAPI_Contents_GetReadMe_Results New results object.
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
     * Wraps results in appropriate results class for this GetReadMe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Contents_GetReadMe_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetReadMe Choreo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetReadMe_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetReadMe Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Limit" output from this GetReadMe execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }
    /**
     * Retrieve the value for the "Remaining" output from this GetReadMe execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
    /**
     * Retrieve the value for the "Response" output from this GetReadMe execution.
     *
     * @return string (json) The response from GitHub.
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
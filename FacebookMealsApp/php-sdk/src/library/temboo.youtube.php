<?php

/**
 * Temboo PHP SDK YouTube classes
 *
 * Execute Choreographies from the Temboo YouTube bundle.
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
 * @subpackage YouTube
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns a collection of playlists that match the provided IDs.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListPlaylistsByID extends Temboo_Choreography
{
    /**
     * Returns a collection of playlists that match the provided IDs.
     *
     * @param Temboo_Session $session The session that owns this ListPlaylistsByID Choreo.
     * @return YouTube_Playlists_ListPlaylistsByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Playlists/ListPlaylistsByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPlaylistsByID Choreo.
     *
     * @param YouTube_Playlists_ListPlaylistsByID_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_ListPlaylistsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_ListPlaylistsByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Playlists_ListPlaylistsByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPlaylistsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Playlists_ListPlaylistsByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPlaylistsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListPlaylistsByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPlaylistsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPlaylistsByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPlaylistsByID Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListPlaylistsByID Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListPlaylistsByID Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListPlaylistsByID Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListPlaylistsByID Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListPlaylistsByID Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListPlaylistsByID Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListPlaylistsByID Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of playlist resource properties that the API response will include. Part names that you can pass are: id, snippet, and status.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the PlaylistID input for this ListPlaylistsByID Choreo.
     *
     * @param string $value (required, string) A comma-separated list of the YouTube playlist ID(s) for the resource(s) that are being retrieved.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setPlaylistID($value)
    {
        return $this->set('PlaylistID', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListPlaylistsByID Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_ListPlaylistsByID_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListPlaylistsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListPlaylistsByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPlaylistsByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPlaylistsByID execution.
     * @param YouTube_Playlists_ListPlaylistsByID $choreo The choreography object for this execution.
     * @param YouTube_Playlists_ListPlaylistsByID_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_ListPlaylistsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_ListPlaylistsByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Playlists_ListPlaylistsByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPlaylistsByID execution.
     *
     * @return YouTube_Playlists_ListPlaylistsByID_Results New results object.
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
     * Wraps results in appropriate results class for this ListPlaylistsByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Playlists_ListPlaylistsByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Playlists_ListPlaylistsByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPlaylistsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListPlaylistsByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPlaylistsByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Playlists_ListPlaylistsByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListPlaylistsByID execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListPlaylistsByID execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Deletes a YouTube playlist.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_DeletePlaylist extends Temboo_Choreography
{
    /**
     * Deletes a YouTube playlist.
     *
     * @param Temboo_Session $session The session that owns this DeletePlaylist Choreo.
     * @return YouTube_Playlists_DeletePlaylist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Playlists/DeletePlaylist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeletePlaylist Choreo.
     *
     * @param YouTube_Playlists_DeletePlaylist_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_DeletePlaylist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_DeletePlaylist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Playlists_DeletePlaylist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeletePlaylist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_DeletePlaylist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Playlists_DeletePlaylist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeletePlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_DeletePlaylist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeletePlaylist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_DeletePlaylist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeletePlaylist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Playlists_DeletePlaylist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Playlists_DeletePlaylist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeletePlaylist Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Playlists_DeletePlaylist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DeletePlaylist Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_DeletePlaylist_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DeletePlaylist Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_DeletePlaylist_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the PlaylistID input for this DeletePlaylist Choreo.
     *
     * @param string $value (required, string) The id of the playlist to delete.
     * @return YouTube_Playlists_DeletePlaylist_Inputs For method chaining.
     */
    public function setPlaylistID($value)
    {
        return $this->set('PlaylistID', $value);
    }

    /**
     * Set the value for the RefreshToken input for this DeletePlaylist Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_DeletePlaylist_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the DeletePlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_DeletePlaylist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeletePlaylist Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeletePlaylist execution.
     * @param YouTube_Playlists_DeletePlaylist $choreo The choreography object for this execution.
     * @param YouTube_Playlists_DeletePlaylist_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_DeletePlaylist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_DeletePlaylist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Playlists_DeletePlaylist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeletePlaylist execution.
     *
     * @return YouTube_Playlists_DeletePlaylist_Results New results object.
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
     * Wraps results in appropriate results class for this DeletePlaylist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Playlists_DeletePlaylist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Playlists_DeletePlaylist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeletePlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_DeletePlaylist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeletePlaylist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Playlists_DeletePlaylist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this DeletePlaylist execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this DeletePlaylist execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Creates a playlist.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_InsertPlaylist extends Temboo_Choreography
{
    /**
     * Creates a playlist.
     *
     * @param Temboo_Session $session The session that owns this InsertPlaylist Choreo.
     * @return YouTube_Playlists_InsertPlaylist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Playlists/InsertPlaylist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InsertPlaylist Choreo.
     *
     * @param YouTube_Playlists_InsertPlaylist_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_InsertPlaylist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_InsertPlaylist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Playlists_InsertPlaylist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InsertPlaylist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_InsertPlaylist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Playlists_InsertPlaylist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InsertPlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_InsertPlaylist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InsertPlaylist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_InsertPlaylist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InsertPlaylist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this InsertPlaylist Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this InsertPlaylist Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this InsertPlaylist Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Description input for this InsertPlaylist Choreo.
     *
     * @param string $value (optional, string) The playlist's description.
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Fields input for this InsertPlaylist Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Part input for this InsertPlaylist Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields that are being set and that will be returned in the response (i.e. snippet,status).
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the PrivacyStatus input for this InsertPlaylist Choreo.
     *
     * @param string $value (optional, string) The playlist's privacy status. Valid values are: private or public.
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setPrivacyStatus($value)
    {
        return $this->set('PrivacyStatus', $value);
    }

    /**
     * Set the value for the RefreshToken input for this InsertPlaylist Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the Title input for this InsertPlaylist Choreo.
     *
     * @param string $value (required, string) The title of the playlist.
     * @return YouTube_Playlists_InsertPlaylist_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }
}


/**
 * Execution object for the InsertPlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_InsertPlaylist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InsertPlaylist Choreo.
     *
     * @param Temboo_Session $session The session that owns this InsertPlaylist execution.
     * @param YouTube_Playlists_InsertPlaylist $choreo The choreography object for this execution.
     * @param YouTube_Playlists_InsertPlaylist_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_InsertPlaylist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_InsertPlaylist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Playlists_InsertPlaylist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InsertPlaylist execution.
     *
     * @return YouTube_Playlists_InsertPlaylist_Results New results object.
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
     * Wraps results in appropriate results class for this InsertPlaylist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Playlists_InsertPlaylist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Playlists_InsertPlaylist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InsertPlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_InsertPlaylist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InsertPlaylist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Playlists_InsertPlaylist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this InsertPlaylist execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this InsertPlaylist execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of guide categories available in the specified country.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GuideCategories_ListGuideCategoriesByRegion extends Temboo_Choreography
{
    /**
     * Returns a list of guide categories available in the specified country.
     *
     * @param Temboo_Session $session The session that owns this ListGuideCategoriesByRegion Choreo.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/GuideCategories/ListGuideCategoriesByRegion/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListGuideCategoriesByRegion Choreo.
     *
     * @param YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs|array $inputs (optional) Inputs as YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_GuideCategories_ListGuideCategoriesByRegion_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListGuideCategoriesByRegion Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListGuideCategoriesByRegion Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListGuideCategoriesByRegion Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListGuideCategoriesByRegion input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListGuideCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListGuideCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListGuideCategoriesByRegion Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListGuideCategoriesByRegion Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListGuideCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the H1 input for this ListGuideCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) The hl parameter specifies the language that should be used for text values in the API response. The default value is en_US.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setH1($value)
    {
        return $this->set('H1', $value);
    }

    /**
     * Set the value for the Part input for this ListGuideCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of one or more guideCategory resource properties that the API response will include. Valid values are: id and snippet.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListGuideCategoriesByRegion Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the RegionCode input for this ListGuideCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) Indicates to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. Defaults to US.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs For method chaining.
     */
    public function setRegionCode($value)
    {
        return $this->set('RegionCode', $value);
    }
}


/**
 * Execution object for the ListGuideCategoriesByRegion Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GuideCategories_ListGuideCategoriesByRegion_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListGuideCategoriesByRegion Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListGuideCategoriesByRegion execution.
     * @param YouTube_GuideCategories_ListGuideCategoriesByRegion $choreo The choreography object for this execution.
     * @param YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs|array $inputs (optional) Inputs as YouTube_GuideCategories_ListGuideCategoriesByRegion_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_GuideCategories_ListGuideCategoriesByRegion $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListGuideCategoriesByRegion execution.
     *
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Results New results object.
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
     * Wraps results in appropriate results class for this ListGuideCategoriesByRegion execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_GuideCategories_ListGuideCategoriesByRegion_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListGuideCategoriesByRegion Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GuideCategories_ListGuideCategoriesByRegion_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListGuideCategoriesByRegion Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_GuideCategories_ListGuideCategoriesByRegion_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListGuideCategoriesByRegion execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListGuideCategoriesByRegion execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of channels owned by the authenticated user.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListMyChannels extends Temboo_Choreography
{
    /**
     * Returns a list of channels owned by the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this ListMyChannels Choreo.
     * @return YouTube_Channels_ListMyChannels New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Channels/ListMyChannels/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMyChannels Choreo.
     *
     * @param YouTube_Channels_ListMyChannels_Inputs|array $inputs (optional) Inputs as YouTube_Channels_ListMyChannels_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Channels_ListMyChannels_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Channels_ListMyChannels_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMyChannels Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Channels_ListMyChannels_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Channels_ListMyChannels_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMyChannels Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListMyChannels_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMyChannels Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Channels_ListMyChannels_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMyChannels input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListMyChannels Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListMyChannels Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListMyChannels Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListMyChannels Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListMyChannels Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListMyChannels Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListMyChannels Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of channels resource properties that the API response will include. Part names that you can pass are: id, snippet, contentDetails, statistics, and topicDetails.
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListMyChannels Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListMyChannels_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListMyChannels Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListMyChannels_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMyChannels Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMyChannels execution.
     * @param YouTube_Channels_ListMyChannels $choreo The choreography object for this execution.
     * @param YouTube_Channels_ListMyChannels_Inputs|array $inputs (optional) Inputs as YouTube_Channels_ListMyChannels_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Channels_ListMyChannels_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Channels_ListMyChannels $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMyChannels execution.
     *
     * @return YouTube_Channels_ListMyChannels_Results New results object.
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
     * Wraps results in appropriate results class for this ListMyChannels execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Channels_ListMyChannels_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Channels_ListMyChannels_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMyChannels Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListMyChannels_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMyChannels Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Channels_ListMyChannels_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListMyChannels execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListMyChannels execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a collection of playlists owned by the authenticated user.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListMyPlaylists extends Temboo_Choreography
{
    /**
     * Returns a collection of playlists owned by the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this ListMyPlaylists Choreo.
     * @return YouTube_Playlists_ListMyPlaylists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Playlists/ListMyPlaylists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMyPlaylists Choreo.
     *
     * @param YouTube_Playlists_ListMyPlaylists_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_ListMyPlaylists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_ListMyPlaylists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Playlists_ListMyPlaylists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMyPlaylists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Playlists_ListMyPlaylists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMyPlaylists Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListMyPlaylists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMyPlaylists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMyPlaylists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListMyPlaylists Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListMyPlaylists Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListMyPlaylists Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListMyPlaylists Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListMyPlaylists Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListMyPlaylists Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListMyPlaylists Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of playlist resource properties that the API response will include. Part names that you can pass are: id, snippet, and status.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListMyPlaylists Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_ListMyPlaylists_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListMyPlaylists Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListMyPlaylists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMyPlaylists Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMyPlaylists execution.
     * @param YouTube_Playlists_ListMyPlaylists $choreo The choreography object for this execution.
     * @param YouTube_Playlists_ListMyPlaylists_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_ListMyPlaylists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_ListMyPlaylists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Playlists_ListMyPlaylists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMyPlaylists execution.
     *
     * @return YouTube_Playlists_ListMyPlaylists_Results New results object.
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
     * Wraps results in appropriate results class for this ListMyPlaylists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Playlists_ListMyPlaylists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Playlists_ListMyPlaylists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMyPlaylists Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListMyPlaylists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMyPlaylists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Playlists_ListMyPlaylists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListMyPlaylists execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListMyPlaylists execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of subscription for a specified channel.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListSubscriptionsByChannel extends Temboo_Choreography
{
    /**
     * Returns a list of subscription for a specified channel.
     *
     * @param Temboo_Session $session The session that owns this ListSubscriptionsByChannel Choreo.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Subscriptions/ListSubscriptionsByChannel/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListSubscriptionsByChannel Choreo.
     *
     * @param YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Subscriptions_ListSubscriptionsByChannel_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListSubscriptionsByChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListSubscriptionsByChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListSubscriptionsByChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListSubscriptionsByChannel input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ChannelID input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (required, string) Indicates that the API only return this channel's subscriptions.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setChannelID($value)
    {
        return $this->set('ChannelID', $value);
    }

    /**
     * Set the value for the ClientID input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the ForChannelId input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of channel IDs. The response will include only subscription matching these channels.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setForChannelId($value)
    {
        return $this->set('ForChannelId', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListSubscriptionsByChannel Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Order input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (optional, string) Indicates how the results are sorted. Valid values are: alphabetical, relevance, or unread.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PageToken input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include. Valid values are: id, snippet, and contentDetails.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListSubscriptionsByChannel Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListSubscriptionsByChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListSubscriptionsByChannel_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListSubscriptionsByChannel Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListSubscriptionsByChannel execution.
     * @param YouTube_Subscriptions_ListSubscriptionsByChannel $choreo The choreography object for this execution.
     * @param YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_ListSubscriptionsByChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Subscriptions_ListSubscriptionsByChannel $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListSubscriptionsByChannel execution.
     *
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Results New results object.
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
     * Wraps results in appropriate results class for this ListSubscriptionsByChannel execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Subscriptions_ListSubscriptionsByChannel_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListSubscriptionsByChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListSubscriptionsByChannel_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListSubscriptionsByChannel Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Subscriptions_ListSubscriptionsByChannel_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListSubscriptionsByChannel execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListSubscriptionsByChannel execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of categories that match the provided IDs.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_VideoCategories_ListCategoriesByID extends Temboo_Choreography
{
    /**
     * Returns a list of categories that match the provided IDs.
     *
     * @param Temboo_Session $session The session that owns this ListCategoriesByID Choreo.
     * @return YouTube_VideoCategories_ListCategoriesByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/VideoCategories/ListCategoriesByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCategoriesByID Choreo.
     *
     * @param YouTube_VideoCategories_ListCategoriesByID_Inputs|array $inputs (optional) Inputs as YouTube_VideoCategories_ListCategoriesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_VideoCategories_ListCategoriesByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_VideoCategories_ListCategoriesByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCategoriesByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_VideoCategories_ListCategoriesByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCategoriesByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_VideoCategories_ListCategoriesByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCategoriesByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCategoriesByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListCategoriesByID Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListCategoriesByID Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CategoryID input for this ListCategoriesByID Choreo.
     *
     * @param string $value (conditional, string) A comma-separated list of the YouTube video category ID(s) that are being retrieved.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the ClientID input for this ListCategoriesByID Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListCategoriesByID Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListCategoriesByID Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the H1 input for this ListCategoriesByID Choreo.
     *
     * @param string $value (optional, string) The hl parameter specifies the language that should be used for text values in the API response. The default value is en_US.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setH1($value)
    {
        return $this->set('H1', $value);
    }

    /**
     * Set the value for the Part input for this ListCategoriesByID Choreo.
     *
     * @param string $value (optional, string) Specifies the videoCategory resource parts that the API response will include. Valid values are: id and snippet.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListCategoriesByID Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_VideoCategories_ListCategoriesByID_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListCategoriesByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_VideoCategories_ListCategoriesByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCategoriesByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCategoriesByID execution.
     * @param YouTube_VideoCategories_ListCategoriesByID $choreo The choreography object for this execution.
     * @param YouTube_VideoCategories_ListCategoriesByID_Inputs|array $inputs (optional) Inputs as YouTube_VideoCategories_ListCategoriesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_VideoCategories_ListCategoriesByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_VideoCategories_ListCategoriesByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCategoriesByID execution.
     *
     * @return YouTube_VideoCategories_ListCategoriesByID_Results New results object.
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
     * Wraps results in appropriate results class for this ListCategoriesByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_VideoCategories_ListCategoriesByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_VideoCategories_ListCategoriesByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCategoriesByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_VideoCategories_ListCategoriesByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCategoriesByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_VideoCategories_ListCategoriesByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListCategoriesByID execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListCategoriesByID execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a collection of playlists associated with a specified channel.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListPlaylistsByChannel extends Temboo_Choreography
{
    /**
     * Returns a collection of playlists associated with a specified channel.
     *
     * @param Temboo_Session $session The session that owns this ListPlaylistsByChannel Choreo.
     * @return YouTube_Playlists_ListPlaylistsByChannel New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Playlists/ListPlaylistsByChannel/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPlaylistsByChannel Choreo.
     *
     * @param YouTube_Playlists_ListPlaylistsByChannel_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_ListPlaylistsByChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Playlists_ListPlaylistsByChannel_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPlaylistsByChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Playlists_ListPlaylistsByChannel_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPlaylistsByChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListPlaylistsByChannel_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPlaylistsByChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPlaylistsByChannel input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPlaylistsByChannel Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListPlaylistsByChannel Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth2 process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ChannelID input for this ListPlaylistsByChannel Choreo.
     *
     * @param string $value (required, string) Indicates that only the specified channel's playlists should be returned.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setChannelID($value)
    {
        return $this->set('ChannelID', $value);
    }

    /**
     * Set the value for the ClientID input for this ListPlaylistsByChannel Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required unless providing a valid AccessToken.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListPlaylistsByChannel Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required unless providing a valid AccessToken.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListPlaylistsByChannel Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListPlaylistsByChannel Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListPlaylistsByChannel Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListPlaylistsByChannel Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of playlist resource properties that the API response will include. Part names that you can pass are: id, snippet, and status.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListPlaylistsByChannel Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListPlaylistsByChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListPlaylistsByChannel_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPlaylistsByChannel Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPlaylistsByChannel execution.
     * @param YouTube_Playlists_ListPlaylistsByChannel $choreo The choreography object for this execution.
     * @param YouTube_Playlists_ListPlaylistsByChannel_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_ListPlaylistsByChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Playlists_ListPlaylistsByChannel $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPlaylistsByChannel execution.
     *
     * @return YouTube_Playlists_ListPlaylistsByChannel_Results New results object.
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
     * Wraps results in appropriate results class for this ListPlaylistsByChannel execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Playlists_ListPlaylistsByChannel_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPlaylistsByChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_ListPlaylistsByChannel_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPlaylistsByChannel Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Playlists_ListPlaylistsByChannel_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListPlaylistsByChannel execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListPlaylistsByChannel execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a collection of playlist items within a specific playlist.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_ListItemsByPlaylist extends Temboo_Choreography
{
    /**
     * Returns a collection of playlist items within a specific playlist.
     *
     * @param Temboo_Session $session The session that owns this ListItemsByPlaylist Choreo.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/PlaylistItems/ListItemsByPlaylist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListItemsByPlaylist Choreo.
     *
     * @param YouTube_PlaylistItems_ListItemsByPlaylist_Inputs|array $inputs (optional) Inputs as YouTube_PlaylistItems_ListItemsByPlaylist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_PlaylistItems_ListItemsByPlaylist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListItemsByPlaylist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_PlaylistItems_ListItemsByPlaylist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListItemsByPlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_ListItemsByPlaylist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListItemsByPlaylist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListItemsByPlaylist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListItemsByPlaylist Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of playlistItem resource properties that the API response will include. Part names that you can pass are: id, snippet, and contentDetails.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the PlaylistID input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (conditional, string) A unique ID of the playlist for which you want to retrieve playlist items.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setPlaylistID($value)
    {
        return $this->set('PlaylistID', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the VideoID input for this ListItemsByPlaylist Choreo.
     *
     * @param string $value (optional, string) Indicates that only the playlist items that contain the specified video should be returned.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Inputs For method chaining.
     */
    public function setVideoID($value)
    {
        return $this->set('VideoID', $value);
    }
}


/**
 * Execution object for the ListItemsByPlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_ListItemsByPlaylist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListItemsByPlaylist Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListItemsByPlaylist execution.
     * @param YouTube_PlaylistItems_ListItemsByPlaylist $choreo The choreography object for this execution.
     * @param YouTube_PlaylistItems_ListItemsByPlaylist_Inputs|array $inputs (optional) Inputs as YouTube_PlaylistItems_ListItemsByPlaylist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_PlaylistItems_ListItemsByPlaylist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListItemsByPlaylist execution.
     *
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Results New results object.
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
     * Wraps results in appropriate results class for this ListItemsByPlaylist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_PlaylistItems_ListItemsByPlaylist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListItemsByPlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_ListItemsByPlaylist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListItemsByPlaylist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_PlaylistItems_ListItemsByPlaylist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListItemsByPlaylist execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListItemsByPlaylist execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Deletes a YouTube subscription.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_DeleteSubscription extends Temboo_Choreography
{
    /**
     * Deletes a YouTube subscription.
     *
     * @param Temboo_Session $session The session that owns this DeleteSubscription Choreo.
     * @return YouTube_Subscriptions_DeleteSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Subscriptions/DeleteSubscription/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteSubscription Choreo.
     *
     * @param YouTube_Subscriptions_DeleteSubscription_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_DeleteSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_DeleteSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Subscriptions_DeleteSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_DeleteSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Subscriptions_DeleteSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteSubscription Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_DeleteSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_DeleteSubscription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteSubscription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Subscriptions_DeleteSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Subscriptions_DeleteSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteSubscription Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Subscriptions_DeleteSubscription_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DeleteSubscription Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_DeleteSubscription_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DeleteSubscription Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_DeleteSubscription_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the RefreshToken input for this DeleteSubscription Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_DeleteSubscription_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SubscriptionID input for this DeleteSubscription Choreo.
     *
     * @param string $value (required, string) The id of the subscription to delete.
     * @return YouTube_Subscriptions_DeleteSubscription_Inputs For method chaining.
     */
    public function setSubscriptionID($value)
    {
        return $this->set('SubscriptionID', $value);
    }
}


/**
 * Execution object for the DeleteSubscription Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_DeleteSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteSubscription Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteSubscription execution.
     * @param YouTube_Subscriptions_DeleteSubscription $choreo The choreography object for this execution.
     * @param YouTube_Subscriptions_DeleteSubscription_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_DeleteSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_DeleteSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Subscriptions_DeleteSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteSubscription execution.
     *
     * @return YouTube_Subscriptions_DeleteSubscription_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteSubscription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Subscriptions_DeleteSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Subscriptions_DeleteSubscription_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteSubscription Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_DeleteSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteSubscription Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Subscriptions_DeleteSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this DeleteSubscription execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteSubscription execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of activities for a specified channel.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListActivitiesByChannel extends Temboo_Choreography
{
    /**
     * Returns a list of activities for a specified channel.
     *
     * @param Temboo_Session $session The session that owns this ListActivitiesByChannel Choreo.
     * @return YouTube_Activities_ListActivitiesByChannel New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Activities/ListActivitiesByChannel/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListActivitiesByChannel Choreo.
     *
     * @param YouTube_Activities_ListActivitiesByChannel_Inputs|array $inputs (optional) Inputs as YouTube_Activities_ListActivitiesByChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Activities_ListActivitiesByChannel_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Activities_ListActivitiesByChannel_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListActivitiesByChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Activities_ListActivitiesByChannel_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListActivitiesByChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListActivitiesByChannel_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListActivitiesByChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListActivitiesByChannel input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ChannelID input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (required, string) The id of the channel to list activities for.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setChannelID($value)
    {
        return $this->set('ChannelID', $value);
    }

    /**
     * Set the value for the ClientID input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListActivitiesByChannel Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of one or more activity resource properties that the API response will include. Part names that you can pass are id, snippet, and contentDetails.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the PublishedAfter input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (optional, date) Returns only results created after the specified time (formatted as a RFC 3339 date-time i.e. 1970-01-01T00:00:00Z).
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setPublishedAfter($value)
    {
        return $this->set('PublishedAfter', $value);
    }

    /**
     * Set the value for the PublishedBefore input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (optional, date) Returns only results created before the specified time (formatted as a RFC 3339 date-time i.e. 1970-01-01T00:00:00Z).
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setPublishedBefore($value)
    {
        return $this->set('PublishedBefore', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListActivitiesByChannel Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_ListActivitiesByChannel_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListActivitiesByChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListActivitiesByChannel_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListActivitiesByChannel Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListActivitiesByChannel execution.
     * @param YouTube_Activities_ListActivitiesByChannel $choreo The choreography object for this execution.
     * @param YouTube_Activities_ListActivitiesByChannel_Inputs|array $inputs (optional) Inputs as YouTube_Activities_ListActivitiesByChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Activities_ListActivitiesByChannel_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Activities_ListActivitiesByChannel $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListActivitiesByChannel execution.
     *
     * @return YouTube_Activities_ListActivitiesByChannel_Results New results object.
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
     * Wraps results in appropriate results class for this ListActivitiesByChannel execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Activities_ListActivitiesByChannel_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Activities_ListActivitiesByChannel_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListActivitiesByChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListActivitiesByChannel_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListActivitiesByChannel Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Activities_ListActivitiesByChannel_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListActivitiesByChannel execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListActivitiesByChannel execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Deletes a YouTube video.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_DeleteVideo extends Temboo_Choreography
{
    /**
     * Deletes a YouTube video.
     *
     * @param Temboo_Session $session The session that owns this DeleteVideo Choreo.
     * @return YouTube_Videos_DeleteVideo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Videos/DeleteVideo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteVideo Choreo.
     *
     * @param YouTube_Videos_DeleteVideo_Inputs|array $inputs (optional) Inputs as YouTube_Videos_DeleteVideo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Videos_DeleteVideo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Videos_DeleteVideo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteVideo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Videos_DeleteVideo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Videos_DeleteVideo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteVideo Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_DeleteVideo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteVideo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Videos_DeleteVideo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteVideo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Videos_DeleteVideo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Videos_DeleteVideo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteVideo Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Videos_DeleteVideo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DeleteVideo Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Videos_DeleteVideo_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DeleteVideo Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Videos_DeleteVideo_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the RefreshToken input for this DeleteVideo Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Videos_DeleteVideo_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the VideoID input for this DeleteVideo Choreo.
     *
     * @param string $value (required, string) The id of the video to delete.
     * @return YouTube_Videos_DeleteVideo_Inputs For method chaining.
     */
    public function setVideoID($value)
    {
        return $this->set('VideoID', $value);
    }
}


/**
 * Execution object for the DeleteVideo Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_DeleteVideo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteVideo Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteVideo execution.
     * @param YouTube_Videos_DeleteVideo $choreo The choreography object for this execution.
     * @param YouTube_Videos_DeleteVideo_Inputs|array $inputs (optional) Inputs as YouTube_Videos_DeleteVideo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Videos_DeleteVideo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Videos_DeleteVideo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteVideo execution.
     *
     * @return YouTube_Videos_DeleteVideo_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteVideo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Videos_DeleteVideo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Videos_DeleteVideo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteVideo Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_DeleteVideo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteVideo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Videos_DeleteVideo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this DeleteVideo execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteVideo execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a collection of playlist items that match the list of IDs provided.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_ListItemsByID extends Temboo_Choreography
{
    /**
     * Returns a collection of playlist items that match the list of IDs provided.
     *
     * @param Temboo_Session $session The session that owns this ListItemsByID Choreo.
     * @return YouTube_PlaylistItems_ListItemsByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/PlaylistItems/ListItemsByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListItemsByID Choreo.
     *
     * @param YouTube_PlaylistItems_ListItemsByID_Inputs|array $inputs (optional) Inputs as YouTube_PlaylistItems_ListItemsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_PlaylistItems_ListItemsByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_PlaylistItems_ListItemsByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListItemsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_PlaylistItems_ListItemsByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListItemsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_ListItemsByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListItemsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListItemsByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListItemsByID Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListItemsByID Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListItemsByID Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListItemsByID Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListItemsByID Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the ItemID input for this ListItemsByID Choreo.
     *
     * @param string $value (conditional, string) A comma-separated list of IDs for playlist items to retrieve.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListItemsByID Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListItemsByID Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListItemsByID Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of playlistItem resource properties that the API response will include. Part names that you can pass are: id, snippet, and contentDetails.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListItemsByID Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the VideoID input for this ListItemsByID Choreo.
     *
     * @param string $value (optional, string) Indicates that only the playlist items that contain the specified video should be returned.
     * @return YouTube_PlaylistItems_ListItemsByID_Inputs For method chaining.
     */
    public function setVideoID($value)
    {
        return $this->set('VideoID', $value);
    }
}


/**
 * Execution object for the ListItemsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_ListItemsByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListItemsByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListItemsByID execution.
     * @param YouTube_PlaylistItems_ListItemsByID $choreo The choreography object for this execution.
     * @param YouTube_PlaylistItems_ListItemsByID_Inputs|array $inputs (optional) Inputs as YouTube_PlaylistItems_ListItemsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_PlaylistItems_ListItemsByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_PlaylistItems_ListItemsByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListItemsByID execution.
     *
     * @return YouTube_PlaylistItems_ListItemsByID_Results New results object.
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
     * Wraps results in appropriate results class for this ListItemsByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_PlaylistItems_ListItemsByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_PlaylistItems_ListItemsByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListItemsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_ListItemsByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListItemsByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_PlaylistItems_ListItemsByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListItemsByID execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListItemsByID execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Updates a video's metadata.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_UpdateVideo extends Temboo_Choreography
{
    /**
     * Updates a video's metadata.
     *
     * @param Temboo_Session $session The session that owns this UpdateVideo Choreo.
     * @return YouTube_Videos_UpdateVideo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Videos/UpdateVideo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateVideo Choreo.
     *
     * @param YouTube_Videos_UpdateVideo_Inputs|array $inputs (optional) Inputs as YouTube_Videos_UpdateVideo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Videos_UpdateVideo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Videos_UpdateVideo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateVideo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Videos_UpdateVideo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Videos_UpdateVideo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateVideo Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_UpdateVideo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateVideo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Videos_UpdateVideo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateVideo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Videos_UpdateVideo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Videos_UpdateVideo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the VideoMetadata input for this UpdateVideo Choreo.
     *
     * @param string $value (required, json) A JSON representation of the video resource containing fields to update. The id key for the video is requried for updates. See documentation for examples.
     * @return YouTube_Videos_UpdateVideo_Inputs For method chaining.
     */
    public function setVideoMetadata($value)
    {
        return $this->set('VideoMetadata', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateVideo Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Videos_UpdateVideo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this UpdateVideo Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Videos_UpdateVideo_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this UpdateVideo Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Videos_UpdateVideo_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this UpdateVideo Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Videos_UpdateVideo_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Part input for this UpdateVideo Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields that are being set and that will be returned in the response (i.e. snippet,status).
     * @return YouTube_Videos_UpdateVideo_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this UpdateVideo Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Videos_UpdateVideo_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the UpdateVideo Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_UpdateVideo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateVideo Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateVideo execution.
     * @param YouTube_Videos_UpdateVideo $choreo The choreography object for this execution.
     * @param YouTube_Videos_UpdateVideo_Inputs|array $inputs (optional) Inputs as YouTube_Videos_UpdateVideo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Videos_UpdateVideo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Videos_UpdateVideo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateVideo execution.
     *
     * @return YouTube_Videos_UpdateVideo_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateVideo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Videos_UpdateVideo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Videos_UpdateVideo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateVideo Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_UpdateVideo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateVideo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Videos_UpdateVideo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this UpdateVideo execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateVideo execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Posts a bulletin for a specific channel.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_InsertActivity extends Temboo_Choreography
{
    /**
     * Posts a bulletin for a specific channel.
     *
     * @param Temboo_Session $session The session that owns this InsertActivity Choreo.
     * @return YouTube_Activities_InsertActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Activities/InsertActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InsertActivity Choreo.
     *
     * @param YouTube_Activities_InsertActivity_Inputs|array $inputs (optional) Inputs as YouTube_Activities_InsertActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Activities_InsertActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Activities_InsertActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InsertActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Activities_InsertActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Activities_InsertActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InsertActivity Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_InsertActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InsertActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Activities_InsertActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InsertActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Activities_InsertActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Activities_InsertActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ActivityMetadata input for this InsertActivity Choreo.
     *
     * @param string $value (required, json) A JSON representation of the activity resource to create. See documentation for examples.
     * @return YouTube_Activities_InsertActivity_Inputs For method chaining.
     */
    public function setActivityMetadata($value)
    {
        return $this->set('ActivityMetadata', $value);
    }

    /**
     * Set the value for the AccessToken input for this InsertActivity Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Activities_InsertActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this InsertActivity Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_InsertActivity_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this InsertActivity Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_InsertActivity_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this InsertActivity Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Activities_InsertActivity_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Part input for this InsertActivity Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields that are being set and that will be returned in the response. Part names that can be passed are: snippet and contentDetails.
     * @return YouTube_Activities_InsertActivity_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this InsertActivity Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_InsertActivity_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the InsertActivity Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_InsertActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InsertActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this InsertActivity execution.
     * @param YouTube_Activities_InsertActivity $choreo The choreography object for this execution.
     * @param YouTube_Activities_InsertActivity_Inputs|array $inputs (optional) Inputs as YouTube_Activities_InsertActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Activities_InsertActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Activities_InsertActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InsertActivity execution.
     *
     * @return YouTube_Activities_InsertActivity_Results New results object.
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
     * Wraps results in appropriate results class for this InsertActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Activities_InsertActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Activities_InsertActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InsertActivity Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_InsertActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InsertActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Activities_InsertActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this InsertActivity execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this InsertActivity execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Updates a playlist.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_UpdatePlaylist extends Temboo_Choreography
{
    /**
     * Updates a playlist.
     *
     * @param Temboo_Session $session The session that owns this UpdatePlaylist Choreo.
     * @return YouTube_Playlists_UpdatePlaylist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Playlists/UpdatePlaylist/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdatePlaylist Choreo.
     *
     * @param YouTube_Playlists_UpdatePlaylist_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_UpdatePlaylist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_UpdatePlaylist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Playlists_UpdatePlaylist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdatePlaylist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Playlists_UpdatePlaylist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdatePlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_UpdatePlaylist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdatePlaylist Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdatePlaylist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UpdatePlaylist Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this UpdatePlaylist Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this UpdatePlaylist Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Description input for this UpdatePlaylist Choreo.
     *
     * @param string $value (optional, string) The playlist's description.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Fields input for this UpdatePlaylist Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Part input for this UpdatePlaylist Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields that are being set and that will be returned in the response (i.e. snippet,status).
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the PlaylistID input for this UpdatePlaylist Choreo.
     *
     * @param string $value (required, string) The id of the playlist to update.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setPlaylistID($value)
    {
        return $this->set('PlaylistID', $value);
    }

    /**
     * Set the value for the PrivacyStatus input for this UpdatePlaylist Choreo.
     *
     * @param string $value (optional, string) The playlist's privacy status. Valid values are: private or public.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setPrivacyStatus($value)
    {
        return $this->set('PrivacyStatus', $value);
    }

    /**
     * Set the value for the RefreshToken input for this UpdatePlaylist Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the Title input for this UpdatePlaylist Choreo.
     *
     * @param string $value (required, string) The title of the playlist.
     * @return YouTube_Playlists_UpdatePlaylist_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }
}


/**
 * Execution object for the UpdatePlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_UpdatePlaylist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdatePlaylist Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdatePlaylist execution.
     * @param YouTube_Playlists_UpdatePlaylist $choreo The choreography object for this execution.
     * @param YouTube_Playlists_UpdatePlaylist_Inputs|array $inputs (optional) Inputs as YouTube_Playlists_UpdatePlaylist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Playlists_UpdatePlaylist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Playlists_UpdatePlaylist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdatePlaylist execution.
     *
     * @return YouTube_Playlists_UpdatePlaylist_Results New results object.
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
     * Wraps results in appropriate results class for this UpdatePlaylist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Playlists_UpdatePlaylist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Playlists_UpdatePlaylist_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdatePlaylist Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Playlists_UpdatePlaylist_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdatePlaylist Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Playlists_UpdatePlaylist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this UpdatePlaylist execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this UpdatePlaylist execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of channels that match the list of IDs provided.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListChannelsByID extends Temboo_Choreography
{
    /**
     * Returns a list of channels that match the list of IDs provided.
     *
     * @param Temboo_Session $session The session that owns this ListChannelsByID Choreo.
     * @return YouTube_Channels_ListChannelsByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Channels/ListChannelsByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListChannelsByID Choreo.
     *
     * @param YouTube_Channels_ListChannelsByID_Inputs|array $inputs (optional) Inputs as YouTube_Channels_ListChannelsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Channels_ListChannelsByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Channels_ListChannelsByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListChannelsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Channels_ListChannelsByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Channels_ListChannelsByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListChannelsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListChannelsByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListChannelsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Channels_ListChannelsByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListChannelsByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListChannelsByID Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListChannelsByID Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ChannelID input for this ListChannelsByID Choreo.
     *
     * @param string $value (required, string) A comma-separated list of the YouTube channel ID(s) for the resource(s) that are being retrieved.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setChannelID($value)
    {
        return $this->set('ChannelID', $value);
    }

    /**
     * Set the value for the ClientID input for this ListChannelsByID Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListChannelsByID Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListChannelsByID Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListChannelsByID Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListChannelsByID Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListChannelsByID Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of channels resource properties that the API response will include. Part names that you can pass are: id, snippet, contentDetails, statistics, and topicDetails.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListChannelsByID Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListChannelsByID_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListChannelsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListChannelsByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListChannelsByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListChannelsByID execution.
     * @param YouTube_Channels_ListChannelsByID $choreo The choreography object for this execution.
     * @param YouTube_Channels_ListChannelsByID_Inputs|array $inputs (optional) Inputs as YouTube_Channels_ListChannelsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Channels_ListChannelsByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Channels_ListChannelsByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListChannelsByID execution.
     *
     * @return YouTube_Channels_ListChannelsByID_Results New results object.
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
     * Wraps results in appropriate results class for this ListChannelsByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Channels_ListChannelsByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Channels_ListChannelsByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListChannelsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListChannelsByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListChannelsByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Channels_ListChannelsByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListChannelsByID execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListChannelsByID execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Creates a new item within a playlist.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_InsertItem extends Temboo_Choreography
{
    /**
     * Creates a new item within a playlist.
     *
     * @param Temboo_Session $session The session that owns this InsertItem Choreo.
     * @return YouTube_PlaylistItems_InsertItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/PlaylistItems/InsertItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InsertItem Choreo.
     *
     * @param YouTube_PlaylistItems_InsertItem_Inputs|array $inputs (optional) Inputs as YouTube_PlaylistItems_InsertItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_PlaylistItems_InsertItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_PlaylistItems_InsertItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InsertItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_PlaylistItems_InsertItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_PlaylistItems_InsertItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InsertItem Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_InsertItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InsertItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_PlaylistItems_InsertItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InsertItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this InsertItem Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this InsertItem Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this InsertItem Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this InsertItem Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Part input for this InsertItem Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields that are being set and that will be returned in the response. Part names that can be passed are: snippet and contentDetails.
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the PlaylistID input for this InsertItem Choreo.
     *
     * @param string $value (required, string) The id of the playlist to add an item to.
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function setPlaylistID($value)
    {
        return $this->set('PlaylistID', $value);
    }

    /**
     * Set the value for the RefreshToken input for this InsertItem Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the VideoID input for this InsertItem Choreo.
     *
     * @param string $value (required, string) The id of the video to add to the playlist.
     * @return YouTube_PlaylistItems_InsertItem_Inputs For method chaining.
     */
    public function setVideoID($value)
    {
        return $this->set('VideoID', $value);
    }
}


/**
 * Execution object for the InsertItem Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_InsertItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InsertItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this InsertItem execution.
     * @param YouTube_PlaylistItems_InsertItem $choreo The choreography object for this execution.
     * @param YouTube_PlaylistItems_InsertItem_Inputs|array $inputs (optional) Inputs as YouTube_PlaylistItems_InsertItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_PlaylistItems_InsertItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_PlaylistItems_InsertItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InsertItem execution.
     *
     * @return YouTube_PlaylistItems_InsertItem_Results New results object.
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
     * Wraps results in appropriate results class for this InsertItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_PlaylistItems_InsertItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_PlaylistItems_InsertItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InsertItem Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_PlaylistItems_InsertItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InsertItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_PlaylistItems_InsertItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this InsertItem execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this InsertItem execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of search results that match the specified query parameters.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Search_ListSearchResults extends Temboo_Choreography
{
    /**
     * Returns a list of search results that match the specified query parameters.
     *
     * @param Temboo_Session $session The session that owns this ListSearchResults Choreo.
     * @return YouTube_Search_ListSearchResults New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Search/ListSearchResults/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListSearchResults Choreo.
     *
     * @param YouTube_Search_ListSearchResults_Inputs|array $inputs (optional) Inputs as YouTube_Search_ListSearchResults_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Search_ListSearchResults_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Search_ListSearchResults_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListSearchResults Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Search_ListSearchResults_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Search_ListSearchResults_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListSearchResults Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Search_ListSearchResults_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListSearchResults Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Search_ListSearchResults_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListSearchResults input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ChannelID input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Indicates that the response should only contain resources created by this channel.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setChannelID($value)
    {
        return $this->set('ChannelID', $value);
    }

    /**
     * Set the value for the ChannelType input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Restricts a search to a particular type of channel. Valid values are: "any" (returns all channels) and "show" (only retrieves shows).
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setChannelType($value)
    {
        return $this->set('ChannelType', $value);
    }

    /**
     * Set the value for the ClientID input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListSearchResults Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Order input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Indicates how the results are sorted. Valid values are: date, rating, relevance, and viewCount.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PageToken input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of one or more search resource properties that the API response will include. Part names that you can pass are 'id' and 'snippet' (the default).
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the PublishedAfter input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, date) Returns only results created after the specified time (formatted as a RFC 3339 date-time i.e. 1970-01-01T00:00:00Z).
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setPublishedAfter($value)
    {
        return $this->set('PublishedAfter', $value);
    }

    /**
     * Set the value for the PublishedBefore input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, date) Returns only results created before the specified time (formatted as a RFC 3339 date-time i.e. 1970-01-01T00:00:00Z).
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setPublishedBefore($value)
    {
        return $this->set('PublishedBefore', $value);
    }

    /**
     * Set the value for the Query input for this ListSearchResults Choreo.
     *
     * @param string $value (conditional, string) A query string for searching videos.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the RegionCode input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Returns results for the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setRegionCode($value)
    {
        return $this->set('RegionCode', $value);
    }

    /**
     * Set the value for the RelatedToVideoID input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Retrieves a list of videos that are related to this video id. When using this parameter, the Type parameter must be set to video.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setRelatedToVideoID($value)
    {
        return $this->set('RelatedToVideoID', $value);
    }

    /**
     * Set the value for the TopicID input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Returns only results associated with the specified topic.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setTopicID($value)
    {
        return $this->set('TopicID', $value);
    }

    /**
     * Set the value for the Type input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Restricts a search query to only retrieve a particular type of resource. The default value is: video,channel,playlist.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the VideoCaption input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Returns filtered results based on whether videos have captions. Valid values are: any (the default), closedCaption (only returns videos with captions), or none (only returns videos without captions).
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setVideoCaption($value)
    {
        return $this->set('VideoCaption', $value);
    }

    /**
     * Set the value for the VideoCategoryID input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Filters video search results based on their category.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setVideoCategoryID($value)
    {
        return $this->set('VideoCategoryID', $value);
    }

    /**
     * Set the value for the VideoDefinition input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Filters video results based high or standard definition. Valid values are: any, high, or standard.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setVideoDefinition($value)
    {
        return $this->set('VideoDefinition', $value);
    }

    /**
     * Set the value for the VideoDimension input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Restrict a search to only retrieve 2D or 3D videos. Valid values are: 2d, 3d, or any.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setVideoDimension($value)
    {
        return $this->set('VideoDimension', $value);
    }

    /**
     * Set the value for the VideoDuration input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Filters search results based on the video duration. Valid values are: any, long, medium, and short.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setVideoDuration($value)
    {
        return $this->set('VideoDuration', $value);
    }

    /**
     * Set the value for the VideoEmbeddable input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Filters search results to include only videos that can be embedded into a webpage. Valid values are: any (the default) or true (which will enable this filter).
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setVideoEmbeddable($value)
    {
        return $this->set('VideoEmbeddable', $value);
    }

    /**
     * Set the value for the VideoLicense input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Filters search results to only include videos with a particular license. Valid values are: any, creativeCommon, and youtube.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setVideoLicense($value)
    {
        return $this->set('VideoLicense', $value);
    }

    /**
     * Set the value for the VideoSyndicated input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Filters search results for videos that can be played outside of youtube.com. Valid values are: any (the default) or true (which will enable this filter).
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setVideoSyndicated($value)
    {
        return $this->set('VideoSyndicated', $value);
    }

    /**
     * Set the value for the VideoType input for this ListSearchResults Choreo.
     *
     * @param string $value (optional, string) Filters search results to a particular type of videos. Valid values are: any, episode, and movie.
     * @return YouTube_Search_ListSearchResults_Inputs For method chaining.
     */
    public function setVideoType($value)
    {
        return $this->set('VideoType', $value);
    }
}


/**
 * Execution object for the ListSearchResults Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Search_ListSearchResults_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListSearchResults Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListSearchResults execution.
     * @param YouTube_Search_ListSearchResults $choreo The choreography object for this execution.
     * @param YouTube_Search_ListSearchResults_Inputs|array $inputs (optional) Inputs as YouTube_Search_ListSearchResults_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Search_ListSearchResults_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Search_ListSearchResults $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListSearchResults execution.
     *
     * @return YouTube_Search_ListSearchResults_Results New results object.
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
     * Wraps results in appropriate results class for this ListSearchResults execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Search_ListSearchResults_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Search_ListSearchResults_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListSearchResults Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Search_ListSearchResults_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListSearchResults Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Search_ListSearchResults_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListSearchResults execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListSearchResults execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of categories available in the specified country.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_VideoCategories_ListCategoriesByRegion extends Temboo_Choreography
{
    /**
     * Returns a list of categories available in the specified country.
     *
     * @param Temboo_Session $session The session that owns this ListCategoriesByRegion Choreo.
     * @return YouTube_VideoCategories_ListCategoriesByRegion New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/VideoCategories/ListCategoriesByRegion/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCategoriesByRegion Choreo.
     *
     * @param YouTube_VideoCategories_ListCategoriesByRegion_Inputs|array $inputs (optional) Inputs as YouTube_VideoCategories_ListCategoriesByRegion_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_VideoCategories_ListCategoriesByRegion_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCategoriesByRegion Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_VideoCategories_ListCategoriesByRegion_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCategoriesByRegion Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_VideoCategories_ListCategoriesByRegion_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCategoriesByRegion Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCategoriesByRegion input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListCategoriesByRegion Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListCategoriesByRegion Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the H1 input for this ListCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) The hl parameter specifies the language that should be used for text values in the API response. The default value is en_US.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setH1($value)
    {
        return $this->set('H1', $value);
    }

    /**
     * Set the value for the Part input for this ListCategoriesByRegion Choreo.
     *
     * @param string $value (optional, string) Specifies the videoCategory resource parts that the API response will include. Valid values are: id and snippet.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListCategoriesByRegion Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the RegionCode input for this ListCategoriesByRegion Choreo.
     *
     * @param string $value (conditional, string) Indicates to return the list of video categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Inputs For method chaining.
     */
    public function setRegionCode($value)
    {
        return $this->set('RegionCode', $value);
    }
}


/**
 * Execution object for the ListCategoriesByRegion Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_VideoCategories_ListCategoriesByRegion_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCategoriesByRegion Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCategoriesByRegion execution.
     * @param YouTube_VideoCategories_ListCategoriesByRegion $choreo The choreography object for this execution.
     * @param YouTube_VideoCategories_ListCategoriesByRegion_Inputs|array $inputs (optional) Inputs as YouTube_VideoCategories_ListCategoriesByRegion_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_VideoCategories_ListCategoriesByRegion $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCategoriesByRegion execution.
     *
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Results New results object.
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
     * Wraps results in appropriate results class for this ListCategoriesByRegion execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_VideoCategories_ListCategoriesByRegion_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCategoriesByRegion Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_VideoCategories_ListCategoriesByRegion_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCategoriesByRegion Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_VideoCategories_ListCategoriesByRegion_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListCategoriesByRegion execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListCategoriesByRegion execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of subscription that match the provided IDs.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListSubscriptionsByID extends Temboo_Choreography
{
    /**
     * Returns a list of subscription that match the provided IDs.
     *
     * @param Temboo_Session $session The session that owns this ListSubscriptionsByID Choreo.
     * @return YouTube_Subscriptions_ListSubscriptionsByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Subscriptions/ListSubscriptionsByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListSubscriptionsByID Choreo.
     *
     * @param YouTube_Subscriptions_ListSubscriptionsByID_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_ListSubscriptionsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Subscriptions_ListSubscriptionsByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListSubscriptionsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Subscriptions_ListSubscriptionsByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListSubscriptionsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListSubscriptionsByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListSubscriptionsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListSubscriptionsByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the ForChannelId input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of channel IDs. The response will include only subscription matching these channels.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setForChannelId($value)
    {
        return $this->set('ForChannelId', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListSubscriptionsByID Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Order input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (optional, string) Indicates how the results are sorted. Valid values are: alphabetical, relevance, or unread.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PageToken input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include. Valid values are: id, snippet, and contentDetails.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SubscriptionID input for this ListSubscriptionsByID Choreo.
     *
     * @param string $value (required, string) A comma-separated list of the YouTube subscription ID(s) for the resource(s) that are being retrieved.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Inputs For method chaining.
     */
    public function setSubscriptionID($value)
    {
        return $this->set('SubscriptionID', $value);
    }
}


/**
 * Execution object for the ListSubscriptionsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListSubscriptionsByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListSubscriptionsByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListSubscriptionsByID execution.
     * @param YouTube_Subscriptions_ListSubscriptionsByID $choreo The choreography object for this execution.
     * @param YouTube_Subscriptions_ListSubscriptionsByID_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_ListSubscriptionsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Subscriptions_ListSubscriptionsByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListSubscriptionsByID execution.
     *
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Results New results object.
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
     * Wraps results in appropriate results class for this ListSubscriptionsByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Subscriptions_ListSubscriptionsByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListSubscriptionsByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListSubscriptionsByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListSubscriptionsByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Subscriptions_ListSubscriptionsByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListSubscriptionsByID execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListSubscriptionsByID execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of categories that match the IDs provided.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GuideCategories_ListGuideCategoriesByID extends Temboo_Choreography
{
    /**
     * Returns a list of categories that match the IDs provided.
     *
     * @param Temboo_Session $session The session that owns this ListGuideCategoriesByID Choreo.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/GuideCategories/ListGuideCategoriesByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListGuideCategoriesByID Choreo.
     *
     * @param YouTube_GuideCategories_ListGuideCategoriesByID_Inputs|array $inputs (optional) Inputs as YouTube_GuideCategories_ListGuideCategoriesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_GuideCategories_ListGuideCategoriesByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListGuideCategoriesByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_GuideCategories_ListGuideCategoriesByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListGuideCategoriesByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GuideCategories_ListGuideCategoriesByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListGuideCategoriesByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListGuideCategoriesByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListGuideCategoriesByID Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListGuideCategoriesByID Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListGuideCategoriesByID Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListGuideCategoriesByID Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListGuideCategoriesByID Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the GuideCategoryID input for this ListGuideCategoriesByID Choreo.
     *
     * @param string $value (conditional, string) A comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setGuideCategoryID($value)
    {
        return $this->set('GuideCategoryID', $value);
    }

    /**
     * Set the value for the H1 input for this ListGuideCategoriesByID Choreo.
     *
     * @param string $value (optional, string) The hl parameter specifies the language that should be used for text values in the API response. The default value is en_US.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setH1($value)
    {
        return $this->set('H1', $value);
    }

    /**
     * Set the value for the Part input for this ListGuideCategoriesByID Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of one or more guideCategory resource properties that the API response will include. Valid values are: id and snippet.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListGuideCategoriesByID Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListGuideCategoriesByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GuideCategories_ListGuideCategoriesByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListGuideCategoriesByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListGuideCategoriesByID execution.
     * @param YouTube_GuideCategories_ListGuideCategoriesByID $choreo The choreography object for this execution.
     * @param YouTube_GuideCategories_ListGuideCategoriesByID_Inputs|array $inputs (optional) Inputs as YouTube_GuideCategories_ListGuideCategoriesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_GuideCategories_ListGuideCategoriesByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListGuideCategoriesByID execution.
     *
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Results New results object.
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
     * Wraps results in appropriate results class for this ListGuideCategoriesByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_GuideCategories_ListGuideCategoriesByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListGuideCategoriesByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GuideCategories_ListGuideCategoriesByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListGuideCategoriesByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_GuideCategories_ListGuideCategoriesByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListGuideCategoriesByID execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListGuideCategoriesByID execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns an activity feed that displays on the YouTube home page for the currently authenticated user.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListHomePageActivities extends Temboo_Choreography
{
    /**
     * Returns an activity feed that displays on the YouTube home page for the currently authenticated user.
     *
     * @param Temboo_Session $session The session that owns this ListHomePageActivities Choreo.
     * @return YouTube_Activities_ListHomePageActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Activities/ListHomePageActivities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListHomePageActivities Choreo.
     *
     * @param YouTube_Activities_ListHomePageActivities_Inputs|array $inputs (optional) Inputs as YouTube_Activities_ListHomePageActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Activities_ListHomePageActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Activities_ListHomePageActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListHomePageActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Activities_ListHomePageActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Activities_ListHomePageActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListHomePageActivities Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListHomePageActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListHomePageActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Activities_ListHomePageActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListHomePageActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListHomePageActivities Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListHomePageActivities Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListHomePageActivities Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListHomePageActivities Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListHomePageActivities Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListHomePageActivities Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListHomePageActivities Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of one or more activity resource properties that the API response will include. Part names that you can pass are id, snippet, and contentDetails.
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the PublishedAfter input for this ListHomePageActivities Choreo.
     *
     * @param string $value (optional, date) Returns only results created after the specified time (formatted as a RFC 3339 date-time i.e. 1970-01-01T00:00:00Z).
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setPublishedAfter($value)
    {
        return $this->set('PublishedAfter', $value);
    }

    /**
     * Set the value for the PublishedBefore input for this ListHomePageActivities Choreo.
     *
     * @param string $value (optional, date) Returns only results created before the specified time (formatted as a RFC 3339 date-time i.e. 1970-01-01T00:00:00Z).
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setPublishedBefore($value)
    {
        return $this->set('PublishedBefore', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListHomePageActivities Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_ListHomePageActivities_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListHomePageActivities Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListHomePageActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListHomePageActivities Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListHomePageActivities execution.
     * @param YouTube_Activities_ListHomePageActivities $choreo The choreography object for this execution.
     * @param YouTube_Activities_ListHomePageActivities_Inputs|array $inputs (optional) Inputs as YouTube_Activities_ListHomePageActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Activities_ListHomePageActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Activities_ListHomePageActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListHomePageActivities execution.
     *
     * @return YouTube_Activities_ListHomePageActivities_Results New results object.
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
     * Wraps results in appropriate results class for this ListHomePageActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Activities_ListHomePageActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Activities_ListHomePageActivities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListHomePageActivities Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListHomePageActivities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListHomePageActivities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Activities_ListHomePageActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListHomePageActivities execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListHomePageActivities execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of channels that have subscribed to the authenticated user's channel.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListMySubscribers extends Temboo_Choreography
{
    /**
     * Returns a list of channels that have subscribed to the authenticated user's channel.
     *
     * @param Temboo_Session $session The session that owns this ListMySubscribers Choreo.
     * @return YouTube_Channels_ListMySubscribers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Channels/ListMySubscribers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMySubscribers Choreo.
     *
     * @param YouTube_Channels_ListMySubscribers_Inputs|array $inputs (optional) Inputs as YouTube_Channels_ListMySubscribers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Channels_ListMySubscribers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Channels_ListMySubscribers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMySubscribers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Channels_ListMySubscribers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Channels_ListMySubscribers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMySubscribers Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListMySubscribers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMySubscribers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Channels_ListMySubscribers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMySubscribers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListMySubscribers Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListMySubscribers Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListMySubscribers Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListMySubscribers Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListMySubscribers Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListMySubscribers Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListMySubscribers Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of channels resource properties that the API response will include. Part names that you can pass are: id, snippet, contentDetails, statistics, and topicDetails.
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListMySubscribers Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListMySubscribers_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListMySubscribers Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListMySubscribers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMySubscribers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMySubscribers execution.
     * @param YouTube_Channels_ListMySubscribers $choreo The choreography object for this execution.
     * @param YouTube_Channels_ListMySubscribers_Inputs|array $inputs (optional) Inputs as YouTube_Channels_ListMySubscribers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Channels_ListMySubscribers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Channels_ListMySubscribers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMySubscribers execution.
     *
     * @return YouTube_Channels_ListMySubscribers_Results New results object.
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
     * Wraps results in appropriate results class for this ListMySubscribers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Channels_ListMySubscribers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Channels_ListMySubscribers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMySubscribers Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListMySubscribers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMySubscribers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Channels_ListMySubscribers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListMySubscribers execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListMySubscribers execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Adds a specified channel to the authenticated user's subscriptions.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_SubscribeToChannel extends Temboo_Choreography
{
    /**
     * Adds a specified channel to the authenticated user's subscriptions.
     *
     * @param Temboo_Session $session The session that owns this SubscribeToChannel Choreo.
     * @return YouTube_Subscriptions_SubscribeToChannel New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Subscriptions/SubscribeToChannel/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SubscribeToChannel Choreo.
     *
     * @param YouTube_Subscriptions_SubscribeToChannel_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_SubscribeToChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_SubscribeToChannel_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Subscriptions_SubscribeToChannel_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SubscribeToChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Subscriptions_SubscribeToChannel_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SubscribeToChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_SubscribeToChannel_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SubscribeToChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SubscribeToChannel input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this SubscribeToChannel Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ChannelID input for this SubscribeToChannel Choreo.
     *
     * @param string $value (required, string) The id of the channel to subscribe to.
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs For method chaining.
     */
    public function setChannelID($value)
    {
        return $this->set('ChannelID', $value);
    }

    /**
     * Set the value for the ClientID input for this SubscribeToChannel Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this SubscribeToChannel Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this SubscribeToChannel Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Part input for this SubscribeToChannel Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields that are being set and that will be returned in the response (i.e. snippet,contentDetails).
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this SubscribeToChannel Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_SubscribeToChannel_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the SubscribeToChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_SubscribeToChannel_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SubscribeToChannel Choreo.
     *
     * @param Temboo_Session $session The session that owns this SubscribeToChannel execution.
     * @param YouTube_Subscriptions_SubscribeToChannel $choreo The choreography object for this execution.
     * @param YouTube_Subscriptions_SubscribeToChannel_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_SubscribeToChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_SubscribeToChannel_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Subscriptions_SubscribeToChannel $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SubscribeToChannel execution.
     *
     * @return YouTube_Subscriptions_SubscribeToChannel_Results New results object.
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
     * Wraps results in appropriate results class for this SubscribeToChannel execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Subscriptions_SubscribeToChannel_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Subscriptions_SubscribeToChannel_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SubscribeToChannel Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_SubscribeToChannel_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SubscribeToChannel Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Subscriptions_SubscribeToChannel_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this SubscribeToChannel execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this SubscribeToChannel execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of activity events for the authenticated user.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListMyActivities extends Temboo_Choreography
{
    /**
     * Returns a list of activity events for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this ListMyActivities Choreo.
     * @return YouTube_Activities_ListMyActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Activities/ListMyActivities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMyActivities Choreo.
     *
     * @param YouTube_Activities_ListMyActivities_Inputs|array $inputs (optional) Inputs as YouTube_Activities_ListMyActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Activities_ListMyActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Activities_ListMyActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMyActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Activities_ListMyActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Activities_ListMyActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMyActivities Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListMyActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMyActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Activities_ListMyActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMyActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListMyActivities Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListMyActivities Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListMyActivities Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListMyActivities Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListMyActivities Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListMyActivities Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListMyActivities Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of one or more activity resource properties that the API response will include. Part names that you can pass are id, snippet, and contentDetails.
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the PublishedAfter input for this ListMyActivities Choreo.
     *
     * @param string $value (optional, date) Returns only results created after the specified time (formatted as a RFC 3339 date-time i.e. 1970-01-01T00:00:00Z).
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setPublishedAfter($value)
    {
        return $this->set('PublishedAfter', $value);
    }

    /**
     * Set the value for the PublishedBefore input for this ListMyActivities Choreo.
     *
     * @param string $value (optional, date) Returns only results created before the specified time (formatted as a RFC 3339 date-time i.e. 1970-01-01T00:00:00Z).
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setPublishedBefore($value)
    {
        return $this->set('PublishedBefore', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListMyActivities Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Activities_ListMyActivities_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListMyActivities Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListMyActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMyActivities Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMyActivities execution.
     * @param YouTube_Activities_ListMyActivities $choreo The choreography object for this execution.
     * @param YouTube_Activities_ListMyActivities_Inputs|array $inputs (optional) Inputs as YouTube_Activities_ListMyActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Activities_ListMyActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Activities_ListMyActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMyActivities execution.
     *
     * @return YouTube_Activities_ListMyActivities_Results New results object.
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
     * Wraps results in appropriate results class for this ListMyActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Activities_ListMyActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Activities_ListMyActivities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMyActivities Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Activities_ListMyActivities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMyActivities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Activities_ListMyActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListMyActivities execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListMyActivities execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of channels associated with a particular category.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListChannelsByCategory extends Temboo_Choreography
{
    /**
     * Returns a list of channels associated with a particular category.
     *
     * @param Temboo_Session $session The session that owns this ListChannelsByCategory Choreo.
     * @return YouTube_Channels_ListChannelsByCategory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Channels/ListChannelsByCategory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListChannelsByCategory Choreo.
     *
     * @param YouTube_Channels_ListChannelsByCategory_Inputs|array $inputs (optional) Inputs as YouTube_Channels_ListChannelsByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Channels_ListChannelsByCategory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Channels_ListChannelsByCategory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListChannelsByCategory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Channels_ListChannelsByCategory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListChannelsByCategory Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListChannelsByCategory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListChannelsByCategory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListChannelsByCategory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListChannelsByCategory Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListChannelsByCategory Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CategoryID input for this ListChannelsByCategory Choreo.
     *
     * @param string $value (required, string) The id of a category. Indicates that only channels associated with a particular category should be returned.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the ClientID input for this ListChannelsByCategory Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListChannelsByCategory Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListChannelsByCategory Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListChannelsByCategory Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the PageToken input for this ListChannelsByCategory Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListChannelsByCategory Choreo.
     *
     * @param string $value (optional, string) Specifies a comma-separated list of channels resource properties that the API response will include. Part names that you can pass are: id, snippet, contentDetails, statistics, and topicDetails.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListChannelsByCategory Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Channels_ListChannelsByCategory_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListChannelsByCategory Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListChannelsByCategory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListChannelsByCategory Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListChannelsByCategory execution.
     * @param YouTube_Channels_ListChannelsByCategory $choreo The choreography object for this execution.
     * @param YouTube_Channels_ListChannelsByCategory_Inputs|array $inputs (optional) Inputs as YouTube_Channels_ListChannelsByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Channels_ListChannelsByCategory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Channels_ListChannelsByCategory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListChannelsByCategory execution.
     *
     * @return YouTube_Channels_ListChannelsByCategory_Results New results object.
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
     * Wraps results in appropriate results class for this ListChannelsByCategory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Channels_ListChannelsByCategory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Channels_ListChannelsByCategory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListChannelsByCategory Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Channels_ListChannelsByCategory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListChannelsByCategory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Channels_ListChannelsByCategory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListChannelsByCategory execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListChannelsByCategory execution.
     *
     * @return string (json) The response from YouTube.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of the authenticated user's subscriptions.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListMySubscriptions extends Temboo_Choreography
{
    /**
     * Returns a list of the authenticated user's subscriptions.
     *
     * @param Temboo_Session $session The session that owns this ListMySubscriptions Choreo.
     * @return YouTube_Subscriptions_ListMySubscriptions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Subscriptions/ListMySubscriptions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMySubscriptions Choreo.
     *
     * @param YouTube_Subscriptions_ListMySubscriptions_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_ListMySubscriptions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_ListMySubscriptions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Subscriptions_ListMySubscriptions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMySubscriptions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Subscriptions_ListMySubscriptions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMySubscriptions Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListMySubscriptions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMySubscriptions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMySubscriptions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListMySubscriptions Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListMySubscriptions Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListMySubscriptions Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListMySubscriptions Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the ForChannelId input for this ListMySubscriptions Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of channel IDs. The response will include only subscription matching these channels.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setForChannelId($value)
    {
        return $this->set('ForChannelId', $value);
    }

    /**
     * Set the value for the MaxResults input for this ListMySubscriptions Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Order input for this ListMySubscriptions Choreo.
     *
     * @param string $value (optional, string) Indicates how the results are sorted. Valid values are: alphabetical, relevance, or unread.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PageToken input for this ListMySubscriptions Choreo.
     *
     * @param string $value (optional, string) The "nextPageToken" found in the response which is used to page through results.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setPageToken($value)
    {
        return $this->set('PageToken', $value);
    }

    /**
     * Set the value for the Part input for this ListMySubscriptions Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include. Valid values are: id, snippet, and contentDetails.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListMySubscriptions Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Subscriptions_ListMySubscriptions_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListMySubscriptions Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListMySubscriptions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMySubscriptions Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMySubscriptions execution.
     * @param YouTube_Subscriptions_ListMySubscriptions $choreo The choreography object for this execution.
     * @param YouTube_Subscriptions_ListMySubscriptions_Inputs|array $inputs (optional) Inputs as YouTube_Subscriptions_ListMySubscriptions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Subscriptions_ListMySubscriptions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Subscriptions_ListMySubscriptions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMySubscriptions execution.
     *
     * @return YouTube_Subscriptions_ListMySubscriptions_Results New results object.
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
     * Wraps results in appropriate results class for this ListMySubscriptions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Subscriptions_ListMySubscriptions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Subscriptions_ListMySubscriptions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMySubscriptions Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Subscriptions_ListMySubscriptions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMySubscriptions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Subscriptions_ListMySubscriptions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListMySubscriptions execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListMySubscriptions execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of YouTube videos that match the IDs provided.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_ListVideosByID extends Temboo_Choreography
{
    /**
     * Returns a list of YouTube videos that match the IDs provided.
     *
     * @param Temboo_Session $session The session that owns this ListVideosByID Choreo.
     * @return YouTube_Videos_ListVideosByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/Videos/ListVideosByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListVideosByID Choreo.
     *
     * @param YouTube_Videos_ListVideosByID_Inputs|array $inputs (optional) Inputs as YouTube_Videos_ListVideosByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Videos_ListVideosByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_Videos_ListVideosByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListVideosByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Videos_ListVideosByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_Videos_ListVideosByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListVideosByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_ListVideosByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListVideosByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_Videos_ListVideosByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListVideosByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListVideosByID Choreo.
     *
     * @param string $value (optional, string) The API Key provided by Google for simple API access when you do not need to access user data.
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListVideosByID Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required for OAuth authentication unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListVideosByID Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListVideosByID Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Fields input for this ListVideosByID Choreo.
     *
     * @param string $value (optional, string) Allows you to specify a subset of fields to include in the response using an xpath-like syntax (i.e. items/snippet/title).
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Part input for this ListVideosByID Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of fields to include. Valid values are: id, snippet, contentDetails, fileDetails, player, processingDetails, recordingDetails, statistics, status, suggestions, and topicDetails.
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function setPart($value)
    {
        return $this->set('Part', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListVideosByID Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required for OAuth authentication unless providing a valid AccessToken.
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the VideoID input for this ListVideosByID Choreo.
     *
     * @param string $value (required, string) A comma-separated list of the YouTube video ID(s) that are being retrieved.
     * @return YouTube_Videos_ListVideosByID_Inputs For method chaining.
     */
    public function setVideoID($value)
    {
        return $this->set('VideoID', $value);
    }
}


/**
 * Execution object for the ListVideosByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_ListVideosByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListVideosByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListVideosByID execution.
     * @param YouTube_Videos_ListVideosByID $choreo The choreography object for this execution.
     * @param YouTube_Videos_ListVideosByID_Inputs|array $inputs (optional) Inputs as YouTube_Videos_ListVideosByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_Videos_ListVideosByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_Videos_ListVideosByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListVideosByID execution.
     *
     * @return YouTube_Videos_ListVideosByID_Results New results object.
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
     * Wraps results in appropriate results class for this ListVideosByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_Videos_ListVideosByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_Videos_ListVideosByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListVideosByID Choreo.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_Videos_ListVideosByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListVideosByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_Videos_ListVideosByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListVideosByID execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListVideosByID execution.
     *
     * @return string (json) The response from Google.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


/*
 An object representing the user who wrote this comment

*/

class Google_Drive_Author_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get the user's profile picture
	*/

	public function getPicture() {
		return new Google_Drive_Picture_output(Temboo_Results::getSubItemByKey($this->base, "picture"));
	}

	/*
	A plain text displayable name for this user
	*/

	public function getDisplayName() {
		return Temboo_Results::getSubItemByKey($this->base, "displayName");
	}

	/*
	Whether this user is the same as the authenticated user of which the request was made on behalf
	*/

	public function getIsAuthenticatedUser() {
		return Temboo_Results::getSubItemByKey($this->base, "isAuthenticatedUser");
	}

	/*
	This is always drive#user
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}
}



/*
 An object representing a change for a Google Drive resource

*/

class Google_Drive_Change_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ID of the change
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The ID of the file associated with this change
	*/

	public function getFileId() {
		return Temboo_Results::getSubItemByKey($this->base, "fileId");
	}

	/*
	Whether the file has been deleted
	*/

	public function getDeleted() {
		return Temboo_Results::getSubItemByKey($this->base, "deleted");
	}

	/*
	A link back to this change
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	This is always drive#change
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}
}



/*
 A listing of changes in Google Drive

*/

class Google_Drive_ChangeList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A Google Drive change resource
	*/

	public function getChanges() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Change_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The current largest change ID
	*/

	public function getLargestChangeId() {
		return Temboo_Results::getSubItemByKey($this->base, "largestChangeId");
	}

	/*
	A link to the next page of changes
	*/

	public function getNextLink() {
		return Temboo_Results::getSubItemByKey($this->base, "nextLink");
	}

	/*
	This is always drive#changeList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The page token for the next page of changes
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}
}



/*
 A specific child reference

*/

class Google_Drive_Child_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ID of the child
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	This is always drive#childReference
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link to the child
	*/

	public function getChildLink() {
		return Temboo_Results::getSubItemByKey($this->base, "childLink");
	}

	/*
	A link back to this reference
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
  A listing of child resources

*/

class Google_Drive_ChildList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	This is always drive#childList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	The page token for the next page of children
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}

	/*
	A link to the next page of children
	*/

	public function getNextLink() {
		return Temboo_Results::getSubItemByKey($this->base, "nextLink");
	}

	/*
	A Google Drive child resource
	*/

	public function getChildren() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Child_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}
}



/*
 An object representing a comment on a file

*/

class Google_Drive_Comment_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The date when this comment or any of its replies were last modified (formatted RFC 3339 timestamp)
	*/

	public function getModifiedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedDate");
	}

	/*
	HTML formatted content for this comment
	*/

	public function getHtmlContent() {
		return Temboo_Results::getSubItemByKey($this->base, "htmlContent");
	}

	/*
	Get the user who wronte this comment
	*/

	public function getAuthor() {
		return new Google_Drive_Author_output(Temboo_Results::getSubItemByKey($this->base, "author"));
	}

	/*
	The plain text content used to create this comment
	*/

	public function getContent() {
		return Temboo_Results::getSubItemByKey($this->base, "content");
	}

	/*
	The file which this comment is addressing
	*/

	public function getFileId() {
		return Temboo_Results::getSubItemByKey($this->base, "fileId");
	}

	/*
	Get replies for this comment
	*/

	public function getReplies() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "replies");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Reply_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The status of this comment (open or resolved)
	*/

	public function getStatus() {
		return Temboo_Results::getSubItemByKey($this->base, "status");
	}

	/*
	The ID of the comment
	*/

	public function getCommentId() {
		return Temboo_Results::getSubItemByKey($this->base, "commentId");
	}

	/*
	The title of the file which this comment is addressing
	*/

	public function getFileTitle() {
		return Temboo_Results::getSubItemByKey($this->base, "fileTitle");
	}

	/*
	The date when this comment was first created (formatted RFC 3339 timestamp)
	*/

	public function getCreatedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "createdDate");
	}

	/*
	Whether this comment has been deleted
	*/

	public function getDeleted() {
		return Temboo_Results::getSubItemByKey($this->base, "deleted");
	}

	/*
	This is always drive#comment
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}
}



/*
 A list of comments for a file

*/

class Google_Drive_CommentList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A Google Drive comment resource
	*/

	public function getComments() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Comment_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The page token for the next page of comments
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}

	/*
	This is always drive#commentList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}
}



/*
 Links for exporting Google Docs to specific formats

*/

class Google_Drive_ExportLinks_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link to the file in pdf format
	*/

	public function getPdfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/pdf");
	}

	/*
	A link to the file in txt format
	*/

	public function getTxtLink() {
		return Temboo_Results::getSubItemByKey($this->base, "text/plain");
	}

	/*
	A link to the file in rtf format
	*/

	public function getRtfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/rtf");
	}

	/*
	A link to the file in odt format
	*/

	public function getOdtLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/vnd.oasis.opendocument.text");
	}

	/*
	A link to the file in docx format
	*/

	public function getDocxLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
	}

	/*
	A link to the file in xlsx format
	*/

	public function getXlsxLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	}

	/*
	A link to the file in html format
	*/

	public function getHtmlLink() {
		return Temboo_Results::getSubItemByKey($this->base, "text/html");
	}

	/*
	A link to the file in ods format
	*/

	public function getOdsLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/x-vnd.oasis.opendocument.spreadsheet");
	}
}



/*
 A complete Google Drive file resource

*/

class Google_Drive_File_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link for embedding the file
	*/

	public function getEmbedLink() {
		return Temboo_Results::getSubItemByKey($this->base, "embedLink");
	}

	/*
	Last time this file was modified by the user (formatted RFC 3339 timestamp)
	*/

	public function getModifiedByMeDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedByMeDate");
	}

	/*
	ETag of the file
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	Time at which this file was shared with the user (formatted RFC 3339 timestamp)
	*/

	public function getSharedWithMeDate() {
		return Temboo_Results::getSubItemByKey($this->base, "sharedWithMeDate");
	}

	/*
	The mimetype of the file
	*/

	public function getMimeType() {
		return Temboo_Results::getSubItemByKey($this->base, "mimeType");
	}

	/*
	Whether or not this file is shared
	*/

	public function getShared() {
		return Temboo_Results::getSubItemByKey($this->base, "shared");
	}

	/*
	A link back to this file
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	Whether the file can be edited by the current user
	*/

	public function getEditable() {
		return Temboo_Results::getSubItemByKey($this->base, "editable");
	}

	/*
	A Link for exporting Google Docs to specific formats
	*/

	public function getExportLinks() {
		return new Google_Drive_ExportLinks_output(Temboo_Results::getSubItemByKey($this->base, "exportLinks"));
	}

	/*
	The type of file (this is always drive#file)
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	Whether writers can share the document with other users
	*/

	public function getWritersCanShare() {
		return Temboo_Results::getSubItemByKey($this->base, "writersCanShare");
	}

	/*
	The title of the this file
	*/

	public function getTitle() {
		return Temboo_Results::getSubItemByKey($this->base, "title");
	}

	/*
	The number of quota bytes used by this file
	*/

	public function getQuotaBytesUsed() {
		return Temboo_Results::getSubItemByKey($this->base, "quotaBytesUsed");
	}

	/*
	Last time this file was viewed by the user (formatted RFC 3339 timestamp)
	*/

	public function getLastViewedByMeDate() {
		return Temboo_Results::getSubItemByKey($this->base, "lastViewedByMeDate");
	}

	/*
	Create time for this file (formatted ISO8601 timestamp)
	*/

	public function getCreatedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "createdDate");
	}

	/*
	Last time this file was modified by anyone (formatted RFC 3339 timestamp)
	*/

	public function getModifiedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedDate");
	}

	public function getLabels() {
		return new Google_Drive_Labels_output(Temboo_Results::getSubItemByKey($this->base, "labels"));
	}

	/*
	A link for opening the file in using a relevant Google editor or viewer
	*/

	public function getAlternateLink() {
		return Temboo_Results::getSubItemByKey($this->base, "alternateLink");
	}

	/*
	A parent folder which contain this file
	*/

	public function getParents() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "parents");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Parent_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	A link to the file's thumbnail
	*/

	public function getThumbnailLink() {
		return Temboo_Results::getSubItemByKey($this->base, "thumbnailLink");
	}

	/*
	The ID of the file
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	A link to the file's icon
	*/

	public function getIconLink() {
		return Temboo_Results::getSubItemByKey($this->base, "iconLink");
	}

	/*
	Name(s) of the owner(s) of this file
	*/

	public function getOwnerNames() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "ownerNames");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}

	/*
	Name of the last user to modify this file. This will only be populated if a user has edited this file
	*/

	public function getLastModifyingUserName() {
		return Temboo_Results::getSubItemByKey($this->base, "lastModifyingUserName");
	}

	/*
	The permissions for the authenticated user on this file.
	*/

	public function getUserPermission() {
		return new Google_Drive_UserPermission_output(Temboo_Results::getSubItemByKey($this->base, "userPermission"));
	}
}



/*
 A listing of files in Google Drive

*/

class Google_Drive_FileList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link to the next page of files
	*/

	public function getNextLink() {
		return Temboo_Results::getSubItemByKey($this->base, "nextLink");
	}

	/*
	The type of resource (this is always rive#fileList)
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The page token for the next page of files
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	A Google Drive file resource
	*/

	public function getFiles() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_File_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 A label for the file
  
*/

class Google_Drive_Labels_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Whether or not the file is starred
	*/

	public function getStarred() {
		return Temboo_Results::getSubItemByKey($this->base, "starred");
	}

	/*
	Whether or not the file is restricted
	*/

	public function getRestricted() {
		return Temboo_Results::getSubItemByKey($this->base, "restricted");
	}

	/*
	Whether or not the file is trashed
	*/

	public function getTrashed() {
		return Temboo_Results::getSubItemByKey($this->base, "trashed");
	}

	/*
	Whether or not the file is hidden
	*/

	public function getHidden() {
		return Temboo_Results::getSubItemByKey($this->base, "hidden");
	}

	/*
	Whether or not the file is viewed
	*/

	public function getViewed() {
		return Temboo_Results::getSubItemByKey($this->base, "viewed");
	}
}



/*
 An object containing a parent resource

*/

class Google_Drive_Parent_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The id of the folder
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Whether or not this folder is the root
	*/

	public function getIsRoot() {
		return Temboo_Results::getSubItemByKey($this->base, "isRoot");
	}

	/*
	The link to the parent
	*/

	public function getParentLink() {
		return Temboo_Results::getSubItemByKey($this->base, "parentLink");
	}

	/*
	A link back to this reference
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	The type of resource
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}
}



/*
 A list of parent resources

*/

class Google_Drive_ParentList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	A Google Drive parent resource
	*/

	public function getParents() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Parent_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	The type of resource (this is always drive#parentList)
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}
}



/*
 An object representing a permission resource

*/

class Google_Drive_Permission_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link back to this permission
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	This is always drive#permission
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The primary role for this user. Allowed values are: owner, reader, and writer
	*/

	public function getRole() {
		return Temboo_Results::getSubItemByKey($this->base, "role");
	}

	/*
	The name for this permission
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	The ID of the permission
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The account type. Allowed values are: user, group, domain, and anyone
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	The ETag of the permission
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}
}



/*
 A list of permission for a file

*/

class Google_Drive_PermissionList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	This is always drive#permissionList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A Google Drive permission resource
	*/

	public function getPermissions() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Permission_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}
}



/*
 An object representing the user's profile picture
  
*/

class Google_Drive_Picture_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A URL that points to a profile picture of this user
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}
}



/*
 An object representing a reply to a comment

*/

class Google_Drive_Reply_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	HTML formatted content for this reply
	*/

	public function getHtmlContent() {
		return Temboo_Results::getSubItemByKey($this->base, "htmlContent");
	}

	/*
	The ID of the reply
	*/

	public function getReplyId() {
		return Temboo_Results::getSubItemByKey($this->base, "replyId");
	}

	/*
	Get the user who wronte this comment
	*/

	public function getAuthor() {
		return new Google_Drive_Author_output(Temboo_Results::getSubItemByKey($this->base, "author"));
	}

	/*
	Whether this reply has been deleted
	*/

	public function getDeleted() {
		return Temboo_Results::getSubItemByKey($this->base, "deleted");
	}

	/*
	The date when this reply was last modified (formatted RFC 3339 timestamp)
	*/

	public function getModifiedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedDate");
	}

	/*
	This is always drive#commentReply
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The date when this reply was first created (formatted RFC 3339 timestamp)
	*/

	public function getCreatedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "createdDate");
	}

	/*
	The plain text content used to create this reply
	*/

	public function getContent() {
		return Temboo_Results::getSubItemByKey($this->base, "content");
	}
}



/*
 A list of replies to a specified comment on a file

*/

class Google_Drive_ReplyList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link to the next page of replies
	*/

	public function getNextLink() {
		return Temboo_Results::getSubItemByKey($this->base, "nextLink");
	}

	/*
	Get a reply to a Google Drive comment
	*/

	public function getReplies() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Reply_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The page token for the next page of replies
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}

	/*
	This is always drive#commentReplyList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}
}



/*
 An object representing a revision of a file

*/

class Google_Drive_Revision_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Last time this revision was modified (formatted RFC 3339 timestamp)
	*/

	public function getModifiedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedDate");
	}

	/*
	Whether this revision is published
	*/

	public function getPublished() {
		return Temboo_Results::getSubItemByKey($this->base, "published");
	}

	/*
	The MIME type of the revision
	*/

	public function getMimeType() {
		return Temboo_Results::getSubItemByKey($this->base, "mimeType");
	}

	/*
	This is always drive#revision
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	Get links for exporting Google Docs to specific formats
	*/

	public function getExportLinks() {
		return new Google_Drive_ExportLinks_output(Temboo_Results::getSubItemByKey($this->base, "exportLinks"));
	}

	/*
	The ID of the revision
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Name of the last user to modify this revision
	*/

	public function getLastModifyingUserName() {
		return Temboo_Results::getSubItemByKey($this->base, "lastModifyingUserName");
	}

	/*
	The ETag of the revision
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	A link back to this revision
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 A list of a file's revisions

*/

class Google_Drive_RevisionList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	Get a revision for a file
	*/

	public function getRevisions() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Revision_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	This is always drive#revisionList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 An object containing a permission resource

*/

class Google_Drive_UserPermission_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link back to this permission
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	The account type. Allowed values are: user, group, domain, anyone
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	The primary role for this user. Allowed values are: owner, reader, writer
	*/

	public function getRole() {
		return Temboo_Results::getSubItemByKey($this->base, "role");
	}

	/*
	The type of resource (this is always drive#permission)
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The ETag of the permission
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	The ID of the permission
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}
}




?>
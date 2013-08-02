<?php

/**
 * Temboo PHP SDK Flickr classes
 *
 * Execute Choreographies from the Temboo Flickr bundle.
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
 * @subpackage Flickr
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves geo data (including latitude and longitude coordinates) for a specified photo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_GetPhotoLocation extends Temboo_Choreography
{
    /**
     * Retrieves geo data (including latitude and longitude coordinates) for a specified photo.
     *
     * @param Temboo_Session $session The session that owns this GetPhotoLocation Choreo.
     * @return Flickr_Geo_GetPhotoLocation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Geo/GetPhotoLocation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPhotoLocation Choreo.
     *
     * @param Flickr_Geo_GetPhotoLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_GetPhotoLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_GetPhotoLocation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Geo_GetPhotoLocation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPhotoLocation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_GetPhotoLocation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Geo_GetPhotoLocation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPhotoLocation Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_GetPhotoLocation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPhotoLocation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_GetPhotoLocation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPhotoLocation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Geo_GetPhotoLocation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Geo_GetPhotoLocation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPhotoLocation Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Geo_GetPhotoLocation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetPhotoLocation Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Geo_GetPhotoLocation_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetPhotoLocation Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Geo_GetPhotoLocation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetPhotoLocation Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Geo_GetPhotoLocation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this GetPhotoLocation Choreo.
     *
     * @param int $value (required, integer) The id of the photo that you want to get the location for.
     * @return Flickr_Geo_GetPhotoLocation_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetPhotoLocation Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Geo_GetPhotoLocation_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetPhotoLocation Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_GetPhotoLocation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPhotoLocation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPhotoLocation execution.
     * @param Flickr_Geo_GetPhotoLocation $choreo The choreography object for this execution.
     * @param Flickr_Geo_GetPhotoLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_GetPhotoLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_GetPhotoLocation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Geo_GetPhotoLocation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPhotoLocation execution.
     *
     * @return Flickr_Geo_GetPhotoLocation_Results New results object.
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
     * Wraps results in appropriate results class for this GetPhotoLocation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Geo_GetPhotoLocation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Geo_GetPhotoLocation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPhotoLocation Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_GetPhotoLocation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPhotoLocation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Geo_GetPhotoLocation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPhotoLocation execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the tag list for a given photo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListPhotoTags extends Temboo_Choreography
{
    /**
     * Retrieves the tag list for a given photo.
     *
     * @param Temboo_Session $session The session that owns this ListPhotoTags Choreo.
     * @return Flickr_Tags_ListPhotoTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Tags/ListPhotoTags/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPhotoTags Choreo.
     *
     * @param Flickr_Tags_ListPhotoTags_Inputs|array $inputs (optional) Inputs as Flickr_Tags_ListPhotoTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_ListPhotoTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Tags_ListPhotoTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPhotoTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_ListPhotoTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Tags_ListPhotoTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPhotoTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListPhotoTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPhotoTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_ListPhotoTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPhotoTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Tags_ListPhotoTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Tags_ListPhotoTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPhotoTags Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Tags_ListPhotoTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListPhotoTags Choreo.
     *
     * @param string $value (optional, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret). Required when accessing a protected resource.
     * @return Flickr_Tags_ListPhotoTags_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListPhotoTags Choreo.
     *
     * @param string $value (optional, string) The Access Token Secret retrieved during the OAuth process. Required when accessing a protected resource.
     * @return Flickr_Tags_ListPhotoTags_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListPhotoTags Choreo.
     *
     * @param string $value (optional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return Flickr_Tags_ListPhotoTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this ListPhotoTags Choreo.
     *
     * @param int $value (required, integer) The id of the photo to return tags for.
     * @return Flickr_Tags_ListPhotoTags_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPhotoTags Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Tags_ListPhotoTags_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListPhotoTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListPhotoTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPhotoTags Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPhotoTags execution.
     * @param Flickr_Tags_ListPhotoTags $choreo The choreography object for this execution.
     * @param Flickr_Tags_ListPhotoTags_Inputs|array $inputs (optional) Inputs as Flickr_Tags_ListPhotoTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_ListPhotoTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Tags_ListPhotoTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPhotoTags execution.
     *
     * @return Flickr_Tags_ListPhotoTags_Results New results object.
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
     * Wraps results in appropriate results class for this ListPhotoTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Tags_ListPhotoTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Tags_ListPhotoTags_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPhotoTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListPhotoTags_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPhotoTags Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Tags_ListPhotoTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPhotoTags execution.
     *
     * @return string The response from Flickr.
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
 * @subpackage Flickr
 */
class Flickr_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Flickr_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Flickr_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Flickr_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Flickr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Flickr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Flickr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Flickr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return Flickr_OAuth_InitializeOAuth_Inputs For method chaining.
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
 * @subpackage Flickr
 */
class Flickr_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Flickr_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Flickr_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Flickr_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Flickr_OAuth_InitializeOAuth_Results New results object.
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
     * @return Flickr_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_OAuth_InitializeOAuth_Results New instance.
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
    /**
     * Retrieve the value for the "OAuthTokenSecret" output from this InitializeOAuth execution.
     *
     * @return string (string) The temporary OAuth Token Secret that can be exchanged for permanent tokens using the FinalizeOAuth Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthTokenSecret()
    {
        return $this->get('OAuthTokenSecret');
    }
}

/**
 * Returns a list of favorite public photos for the given user.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_ListPublicFavorites extends Temboo_Choreography
{
    /**
     * Returns a list of favorite public photos for the given user.
     *
     * @param Temboo_Session $session The session that owns this ListPublicFavorites Choreo.
     * @return Flickr_Favorites_ListPublicFavorites New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/ListPublicFavorites/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPublicFavorites Choreo.
     *
     * @param Flickr_Favorites_ListPublicFavorites_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_ListPublicFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_ListPublicFavorites_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_ListPublicFavorites_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPublicFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_ListPublicFavorites_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPublicFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_ListPublicFavorites_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPublicFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPublicFavorites input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPublicFavorites Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Extras input for this ListPublicFavorites Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to fetch for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the MaxFaveDate input for this ListPublicFavorites Choreo.
     *
     * @param string $value (optional, date) Maximum date that a photo was favorited on. The date should be in the form of a unix timestamp.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function setMaxFaveDate($value)
    {
        return $this->set('MaxFaveDate', $value);
    }

    /**
     * Set the value for the MinFaveDate input for this ListPublicFavorites Choreo.
     *
     * @param string $value (optional, date) Minimum date that a photo was favorited on. The date should be in the form of a unix timestamp.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function setMinFaveDate($value)
    {
        return $this->set('MinFaveDate', $value);
    }

    /**
     * Set the value for the Page input for this ListPublicFavorites Choreo.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListPublicFavorites Choreo.
     *
     * @param int $value (optional, integer) The number of photos to return per page. Defaults to 100.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPublicFavorites Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListPublicFavorites Choreo.
     *
     * @param string $value (required, string) The user to fetch the favorites list for.
     * @return Flickr_Favorites_ListPublicFavorites_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListPublicFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_ListPublicFavorites_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPublicFavorites Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPublicFavorites execution.
     * @param Flickr_Favorites_ListPublicFavorites $choreo The choreography object for this execution.
     * @param Flickr_Favorites_ListPublicFavorites_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_ListPublicFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_ListPublicFavorites_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_ListPublicFavorites $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPublicFavorites execution.
     *
     * @return Flickr_Favorites_ListPublicFavorites_Results New results object.
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
     * Wraps results in appropriate results class for this ListPublicFavorites execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_ListPublicFavorites_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_ListPublicFavorites_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPublicFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_ListPublicFavorites_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPublicFavorites Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_ListPublicFavorites_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPublicFavorites execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes a photo from a user's favorites list.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_RemoveFromFavorites extends Temboo_Choreography
{
    /**
     * Removes a photo from a user's favorites list.
     *
     * @param Temboo_Session $session The session that owns this RemoveFromFavorites Choreo.
     * @return Flickr_Favorites_RemoveFromFavorites New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/RemoveFromFavorites/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RemoveFromFavorites Choreo.
     *
     * @param Flickr_Favorites_RemoveFromFavorites_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_RemoveFromFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_RemoveFromFavorites_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_RemoveFromFavorites_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveFromFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_RemoveFromFavorites_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveFromFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_RemoveFromFavorites_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RemoveFromFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemoveFromFavorites input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RemoveFromFavorites Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this RemoveFromFavorites Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RemoveFromFavorites Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RemoveFromFavorites Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this RemoveFromFavorites Choreo.
     *
     * @param int $value (required, integer) The id of the photo to remove from the user's favorites.
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RemoveFromFavorites Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Favorites_RemoveFromFavorites_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the RemoveFromFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_RemoveFromFavorites_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveFromFavorites Choreo.
     *
     * @param Temboo_Session $session The session that owns this RemoveFromFavorites execution.
     * @param Flickr_Favorites_RemoveFromFavorites $choreo The choreography object for this execution.
     * @param Flickr_Favorites_RemoveFromFavorites_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_RemoveFromFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_RemoveFromFavorites_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_RemoveFromFavorites $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveFromFavorites execution.
     *
     * @return Flickr_Favorites_RemoveFromFavorites_Results New results object.
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
     * Wraps results in appropriate results class for this RemoveFromFavorites execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_RemoveFromFavorites_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_RemoveFromFavorites_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RemoveFromFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_RemoveFromFavorites_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RemoveFromFavorites Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_RemoveFromFavorites_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RemoveFromFavorites execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns next and previous favorites for a photo in a user's favorites.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetContextForFavorite extends Temboo_Choreography
{
    /**
     * Returns next and previous favorites for a photo in a user's favorites.
     *
     * @param Temboo_Session $session The session that owns this GetContextForFavorite Choreo.
     * @return Flickr_Favorites_GetContextForFavorite New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/GetContextForFavorite/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetContextForFavorite Choreo.
     *
     * @param Flickr_Favorites_GetContextForFavorite_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_GetContextForFavorite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_GetContextForFavorite_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_GetContextForFavorite_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetContextForFavorite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_GetContextForFavorite_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_GetContextForFavorite_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetContextForFavorite Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetContextForFavorite_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetContextForFavorite Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_GetContextForFavorite_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetContextForFavorite input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_GetContextForFavorite_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_GetContextForFavorite_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetContextForFavorite Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_GetContextForFavorite_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the PhotoID input for this GetContextForFavorite Choreo.
     *
     * @param int $value (required, integer) The id of the photo to fetch the context for.
     * @return Flickr_Favorites_GetContextForFavorite_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetContextForFavorite Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Favorites_GetContextForFavorite_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this GetContextForFavorite Choreo.
     *
     * @param string $value (required, string) The user who counts the photo as a favorite.
     * @return Flickr_Favorites_GetContextForFavorite_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetContextForFavorite Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetContextForFavorite_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetContextForFavorite Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetContextForFavorite execution.
     * @param Flickr_Favorites_GetContextForFavorite $choreo The choreography object for this execution.
     * @param Flickr_Favorites_GetContextForFavorite_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_GetContextForFavorite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_GetContextForFavorite_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_GetContextForFavorite $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetContextForFavorite execution.
     *
     * @return Flickr_Favorites_GetContextForFavorite_Results New results object.
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
     * Wraps results in appropriate results class for this GetContextForFavorite execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_GetContextForFavorite_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_GetContextForFavorite_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetContextForFavorite Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetContextForFavorite_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetContextForFavorite Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_GetContextForFavorite_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetContextForFavorite execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Flickr access token, token secret, user ID and username for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Flickr access token, token secret, user ID and username for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Flickr_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Flickr_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Flickr_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process. This is returned by the InitializeOAuth Choreo.
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Flickr_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Flickr
 */
class Flickr_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Flickr_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Flickr_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Flickr_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Flickr_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Flickr_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessTokenSecret" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token Secret retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessTokenSecret()
    {
        return $this->get('AccessTokenSecret');
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "UserID" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Flickr NSID (user ID) associated with the access token that is being retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserID()
    {
        return $this->get('UserID');
    }
    /**
     * Retrieve the value for the "Username" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Username associated with the access token that is being retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUsername()
    {
        return $this->get('Username');
    }
}

/**
 * Obtain geo-location information for a place using its flickr.com/places URL.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByURL extends Temboo_Choreography
{
    /**
     * Obtain geo-location information for a place using its flickr.com/places URL.
     *
     * @param Temboo_Session $session The session that owns this FindByURL Choreo.
     * @return Flickr_Places_FindByURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Places/FindByURL/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindByURL Choreo.
     *
     * @param Flickr_Places_FindByURL_Inputs|array $inputs (optional) Inputs as Flickr_Places_FindByURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_FindByURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Places_FindByURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindByURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_FindByURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Places_FindByURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindByURL Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindByURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_FindByURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindByURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Places_FindByURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Places_FindByURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindByURL Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Places_FindByURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindByURL Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Places_FindByURL_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the URL input for this FindByURL Choreo.
     *
     * @param string $value (required, string) Enter a flickr.com/places URL in the following form: /country/region/city. For example: /USA/NewYork/Rochester.
     * @return Flickr_Places_FindByURL_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the FindByURL Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindByURL Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindByURL execution.
     * @param Flickr_Places_FindByURL $choreo The choreography object for this execution.
     * @param Flickr_Places_FindByURL_Inputs|array $inputs (optional) Inputs as Flickr_Places_FindByURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_FindByURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Places_FindByURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindByURL execution.
     *
     * @return Flickr_Places_FindByURL_Results New results object.
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
     * Wraps results in appropriate results class for this FindByURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Places_FindByURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Places_FindByURL_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindByURL Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByURL_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindByURL Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Places_FindByURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindByURL execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a place ID for a given latitude, longitude and accuracy.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByCoordinates extends Temboo_Choreography
{
    /**
     * Returns a place ID for a given latitude, longitude and accuracy.
     *
     * @param Temboo_Session $session The session that owns this FindByCoordinates Choreo.
     * @return Flickr_Places_FindByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Places/FindByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindByCoordinates Choreo.
     *
     * @param Flickr_Places_FindByCoordinates_Inputs|array $inputs (optional) Inputs as Flickr_Places_FindByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_FindByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Places_FindByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_FindByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Places_FindByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_FindByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Places_FindByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Places_FindByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindByCoordinates Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Places_FindByCoordinates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Accuracy input for this FindByCoordinates Choreo.
     *
     * @param int $value (optional, integer) Recorded accuracy level of the location information. Valid range is 1-16. The default is 16.
     * @return Flickr_Places_FindByCoordinates_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Latitude input for this FindByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitude whose valid range is -90 to 90. Anything more than 4 decimal places will be truncated.
     * @return Flickr_Places_FindByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this FindByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude whose valid range is -180 to 180. Anything more than 4 decimal places will be truncated.
     * @return Flickr_Places_FindByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindByCoordinates Choreo.
     *
     * @param string $value (optional, string) 
     * @return Flickr_Places_FindByCoordinates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FindByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindByCoordinates execution.
     * @param Flickr_Places_FindByCoordinates $choreo The choreography object for this execution.
     * @param Flickr_Places_FindByCoordinates_Inputs|array $inputs (optional) Inputs as Flickr_Places_FindByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_FindByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Places_FindByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindByCoordinates execution.
     *
     * @return Flickr_Places_FindByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this FindByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Places_FindByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Places_FindByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Places_FindByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindByCoordinates execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Add a comment to a specified photo on Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_LeaveComment extends Temboo_Choreography
{
    /**
     * Add a comment to a specified photo on Flickr.
     *
     * @param Temboo_Session $session The session that owns this LeaveComment Choreo.
     * @return Flickr_PhotoComments_LeaveComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoComments/LeaveComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LeaveComment Choreo.
     *
     * @param Flickr_PhotoComments_LeaveComment_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_LeaveComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_LeaveComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoComments_LeaveComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LeaveComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_LeaveComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoComments_LeaveComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LeaveComment Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_LeaveComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LeaveComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_LeaveComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LeaveComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_PhotoComments_LeaveComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoComments_LeaveComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this LeaveComment Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoComments_LeaveComment_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this LeaveComment Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_PhotoComments_LeaveComment_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LeaveComment Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_PhotoComments_LeaveComment_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LeaveComment Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_PhotoComments_LeaveComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CommentText input for this LeaveComment Choreo.
     *
     * @param string $value (required, string) The text of the comment you are adding.
     * @return Flickr_PhotoComments_LeaveComment_Inputs For method chaining.
     */
    public function setCommentText($value)
    {
        return $this->set('CommentText', $value);
    }

    /**
     * Set the value for the PhotoID input for this LeaveComment Choreo.
     *
     * @param int $value (required, integer) The id of the photo to add a comment to
     * @return Flickr_PhotoComments_LeaveComment_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LeaveComment Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_PhotoComments_LeaveComment_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the LeaveComment Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_LeaveComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LeaveComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this LeaveComment execution.
     * @param Flickr_PhotoComments_LeaveComment $choreo The choreography object for this execution.
     * @param Flickr_PhotoComments_LeaveComment_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_LeaveComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_LeaveComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoComments_LeaveComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LeaveComment execution.
     *
     * @return Flickr_PhotoComments_LeaveComment_Results New results object.
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
     * Wraps results in appropriate results class for this LeaveComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_PhotoComments_LeaveComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoComments_LeaveComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LeaveComment Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_LeaveComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LeaveComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoComments_LeaveComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LeaveComment execution.
     *
     * @return string (json) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new photo gallery.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_CreatePhotoGallery extends Temboo_Choreography
{
    /**
     * Creates a new photo gallery.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoGallery Choreo.
     * @return Flickr_Galleries_CreatePhotoGallery New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Galleries/CreatePhotoGallery/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreatePhotoGallery Choreo.
     *
     * @param Flickr_Galleries_CreatePhotoGallery_Inputs|array $inputs (optional) Inputs as Flickr_Galleries_CreatePhotoGallery_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Galleries_CreatePhotoGallery_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Galleries_CreatePhotoGallery_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreatePhotoGallery Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Galleries_CreatePhotoGallery_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreatePhotoGallery Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_CreatePhotoGallery_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreatePhotoGallery Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreatePhotoGallery input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreatePhotoGallery Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this CreatePhotoGallery Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreatePhotoGallery Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreatePhotoGallery Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Description input for this CreatePhotoGallery Choreo.
     *
     * @param string $value (required, string) A short description for the gallery.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the PrimaryPhotoID input for this CreatePhotoGallery Choreo.
     *
     * @param int $value (optional, integer) The first photo to add to your gallery.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function setPrimaryPhotoID($value)
    {
        return $this->set('PrimaryPhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreatePhotoGallery Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Title input for this CreatePhotoGallery Choreo.
     *
     * @param string $value (required, string) The name of the gallery.
     * @return Flickr_Galleries_CreatePhotoGallery_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }
}


/**
 * Execution object for the CreatePhotoGallery Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_CreatePhotoGallery_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreatePhotoGallery Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoGallery execution.
     * @param Flickr_Galleries_CreatePhotoGallery $choreo The choreography object for this execution.
     * @param Flickr_Galleries_CreatePhotoGallery_Inputs|array $inputs (optional) Inputs as Flickr_Galleries_CreatePhotoGallery_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Galleries_CreatePhotoGallery_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Galleries_CreatePhotoGallery $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreatePhotoGallery execution.
     *
     * @return Flickr_Galleries_CreatePhotoGallery_Results New results object.
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
     * Wraps results in appropriate results class for this CreatePhotoGallery execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Galleries_CreatePhotoGallery_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Galleries_CreatePhotoGallery_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreatePhotoGallery Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_CreatePhotoGallery_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreatePhotoGallery Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Galleries_CreatePhotoGallery_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreatePhotoGallery execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sets the geo data (including latitude and longitude) for a specified photo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_SetPhotoLocation extends Temboo_Choreography
{
    /**
     * Sets the geo data (including latitude and longitude) for a specified photo.
     *
     * @param Temboo_Session $session The session that owns this SetPhotoLocation Choreo.
     * @return Flickr_Geo_SetPhotoLocation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Geo/SetPhotoLocation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SetPhotoLocation Choreo.
     *
     * @param Flickr_Geo_SetPhotoLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_SetPhotoLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_SetPhotoLocation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Geo_SetPhotoLocation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SetPhotoLocation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_SetPhotoLocation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Geo_SetPhotoLocation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SetPhotoLocation Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_SetPhotoLocation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SetPhotoLocation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_SetPhotoLocation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SetPhotoLocation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SetPhotoLocation Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this SetPhotoLocation Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SetPhotoLocation Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SetPhotoLocation Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Accuracy input for this SetPhotoLocation Choreo.
     *
     * @param int $value (optional, integer) Recorded accuracy level of the location information. Current range is 1-16. Defaults to 16 if not specified.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Context input for this SetPhotoLocation Choreo.
     *
     * @param string $value (optional, string) A numeric value representing the photo's location beyond latitude and longitude. For example, you can indicate that a photo was taken "indoors" or "outdoors". Set to 1 for indoors or 2 for outdoors.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setContext($value)
    {
        return $this->set('Context', $value);
    }

    /**
     * Set the value for the Latitude input for this SetPhotoLocation Choreo.
     *
     * @param float $value (required, decimal) The latitude whose valid range is -90 to 90. Anything more than 6 decimal places will be truncated.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SetPhotoLocation Choreo.
     *
     * @param float $value (required, decimal) The longitude whose valid range is -180 to 180. Anything more than 6 decimal places will be truncated.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the PhotoID input for this SetPhotoLocation Choreo.
     *
     * @param int $value (required, integer) The id of the photo to set location data for.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SetPhotoLocation Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Geo_SetPhotoLocation_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SetPhotoLocation Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_SetPhotoLocation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SetPhotoLocation Choreo.
     *
     * @param Temboo_Session $session The session that owns this SetPhotoLocation execution.
     * @param Flickr_Geo_SetPhotoLocation $choreo The choreography object for this execution.
     * @param Flickr_Geo_SetPhotoLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_SetPhotoLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_SetPhotoLocation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Geo_SetPhotoLocation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SetPhotoLocation execution.
     *
     * @return Flickr_Geo_SetPhotoLocation_Results New results object.
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
     * Wraps results in appropriate results class for this SetPhotoLocation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Geo_SetPhotoLocation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Geo_SetPhotoLocation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SetPhotoLocation Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_SetPhotoLocation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SetPhotoLocation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Geo_SetPhotoLocation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SetPhotoLocation execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of your geo-tagged photos.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListGeoTaggedPhotos extends Temboo_Choreography
{
    /**
     * Returns a list of your geo-tagged photos.
     *
     * @param Temboo_Session $session The session that owns this ListGeoTaggedPhotos Choreo.
     * @return Flickr_Photos_ListGeoTaggedPhotos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/ListGeoTaggedPhotos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListGeoTaggedPhotos Choreo.
     *
     * @param Flickr_Photos_ListGeoTaggedPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListGeoTaggedPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_ListGeoTaggedPhotos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListGeoTaggedPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_ListGeoTaggedPhotos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListGeoTaggedPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListGeoTaggedPhotos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListGeoTaggedPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListGeoTaggedPhotos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Extras input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to retrieve for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the MaxTakenDate input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (optional, date) Photos with an taken date less than or equal to this value will be returned. The date should be in the form of a mysql datetime.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setMaxTakenDate($value)
    {
        return $this->set('MaxTakenDate', $value);
    }

    /**
     * Set the value for the MaxUploadDate input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (optional, date) Photos with an upload date less than or equal to this value will be returned. The date should be in the form of a unix timestamp.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setMaxUploadDate($value)
    {
        return $this->set('MaxUploadDate', $value);
    }

    /**
     * Set the value for the Media input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (optional, string) Filter results by media type. Possible values are all (default), photos or videos.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setMedia($value)
    {
        return $this->set('Media', $value);
    }

    /**
     * Set the value for the MinTakenDate input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (optional, date) Photos with an taken date greater than or equal to this value will be returned. The date should be in the form of a mysql datetime.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setMinTakenDate($value)
    {
        return $this->set('MinTakenDate', $value);
    }

    /**
     * Set the value for the MinUploadDate input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (optional, date) Photos with an upload date greater than or equal to this value will be returned. The date should be in the form of a unix timestamp.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setMinUploadDate($value)
    {
        return $this->set('MinUploadDate', $value);
    }

    /**
     * Set the value for the Page input for this ListGeoTaggedPhotos Choreo.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results. Defaults to 1.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListGeoTaggedPhotos Choreo.
     *
     * @param int $value (optional, integer) Number of photos to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the PrivacyFilter input for this ListGeoTaggedPhotos Choreo.
     *
     * @param int $value (optional, integer) Valid values are: 1 (public photos), 2 (private photos visible to friends), 3 (private photos visible to family), 4 (private photos visible to friends and family), 5 (completely private photos).
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setPrivacyFilter($value)
    {
        return $this->set('PrivacyFilter', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this ListGeoTaggedPhotos Choreo.
     *
     * @param string $value (optional, string) The sort order. Accepted values are: date-posted-asc, date-posted-desc, date-taken-asc, date-taken-desc, interestingness-desc, and interestingness-asc.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the ListGeoTaggedPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListGeoTaggedPhotos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListGeoTaggedPhotos Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListGeoTaggedPhotos execution.
     * @param Flickr_Photos_ListGeoTaggedPhotos $choreo The choreography object for this execution.
     * @param Flickr_Photos_ListGeoTaggedPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListGeoTaggedPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_ListGeoTaggedPhotos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListGeoTaggedPhotos execution.
     *
     * @return Flickr_Photos_ListGeoTaggedPhotos_Results New results object.
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
     * Wraps results in appropriate results class for this ListGeoTaggedPhotos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_ListGeoTaggedPhotos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListGeoTaggedPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListGeoTaggedPhotos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListGeoTaggedPhotos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_ListGeoTaggedPhotos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListGeoTaggedPhotos execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the tag list for a given user (or the currently logged in user).
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListUserTags extends Temboo_Choreography
{
    /**
     * Retrieves the tag list for a given user (or the currently logged in user).
     *
     * @param Temboo_Session $session The session that owns this ListUserTags Choreo.
     * @return Flickr_Tags_ListUserTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Tags/ListUserTags/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUserTags Choreo.
     *
     * @param Flickr_Tags_ListUserTags_Inputs|array $inputs (optional) Inputs as Flickr_Tags_ListUserTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_ListUserTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Tags_ListUserTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUserTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_ListUserTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Tags_ListUserTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUserTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListUserTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUserTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_ListUserTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUserTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Tags_ListUserTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Tags_ListUserTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListUserTags Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Tags_ListUserTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListUserTags Choreo.
     *
     * @param string $value (conditional, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret). Required unless UserID is provided.
     * @return Flickr_Tags_ListUserTags_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListUserTags Choreo.
     *
     * @param string $value (conditional, string) The Access Token Secret retrieved during the OAuth process. Required unless UserID is provided.
     * @return Flickr_Tags_ListUserTags_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListUserTags Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required unless UserID is provided.
     * @return Flickr_Tags_ListUserTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListUserTags Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Tags_ListUserTags_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListUserTags Choreo.
     *
     * @param string $value (conditional, string) The NSID of the user to fetch the tag list for. Required unless providing all OAuth parameters. When OAuth parameters are passed, the authenticated user is assumed.
     * @return Flickr_Tags_ListUserTags_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListUserTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListUserTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUserTags Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUserTags execution.
     * @param Flickr_Tags_ListUserTags $choreo The choreography object for this execution.
     * @param Flickr_Tags_ListUserTags_Inputs|array $inputs (optional) Inputs as Flickr_Tags_ListUserTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_ListUserTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Tags_ListUserTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUserTags execution.
     *
     * @return Flickr_Tags_ListUserTags_Results New results object.
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
     * Wraps results in appropriate results class for this ListUserTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Tags_ListUserTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Tags_ListUserTags_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUserTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListUserTags_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUserTags Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Tags_ListUserTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUserTags execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return a list of the user's photos for a specified location.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_ListPhotosForLocation extends Temboo_Choreography
{
    /**
     * Return a list of the user's photos for a specified location.
     *
     * @param Temboo_Session $session The session that owns this ListPhotosForLocation Choreo.
     * @return Flickr_Geo_ListPhotosForLocation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Geo/ListPhotosForLocation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPhotosForLocation Choreo.
     *
     * @param Flickr_Geo_ListPhotosForLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_ListPhotosForLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_ListPhotosForLocation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Geo_ListPhotosForLocation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPhotosForLocation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Geo_ListPhotosForLocation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPhotosForLocation Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_ListPhotosForLocation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPhotosForLocation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPhotosForLocation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPhotosForLocation Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListPhotosForLocation Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListPhotosForLocation Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListPhotosForLocation Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Accuracy input for this ListPhotosForLocation Choreo.
     *
     * @param int $value (optional, integer) Recorded accuracy level of the location information. Current range is 1-16. Defaults to 16 if not specified.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Extras input for this ListPhotosForLocation Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to retrieve for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the Latitude input for this ListPhotosForLocation Choreo.
     *
     * @param float $value (required, decimal) The latitude whose valid range is -90 to 90. Anything more than 6 decimal places will be truncated.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this ListPhotosForLocation Choreo.
     *
     * @param float $value (required, decimal) The longitude whose valid range is -180 to 180. Anything more than 6 decimal places will be truncated.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Page input for this ListPhotosForLocation Choreo.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results. Defaults to 1.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListPhotosForLocation Choreo.
     *
     * @param int $value (optional, integer) Number of photos to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPhotosForLocation Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Geo_ListPhotosForLocation_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListPhotosForLocation Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_ListPhotosForLocation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPhotosForLocation Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPhotosForLocation execution.
     * @param Flickr_Geo_ListPhotosForLocation $choreo The choreography object for this execution.
     * @param Flickr_Geo_ListPhotosForLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_ListPhotosForLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_ListPhotosForLocation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Geo_ListPhotosForLocation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPhotosForLocation execution.
     *
     * @return Flickr_Geo_ListPhotosForLocation_Results New results object.
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
     * Wraps results in appropriate results class for this ListPhotosForLocation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Geo_ListPhotosForLocation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Geo_ListPhotosForLocation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPhotosForLocation Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_ListPhotosForLocation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPhotosForLocation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Geo_ListPhotosForLocation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPhotosForLocation execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve public photos that have been recently uploaded to Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListRecentPhotos extends Temboo_Choreography
{
    /**
     * Retrieve public photos that have been recently uploaded to Flickr.
     *
     * @param Temboo_Session $session The session that owns this ListRecentPhotos Choreo.
     * @return Flickr_Photos_ListRecentPhotos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/ListRecentPhotos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListRecentPhotos Choreo.
     *
     * @param Flickr_Photos_ListRecentPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListRecentPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListRecentPhotos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_ListRecentPhotos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListRecentPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListRecentPhotos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_ListRecentPhotos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListRecentPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListRecentPhotos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListRecentPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListRecentPhotos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListRecentPhotos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_ListRecentPhotos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_ListRecentPhotos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListRecentPhotos Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_ListRecentPhotos_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Extras input for this ListRecentPhotos Choreo.
     *
     * @param string $value (optional, string) A comma-separated list returning additional photo information such as: license, description, date_upload, date_taken.  Additional options are listed on this method's API doc page.
     * @return Flickr_Photos_ListRecentPhotos_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the Page input for this ListRecentPhotos Choreo.
     *
     * @param int $value (optional, integer) Specify the page of photos that is to be returned.  If unspecified, the first page is returned.
     * @return Flickr_Photos_ListRecentPhotos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListRecentPhotos Choreo.
     *
     * @param int $value (optional, integer) Specify how many photos to display per page. Default is set to: 100. The mamimum allowed value is: 500.
     * @return Flickr_Photos_ListRecentPhotos_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListRecentPhotos Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Photos_ListRecentPhotos_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListRecentPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListRecentPhotos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListRecentPhotos Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListRecentPhotos execution.
     * @param Flickr_Photos_ListRecentPhotos $choreo The choreography object for this execution.
     * @param Flickr_Photos_ListRecentPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListRecentPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListRecentPhotos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_ListRecentPhotos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListRecentPhotos execution.
     *
     * @return Flickr_Photos_ListRecentPhotos_Results New results object.
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
     * Wraps results in appropriate results class for this ListRecentPhotos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_ListRecentPhotos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_ListRecentPhotos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListRecentPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListRecentPhotos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListRecentPhotos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_ListRecentPhotos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListRecentPhotos execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the list of photos in a set.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_ListPhotos extends Temboo_Choreography
{
    /**
     * Retrieves the list of photos in a set.
     *
     * @param Temboo_Session $session The session that owns this ListPhotos Choreo.
     * @return Flickr_PhotoSets_ListPhotos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoSets/ListPhotos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPhotos Choreo.
     *
     * @param Flickr_PhotoSets_ListPhotos_Inputs|array $inputs (optional) Inputs as Flickr_PhotoSets_ListPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoSets_ListPhotos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoSets_ListPhotos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoSets_ListPhotos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoSets_ListPhotos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_ListPhotos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoSets_ListPhotos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPhotos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPhotos Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListPhotos Choreo.
     *
     * @param string $value (optional, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).  Required when accessing a protected resource.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListPhotos Choreo.
     *
     * @param string $value (optional, string) The Access Token Secret retrieved during the OAuth process. Required when accessing a protected resource.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListPhotos Choreo.
     *
     * @param string $value (optional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Extras input for this ListPhotos Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to fetch for each returned record.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the Media input for this ListPhotos Choreo.
     *
     * @param string $value (optional, string) Filter results by media type. Possible values are all (default), photos or videos
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setMedia($value)
    {
        return $this->set('Media', $value);
    }

    /**
     * Set the value for the Page input for this ListPhotos Choreo.
     *
     * @param int $value (optional, integer) The page of results to return. If this argument is omitted, it defaults to 1.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListPhotos Choreo.
     *
     * @param int $value (optional, integer) The number of photos to return per page. Defaults to 500. The maximum allowed value is 500.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the PhotoSetID input for this ListPhotos Choreo.
     *
     * @param int $value (required, integer) The ID of the photo set.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setPhotoSetID($value)
    {
        return $this->set('PhotoSetID', $value);
    }

    /**
     * Set the value for the PrivacyFilter input for this ListPhotos Choreo.
     *
     * @param int $value (optional, integer) Valid values are: 1 (public photos), 2 (private photos visible to friends), 3 (private photos visible to family), 4 (private photos visible to friends and family), 5 (completely private photos).
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setPrivacyFilter($value)
    {
        return $this->set('PrivacyFilter', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPhotos Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_PhotoSets_ListPhotos_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_ListPhotos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPhotos Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPhotos execution.
     * @param Flickr_PhotoSets_ListPhotos $choreo The choreography object for this execution.
     * @param Flickr_PhotoSets_ListPhotos_Inputs|array $inputs (optional) Inputs as Flickr_PhotoSets_ListPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoSets_ListPhotos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoSets_ListPhotos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPhotos execution.
     *
     * @return Flickr_PhotoSets_ListPhotos_Results New results object.
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
     * Wraps results in appropriate results class for this ListPhotos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_PhotoSets_ListPhotos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoSets_ListPhotos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_ListPhotos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPhotos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoSets_ListPhotos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPhotos execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves comments for a given photo on Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_ListComments extends Temboo_Choreography
{
    /**
     * Retrieves comments for a given photo on Flickr.
     *
     * @param Temboo_Session $session The session that owns this ListComments Choreo.
     * @return Flickr_PhotoComments_ListComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoComments/ListComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListComments Choreo.
     *
     * @param Flickr_PhotoComments_ListComments_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_ListComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_ListComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoComments_ListComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_ListComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoComments_ListComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListComments Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_ListComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_ListComments_Inputs New instance.
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
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListComments Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListComments Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListComments Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListComments Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxCommentDate input for this ListComments Choreo.
     *
     * @param string $value (optional, date) The maximum date that a a comment was created. Should be formatted as a unix timestamp.
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function setMaxCommentDate($value)
    {
        return $this->set('MaxCommentDate', $value);
    }

    /**
     * Set the value for the MinCommentDate input for this ListComments Choreo.
     *
     * @param string $value (optional, date) The minimum date that a a comment was created. Should be formatted as a unix timestamp.
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function setMinCommentDate($value)
    {
        return $this->set('MinCommentDate', $value);
    }

    /**
     * Set the value for the PhotoID input for this ListComments Choreo.
     *
     * @param int $value (required, integer) The id of the photo to retrieve comments for.
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListComments Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_PhotoComments_ListComments_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListComments Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_ListComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListComments execution.
     * @param Flickr_PhotoComments_ListComments $choreo The choreography object for this execution.
     * @param Flickr_PhotoComments_ListComments_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_ListComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_ListComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoComments_ListComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListComments execution.
     *
     * @return Flickr_PhotoComments_ListComments_Results New results object.
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
     * @return Flickr_PhotoComments_ListComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoComments_ListComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListComments Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_ListComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoComments_ListComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListComments execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of the user's favorite photos.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_ListFavorites extends Temboo_Choreography
{
    /**
     * Returns a list of the user's favorite photos.
     *
     * @param Temboo_Session $session The session that owns this ListFavorites Choreo.
     * @return Flickr_Favorites_ListFavorites New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/ListFavorites/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFavorites Choreo.
     *
     * @param Flickr_Favorites_ListFavorites_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_ListFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_ListFavorites_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_ListFavorites_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_ListFavorites_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_ListFavorites_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_ListFavorites_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_ListFavorites_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFavorites input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListFavorites Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListFavorites Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListFavorites Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListFavorites Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Extras input for this ListFavorites Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to fetch for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the MaxFaveDate input for this ListFavorites Choreo.
     *
     * @param string $value (optional, date) Maximum date that a photo was favorited on. The date should be in the form of a unix timestamp.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setMaxFaveDate($value)
    {
        return $this->set('MaxFaveDate', $value);
    }

    /**
     * Set the value for the MinFaveDate input for this ListFavorites Choreo.
     *
     * @param string $value (optional, date) Minimum date that a photo was favorited on. The date should be in the form of a unix timestamp.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setMinFaveDate($value)
    {
        return $this->set('MinFaveDate', $value);
    }

    /**
     * Set the value for the Page input for this ListFavorites Choreo.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListFavorites Choreo.
     *
     * @param int $value (optional, integer) The number of photos to return per page. Defaults to 100.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListFavorites Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListFavorites Choreo.
     *
     * @param string $value (required, string) The NSID of the user to fetch the favorites list for. If this argument is omitted, the favorites list for the calling user is returned.
     * @return Flickr_Favorites_ListFavorites_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_ListFavorites_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFavorites Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFavorites execution.
     * @param Flickr_Favorites_ListFavorites $choreo The choreography object for this execution.
     * @param Flickr_Favorites_ListFavorites_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_ListFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_ListFavorites_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_ListFavorites $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFavorites execution.
     *
     * @return Flickr_Favorites_ListFavorites_Results New results object.
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
     * Wraps results in appropriate results class for this ListFavorites execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_ListFavorites_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_ListFavorites_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_ListFavorites_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFavorites Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_ListFavorites_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListFavorites execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of photos matching a search criteria.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_SearchPhotos extends Temboo_Choreography
{
    /**
     * Returns a list of photos matching a search criteria.
     *
     * @param Temboo_Session $session The session that owns this SearchPhotos Choreo.
     * @return Flickr_Photos_SearchPhotos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/SearchPhotos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchPhotos Choreo.
     *
     * @param Flickr_Photos_SearchPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_SearchPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_SearchPhotos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_SearchPhotos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_SearchPhotos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_SearchPhotos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_SearchPhotos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_SearchPhotos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchPhotos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchPhotos Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Accuracy input for this SearchPhotos Choreo.
     *
     * @param int $value (optional, integer) The accuracy level of the location information. Current range is 1-16. World level is 1, Country is ~3, Region is ~6, City is ~11, Street is ~16.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the BoundingBox input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of 4 values defining the Bounding Box of the area that will be searched. These values represent the coordinates of the bottom-left corner and top-right corner of the box.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setBoundingBox($value)
    {
        return $this->set('BoundingBox', $value);
    }

    /**
     * Set the value for the ContentType input for this SearchPhotos Choreo.
     *
     * @param int $value (optional, integer) The content type setting. 1 = photos only, 2 = screenshots only, 3 = other, 4 = photos and screenshots, 5 = screenshots and other, 6 = photos and other, 7 = all.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the Extras input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to fetch for each returned record. See documentation for more details on supported fields.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the GeoContext input for this SearchPhotos Choreo.
     *
     * @param int $value (optional, integer) A numeric value representing the photo's location info beyond latitude and longitude. 0 = not defined, 1 = indoors, 2 = outdoors.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setGeoContext($value)
    {
        return $this->set('GeoContext', $value);
    }

    /**
     * Set the value for the GroupID input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) The id of a group who's pool to search. If specified, only matching photos posted to the group's pool will be returned.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setGroupID($value)
    {
        return $this->set('GroupID', $value);
    }

    /**
     * Set the value for the InGallery input for this SearchPhotos Choreo.
     *
     * @param bool $value (optional, boolean) Limits the search to only photos that are in a gallery. Default is false.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setInGallery($value)
    {
        return $this->set('InGallery', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchPhotos Choreo.
     *
     * @param float $value (conditional, decimal) A valid latitude, in decimal format, for performing geo queries (not required if providing another limiting search parameter).
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchPhotos Choreo.
     *
     * @param float $value (conditional, decimal) A valid longitude, in decimal format, for performing geo queries (not required if providing another limiting search parameter).
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxTakenDate input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, date) The maximum taken date. Photos with an taken date less than or equal to this value will be returned. The date can be in the form of a mysql datetime or unix timestamp.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setMaxTakenDate($value)
    {
        return $this->set('MaxTakenDate', $value);
    }

    /**
     * Set the value for the MaxUploadDate input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, date) The maximum upload date. Photos with an upload date less than or equal to this value will be returned. The date can be in the form of a unix timestamp or mysql datetime.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setMaxUploadDate($value)
    {
        return $this->set('MaxUploadDate', $value);
    }

    /**
     * Set the value for the Media input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) Filter results by media type. Valid values are all (default), photos or videos.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setMedia($value)
    {
        return $this->set('Media', $value);
    }

    /**
     * Set the value for the MinTakenDate input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, date) The minimum taken date. Photos with a taken date greater than or equal to this value will be returned. The date can be in the form of a mysql datetime or unix timestamp.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setMinTakenDate($value)
    {
        return $this->set('MinTakenDate', $value);
    }

    /**
     * Set the value for the MinUploadDate input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, date) The minimum upload date. Photos with an upload date greater than or equal to this value will be returned. The date can be in the form of a unix timestamp or mysql datetime.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setMinUploadDate($value)
    {
        return $this->set('MinUploadDate', $value);
    }

    /**
     * Set the value for the Page input for this SearchPhotos Choreo.
     *
     * @param int $value (optional, integer) The page of results to return. Defaults to 1.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this SearchPhotos Choreo.
     *
     * @param int $value (optional, integer) The number of photos to return per page. Defaults to 100.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the PlaceID input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) A Flickr place id.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setPlaceID($value)
    {
        return $this->set('PlaceID', $value);
    }

    /**
     * Set the value for the RadiusUnits input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) The unit of measure when doing radial geo queries. Valid values are: "mi" (miles) and "km" (kilometers). The default is "km".
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setRadiusUnits($value)
    {
        return $this->set('RadiusUnits', $value);
    }

    /**
     * Set the value for the Radius input for this SearchPhotos Choreo.
     *
     * @param int $value (optional, integer) A valid radius used for geo queries, greater than zero and less than 20 miles (or 32 kilometers). Defaults to 5 (km).
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) Defaults to date-posted-desc unless performing a geo query. Valid values are: date-posted-asc, date-posted-desc, date-taken-asc, date-taken-desc, interestingness-desc, interestingness-asc, relevance.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the TagMode input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) Use the mode 'any' to search using an OR combination of tags. Use 'all' for an AND combnation. Defaults to 'any'.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setTagMode($value)
    {
        return $this->set('TagMode', $value);
    }

    /**
     * Set the value for the Tags input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of tags. Photos with one or more of the tags listed will be returned. You can exclude results that match a term by prepending it with a hyphen.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Text input for this SearchPhotos Choreo.
     *
     * @param string $value (conditional, string) A keyword search against photo titles, descriptions, or tags. Prepend search term with a hyphen to exclude. Not required if providing another limiting search parameter.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the UserID input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) The ID of the user who's photo to search. If this parameter isn't passed, all public photos will be searched. A value of "me" will search against the authenticated user's photos.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the WOEID input for this SearchPhotos Choreo.
     *
     * @param string $value (optional, string) The unique 'Where on Earth ID' that uniquely represents spatial entities.
     * @return Flickr_Photos_SearchPhotos_Inputs For method chaining.
     */
    public function setWOEID($value)
    {
        return $this->set('WOEID', $value);
    }
}


/**
 * Execution object for the SearchPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_SearchPhotos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchPhotos Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchPhotos execution.
     * @param Flickr_Photos_SearchPhotos $choreo The choreography object for this execution.
     * @param Flickr_Photos_SearchPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_SearchPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_SearchPhotos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_SearchPhotos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchPhotos execution.
     *
     * @return Flickr_Photos_SearchPhotos_Results New results object.
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
     * Wraps results in appropriate results class for this SearchPhotos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_SearchPhotos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_SearchPhotos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_SearchPhotos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchPhotos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_SearchPhotos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchPhotos execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a photo from a constructed source URL and returns the file content as Base64 encoded data.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Download extends Temboo_Choreography
{
    /**
     * Retrieves a photo from a constructed source URL and returns the file content as Base64 encoded data.
     *
     * @param Temboo_Session $session The session that owns this Download Choreo.
     * @return Flickr_Photos_Download New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/Download/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Download Choreo.
     *
     * @param Flickr_Photos_Download_Inputs|array $inputs (optional) Inputs as Flickr_Photos_Download_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_Download_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_Download_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Download Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_Download_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_Download_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Download Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Download_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Download Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_Download_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Download input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_Download_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_Download_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FarmID input for this Download Choreo.
     *
     * @param int $value (conditional, integer) The farm id associated with the photo. Required unless providing the URL.
     * @return Flickr_Photos_Download_Inputs For method chaining.
     */
    public function setFarmID($value)
    {
        return $this->set('FarmID', $value);
    }

    /**
     * Set the value for the ImageType input for this Download Choreo.
     *
     * @param string $value (optional, string) The image type. Valid values are: jpg, png, or gif. Defaults to "jpg".
     * @return Flickr_Photos_Download_Inputs For method chaining.
     */
    public function setImageType($value)
    {
        return $this->set('ImageType', $value);
    }

    /**
     * Set the value for the PhotoID input for this Download Choreo.
     *
     * @param int $value (conditional, integer) The id of the photo you to download.
     * @return Flickr_Photos_Download_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the Secret input for this Download Choreo.
     *
     * @param string $value (conditional, string) The secret associated with the photo. Required unless providing the URL.
     * @return Flickr_Photos_Download_Inputs For method chaining.
     */
    public function setSecret($value)
    {
        return $this->set('Secret', $value);
    }

    /**
     * Set the value for the ServerID input for this Download Choreo.
     *
     * @param int $value (conditional, integer) The server id associated with the photo. Required unless providing the URL.
     * @return Flickr_Photos_Download_Inputs For method chaining.
     */
    public function setServerID($value)
    {
        return $this->set('ServerID', $value);
    }

    /**
     * Set the value for the URL input for this Download Choreo.
     *
     * @param string $value (conditional, string) The url to download the photo from. Required unless providing the Secret, ServerID, and FarmID parameters.
     * @return Flickr_Photos_Download_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the Download Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Download_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Download Choreo.
     *
     * @param Temboo_Session $session The session that owns this Download execution.
     * @param Flickr_Photos_Download $choreo The choreography object for this execution.
     * @param Flickr_Photos_Download_Inputs|array $inputs (optional) Inputs as Flickr_Photos_Download_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_Download_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_Download $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Download execution.
     *
     * @return Flickr_Photos_Download_Results New results object.
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
     * Wraps results in appropriate results class for this Download execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_Download_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_Download_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Download Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Download_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Download Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_Download_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Download execution.
     *
     * @return string (string) The Base64 encoded image content.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a specified comment from a photo on Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_RemoveComment extends Temboo_Choreography
{
    /**
     * Delete a specified comment from a photo on Flickr.
     *
     * @param Temboo_Session $session The session that owns this RemoveComment Choreo.
     * @return Flickr_PhotoComments_RemoveComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoComments/RemoveComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RemoveComment Choreo.
     *
     * @param Flickr_PhotoComments_RemoveComment_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_RemoveComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_RemoveComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoComments_RemoveComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_RemoveComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoComments_RemoveComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveComment Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_RemoveComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RemoveComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_RemoveComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemoveComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_PhotoComments_RemoveComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoComments_RemoveComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RemoveComment Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoComments_RemoveComment_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this RemoveComment Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_PhotoComments_RemoveComment_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RemoveComment Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_PhotoComments_RemoveComment_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RemoveComment Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_PhotoComments_RemoveComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CommentID input for this RemoveComment Choreo.
     *
     * @param string $value (required, string) The unique id of the comment that you want to delete
     * @return Flickr_PhotoComments_RemoveComment_Inputs For method chaining.
     */
    public function setCommentID($value)
    {
        return $this->set('CommentID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RemoveComment Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_PhotoComments_RemoveComment_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the RemoveComment Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_RemoveComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this RemoveComment execution.
     * @param Flickr_PhotoComments_RemoveComment $choreo The choreography object for this execution.
     * @param Flickr_PhotoComments_RemoveComment_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_RemoveComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_RemoveComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoComments_RemoveComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveComment execution.
     *
     * @return Flickr_PhotoComments_RemoveComment_Results New results object.
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
     * Wraps results in appropriate results class for this RemoveComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_PhotoComments_RemoveComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoComments_RemoveComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RemoveComment Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_RemoveComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RemoveComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoComments_RemoveComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RemoveComment execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Add a tag to a specified photo on Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_AddTags extends Temboo_Choreography
{
    /**
     * Add a tag to a specified photo on Flickr.
     *
     * @param Temboo_Session $session The session that owns this AddTags Choreo.
     * @return Flickr_Photos_AddTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/AddTags/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddTags Choreo.
     *
     * @param Flickr_Photos_AddTags_Inputs|array $inputs (optional) Inputs as Flickr_Photos_AddTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_AddTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_AddTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_AddTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_AddTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_AddTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_AddTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_AddTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_AddTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddTags Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_AddTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this AddTags Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Photos_AddTags_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AddTags Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Photos_AddTags_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddTags Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Photos_AddTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this AddTags Choreo.
     *
     * @param int $value (required, integer) The id of the photo to add tags to.
     * @return Flickr_Photos_AddTags_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddTags Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Photos_AddTags_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Tags input for this AddTags Choreo.
     *
     * @param string $value (required, string) The tags to add to the photo. Multiple tags can be separated by spaces.
     * @return Flickr_Photos_AddTags_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }
}


/**
 * Execution object for the AddTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_AddTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTags Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddTags execution.
     * @param Flickr_Photos_AddTags $choreo The choreography object for this execution.
     * @param Flickr_Photos_AddTags_Inputs|array $inputs (optional) Inputs as Flickr_Photos_AddTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_AddTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_AddTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTags execution.
     *
     * @return Flickr_Photos_AddTags_Results New results object.
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
     * Wraps results in appropriate results class for this AddTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_AddTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_AddTags_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_AddTags_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddTags Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_AddTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddTags execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of your photos which haven't been geo-tagged.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPhotosWithoutGeoTags extends Temboo_Choreography
{
    /**
     * Returns a list of your photos which haven't been geo-tagged.
     *
     * @param Temboo_Session $session The session that owns this ListPhotosWithoutGeoTags Choreo.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/ListPhotosWithoutGeoTags/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param Flickr_Photos_ListPhotosWithoutGeoTags_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListPhotosWithoutGeoTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_ListPhotosWithoutGeoTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_ListPhotosWithoutGeoTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPhotosWithoutGeoTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPhotosWithoutGeoTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPhotosWithoutGeoTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPhotosWithoutGeoTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Extras input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to retrieve for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the MaxTakenDate input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (optional, date) Photos with an taken date less than or equal to this value will be returned. The date should be in the form of a mysql datetime.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setMaxTakenDate($value)
    {
        return $this->set('MaxTakenDate', $value);
    }

    /**
     * Set the value for the MaxUploadDate input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (optional, date) Photos with an upload date less than or equal to this value will be returned. The date should be in the form of a unix timestamp.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setMaxUploadDate($value)
    {
        return $this->set('MaxUploadDate', $value);
    }

    /**
     * Set the value for the Media input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (optional, string) Filter results by media type. Possible values are all (default), photos or videos.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setMedia($value)
    {
        return $this->set('Media', $value);
    }

    /**
     * Set the value for the MinTakenDate input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (optional, date) Photos with an taken date greater than or equal to this value will be returned. The date should be in the form of a mysql datetime.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setMinTakenDate($value)
    {
        return $this->set('MinTakenDate', $value);
    }

    /**
     * Set the value for the MinUploadDate input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (optional, date) Photos with an upload date greater than or equal to this value will be returned. The date should be in the form of a unix timestamp.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setMinUploadDate($value)
    {
        return $this->set('MinUploadDate', $value);
    }

    /**
     * Set the value for the Page input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results. Defaults to 1.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param int $value (optional, integer) Number of photos to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the PrivacyFilter input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param int $value (optional, integer) Valid values are: 1 (public photos), 2 (private photos visible to friends), 3 (private photos visible to family), 4 (private photos visible to friends and family), 5 (completely private photos).
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setPrivacyFilter($value)
    {
        return $this->set('PrivacyFilter', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (optional, string) 
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this ListPhotosWithoutGeoTags Choreo.
     *
     * @param string $value (optional, string) The sort order. Accepted values are: date-posted-asc, date-posted-desc, date-taken-asc, date-taken-desc, interestingness-desc, and interestingness-asc.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the ListPhotosWithoutGeoTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPhotosWithoutGeoTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPhotosWithoutGeoTags Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPhotosWithoutGeoTags execution.
     * @param Flickr_Photos_ListPhotosWithoutGeoTags $choreo The choreography object for this execution.
     * @param Flickr_Photos_ListPhotosWithoutGeoTags_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListPhotosWithoutGeoTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_ListPhotosWithoutGeoTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPhotosWithoutGeoTags execution.
     *
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Results New results object.
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
     * Wraps results in appropriate results class for this ListPhotosWithoutGeoTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_ListPhotosWithoutGeoTags_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPhotosWithoutGeoTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPhotosWithoutGeoTags_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPhotosWithoutGeoTags Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_ListPhotosWithoutGeoTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPhotosWithoutGeoTags execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a list of public photos for a given user.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPublicPhotos extends Temboo_Choreography
{
    /**
     * Obtain a list of public photos for a given user.
     *
     * @param Temboo_Session $session The session that owns this ListPublicPhotos Choreo.
     * @return Flickr_Photos_ListPublicPhotos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/ListPublicPhotos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPublicPhotos Choreo.
     *
     * @param Flickr_Photos_ListPublicPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListPublicPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListPublicPhotos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_ListPublicPhotos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPublicPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListPublicPhotos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_ListPublicPhotos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPublicPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPublicPhotos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPublicPhotos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListPublicPhotos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPublicPhotos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_ListPublicPhotos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_ListPublicPhotos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPublicPhotos Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_ListPublicPhotos_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Extras input for this ListPublicPhotos Choreo.
     *
     * @param string $value (optional, string) A comma-separated list returning additional photo information such as: license, description, date_upload, date_taken.  Additional options are listed on this method's API doc page.
     * @return Flickr_Photos_ListPublicPhotos_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the Page input for this ListPublicPhotos Choreo.
     *
     * @param int $value (optional, integer) Specify the page of photos that is to be returned.  If unspecified, the first page is returned.
     * @return Flickr_Photos_ListPublicPhotos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListPublicPhotos Choreo.
     *
     * @param int $value (optional, integer) Specify how many photos to display per page. Default is set to: 100. The mamimum allowed value is: 500.
     * @return Flickr_Photos_ListPublicPhotos_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPublicPhotos Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Photos_ListPublicPhotos_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SafeSearch input for this ListPublicPhotos Choreo.
     *
     * @param int $value (optional, integer) Specify a safe search setting by entering: 1 (for safe), 2 (moderate), 3 (restricted).  Default is set to: 1 (safe).
     * @return Flickr_Photos_ListPublicPhotos_Inputs For method chaining.
     */
    public function setSafeSearch($value)
    {
        return $this->set('SafeSearch', $value);
    }

    /**
     * Set the value for the UserID input for this ListPublicPhotos Choreo.
     *
     * @param string $value (required, string) Enter the NSID of the user whose public photos are being retrieved.
     * @return Flickr_Photos_ListPublicPhotos_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListPublicPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPublicPhotos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPublicPhotos Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPublicPhotos execution.
     * @param Flickr_Photos_ListPublicPhotos $choreo The choreography object for this execution.
     * @param Flickr_Photos_ListPublicPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListPublicPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListPublicPhotos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_ListPublicPhotos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPublicPhotos execution.
     *
     * @return Flickr_Photos_ListPublicPhotos_Results New results object.
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
     * Wraps results in appropriate results class for this ListPublicPhotos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_ListPublicPhotos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_ListPublicPhotos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPublicPhotos Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPublicPhotos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPublicPhotos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_ListPublicPhotos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPublicPhotos execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a photo from Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Delete extends Temboo_Choreography
{
    /**
     * Delete a photo from Flickr.
     *
     * @param Temboo_Session $session The session that owns this Delete Choreo.
     * @return Flickr_Photos_Delete New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/Delete/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Delete Choreo.
     *
     * @param Flickr_Photos_Delete_Inputs|array $inputs (optional) Inputs as Flickr_Photos_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_Delete_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_Delete_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_Delete_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_Delete_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Delete_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_Delete_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Delete input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_Delete_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_Delete_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Delete Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_Delete_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Delete Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Photos_Delete_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Delete Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Photos_Delete_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Delete Choreo.
     *
     * @param string $value (optional, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Photos_Delete_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this Delete Choreo.
     *
     * @param int $value (required, integer) The id of the photo that you want to delete.
     * @return Flickr_Photos_Delete_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Delete Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Photos_Delete_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Delete_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Delete Choreo.
     *
     * @param Temboo_Session $session The session that owns this Delete execution.
     * @param Flickr_Photos_Delete $choreo The choreography object for this execution.
     * @param Flickr_Photos_Delete_Inputs|array $inputs (optional) Inputs as Flickr_Photos_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_Delete_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_Delete $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Delete execution.
     *
     * @return Flickr_Photos_Delete_Results New results object.
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
     * Wraps results in appropriate results class for this Delete execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_Delete_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_Delete_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Delete_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Delete Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_Delete_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Delete execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a photo to a user's favorites list.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_AddToFavorites extends Temboo_Choreography
{
    /**
     * Adds a photo to a user's favorites list.
     *
     * @param Temboo_Session $session The session that owns this AddToFavorites Choreo.
     * @return Flickr_Favorites_AddToFavorites New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/AddToFavorites/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddToFavorites Choreo.
     *
     * @param Flickr_Favorites_AddToFavorites_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_AddToFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_AddToFavorites_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_AddToFavorites_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddToFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_AddToFavorites_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_AddToFavorites_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddToFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_AddToFavorites_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddToFavorites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_AddToFavorites_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddToFavorites input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_AddToFavorites_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_AddToFavorites_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddToFavorites Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_AddToFavorites_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this AddToFavorites Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Favorites_AddToFavorites_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AddToFavorites Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Favorites_AddToFavorites_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddToFavorites Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Favorites_AddToFavorites_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this AddToFavorites Choreo.
     *
     * @param int $value (required, integer) The id of the photo to add a favorites list.
     * @return Flickr_Favorites_AddToFavorites_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddToFavorites Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Favorites_AddToFavorites_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the AddToFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_AddToFavorites_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddToFavorites Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddToFavorites execution.
     * @param Flickr_Favorites_AddToFavorites $choreo The choreography object for this execution.
     * @param Flickr_Favorites_AddToFavorites_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_AddToFavorites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_AddToFavorites_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_AddToFavorites $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddToFavorites execution.
     *
     * @return Flickr_Favorites_AddToFavorites_Results New results object.
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
     * Wraps results in appropriate results class for this AddToFavorites execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_AddToFavorites_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_AddToFavorites_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddToFavorites Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_AddToFavorites_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddToFavorites Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_AddToFavorites_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddToFavorites execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads a photo to Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Upload extends Temboo_Choreography
{
    /**
     * Uploads a photo to Flickr.
     *
     * @param Temboo_Session $session The session that owns this Upload Choreo.
     * @return Flickr_Photos_Upload New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/Upload/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Upload Choreo.
     *
     * @param Flickr_Photos_Upload_Inputs|array $inputs (optional) Inputs as Flickr_Photos_Upload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_Upload_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_Upload_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Upload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_Upload_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_Upload_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Upload Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Upload_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Upload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_Upload_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Upload input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ImageFileContents input for this Upload Choreo.
     *
     * @param string $value (conditional, string) The base-64 encoded file contents to upload. Required unless using the URL input.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setImageFileContents($value)
    {
        return $this->set('ImageFileContents', $value);
    }

    /**
     * Set the value for the APIKey input for this Upload Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Upload Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Upload Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Upload Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ContentType input for this Upload Choreo.
     *
     * @param int $value (optional, integer) The type of content you are uploading. Set to 1 for Photo, 2 for Screenshot, or 3 for Other. Defaults to 1.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the Description input for this Upload Choreo.
     *
     * @param string $value (optional, string) A description for the photo.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Hidden input for this Upload Choreo.
     *
     * @param int $value (optional, integer) Set to 1 to allow photos to appear in global search results, 2 to be hidden from public searches. Defaults to 2.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setHidden($value)
    {
        return $this->set('Hidden', $value);
    }

    /**
     * Set the value for the IsFamily input for this Upload Choreo.
     *
     * @param bool $value (optional, boolean) Set to 0 for no, 1 for yes. Specifies who can view the photo. Defaults to 0.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setIsFamily($value)
    {
        return $this->set('IsFamily', $value);
    }

    /**
     * Set the value for the IsFriend input for this Upload Choreo.
     *
     * @param bool $value (optional, boolean) Set to 0 for no, 1 for yes. Specifies who can view the photo. Defaults to 0.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setIsFriend($value)
    {
        return $this->set('IsFriend', $value);
    }

    /**
     * Set the value for the IsPublic input for this Upload Choreo.
     *
     * @param bool $value (optional, boolean) Set to 0 for no, 1 for yes. Specifies who can view the photo. Defaults to 0.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setIsPublic($value)
    {
        return $this->set('IsPublic', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Upload Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SafetyLevel input for this Upload Choreo.
     *
     * @param int $value (optional, integer) Set value to 1 for Safe, 2 for Moderate, or 3 for Restricted. Defaults to 1.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setSafetyLevel($value)
    {
        return $this->set('SafetyLevel', $value);
    }

    /**
     * Set the value for the Tags input for this Upload Choreo.
     *
     * @param string $value (optional, string) A list of tags to apply to the photo. Separate multiple tags with spaces.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this Upload Choreo.
     *
     * @param string $value (optional, string) The title of the photo you're uploading.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the URL input for this Upload Choreo.
     *
     * @param string $value (conditional, string) A url for a photo to upload to Flickr. Required unless specifying the ImageFileContents.
     * @return Flickr_Photos_Upload_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

}


/**
 * Execution object for the Upload Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Upload_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Upload Choreo.
     *
     * @param Temboo_Session $session The session that owns this Upload execution.
     * @param Flickr_Photos_Upload $choreo The choreography object for this execution.
     * @param Flickr_Photos_Upload_Inputs|array $inputs (optional) Inputs as Flickr_Photos_Upload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_Upload_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_Upload $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Upload execution.
     *
     * @return Flickr_Photos_Upload_Results New results object.
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
     * Wraps results in appropriate results class for this Upload execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_Upload_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_Upload_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Upload Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_Upload_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Upload Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_Upload_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Upload execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a gallery list for a specfied user.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_ListGalleries extends Temboo_Choreography
{
    /**
     * Get a gallery list for a specfied user.
     *
     * @param Temboo_Session $session The session that owns this ListGalleries Choreo.
     * @return Flickr_Galleries_ListGalleries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Galleries/ListGalleries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListGalleries Choreo.
     *
     * @param Flickr_Galleries_ListGalleries_Inputs|array $inputs (optional) Inputs as Flickr_Galleries_ListGalleries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Galleries_ListGalleries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Galleries_ListGalleries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListGalleries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Galleries_ListGalleries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Galleries_ListGalleries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListGalleries Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_ListGalleries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListGalleries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Galleries_ListGalleries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListGalleries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Galleries_ListGalleries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Galleries_ListGalleries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListGalleries Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Galleries_ListGalleries_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Page input for this ListGalleries Choreo.
     *
     * @param int $value (optional, integer) Enter the number of results pages to be returned.  Default is: 1.
     * @return Flickr_Galleries_ListGalleries_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListGalleries Choreo.
     *
     * @param int $value (optional, integer) Specify the number of galleries that are to be returned per page.  If null, defaults to 100 galleries returned.  Maximum is 500.
     * @return Flickr_Galleries_ListGalleries_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListGalleries Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Galleries_ListGalleries_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListGalleries Choreo.
     *
     * @param string $value (required, string) Provide the NSID for the user whose gallery list(s) are to be retreived.
     * @return Flickr_Galleries_ListGalleries_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListGalleries Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_ListGalleries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListGalleries Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListGalleries execution.
     * @param Flickr_Galleries_ListGalleries $choreo The choreography object for this execution.
     * @param Flickr_Galleries_ListGalleries_Inputs|array $inputs (optional) Inputs as Flickr_Galleries_ListGalleries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Galleries_ListGalleries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Galleries_ListGalleries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListGalleries execution.
     *
     * @return Flickr_Galleries_ListGalleries_Results New results object.
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
     * Wraps results in appropriate results class for this ListGalleries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Galleries_ListGalleries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Galleries_ListGalleries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListGalleries Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_ListGalleries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListGalleries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Galleries_ListGalleries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListGalleries execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the photosets belonging to the specified user.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_ListSets extends Temboo_Choreography
{
    /**
     * Returns the photosets belonging to the specified user.
     *
     * @param Temboo_Session $session The session that owns this ListSets Choreo.
     * @return Flickr_PhotoSets_ListSets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoSets/ListSets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListSets Choreo.
     *
     * @param Flickr_PhotoSets_ListSets_Inputs|array $inputs (optional) Inputs as Flickr_PhotoSets_ListSets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoSets_ListSets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoSets_ListSets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListSets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoSets_ListSets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoSets_ListSets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListSets Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_ListSets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListSets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoSets_ListSets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListSets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListSets Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListSets Choreo.
     *
     * @param string $value (conditional, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret). Required when accessing a protected resource or when UserID is not provided.
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListSets Choreo.
     *
     * @param string $value (conditional, string) The Access Token Secret retrieved during the OAuth process. Required when accessing a protected resource or when UserID is not provided.
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListSets Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource or when UserID is not provided.
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Page input for this ListSets Choreo.
     *
     * @param int $value (optional, integer) The page of results to get. Currently, if this is not provided, all sets are returned, but this behaviour may change in future.
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this ListSets Choreo.
     *
     * @param int $value (optional, integer) The number of sets to get per page. If paging is enabled, the maximum number of sets per page is 500.
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListSets Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListSets Choreo.
     *
     * @param string $value (conditional, string) The NSID of the user to get a photoset list for. When OAuth parameters are passed, the authenticated user is assumed.
     * @return Flickr_PhotoSets_ListSets_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListSets Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_ListSets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListSets Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListSets execution.
     * @param Flickr_PhotoSets_ListSets $choreo The choreography object for this execution.
     * @param Flickr_PhotoSets_ListSets_Inputs|array $inputs (optional) Inputs as Flickr_PhotoSets_ListSets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoSets_ListSets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoSets_ListSets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListSets execution.
     *
     * @return Flickr_PhotoSets_ListSets_Results New results object.
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
     * Wraps results in appropriate results class for this ListSets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_PhotoSets_ListSets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoSets_ListSets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListSets Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_ListSets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListSets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoSets_ListSets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListSets execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of place IDs for a query string.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByKeyword extends Temboo_Choreography
{
    /**
     * Returns a list of place IDs for a query string.
     *
     * @param Temboo_Session $session The session that owns this FindByKeyword Choreo.
     * @return Flickr_Places_FindByKeyword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Places/FindByKeyword/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindByKeyword Choreo.
     *
     * @param Flickr_Places_FindByKeyword_Inputs|array $inputs (optional) Inputs as Flickr_Places_FindByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_FindByKeyword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Places_FindByKeyword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_FindByKeyword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Places_FindByKeyword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByKeyword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_FindByKeyword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindByKeyword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Places_FindByKeyword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Places_FindByKeyword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindByKeyword Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Places_FindByKeyword_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Query input for this FindByKeyword Choreo.
     *
     * @param string $value (required, string) The query string to use for place ID lookups.
     * @return Flickr_Places_FindByKeyword_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindByKeyword Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Places_FindByKeyword_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FindByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByKeyword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindByKeyword Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindByKeyword execution.
     * @param Flickr_Places_FindByKeyword $choreo The choreography object for this execution.
     * @param Flickr_Places_FindByKeyword_Inputs|array $inputs (optional) Inputs as Flickr_Places_FindByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_FindByKeyword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Places_FindByKeyword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindByKeyword execution.
     *
     * @return Flickr_Places_FindByKeyword_Results New results object.
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
     * Wraps results in appropriate results class for this FindByKeyword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Places_FindByKeyword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Places_FindByKeyword_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByKeyword_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindByKeyword Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Places_FindByKeyword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindByKeyword execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a user's NSID by providing their email address.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_FindByEmail extends Temboo_Choreography
{
    /**
     * Obtain a user's NSID by providing their email address.
     *
     * @param Temboo_Session $session The session that owns this FindByEmail Choreo.
     * @return Flickr_People_FindByEmail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/People/FindByEmail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindByEmail Choreo.
     *
     * @param Flickr_People_FindByEmail_Inputs|array $inputs (optional) Inputs as Flickr_People_FindByEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_People_FindByEmail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_People_FindByEmail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindByEmail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_People_FindByEmail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_People_FindByEmail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindByEmail Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_FindByEmail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindByEmail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_People_FindByEmail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindByEmail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_People_FindByEmail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_People_FindByEmail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindByEmail Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_People_FindByEmail_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FindEmail input for this FindByEmail Choreo.
     *
     * @param string $value (required, string) Enter the email of the user being sought.
     * @return Flickr_People_FindByEmail_Inputs For method chaining.
     */
    public function setFindEmail($value)
    {
        return $this->set('FindEmail', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindByEmail Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_People_FindByEmail_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FindByEmail Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_FindByEmail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindByEmail Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindByEmail execution.
     * @param Flickr_People_FindByEmail $choreo The choreography object for this execution.
     * @param Flickr_People_FindByEmail_Inputs|array $inputs (optional) Inputs as Flickr_People_FindByEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_People_FindByEmail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_People_FindByEmail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindByEmail execution.
     *
     * @return Flickr_People_FindByEmail_Results New results object.
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
     * Wraps results in appropriate results class for this FindByEmail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_People_FindByEmail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_People_FindByEmail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindByEmail Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_FindByEmail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindByEmail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_People_FindByEmail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindByEmail execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the popular tags for a given user (or the currently logged in user).
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListPopularTags extends Temboo_Choreography
{
    /**
     * Retrieves the popular tags for a given user (or the currently logged in user).
     *
     * @param Temboo_Session $session The session that owns this ListPopularTags Choreo.
     * @return Flickr_Tags_ListPopularTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Tags/ListPopularTags/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPopularTags Choreo.
     *
     * @param Flickr_Tags_ListPopularTags_Inputs|array $inputs (optional) Inputs as Flickr_Tags_ListPopularTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_ListPopularTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Tags_ListPopularTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPopularTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_ListPopularTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Tags_ListPopularTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPopularTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListPopularTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPopularTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_ListPopularTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPopularTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Tags_ListPopularTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Tags_ListPopularTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPopularTags Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Tags_ListPopularTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this ListPopularTags Choreo.
     *
     * @param string $value (conditional, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret). Required unless UserID is provided.
     * @return Flickr_Tags_ListPopularTags_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListPopularTags Choreo.
     *
     * @param string $value (conditional, string) The Access Token Secret retrieved during the OAuth process. Required unless UserID is provided.
     * @return Flickr_Tags_ListPopularTags_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListPopularTags Choreo.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required unless UserID is provided.
     * @return Flickr_Tags_ListPopularTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Count input for this ListPopularTags Choreo.
     *
     * @param int $value (optional, integer) Number of popular tags to return. defaults to 10 when this argument is not present.
     * @return Flickr_Tags_ListPopularTags_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPopularTags Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Tags_ListPopularTags_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListPopularTags Choreo.
     *
     * @param string $value (conditional, string) The NSID of the user to fetch the tag list for. Required unless providing all OAuth parameters. When OAuth parameters are passed, the authenticated user is assumed.
     * @return Flickr_Tags_ListPopularTags_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListPopularTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListPopularTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPopularTags Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPopularTags execution.
     * @param Flickr_Tags_ListPopularTags $choreo The choreography object for this execution.
     * @param Flickr_Tags_ListPopularTags_Inputs|array $inputs (optional) Inputs as Flickr_Tags_ListPopularTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_ListPopularTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Tags_ListPopularTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPopularTags execution.
     *
     * @return Flickr_Tags_ListPopularTags_Results New results object.
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
     * Wraps results in appropriate results class for this ListPopularTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Tags_ListPopularTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Tags_ListPopularTags_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPopularTags Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_ListPopularTags_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPopularTags Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Tags_ListPopularTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPopularTags execution.
     *
     * @return string The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of people in a given photo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPeople extends Temboo_Choreography
{
    /**
     * Retrieve a list of people in a given photo.
     *
     * @param Temboo_Session $session The session that owns this ListPeople Choreo.
     * @return Flickr_Photos_ListPeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/ListPeople/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPeople Choreo.
     *
     * @param Flickr_Photos_ListPeople_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListPeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_ListPeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListPeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_ListPeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPeople Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPeople Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_ListPeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_ListPeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_ListPeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPeople Choreo.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_ListPeople_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the PhotoID input for this ListPeople Choreo.
     *
     * @param string $value (required, string) Enter the ID of a photo for which people will be listed.
     * @return Flickr_Photos_ListPeople_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPeople Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml and json. Defaults to json.
     * @return Flickr_Photos_ListPeople_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListPeople Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPeople Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPeople execution.
     * @param Flickr_Photos_ListPeople $choreo The choreography object for this execution.
     * @param Flickr_Photos_ListPeople_Inputs|array $inputs (optional) Inputs as Flickr_Photos_ListPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_ListPeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_ListPeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPeople execution.
     *
     * @return Flickr_Photos_ListPeople_Results New results object.
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
     * Wraps results in appropriate results class for this ListPeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_ListPeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_ListPeople_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPeople Choreo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_ListPeople_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPeople Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_ListPeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPeople execution.
     *
     * @return string The response from Flickr.
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
<?php

/**
 * Temboo PHP SDK Tumblr classes
 *
 * Execute Choreographies from the Temboo Tumblr bundle.
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
 * @subpackage Tumblr
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Creates a new chat post for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateChatPost extends Temboo_Choreography
{
    /**
     * Creates a new chat post for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this CreateChatPost Choreo.
     * @return Tumblr_Post_CreateChatPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/CreateChatPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateChatPost Choreo.
     *
     * @param Tumblr_Post_CreateChatPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateChatPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateChatPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_CreateChatPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateChatPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateChatPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_CreateChatPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateChatPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateChatPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateChatPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateChatPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateChatPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Conversation input for this CreateChatPost Choreo.
     *
     * @param string $value (required, multiline) The text of the conversation/chat, with dialogue labels (ex: Speaker: Dialogue.)(no HTML). Use separate lines for new lines as well as for a new speaker (include dialogue labels).
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setConversation($value)
    {
        return $this->set('Conversation', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateChatPost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateChatPost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateChatPost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateChatPost Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this CreateChatPost Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateChatPost Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateChatPost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateChatPost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateChatPost Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreateChatPost Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateChatPost Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this CreateChatPost Choreo.
     *
     * @param string $value (optional, string) The title of the chat.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateChatPost Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_CreateChatPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateChatPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateChatPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateChatPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateChatPost execution.
     * @param Tumblr_Post_CreateChatPost $choreo The choreography object for this execution.
     * @param Tumblr_Post_CreateChatPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateChatPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateChatPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_CreateChatPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateChatPost execution.
     *
     * @return Tumblr_Post_CreateChatPost_Results New results object.
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
     * Wraps results in appropriate results class for this CreateChatPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_CreateChatPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_CreateChatPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateChatPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateChatPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateChatPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_CreateChatPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateChatPost execution.
     *
     * @return string (string) The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified quote post on a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditQuotePost extends Temboo_Choreography
{
    /**
     * Updates a specified quote post on a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this EditQuotePost Choreo.
     * @return Tumblr_Post_EditQuotePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/EditQuotePost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditQuotePost Choreo.
     *
     * @param Tumblr_Post_EditQuotePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditQuotePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditQuotePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_EditQuotePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditQuotePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditQuotePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_EditQuotePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditQuotePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditQuotePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditQuotePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditQuotePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditQuotePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Quote input for this EditQuotePost Choreo.
     *
     * @param string $value (required, string) The full text of the quote. HTML entities must be escpaed.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setQuote($value)
    {
        return $this->set('Quote', $value);
    }

    /**
     * Set the value for the APIKey input for this EditQuotePost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditQuotePost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditQuotePost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditQuotePost Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this EditQuotePost Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditQuotePost Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditQuotePost Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditQuotePost Choreo.
     *
     * @param mixed $value (optional, any) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditQuotePost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditQuotePost Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the Source input for this EditQuotePost Choreo.
     *
     * @param string $value (optional, string) The cited source of the quote. HTML is allowed.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the State input for this EditQuotePost Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditQuotePost Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this EditQuotePost Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_EditQuotePost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditQuotePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditQuotePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditQuotePost Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditQuotePost execution.
     * @param Tumblr_Post_EditQuotePost $choreo The choreography object for this execution.
     * @param Tumblr_Post_EditQuotePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditQuotePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditQuotePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_EditQuotePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditQuotePost execution.
     *
     * @return Tumblr_Post_EditQuotePost_Results New results object.
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
     * Wraps results in appropriate results class for this EditQuotePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_EditQuotePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_EditQuotePost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditQuotePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditQuotePost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditQuotePost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_EditQuotePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditQuotePost execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new photo post using a specified source image URL.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreatePhotoPostWithURL extends Temboo_Choreography
{
    /**
     * Creates a new photo post using a specified source image URL.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoPostWithURL Choreo.
     * @return Tumblr_Post_CreatePhotoPostWithURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/CreatePhotoPostWithURL/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreatePhotoPostWithURL Choreo.
     *
     * @param Tumblr_Post_CreatePhotoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreatePhotoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_CreatePhotoPostWithURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreatePhotoPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_CreatePhotoPostWithURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreatePhotoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreatePhotoPostWithURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreatePhotoPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreatePhotoPostWithURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Source input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The photo source URL.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the APIKey input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Link input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The "click-through URL" for the photo.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the Markdown input for this CreatePhotoPostWithURL Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this CreatePhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreatePhotoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreatePhotoPostWithURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreatePhotoPostWithURL Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoPostWithURL execution.
     * @param Tumblr_Post_CreatePhotoPostWithURL $choreo The choreography object for this execution.
     * @param Tumblr_Post_CreatePhotoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreatePhotoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_CreatePhotoPostWithURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreatePhotoPostWithURL execution.
     *
     * @return Tumblr_Post_CreatePhotoPostWithURL_Results New results object.
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
     * Wraps results in appropriate results class for this CreatePhotoPostWithURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_CreatePhotoPostWithURL_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreatePhotoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreatePhotoPostWithURL_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreatePhotoPostWithURL Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_CreatePhotoPostWithURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreatePhotoPostWithURL execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
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
 * @subpackage Tumblr
 */
class Tumblr_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Tumblr_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Tumblr_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Tumblr_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Tumblr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Tumblr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Tumblr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Tumblr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return Tumblr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the SecretKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Tumblr_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Tumblr_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Tumblr_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Tumblr_OAuth_InitializeOAuth_Results New results object.
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
     * @return Tumblr_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_OAuth_InitializeOAuth_Results New instance.
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
 * Creates a new text post for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateQuotePost extends Temboo_Choreography
{
    /**
     * Creates a new text post for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this CreateQuotePost Choreo.
     * @return Tumblr_Post_CreateQuotePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/CreateQuotePost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateQuotePost Choreo.
     *
     * @param Tumblr_Post_CreateQuotePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateQuotePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateQuotePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_CreateQuotePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateQuotePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateQuotePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_CreateQuotePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateQuotePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateQuotePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateQuotePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateQuotePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateQuotePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Quote input for this CreateQuotePost Choreo.
     *
     * @param string $value (required, string) The full text of the quote.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setQuote($value)
    {
        return $this->set('Quote', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateQuotePost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateQuotePost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateQuotePost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateQuotePost Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this CreateQuotePost Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateQuotePost Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateQuotePost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateQuotePost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateQuotePost Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the Source input for this CreateQuotePost Choreo.
     *
     * @param string $value (optional, string) The cited source of the quote. HTML is allowed.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the State input for this CreateQuotePost Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateQuotePost Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateQuotePost Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_CreateQuotePost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateQuotePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateQuotePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateQuotePost Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateQuotePost execution.
     * @param Tumblr_Post_CreateQuotePost $choreo The choreography object for this execution.
     * @param Tumblr_Post_CreateQuotePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateQuotePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateQuotePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_CreateQuotePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateQuotePost execution.
     *
     * @return Tumblr_Post_CreateQuotePost_Results New results object.
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
     * Wraps results in appropriate results class for this CreateQuotePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_CreateQuotePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_CreateQuotePost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateQuotePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateQuotePost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateQuotePost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_CreateQuotePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateQuotePost execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the blogs followed by the user whose OAuth credentials are provided.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveFollowedBlogsForUser extends Temboo_Choreography
{
    /**
     * Retrieve the blogs followed by the user whose OAuth credentials are provided.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFollowedBlogsForUser Choreo.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/User/RetrieveFollowedBlogsForUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveFollowedBlogsForUser Choreo.
     *
     * @param Tumblr_User_RetrieveFollowedBlogsForUser_Inputs|array $inputs (optional) Inputs as Tumblr_User_RetrieveFollowedBlogsForUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_User_RetrieveFollowedBlogsForUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveFollowedBlogsForUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_User_RetrieveFollowedBlogsForUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveFollowedBlogsForUser Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveFollowedBlogsForUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveFollowedBlogsForUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveFollowedBlogsForUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveFollowedBlogsForUser Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveFollowedBlogsForUser Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveFollowedBlogsForUser Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveFollowedBlogsForUser Choreo.
     *
     * @param int $value (optional, integer) The number of results to return: 1 - 20. Defaults to 20.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveFollowedBlogsForUser Choreo.
     *
     * @param int $value (optional, integer) The result to start at. Defaults to 0.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveFollowedBlogsForUser Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveFollowedBlogsForUser Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveFollowedBlogsForUser Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveFollowedBlogsForUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveFollowedBlogsForUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFollowedBlogsForUser execution.
     * @param Tumblr_User_RetrieveFollowedBlogsForUser $choreo The choreography object for this execution.
     * @param Tumblr_User_RetrieveFollowedBlogsForUser_Inputs|array $inputs (optional) Inputs as Tumblr_User_RetrieveFollowedBlogsForUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_User_RetrieveFollowedBlogsForUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveFollowedBlogsForUser execution.
     *
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveFollowedBlogsForUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_User_RetrieveFollowedBlogsForUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveFollowedBlogsForUser Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveFollowedBlogsForUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveFollowedBlogsForUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_User_RetrieveFollowedBlogsForUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveFollowedBlogsForUser execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified chat post on a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditChatPost extends Temboo_Choreography
{
    /**
     * Updates a specified chat post on a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this EditChatPost Choreo.
     * @return Tumblr_Post_EditChatPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/EditChatPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditChatPost Choreo.
     *
     * @param Tumblr_Post_EditChatPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditChatPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditChatPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_EditChatPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditChatPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditChatPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_EditChatPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditChatPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditChatPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditChatPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditChatPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditChatPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Conversation input for this EditChatPost Choreo.
     *
     * @param string $value (required, multiline) The text of the conversation/chat, with dialogue labels (ex: Speaker: Dialogue.)(no HTML). Use separate lines for new lines as well as for a new speaker (include dialogue labels).
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setConversation($value)
    {
        return $this->set('Conversation', $value);
    }

    /**
     * Set the value for the APIKey input for this EditChatPost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditChatPost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditChatPost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditChatPost Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this EditChatPost Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditChatPost Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditChatPost Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditChatPost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditChatPost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditChatPost Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditChatPost Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditChatPost Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this EditChatPost Choreo.
     *
     * @param string $value (optional, string) The title of the chat.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this EditChatPost Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_EditChatPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditChatPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditChatPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditChatPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditChatPost execution.
     * @param Tumblr_Post_EditChatPost $choreo The choreography object for this execution.
     * @param Tumblr_Post_EditChatPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditChatPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditChatPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_EditChatPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditChatPost execution.
     *
     * @return Tumblr_Post_EditChatPost_Results New results object.
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
     * Wraps results in appropriate results class for this EditChatPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_EditChatPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_EditChatPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditChatPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditChatPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditChatPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_EditChatPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditChatPost execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves published posts using various search and filter parameters.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrievePublishedPosts extends Temboo_Choreography
{
    /**
     * Retrieves published posts using various search and filter parameters.
     *
     * @param Temboo_Session $session The session that owns this RetrievePublishedPosts Choreo.
     * @return Tumblr_Post_RetrievePublishedPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/RetrievePublishedPosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrievePublishedPosts Choreo.
     *
     * @param Tumblr_Post_RetrievePublishedPosts_Inputs|array $inputs (optional) Inputs as Tumblr_Post_RetrievePublishedPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_RetrievePublishedPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_RetrievePublishedPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrievePublishedPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_RetrievePublishedPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrievePublishedPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrievePublishedPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrievePublishedPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrievePublishedPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrievePublishedPosts Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrievePublishedPosts Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Format input for this RetrievePublishedPosts Choreo.
     *
     * @param string $value (optional, string) Specifies the post format to return. Valid values are: text (Plain text, no HTML), raw (As entered by user). HTML is returned when left null.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the ID input for this RetrievePublishedPosts Choreo.
     *
     * @param int $value (optional, integer) The specified post ID in order to return a single post.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Limit input for this RetrievePublishedPosts Choreo.
     *
     * @param int $value (optional, integer) The number of posts to return: 1- 20. Defaults to 20.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the NotesInfo input for this RetrievePublishedPosts Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether to return notes information (specify true or false). Defaults to 0 (false).
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setNotesInfo($value)
    {
        return $this->set('NotesInfo', $value);
    }

    /**
     * Set the value for the Offset input for this RetrievePublishedPosts Choreo.
     *
     * @param int $value (optional, integer) The post number to start at. Defaults to 0.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ReblogInfo input for this RetrievePublishedPosts Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether to return reblog information (specify 1 or 0). Defaults to 0 (false).
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setReblogInfo($value)
    {
        return $this->set('ReblogInfo', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrievePublishedPosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Tag input for this RetrievePublishedPosts Choreo.
     *
     * @param string $value (optional, string) Limits the response to posts with the specified tag.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }

    /**
     * Set the value for the Type input for this RetrievePublishedPosts Choreo.
     *
     * @param string $value (optional, string) The type of post to return. Specify one of the following:  text, quote, link, answer, video, audio, photo. When null, all types are returned.
     * @return Tumblr_Post_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the RetrievePublishedPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrievePublishedPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrievePublishedPosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrievePublishedPosts execution.
     * @param Tumblr_Post_RetrievePublishedPosts $choreo The choreography object for this execution.
     * @param Tumblr_Post_RetrievePublishedPosts_Inputs|array $inputs (optional) Inputs as Tumblr_Post_RetrievePublishedPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_RetrievePublishedPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_RetrievePublishedPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrievePublishedPosts execution.
     *
     * @return Tumblr_Post_RetrievePublishedPosts_Results New results object.
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
     * Wraps results in appropriate results class for this RetrievePublishedPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_RetrievePublishedPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_RetrievePublishedPosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrievePublishedPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrievePublishedPosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrievePublishedPosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_RetrievePublishedPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrievePublishedPosts execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified text post on a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditTextPost extends Temboo_Choreography
{
    /**
     * Updates a specified text post on a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this EditTextPost Choreo.
     * @return Tumblr_Post_EditTextPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/EditTextPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditTextPost Choreo.
     *
     * @param Tumblr_Post_EditTextPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditTextPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditTextPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_EditTextPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditTextPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditTextPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_EditTextPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditTextPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditTextPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditTextPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditTextPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditTextPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Body input for this EditTextPost Choreo.
     *
     * @param string $value (required, string) The full post body, HTML allowed.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the APIKey input for this EditTextPost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditTextPost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditTextPost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditTextPost Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this EditTextPost Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditTextPost Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditTextPost Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditTextPost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditTextPost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditTextPost Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditTextPost Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditTextPost Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this EditTextPost Choreo.
     *
     * @param string $value (optional, string) The optional title of the post. HTML entities must be escaped.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this EditTextPost Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_EditTextPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditTextPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditTextPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditTextPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditTextPost execution.
     * @param Tumblr_Post_EditTextPost $choreo The choreography object for this execution.
     * @param Tumblr_Post_EditTextPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditTextPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditTextPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_EditTextPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditTextPost execution.
     *
     * @return Tumblr_Post_EditTextPost_Results New results object.
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
     * Wraps results in appropriate results class for this EditTextPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_EditTextPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_EditTextPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditTextPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditTextPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditTextPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_EditTextPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditTextPost execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the dashboard of the user that corresponds to the OAuth credentials provided.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveUserDashboard extends Temboo_Choreography
{
    /**
     * Retrieves the dashboard of the user that corresponds to the OAuth credentials provided.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserDashboard Choreo.
     * @return Tumblr_User_RetrieveUserDashboard New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/User/RetrieveUserDashboard/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveUserDashboard Choreo.
     *
     * @param Tumblr_User_RetrieveUserDashboard_Inputs|array $inputs (optional) Inputs as Tumblr_User_RetrieveUserDashboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_RetrieveUserDashboard_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_User_RetrieveUserDashboard_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveUserDashboard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_User_RetrieveUserDashboard_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveUserDashboard Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveUserDashboard_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveUserDashboard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveUserDashboard input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveUserDashboard Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveUserDashboard Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveUserDashboard Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveUserDashboard Choreo.
     *
     * @param int $value (optional, integer) The number of results to return: 1 - 20. Defaults to 20.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the NotesInfo input for this RetrieveUserDashboard Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether to return notes information. Specify 1(true) or 0 (false). Defaults to 0.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setNotesInfo($value)
    {
        return $this->set('NotesInfo', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveUserDashboard Choreo.
     *
     * @param int $value (optional, integer) The result to start at. Defaults to 0.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ReblogInfo input for this RetrieveUserDashboard Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether to return reblog information. Specify 1(true) or 0 (false). Defaults to 0.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setReblogInfo($value)
    {
        return $this->set('ReblogInfo', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveUserDashboard Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveUserDashboard Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the SinceId input for this RetrieveUserDashboard Choreo.
     *
     * @param int $value (optional, integer) Return posts that have appeared after this ID. Used to page through results.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the Type input for this RetrieveUserDashboard Choreo.
     *
     * @param string $value (optional, string) The type of post to return. Specify one of the following:  text, photo, quote, link, chat, audio, video, answer.
     * @return Tumblr_User_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the RetrieveUserDashboard Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveUserDashboard_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveUserDashboard Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserDashboard execution.
     * @param Tumblr_User_RetrieveUserDashboard $choreo The choreography object for this execution.
     * @param Tumblr_User_RetrieveUserDashboard_Inputs|array $inputs (optional) Inputs as Tumblr_User_RetrieveUserDashboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_RetrieveUserDashboard_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_User_RetrieveUserDashboard $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveUserDashboard execution.
     *
     * @return Tumblr_User_RetrieveUserDashboard_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveUserDashboard execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_User_RetrieveUserDashboard_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_User_RetrieveUserDashboard_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveUserDashboard Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveUserDashboard_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveUserDashboard Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_User_RetrieveUserDashboard_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveUserDashboard execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified post from a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_DeletePost extends Temboo_Choreography
{
    /**
     * Deletes a specified post from a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this DeletePost Choreo.
     * @return Tumblr_Post_DeletePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/DeletePost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeletePost Choreo.
     *
     * @param Tumblr_Post_DeletePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_DeletePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_DeletePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_DeletePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeletePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_DeletePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_DeletePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeletePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_DeletePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeletePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_DeletePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeletePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_DeletePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_DeletePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeletePost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_DeletePost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeletePost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_DeletePost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeletePost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_DeletePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this DeletePost Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_DeletePost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the ID input for this DeletePost Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to delete.
     * @return Tumblr_Post_DeletePost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeletePost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_DeletePost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this DeletePost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_DeletePost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the DeletePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_DeletePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeletePost Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeletePost execution.
     * @param Tumblr_Post_DeletePost $choreo The choreography object for this execution.
     * @param Tumblr_Post_DeletePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_DeletePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_DeletePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_DeletePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeletePost execution.
     *
     * @return Tumblr_Post_DeletePost_Results New results object.
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
     * Wraps results in appropriate results class for this DeletePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_DeletePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_DeletePost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeletePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_DeletePost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeletePost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_DeletePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeletePost execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of queued posts for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveQueuedPosts extends Temboo_Choreography
{
    /**
     * Retrieves a list of queued posts for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this RetrieveQueuedPosts Choreo.
     * @return Tumblr_Post_RetrieveQueuedPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/RetrieveQueuedPosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveQueuedPosts Choreo.
     *
     * @param Tumblr_Post_RetrieveQueuedPosts_Inputs|array $inputs (optional) Inputs as Tumblr_Post_RetrieveQueuedPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_RetrieveQueuedPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_RetrieveQueuedPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveQueuedPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_RetrieveQueuedPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveQueuedPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveQueuedPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveQueuedPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveQueuedPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveQueuedPosts Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveQueuedPosts Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveQueuedPosts Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveQueuedPosts Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveQueuedPosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveQueuedPosts Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveQueuedPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveQueuedPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveQueuedPosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveQueuedPosts execution.
     * @param Tumblr_Post_RetrieveQueuedPosts $choreo The choreography object for this execution.
     * @param Tumblr_Post_RetrieveQueuedPosts_Inputs|array $inputs (optional) Inputs as Tumblr_Post_RetrieveQueuedPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_RetrieveQueuedPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_RetrieveQueuedPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveQueuedPosts execution.
     *
     * @return Tumblr_Post_RetrieveQueuedPosts_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveQueuedPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_RetrieveQueuedPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_RetrieveQueuedPosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveQueuedPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveQueuedPosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveQueuedPosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_RetrieveQueuedPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveQueuedPosts execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of queued posts for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveDraftPosts extends Temboo_Choreography
{
    /**
     * Retrieves a list of queued posts for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this RetrieveDraftPosts Choreo.
     * @return Tumblr_Post_RetrieveDraftPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/RetrieveDraftPosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveDraftPosts Choreo.
     *
     * @param Tumblr_Post_RetrieveDraftPosts_Inputs|array $inputs (optional) Inputs as Tumblr_Post_RetrieveDraftPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_RetrieveDraftPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_RetrieveDraftPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveDraftPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_RetrieveDraftPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveDraftPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveDraftPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveDraftPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveDraftPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveDraftPosts Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveDraftPosts Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveDraftPosts Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveDraftPosts Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveDraftPosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveDraftPosts Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveDraftPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveDraftPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveDraftPosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveDraftPosts execution.
     * @param Tumblr_Post_RetrieveDraftPosts $choreo The choreography object for this execution.
     * @param Tumblr_Post_RetrieveDraftPosts_Inputs|array $inputs (optional) Inputs as Tumblr_Post_RetrieveDraftPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_RetrieveDraftPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_RetrieveDraftPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveDraftPosts execution.
     *
     * @return Tumblr_Post_RetrieveDraftPosts_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveDraftPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_RetrieveDraftPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_RetrieveDraftPosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveDraftPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveDraftPosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveDraftPosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_RetrieveDraftPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveDraftPosts execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the user information associated with a given set of Tumblr Oauth credentials.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_GetUserInformation extends Temboo_Choreography
{
    /**
     * Retrieves the user information associated with a given set of Tumblr Oauth credentials.
     *
     * @param Temboo_Session $session The session that owns this GetUserInformation Choreo.
     * @return Tumblr_User_GetUserInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/User/GetUserInformation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUserInformation Choreo.
     *
     * @param Tumblr_User_GetUserInformation_Inputs|array $inputs (optional) Inputs as Tumblr_User_GetUserInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_GetUserInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_User_GetUserInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_GetUserInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_User_GetUserInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserInformation Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_GetUserInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUserInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_GetUserInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_User_GetUserInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_User_GetUserInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetUserInformation Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_User_GetUserInformation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetUserInformation Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_User_GetUserInformation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetUserInformation Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_User_GetUserInformation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetUserInformation Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_User_GetUserInformation_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetUserInformation Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_User_GetUserInformation_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetUserInformation Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_GetUserInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserInformation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUserInformation execution.
     * @param Tumblr_User_GetUserInformation $choreo The choreography object for this execution.
     * @param Tumblr_User_GetUserInformation_Inputs|array $inputs (optional) Inputs as Tumblr_User_GetUserInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_GetUserInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_User_GetUserInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserInformation execution.
     *
     * @return Tumblr_User_GetUserInformation_Results New results object.
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
     * Wraps results in appropriate results class for this GetUserInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_User_GetUserInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_User_GetUserInformation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUserInformation Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_GetUserInformation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUserInformation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_User_GetUserInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUserInformation execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the user information associated with a given set of Tumblr Oauth credentials.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_FollowUser extends Temboo_Choreography
{
    /**
     * Retrieves the user information associated with a given set of Tumblr Oauth credentials.
     *
     * @param Temboo_Session $session The session that owns this FollowUser Choreo.
     * @return Tumblr_User_FollowUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/User/FollowUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FollowUser Choreo.
     *
     * @param Tumblr_User_FollowUser_Inputs|array $inputs (optional) Inputs as Tumblr_User_FollowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_FollowUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_User_FollowUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FollowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_FollowUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_User_FollowUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_FollowUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FollowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_FollowUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FollowUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_User_FollowUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_User_FollowUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this FollowUser Choreo.
     *
     * @param string $value (required, string) The URL of the user / blog to follow, without http:. Ex: username.tumblr.com
     * @return Tumblr_User_FollowUser_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the APIKey input for this FollowUser Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_User_FollowUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FollowUser Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_User_FollowUser_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this FollowUser Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_User_FollowUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FollowUser Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_User_FollowUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this FollowUser Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_User_FollowUser_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the FollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_FollowUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FollowUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this FollowUser execution.
     * @param Tumblr_User_FollowUser $choreo The choreography object for this execution.
     * @param Tumblr_User_FollowUser_Inputs|array $inputs (optional) Inputs as Tumblr_User_FollowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_FollowUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_User_FollowUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FollowUser execution.
     *
     * @return Tumblr_User_FollowUser_Results New results object.
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
     * Wraps results in appropriate results class for this FollowUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_User_FollowUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_User_FollowUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_FollowUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FollowUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_User_FollowUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FollowUser execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new video post using specified HTML embed code.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateVideoPostWithURL extends Temboo_Choreography
{
    /**
     * Creates a new video post using specified HTML embed code.
     *
     * @param Temboo_Session $session The session that owns this CreateVideoPostWithURL Choreo.
     * @return Tumblr_Post_CreateVideoPostWithURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/CreateVideoPostWithURL/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateVideoPostWithURL Choreo.
     *
     * @param Tumblr_Post_CreateVideoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateVideoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateVideoPostWithURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_CreateVideoPostWithURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateVideoPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_CreateVideoPostWithURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateVideoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateVideoPostWithURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateVideoPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateVideoPostWithURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Embed input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The HTML embed code for the video (not hosted by Tumblr).
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setEmbed($value)
    {
        return $this->set('Embed', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateVideoPostWithURL Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_CreateVideoPostWithURL_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateVideoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateVideoPostWithURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateVideoPostWithURL Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateVideoPostWithURL execution.
     * @param Tumblr_Post_CreateVideoPostWithURL $choreo The choreography object for this execution.
     * @param Tumblr_Post_CreateVideoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateVideoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateVideoPostWithURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_CreateVideoPostWithURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateVideoPostWithURL execution.
     *
     * @return Tumblr_Post_CreateVideoPostWithURL_Results New results object.
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
     * Wraps results in appropriate results class for this CreateVideoPostWithURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_CreateVideoPostWithURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_CreateVideoPostWithURL_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateVideoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateVideoPostWithURL_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateVideoPostWithURL Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_CreateVideoPostWithURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateVideoPostWithURL execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the count of followers for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Blog_RetrieveBlogFollowers extends Temboo_Choreography
{
    /**
     * Retrieves the count of followers for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBlogFollowers Choreo.
     * @return Tumblr_Blog_RetrieveBlogFollowers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Blog/RetrieveBlogFollowers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveBlogFollowers Choreo.
     *
     * @param Tumblr_Blog_RetrieveBlogFollowers_Inputs|array $inputs (optional) Inputs as Tumblr_Blog_RetrieveBlogFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Blog_RetrieveBlogFollowers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveBlogFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Blog_RetrieveBlogFollowers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveBlogFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Blog_RetrieveBlogFollowers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveBlogFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveBlogFollowers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveBlogFollowers Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveBlogFollowers Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveBlogFollowers Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveBlogFollowers Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com)
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveBlogFollowers Choreo.
     *
     * @param int $value (optional, integer) The number of results to return: 1 - 20. Defaults to 20.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveBlogFollowers Choreo.
     *
     * @param int $value (optional, integer) The result to start at. Defaults to 0.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveBlogFollowers Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveBlogFollowers Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Blog_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveBlogFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Blog_RetrieveBlogFollowers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveBlogFollowers Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBlogFollowers execution.
     * @param Tumblr_Blog_RetrieveBlogFollowers $choreo The choreography object for this execution.
     * @param Tumblr_Blog_RetrieveBlogFollowers_Inputs|array $inputs (optional) Inputs as Tumblr_Blog_RetrieveBlogFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Blog_RetrieveBlogFollowers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveBlogFollowers execution.
     *
     * @return Tumblr_Blog_RetrieveBlogFollowers_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveBlogFollowers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Blog_RetrieveBlogFollowers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveBlogFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Blog_RetrieveBlogFollowers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveBlogFollowers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Blog_RetrieveBlogFollowers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveBlogFollowers execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat. 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new link post for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateLinkPost extends Temboo_Choreography
{
    /**
     * Creates a new link post for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this CreateLinkPost Choreo.
     * @return Tumblr_Post_CreateLinkPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/CreateLinkPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateLinkPost Choreo.
     *
     * @param Tumblr_Post_CreateLinkPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateLinkPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateLinkPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_CreateLinkPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateLinkPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateLinkPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_CreateLinkPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateLinkPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateLinkPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateLinkPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateLinkPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateLinkPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this CreateLinkPost Choreo.
     *
     * @param string $value (required, string) The link you want to post.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateLinkPost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateLinkPost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateLinkPost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateLinkPost Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this CreateLinkPost Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Description input for this CreateLinkPost Choreo.
     *
     * @param string $value (optional, string) A user-supplied description. HTML is allowed.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateLinkPost Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateLinkPost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateLinkPost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateLinkPost Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreateLinkPost Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateLinkPost Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this CreateLinkPost Choreo.
     *
     * @param string $value (optional, string) The title of the page the link points to. HTML entities should be escaped.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateLinkPost Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_CreateLinkPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateLinkPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateLinkPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateLinkPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateLinkPost execution.
     * @param Tumblr_Post_CreateLinkPost $choreo The choreography object for this execution.
     * @param Tumblr_Post_CreateLinkPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateLinkPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateLinkPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_CreateLinkPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateLinkPost execution.
     *
     * @return Tumblr_Post_CreateLinkPost_Results New results object.
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
     * Wraps results in appropriate results class for this CreateLinkPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_CreateLinkPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_CreateLinkPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateLinkPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateLinkPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateLinkPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_CreateLinkPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateLinkPost execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified audio post on a Tumblr blog using a specified source image URL.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditPhotoPostWithURL extends Temboo_Choreography
{
    /**
     * Updates a specified audio post on a Tumblr blog using a specified source image URL.
     *
     * @param Temboo_Session $session The session that owns this EditPhotoPostWithURL Choreo.
     * @return Tumblr_Post_EditPhotoPostWithURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/EditPhotoPostWithURL/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditPhotoPostWithURL Choreo.
     *
     * @param Tumblr_Post_EditPhotoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditPhotoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditPhotoPostWithURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_EditPhotoPostWithURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditPhotoPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_EditPhotoPostWithURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditPhotoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditPhotoPostWithURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditPhotoPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditPhotoPostWithURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Source input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The photo source URL.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the APIKey input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditPhotoPostWithURL Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Link input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The "click-through URL" for the photo.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the Markdown input for this EditPhotoPostWithURL Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this EditPhotoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditPhotoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditPhotoPostWithURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditPhotoPostWithURL Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditPhotoPostWithURL execution.
     * @param Tumblr_Post_EditPhotoPostWithURL $choreo The choreography object for this execution.
     * @param Tumblr_Post_EditPhotoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditPhotoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditPhotoPostWithURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_EditPhotoPostWithURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditPhotoPostWithURL execution.
     *
     * @return Tumblr_Post_EditPhotoPostWithURL_Results New results object.
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
     * Wraps results in appropriate results class for this EditPhotoPostWithURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_EditPhotoPostWithURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_EditPhotoPostWithURL_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditPhotoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditPhotoPostWithURL_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditPhotoPostWithURL Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_EditPhotoPostWithURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditPhotoPostWithURL execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of submission posts for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveSubmissionPosts extends Temboo_Choreography
{
    /**
     * Retrieves a list of submission posts for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this RetrieveSubmissionPosts Choreo.
     * @return Tumblr_Post_RetrieveSubmissionPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/RetrieveSubmissionPosts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveSubmissionPosts Choreo.
     *
     * @param Tumblr_Post_RetrieveSubmissionPosts_Inputs|array $inputs (optional) Inputs as Tumblr_Post_RetrieveSubmissionPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_RetrieveSubmissionPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveSubmissionPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_RetrieveSubmissionPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveSubmissionPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveSubmissionPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveSubmissionPosts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveSubmissionPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveSubmissionPosts Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveSubmissionPosts Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveSubmissionPosts Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveSubmissionPosts Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveSubmissionPosts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveSubmissionPosts Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveSubmissionPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveSubmissionPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveSubmissionPosts Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveSubmissionPosts execution.
     * @param Tumblr_Post_RetrieveSubmissionPosts $choreo The choreography object for this execution.
     * @param Tumblr_Post_RetrieveSubmissionPosts_Inputs|array $inputs (optional) Inputs as Tumblr_Post_RetrieveSubmissionPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_RetrieveSubmissionPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveSubmissionPosts execution.
     *
     * @return Tumblr_Post_RetrieveSubmissionPosts_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveSubmissionPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_RetrieveSubmissionPosts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveSubmissionPosts Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_RetrieveSubmissionPosts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveSubmissionPosts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_RetrieveSubmissionPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveSubmissionPosts execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Tumblr access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Tumblr access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Tumblr_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Tumblr_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Tumblr_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The oauth_token_secret retrieved during the OAuth process. This is returned by the InitializeOAuth Choreo.
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the SecretKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Tumblr_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Tumblr
 */
class Tumblr_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Tumblr_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Tumblr_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Tumblr_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Tumblr_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Tumblr_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_OAuth_FinalizeOAuth_Results New instance.
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
}

/**
 * Updates a specified video post on a Tumblr blog using specified HTML embed code.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditVideoPostWithURL extends Temboo_Choreography
{
    /**
     * Updates a specified video post on a Tumblr blog using specified HTML embed code.
     *
     * @param Temboo_Session $session The session that owns this EditVideoPostWithURL Choreo.
     * @return Tumblr_Post_EditVideoPostWithURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/EditVideoPostWithURL/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditVideoPostWithURL Choreo.
     *
     * @param Tumblr_Post_EditVideoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditVideoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditVideoPostWithURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_EditVideoPostWithURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditVideoPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_EditVideoPostWithURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditVideoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditVideoPostWithURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditVideoPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditVideoPostWithURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Embed input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The HTML embed code for the video (not hosted by Tumblr).
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setEmbed($value)
    {
        return $this->set('Embed', $value);
    }

    /**
     * Set the value for the APIKey input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditVideoPostWithURL Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditVideoPostWithURL Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this EditVideoPostWithURL Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_EditVideoPostWithURL_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditVideoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditVideoPostWithURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditVideoPostWithURL Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditVideoPostWithURL execution.
     * @param Tumblr_Post_EditVideoPostWithURL $choreo The choreography object for this execution.
     * @param Tumblr_Post_EditVideoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditVideoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditVideoPostWithURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_EditVideoPostWithURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditVideoPostWithURL execution.
     *
     * @return Tumblr_Post_EditVideoPostWithURL_Results New results object.
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
     * Wraps results in appropriate results class for this EditVideoPostWithURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_EditVideoPostWithURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_EditVideoPostWithURL_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditVideoPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditVideoPostWithURL_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditVideoPostWithURL Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_EditVideoPostWithURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditVideoPostWithURL execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified link post on a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditLinkPost extends Temboo_Choreography
{
    /**
     * Updates a specified link post on a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this EditLinkPost Choreo.
     * @return Tumblr_Post_EditLinkPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/EditLinkPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditLinkPost Choreo.
     *
     * @param Tumblr_Post_EditLinkPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditLinkPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditLinkPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_EditLinkPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditLinkPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditLinkPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_EditLinkPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditLinkPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditLinkPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditLinkPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditLinkPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditLinkPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this EditLinkPost Choreo.
     *
     * @param string $value (required, string) The link you want to post.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the APIKey input for this EditLinkPost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditLinkPost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditLinkPost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditLinkPost Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this EditLinkPost Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Description input for this EditLinkPost Choreo.
     *
     * @param string $value (optional, string) A user-supplied description. HTML is allowed.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ID input for this EditLinkPost Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditLinkPost Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditLinkPost Choreo.
     *
     * @param string $value (optional, multiline) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditLinkPost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditLinkPost Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditLinkPost Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditLinkPost Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this EditLinkPost Choreo.
     *
     * @param string $value (optional, string) The title of the page the link points to. HTML entities should be escaped.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this EditLinkPost Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_EditLinkPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditLinkPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditLinkPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditLinkPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditLinkPost execution.
     * @param Tumblr_Post_EditLinkPost $choreo The choreography object for this execution.
     * @param Tumblr_Post_EditLinkPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditLinkPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditLinkPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_EditLinkPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditLinkPost execution.
     *
     * @return Tumblr_Post_EditLinkPost_Results New results object.
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
     * Wraps results in appropriate results class for this EditLinkPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_EditLinkPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_EditLinkPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditLinkPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditLinkPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditLinkPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_EditLinkPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditLinkPost execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns general information about the blog, such as the title, number of posts, and other high-level data.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Blog_RetrieveBlogInfo extends Temboo_Choreography
{
    /**
     * Returns general information about the blog, such as the title, number of posts, and other high-level data.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBlogInfo Choreo.
     * @return Tumblr_Blog_RetrieveBlogInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Blog/RetrieveBlogInfo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveBlogInfo Choreo.
     *
     * @param Tumblr_Blog_RetrieveBlogInfo_Inputs|array $inputs (optional) Inputs as Tumblr_Blog_RetrieveBlogInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Blog_RetrieveBlogInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Blog_RetrieveBlogInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveBlogInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Blog_RetrieveBlogInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Blog_RetrieveBlogInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveBlogInfo Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Blog_RetrieveBlogInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveBlogInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Blog_RetrieveBlogInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveBlogInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Blog_RetrieveBlogInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Blog_RetrieveBlogInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveBlogInfo Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Blog_RetrieveBlogInfo_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveBlogInfo Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Blog_RetrieveBlogInfo_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveBlogInfo Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Blog_RetrieveBlogInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the RetrieveBlogInfo Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Blog_RetrieveBlogInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveBlogInfo Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBlogInfo execution.
     * @param Tumblr_Blog_RetrieveBlogInfo $choreo The choreography object for this execution.
     * @param Tumblr_Blog_RetrieveBlogInfo_Inputs|array $inputs (optional) Inputs as Tumblr_Blog_RetrieveBlogInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Blog_RetrieveBlogInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Blog_RetrieveBlogInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveBlogInfo execution.
     *
     * @return Tumblr_Blog_RetrieveBlogInfo_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveBlogInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Blog_RetrieveBlogInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Blog_RetrieveBlogInfo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveBlogInfo Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Blog_RetrieveBlogInfo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveBlogInfo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Blog_RetrieveBlogInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveBlogInfo execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the liked posts for the user that corresponds to the OAuth credentials provided.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveUserLikes extends Temboo_Choreography
{
    /**
     * Retrieves the liked posts for the user that corresponds to the OAuth credentials provided.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserLikes Choreo.
     * @return Tumblr_User_RetrieveUserLikes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/User/RetrieveUserLikes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveUserLikes Choreo.
     *
     * @param Tumblr_User_RetrieveUserLikes_Inputs|array $inputs (optional) Inputs as Tumblr_User_RetrieveUserLikes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_RetrieveUserLikes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_User_RetrieveUserLikes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveUserLikes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_RetrieveUserLikes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_User_RetrieveUserLikes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveUserLikes Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveUserLikes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveUserLikes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_RetrieveUserLikes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveUserLikes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_User_RetrieveUserLikes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_User_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveUserLikes Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_User_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveUserLikes Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_User_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveUserLikes Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_User_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveUserLikes Choreo.
     *
     * @param int $value (optional, integer) The number of results to return: 1 - 20. Defaults to 20.
     * @return Tumblr_User_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveUserLikes Choreo.
     *
     * @param int $value (optional, integer) The result to start at. Defaults to 0.
     * @return Tumblr_User_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveUserLikes Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_User_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveUserLikes Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_User_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveUserLikes Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveUserLikes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveUserLikes Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserLikes execution.
     * @param Tumblr_User_RetrieveUserLikes $choreo The choreography object for this execution.
     * @param Tumblr_User_RetrieveUserLikes_Inputs|array $inputs (optional) Inputs as Tumblr_User_RetrieveUserLikes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_RetrieveUserLikes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_User_RetrieveUserLikes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveUserLikes execution.
     *
     * @return Tumblr_User_RetrieveUserLikes_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveUserLikes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_User_RetrieveUserLikes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_User_RetrieveUserLikes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveUserLikes Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_RetrieveUserLikes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveUserLikes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_User_RetrieveUserLikes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveUserLikes execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new audio post using a specified external URL.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateAudioPostWithURL extends Temboo_Choreography
{
    /**
     * Creates a new audio post using a specified external URL.
     *
     * @param Temboo_Session $session The session that owns this CreateAudioPostWithURL Choreo.
     * @return Tumblr_Post_CreateAudioPostWithURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/CreateAudioPostWithURL/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateAudioPostWithURL Choreo.
     *
     * @param Tumblr_Post_CreateAudioPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateAudioPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateAudioPostWithURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_CreateAudioPostWithURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateAudioPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_CreateAudioPostWithURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateAudioPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateAudioPostWithURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateAudioPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateAudioPostWithURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ExternalURL input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The URL of the site that hosts the audio file (not Tumblr).
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setExternalURL($value)
    {
        return $this->set('ExternalURL', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateAudioPostWithURL Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_CreateAudioPostWithURL_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateAudioPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateAudioPostWithURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateAudioPostWithURL Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateAudioPostWithURL execution.
     * @param Tumblr_Post_CreateAudioPostWithURL $choreo The choreography object for this execution.
     * @param Tumblr_Post_CreateAudioPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateAudioPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateAudioPostWithURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_CreateAudioPostWithURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateAudioPostWithURL execution.
     *
     * @return Tumblr_Post_CreateAudioPostWithURL_Results New results object.
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
     * Wraps results in appropriate results class for this CreateAudioPostWithURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_CreateAudioPostWithURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_CreateAudioPostWithURL_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateAudioPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateAudioPostWithURL_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateAudioPostWithURL Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_CreateAudioPostWithURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateAudioPostWithURL execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified audio post on a Tumblr blog using a specified external URL.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditAudioPostWithURL extends Temboo_Choreography
{
    /**
     * Updates a specified audio post on a Tumblr blog using a specified external URL.
     *
     * @param Temboo_Session $session The session that owns this EditAudioPostWithURL Choreo.
     * @return Tumblr_Post_EditAudioPostWithURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/EditAudioPostWithURL/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditAudioPostWithURL Choreo.
     *
     * @param Tumblr_Post_EditAudioPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditAudioPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditAudioPostWithURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_EditAudioPostWithURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditAudioPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_EditAudioPostWithURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditAudioPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditAudioPostWithURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditAudioPostWithURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditAudioPostWithURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ExternalURL input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The URL of the site that hosts the audio file (not Tumblr).
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setExternalURL($value)
    {
        return $this->set('ExternalURL', $value);
    }

    /**
     * Set the value for the APIKey input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditAudioPostWithURL Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditAudioPostWithURL Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this EditAudioPostWithURL Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_EditAudioPostWithURL_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditAudioPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditAudioPostWithURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditAudioPostWithURL Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditAudioPostWithURL execution.
     * @param Tumblr_Post_EditAudioPostWithURL $choreo The choreography object for this execution.
     * @param Tumblr_Post_EditAudioPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditAudioPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditAudioPostWithURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_EditAudioPostWithURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditAudioPostWithURL execution.
     *
     * @return Tumblr_Post_EditAudioPostWithURL_Results New results object.
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
     * Wraps results in appropriate results class for this EditAudioPostWithURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_EditAudioPostWithURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_EditAudioPostWithURL_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditAudioPostWithURL Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditAudioPostWithURL_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditAudioPostWithURL Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_EditAudioPostWithURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditAudioPostWithURL execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new photo post using an image file that you specify.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreatePhotoPostWithImageFile extends Temboo_Choreography
{
    /**
     * Creates a new photo post using an image file that you specify.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoPostWithImageFile Choreo.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/CreatePhotoPostWithImageFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param Tumblr_Post_CreatePhotoPostWithImageFile_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreatePhotoPostWithImageFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_CreatePhotoPostWithImageFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_CreatePhotoPostWithImageFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreatePhotoPostWithImageFile Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreatePhotoPostWithImageFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreatePhotoPostWithImageFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreatePhotoPostWithImageFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Data input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (conditional, string) The Base64-encoded contents of the image you want to post. Required UNLESS uploading a file from a URL using the DataFromURL input variable.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setData($value)
    {
        return $this->set('Data', $value);
    }

    /**
     * Set the value for the APIKey input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Link input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) The "click-through URL" for the photo.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the Markdown input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this CreatePhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }

}


/**
 * Execution object for the CreatePhotoPostWithImageFile Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreatePhotoPostWithImageFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreatePhotoPostWithImageFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoPostWithImageFile execution.
     * @param Tumblr_Post_CreatePhotoPostWithImageFile $choreo The choreography object for this execution.
     * @param Tumblr_Post_CreatePhotoPostWithImageFile_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreatePhotoPostWithImageFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_CreatePhotoPostWithImageFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreatePhotoPostWithImageFile execution.
     *
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Results New results object.
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
     * Wraps results in appropriate results class for this CreatePhotoPostWithImageFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_CreatePhotoPostWithImageFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreatePhotoPostWithImageFile Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreatePhotoPostWithImageFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreatePhotoPostWithImageFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_CreatePhotoPostWithImageFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreatePhotoPostWithImageFile execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to like a specified post.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_UnlikePost extends Temboo_Choreography
{
    /**
     * Allows a user to like a specified post.
     *
     * @param Temboo_Session $session The session that owns this UnlikePost Choreo.
     * @return Tumblr_Post_UnlikePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/UnlikePost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UnlikePost Choreo.
     *
     * @param Tumblr_Post_UnlikePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_UnlikePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_UnlikePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_UnlikePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnlikePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_UnlikePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_UnlikePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnlikePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_UnlikePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UnlikePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_UnlikePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnlikePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_UnlikePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_UnlikePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UnlikePost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_UnlikePost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UnlikePost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_UnlikePost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UnlikePost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_UnlikePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this UnlikePost Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to unlike.
     * @return Tumblr_Post_UnlikePost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the ReblogKey input for this UnlikePost Choreo.
     *
     * @param string $value (required, string) The reblog key for the post id. This can be retrieved with the RetrievePublishedPosts Choreo.
     * @return Tumblr_Post_UnlikePost_Inputs For method chaining.
     */
    public function setReblogKey($value)
    {
        return $this->set('ReblogKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UnlikePost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_UnlikePost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this UnlikePost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_UnlikePost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the UnlikePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_UnlikePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnlikePost Choreo.
     *
     * @param Temboo_Session $session The session that owns this UnlikePost execution.
     * @param Tumblr_Post_UnlikePost $choreo The choreography object for this execution.
     * @param Tumblr_Post_UnlikePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_UnlikePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_UnlikePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_UnlikePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnlikePost execution.
     *
     * @return Tumblr_Post_UnlikePost_Results New results object.
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
     * Wraps results in appropriate results class for this UnlikePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_UnlikePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_UnlikePost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UnlikePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_UnlikePost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UnlikePost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_UnlikePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UnlikePost execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the user information associated with a given set of Tumblr Oauth credentials.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_UnfollowUser extends Temboo_Choreography
{
    /**
     * Retrieves the user information associated with a given set of Tumblr Oauth credentials.
     *
     * @param Temboo_Session $session The session that owns this UnfollowUser Choreo.
     * @return Tumblr_User_UnfollowUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/User/UnfollowUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UnfollowUser Choreo.
     *
     * @param Tumblr_User_UnfollowUser_Inputs|array $inputs (optional) Inputs as Tumblr_User_UnfollowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_UnfollowUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_User_UnfollowUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnfollowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_UnfollowUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_User_UnfollowUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnfollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_UnfollowUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UnfollowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_User_UnfollowUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnfollowUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_User_UnfollowUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_User_UnfollowUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this UnfollowUser Choreo.
     *
     * @param string $value (required, string) The URL of the user / blog to follow, without http:. Ex: username.tumblr.com
     * @return Tumblr_User_UnfollowUser_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the APIKey input for this UnfollowUser Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_User_UnfollowUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UnfollowUser Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_User_UnfollowUser_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UnfollowUser Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_User_UnfollowUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UnfollowUser Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_User_UnfollowUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this UnfollowUser Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_User_UnfollowUser_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the UnfollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_UnfollowUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnfollowUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this UnfollowUser execution.
     * @param Tumblr_User_UnfollowUser $choreo The choreography object for this execution.
     * @param Tumblr_User_UnfollowUser_Inputs|array $inputs (optional) Inputs as Tumblr_User_UnfollowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_User_UnfollowUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_User_UnfollowUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnfollowUser execution.
     *
     * @return Tumblr_User_UnfollowUser_Results New results object.
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
     * Wraps results in appropriate results class for this UnfollowUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_User_UnfollowUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_User_UnfollowUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UnfollowUser Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_User_UnfollowUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UnfollowUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_User_UnfollowUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UnfollowUser execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to like a specified post.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_LikePost extends Temboo_Choreography
{
    /**
     * Allows a user to like a specified post.
     *
     * @param Temboo_Session $session The session that owns this LikePost Choreo.
     * @return Tumblr_Post_LikePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/LikePost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LikePost Choreo.
     *
     * @param Tumblr_Post_LikePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_LikePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_LikePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_LikePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LikePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_LikePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_LikePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LikePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_LikePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LikePost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_LikePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LikePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_LikePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_LikePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this LikePost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_LikePost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LikePost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_LikePost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LikePost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_LikePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this LikePost Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to like.
     * @return Tumblr_Post_LikePost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the ReblogKey input for this LikePost Choreo.
     *
     * @param string $value (required, string) The reblog key for the post id. This can be retrieved with the RetrievePublishedPosts Choreo.
     * @return Tumblr_Post_LikePost_Inputs For method chaining.
     */
    public function setReblogKey($value)
    {
        return $this->set('ReblogKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LikePost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_LikePost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this LikePost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_LikePost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the LikePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_LikePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LikePost Choreo.
     *
     * @param Temboo_Session $session The session that owns this LikePost execution.
     * @param Tumblr_Post_LikePost $choreo The choreography object for this execution.
     * @param Tumblr_Post_LikePost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_LikePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_LikePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_LikePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LikePost execution.
     *
     * @return Tumblr_Post_LikePost_Results New results object.
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
     * Wraps results in appropriate results class for this LikePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_LikePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_LikePost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LikePost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_LikePost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LikePost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_LikePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LikePost execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified photo post on a Tumblr blog using a provided image file.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditPhotoPostWithImageFile extends Temboo_Choreography
{
    /**
     * Updates a specified photo post on a Tumblr blog using a provided image file.
     *
     * @param Temboo_Session $session The session that owns this EditPhotoPostWithImageFile Choreo.
     * @return Tumblr_Post_EditPhotoPostWithImageFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/EditPhotoPostWithImageFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditPhotoPostWithImageFile Choreo.
     *
     * @param Tumblr_Post_EditPhotoPostWithImageFile_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditPhotoPostWithImageFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_EditPhotoPostWithImageFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditPhotoPostWithImageFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_EditPhotoPostWithImageFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditPhotoPostWithImageFile Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditPhotoPostWithImageFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditPhotoPostWithImageFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditPhotoPostWithImageFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Data input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (conditional, string) The Base64-encoded contents of the image you want to post.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setData($value)
    {
        return $this->set('Data', $value);
    }

    /**
     * Set the value for the APIKey input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Link input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) The "click-through URL" for the photo.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the Markdown input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this EditPhotoPostWithImageFile Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }

}


/**
 * Execution object for the EditPhotoPostWithImageFile Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditPhotoPostWithImageFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditPhotoPostWithImageFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditPhotoPostWithImageFile execution.
     * @param Tumblr_Post_EditPhotoPostWithImageFile $choreo The choreography object for this execution.
     * @param Tumblr_Post_EditPhotoPostWithImageFile_Inputs|array $inputs (optional) Inputs as Tumblr_Post_EditPhotoPostWithImageFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_EditPhotoPostWithImageFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditPhotoPostWithImageFile execution.
     *
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Results New results object.
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
     * Wraps results in appropriate results class for this EditPhotoPostWithImageFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_EditPhotoPostWithImageFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditPhotoPostWithImageFile Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_EditPhotoPostWithImageFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditPhotoPostWithImageFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_EditPhotoPostWithImageFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditPhotoPostWithImageFile execution.
     *
     * @return string The response from Tumblr. Default is JSON, can be set to XML by entering 'xml' in ResponseFormat.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new quote post for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateTextPost extends Temboo_Choreography
{
    /**
     * Creates a new quote post for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this CreateTextPost Choreo.
     * @return Tumblr_Post_CreateTextPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/Post/CreateTextPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateTextPost Choreo.
     *
     * @param Tumblr_Post_CreateTextPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateTextPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateTextPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_Post_CreateTextPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateTextPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateTextPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_Post_CreateTextPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateTextPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateTextPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateTextPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_Post_CreateTextPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateTextPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Body input for this CreateTextPost Choreo.
     *
     * @param string $value (required, string) The full post body, HTML allowed.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateTextPost Choreo.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateTextPost Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateTextPost Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateTextPost Choreo.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this CreateTextPost Choreo.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateTextPost Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateTextPost Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateTextPost Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateTextPost Choreo.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreateTextPost Choreo.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateTextPost Choreo.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this CreateTextPost Choreo.
     *
     * @param string $value (optional, string) The optional title of the post. HTML entities must be escaped.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateTextPost Choreo.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_Post_CreateTextPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateTextPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateTextPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateTextPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateTextPost execution.
     * @param Tumblr_Post_CreateTextPost $choreo The choreography object for this execution.
     * @param Tumblr_Post_CreateTextPost_Inputs|array $inputs (optional) Inputs as Tumblr_Post_CreateTextPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_Post_CreateTextPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_Post_CreateTextPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateTextPost execution.
     *
     * @return Tumblr_Post_CreateTextPost_Results New results object.
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
     * Wraps results in appropriate results class for this CreateTextPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_Post_CreateTextPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_Post_CreateTextPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateTextPost Choreo.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_Post_CreateTextPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateTextPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_Post_CreateTextPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateTextPost execution.
     *
     * @return string The format that the response should be in. Can be set to xml or json. Defaults to json.
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
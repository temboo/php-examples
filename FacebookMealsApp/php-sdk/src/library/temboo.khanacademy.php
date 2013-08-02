<?php

/**
 * Temboo PHP SDK KhanAcademy classes
 *
 * Execute Choreographies from the Temboo KhanAcademy bundle.
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
 * @subpackage KhanAcademy
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves data about all videos watched by a specific user.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetUserVideos extends Temboo_Choreography
{
    /**
     * Retrieves data about all videos watched by a specific user.
     *
     * @param Temboo_Session $session The session that owns this GetUserVideos Choreo.
     * @return KhanAcademy_Users_GetUserVideos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Users/GetUserVideos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUserVideos Choreo.
     *
     * @param KhanAcademy_Users_GetUserVideos_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetUserVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetUserVideos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Users_GetUserVideos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserVideos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetUserVideos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Users_GetUserVideos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserVideos Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetUserVideos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUserVideos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetUserVideos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserVideos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Users_GetUserVideos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Users_GetUserVideos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this GetUserVideos Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_Users_GetUserVideos_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetUserVideos Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_Users_GetUserVideos_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Email input for this GetUserVideos Choreo.
     *
     * @param string $value (optional, string) The email address (coach or student ID) of user. If not provided, defaults to currently logged in user.
     * @return KhanAcademy_Users_GetUserVideos_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndTime input for this GetUserVideos Choreo.
     *
     * @param string $value (optional, string) The date/time to end searching for logs in UTC format: YYYY-mm-ddTHH:MM:SS (e.g., 2011-10-18T02:41:53).
     * @return KhanAcademy_Users_GetUserVideos_Inputs For method chaining.
     */
    public function setEndTime($value)
    {
        return $this->set('EndTime', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this GetUserVideos Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetUserVideos_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the OAuthToken input for this GetUserVideos Choreo.
     *
     * @param string $value (required, string) The OAuth Token retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetUserVideos_Inputs For method chaining.
     */
    public function setOAuthToken($value)
    {
        return $this->set('OAuthToken', $value);
    }

    /**
     * Set the value for the StartTime input for this GetUserVideos Choreo.
     *
     * @param string $value (optional, string) The date/time to start searching for logs in UTC format: YYYY-mm-ddTHH:MM:SS (e.g., 2011-10-18T02:41:53).
     * @return KhanAcademy_Users_GetUserVideos_Inputs For method chaining.
     */
    public function setStartTime($value)
    {
        return $this->set('StartTime', $value);
    }
}


/**
 * Execution object for the GetUserVideos Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetUserVideos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserVideos Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUserVideos execution.
     * @param KhanAcademy_Users_GetUserVideos $choreo The choreography object for this execution.
     * @param KhanAcademy_Users_GetUserVideos_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetUserVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetUserVideos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Users_GetUserVideos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserVideos execution.
     *
     * @return KhanAcademy_Users_GetUserVideos_Results New results object.
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
     * Wraps results in appropriate results class for this GetUserVideos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Users_GetUserVideos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Users_GetUserVideos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUserVideos Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetUserVideos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUserVideos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Users_GetUserVideos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUserVideos execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user data about a specific video, such as amount of video watched, points received, etc.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetVideo extends Temboo_Choreography
{
    /**
     * Retrieves user data about a specific video, such as amount of video watched, points received, etc.
     *
     * @param Temboo_Session $session The session that owns this GetVideo Choreo.
     * @return KhanAcademy_Users_GetVideo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Users/GetVideo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetVideo Choreo.
     *
     * @param KhanAcademy_Users_GetVideo_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetVideo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetVideo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Users_GetVideo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetVideo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetVideo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Users_GetVideo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetVideo Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetVideo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetVideo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetVideo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetVideo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Users_GetVideo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Users_GetVideo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this GetVideo Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_Users_GetVideo_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetVideo Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_Users_GetVideo_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Email input for this GetVideo Choreo.
     *
     * @param string $value (optional, string) The email address (coach or student ID) of user. If not provided, defaults to currently logged in user.
     * @return KhanAcademy_Users_GetVideo_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this GetVideo Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetVideo_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the OAuthToken input for this GetVideo Choreo.
     *
     * @param string $value (required, string) The OAuth Token retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetVideo_Inputs For method chaining.
     */
    public function setOAuthToken($value)
    {
        return $this->set('OAuthToken', $value);
    }

    /**
     * Set the value for the YouTubeID input for this GetVideo Choreo.
     *
     * @param string $value (required, string) The YouTube ID of the video for which you want to retrieve information.
     * @return KhanAcademy_Users_GetVideo_Inputs For method chaining.
     */
    public function setYouTubeID($value)
    {
        return $this->set('YouTubeID', $value);
    }
}


/**
 * Execution object for the GetVideo Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetVideo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetVideo Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetVideo execution.
     * @param KhanAcademy_Users_GetVideo $choreo The choreography object for this execution.
     * @param KhanAcademy_Users_GetVideo_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetVideo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetVideo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Users_GetVideo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetVideo execution.
     *
     * @return KhanAcademy_Users_GetVideo_Results New results object.
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
     * Wraps results in appropriate results class for this GetVideo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Users_GetVideo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Users_GetVideo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetVideo Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetVideo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetVideo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Users_GetVideo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetVideo execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all videos associated with a given exercise.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExerciseVideos extends Temboo_Choreography
{
    /**
     * Retrieves all videos associated with a given exercise.
     *
     * @param Temboo_Session $session The session that owns this GetExerciseVideos Choreo.
     * @return KhanAcademy_Exercises_GetExerciseVideos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Exercises/GetExerciseVideos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetExerciseVideos Choreo.
     *
     * @param KhanAcademy_Exercises_GetExerciseVideos_Inputs|array $inputs (optional) Inputs as KhanAcademy_Exercises_GetExerciseVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Exercises_GetExerciseVideos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Exercises_GetExerciseVideos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetExerciseVideos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Exercises_GetExerciseVideos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Exercises_GetExerciseVideos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetExerciseVideos Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExerciseVideos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetExerciseVideos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Exercises_GetExerciseVideos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetExerciseVideos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Exercises_GetExerciseVideos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Exercises_GetExerciseVideos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ExerciseName input for this GetExerciseVideos Choreo.
     *
     * @param string $value (required, string) The name of the exercise to retrieve (e.g. logarithms_1)
     * @return KhanAcademy_Exercises_GetExerciseVideos_Inputs For method chaining.
     */
    public function setExerciseName($value)
    {
        return $this->set('ExerciseName', $value);
    }
}


/**
 * Execution object for the GetExerciseVideos Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExerciseVideos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetExerciseVideos Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetExerciseVideos execution.
     * @param KhanAcademy_Exercises_GetExerciseVideos $choreo The choreography object for this execution.
     * @param KhanAcademy_Exercises_GetExerciseVideos_Inputs|array $inputs (optional) Inputs as KhanAcademy_Exercises_GetExerciseVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Exercises_GetExerciseVideos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Exercises_GetExerciseVideos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetExerciseVideos execution.
     *
     * @return KhanAcademy_Exercises_GetExerciseVideos_Results New results object.
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
     * Wraps results in appropriate results class for this GetExerciseVideos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Exercises_GetExerciseVideos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Exercises_GetExerciseVideos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetExerciseVideos Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExerciseVideos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetExerciseVideos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Exercises_GetExerciseVideos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetExerciseVideos execution.
     *
     * @return string (json) The response from Khan Academy.
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
 * @subpackage KhanAcademy
 */
class KhanAcademy_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return KhanAcademy_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param KhanAcademy_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as KhanAcademy_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return KhanAcademy_OAuth_InitializeOAuth_Inputs For method chaining.
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
 * @subpackage KhanAcademy
 */
class KhanAcademy_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param KhanAcademy_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param KhanAcademy_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as KhanAcademy_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return KhanAcademy_OAuth_InitializeOAuth_Results New results object.
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
     * @return KhanAcademy_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_OAuth_InitializeOAuth_Results New instance.
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
 * Completes the OAuth process by retrieving a Khan Academy OAuth token and token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Khan Academy OAuth token and token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return KhanAcademy_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param KhanAcademy_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as KhanAcademy_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage KhanAcademy
 */
class KhanAcademy_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param KhanAcademy_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param KhanAcademy_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as KhanAcademy_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return KhanAcademy_OAuth_FinalizeOAuth_Results New results object.
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
     * @return KhanAcademy_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "OAuthTokenSecret" output from this FinalizeOAuth execution.
     *
     * @return string (string) The OAuth Token Secret retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthTokenSecret()
    {
        return $this->get('OAuthTokenSecret');
    }
    /**
     * Retrieve the value for the "OAuthToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The OAuth Token retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthToken()
    {
        return $this->get('OAuthToken');
    }
}

/**
 * Retrieves a list of all exercises in the Khan Academy library.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_AllExercises extends Temboo_Choreography
{
    /**
     * Retrieves a list of all exercises in the Khan Academy library.
     *
     * @param Temboo_Session $session The session that owns this AllExercises Choreo.
     * @return KhanAcademy_Exercises_AllExercises New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Exercises/AllExercises/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AllExercises Choreo.
     *
     * @param KhanAcademy_Exercises_AllExercises_Inputs|array $inputs (optional) Inputs as KhanAcademy_Exercises_AllExercises_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Exercises_AllExercises_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Exercises_AllExercises_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AllExercises Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Exercises_AllExercises_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Exercises_AllExercises_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AllExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_AllExercises_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AllExercises Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Exercises_AllExercises_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AllExercises input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Exercises_AllExercises_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Exercises_AllExercises_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }
}


/**
 * Execution object for the AllExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_AllExercises_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AllExercises Choreo.
     *
     * @param Temboo_Session $session The session that owns this AllExercises execution.
     * @param KhanAcademy_Exercises_AllExercises $choreo The choreography object for this execution.
     * @param KhanAcademy_Exercises_AllExercises_Inputs|array $inputs (optional) Inputs as KhanAcademy_Exercises_AllExercises_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Exercises_AllExercises_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Exercises_AllExercises $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AllExercises execution.
     *
     * @return KhanAcademy_Exercises_AllExercises_Results New results object.
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
     * Wraps results in appropriate results class for this AllExercises execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Exercises_AllExercises_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Exercises_AllExercises_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AllExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_AllExercises_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AllExercises Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Exercises_AllExercises_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AllExercises execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves data about all excercises engaged by a specific user.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetUserExercises extends Temboo_Choreography
{
    /**
     * Retrieves data about all excercises engaged by a specific user.
     *
     * @param Temboo_Session $session The session that owns this GetUserExercises Choreo.
     * @return KhanAcademy_Users_GetUserExercises New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Users/GetUserExercises/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUserExercises Choreo.
     *
     * @param KhanAcademy_Users_GetUserExercises_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetUserExercises_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetUserExercises_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Users_GetUserExercises_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserExercises Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetUserExercises_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Users_GetUserExercises_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetUserExercises_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUserExercises Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetUserExercises_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserExercises input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Users_GetUserExercises_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Users_GetUserExercises_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this GetUserExercises Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_Users_GetUserExercises_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetUserExercises Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_Users_GetUserExercises_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Email input for this GetUserExercises Choreo.
     *
     * @param string $value (optional, string) The email address (coach or student ID) of user. If not provided, defaults to currently logged in user.
     * @return KhanAcademy_Users_GetUserExercises_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this GetUserExercises Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetUserExercises_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the OAuthToken input for this GetUserExercises Choreo.
     *
     * @param string $value (required, string) The OAuth Token retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetUserExercises_Inputs For method chaining.
     */
    public function setOAuthToken($value)
    {
        return $this->set('OAuthToken', $value);
    }
}


/**
 * Execution object for the GetUserExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetUserExercises_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserExercises Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUserExercises execution.
     * @param KhanAcademy_Users_GetUserExercises $choreo The choreography object for this execution.
     * @param KhanAcademy_Users_GetUserExercises_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetUserExercises_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetUserExercises_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Users_GetUserExercises $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserExercises execution.
     *
     * @return KhanAcademy_Users_GetUserExercises_Results New results object.
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
     * Wraps results in appropriate results class for this GetUserExercises execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Users_GetUserExercises_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Users_GetUserExercises_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUserExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetUserExercises_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUserExercises Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Users_GetUserExercises_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUserExercises execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user data about a specific excercise, such as when the problem was done, if the answer was correct, etc.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExerciseLog extends Temboo_Choreography
{
    /**
     * Retrieves user data about a specific excercise, such as when the problem was done, if the answer was correct, etc.
     *
     * @param Temboo_Session $session The session that owns this GetExerciseLog Choreo.
     * @return KhanAcademy_Users_GetExerciseLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Users/GetExerciseLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetExerciseLog Choreo.
     *
     * @param KhanAcademy_Users_GetExerciseLog_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetExerciseLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetExerciseLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Users_GetExerciseLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetExerciseLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetExerciseLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Users_GetExerciseLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetExerciseLog Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExerciseLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetExerciseLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetExerciseLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetExerciseLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this GetExerciseLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetExerciseLog Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Email input for this GetExerciseLog Choreo.
     *
     * @param string $value (optional, string) The email address (coach or student ID) of user. If not provided, defaults to currently logged in user.
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndTime input for this GetExerciseLog Choreo.
     *
     * @param string $value (optional, string) The date/time to end searching for logs in UTC format: YYYY-mm-ddTHH:MM:SS (e.g., 2011-10-18T02:41:53).
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function setEndTime($value)
    {
        return $this->set('EndTime', $value);
    }

    /**
     * Set the value for the ExerciseName input for this GetExerciseLog Choreo.
     *
     * @param string $value (required, string) The name of the exercise for which you want to retrieve information (e.g. scientific_notation).
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function setExerciseName($value)
    {
        return $this->set('ExerciseName', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this GetExerciseLog Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the OAuthToken input for this GetExerciseLog Choreo.
     *
     * @param string $value (required, string) The OAuth Token retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function setOAuthToken($value)
    {
        return $this->set('OAuthToken', $value);
    }

    /**
     * Set the value for the StartTime input for this GetExerciseLog Choreo.
     *
     * @param string $value (optional, string) The date/time to start searching for logs in UTC format: YYYY-mm-ddTHH:MM:SS (e.g., 2011-10-18T02:41:53).
     * @return KhanAcademy_Users_GetExerciseLog_Inputs For method chaining.
     */
    public function setStartTime($value)
    {
        return $this->set('StartTime', $value);
    }
}


/**
 * Execution object for the GetExerciseLog Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExerciseLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetExerciseLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetExerciseLog execution.
     * @param KhanAcademy_Users_GetExerciseLog $choreo The choreography object for this execution.
     * @param KhanAcademy_Users_GetExerciseLog_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetExerciseLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetExerciseLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Users_GetExerciseLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetExerciseLog execution.
     *
     * @return KhanAcademy_Users_GetExerciseLog_Results New results object.
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
     * Wraps results in appropriate results class for this GetExerciseLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Users_GetExerciseLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Users_GetExerciseLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetExerciseLog Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExerciseLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetExerciseLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Users_GetExerciseLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetExerciseLog execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all the badge categories in Khan Academy.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_AllCategories extends Temboo_Choreography
{
    /**
     * Retrieves all the badge categories in Khan Academy.
     *
     * @param Temboo_Session $session The session that owns this AllCategories Choreo.
     * @return KhanAcademy_Badges_AllCategories New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Badges/AllCategories/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AllCategories Choreo.
     *
     * @param KhanAcademy_Badges_AllCategories_Inputs|array $inputs (optional) Inputs as KhanAcademy_Badges_AllCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Badges_AllCategories_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Badges_AllCategories_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AllCategories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Badges_AllCategories_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Badges_AllCategories_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AllCategories Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_AllCategories_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AllCategories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Badges_AllCategories_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AllCategories input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Badges_AllCategories_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Badges_AllCategories_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }
}


/**
 * Execution object for the AllCategories Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_AllCategories_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AllCategories Choreo.
     *
     * @param Temboo_Session $session The session that owns this AllCategories execution.
     * @param KhanAcademy_Badges_AllCategories $choreo The choreography object for this execution.
     * @param KhanAcademy_Badges_AllCategories_Inputs|array $inputs (optional) Inputs as KhanAcademy_Badges_AllCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Badges_AllCategories_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Badges_AllCategories $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AllCategories execution.
     *
     * @return KhanAcademy_Badges_AllCategories_Results New results object.
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
     * Wraps results in appropriate results class for this AllCategories execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Badges_AllCategories_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Badges_AllCategories_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AllCategories Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_AllCategories_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AllCategories Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Badges_AllCategories_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AllCategories execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves video data for a given video according to its readable ID.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Videos_GetVideoByReadableID extends Temboo_Choreography
{
    /**
     * Retrieves video data for a given video according to its readable ID.
     *
     * @param Temboo_Session $session The session that owns this GetVideoByReadableID Choreo.
     * @return KhanAcademy_Videos_GetVideoByReadableID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Videos/GetVideoByReadableID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetVideoByReadableID Choreo.
     *
     * @param KhanAcademy_Videos_GetVideoByReadableID_Inputs|array $inputs (optional) Inputs as KhanAcademy_Videos_GetVideoByReadableID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Videos_GetVideoByReadableID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Videos_GetVideoByReadableID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetVideoByReadableID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Videos_GetVideoByReadableID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Videos_GetVideoByReadableID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetVideoByReadableID Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Videos_GetVideoByReadableID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetVideoByReadableID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Videos_GetVideoByReadableID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetVideoByReadableID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Videos_GetVideoByReadableID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Videos_GetVideoByReadableID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ReadableID input for this GetVideoByReadableID Choreo.
     *
     * @param string $value (required, string) The ReadableID of the video for which you want to retrieve information (e.g. adding-subtracting-negative-numbers).
     * @return KhanAcademy_Videos_GetVideoByReadableID_Inputs For method chaining.
     */
    public function setReadableID($value)
    {
        return $this->set('ReadableID', $value);
    }
}


/**
 * Execution object for the GetVideoByReadableID Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Videos_GetVideoByReadableID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetVideoByReadableID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetVideoByReadableID execution.
     * @param KhanAcademy_Videos_GetVideoByReadableID $choreo The choreography object for this execution.
     * @param KhanAcademy_Videos_GetVideoByReadableID_Inputs|array $inputs (optional) Inputs as KhanAcademy_Videos_GetVideoByReadableID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Videos_GetVideoByReadableID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Videos_GetVideoByReadableID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetVideoByReadableID execution.
     *
     * @return KhanAcademy_Videos_GetVideoByReadableID_Results New results object.
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
     * Wraps results in appropriate results class for this GetVideoByReadableID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Videos_GetVideoByReadableID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Videos_GetVideoByReadableID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetVideoByReadableID Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Videos_GetVideoByReadableID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetVideoByReadableID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Videos_GetVideoByReadableID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetVideoByReadableID execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retreievs a list of all videos for a given topic.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_GetTopicVideos extends Temboo_Choreography
{
    /**
     * Retreievs a list of all videos for a given topic.
     *
     * @param Temboo_Session $session The session that owns this GetTopicVideos Choreo.
     * @return KhanAcademy_Topics_GetTopicVideos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Topics/GetTopicVideos/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTopicVideos Choreo.
     *
     * @param KhanAcademy_Topics_GetTopicVideos_Inputs|array $inputs (optional) Inputs as KhanAcademy_Topics_GetTopicVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Topics_GetTopicVideos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Topics_GetTopicVideos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopicVideos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Topics_GetTopicVideos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Topics_GetTopicVideos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopicVideos Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_GetTopicVideos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTopicVideos Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Topics_GetTopicVideos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopicVideos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Topics_GetTopicVideos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Topics_GetTopicVideos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the TopicID input for this GetTopicVideos Choreo.
     *
     * @param string $value (required, string) The ID of the topic.
     * @return KhanAcademy_Topics_GetTopicVideos_Inputs For method chaining.
     */
    public function setTopicID($value)
    {
        return $this->set('TopicID', $value);
    }
}


/**
 * Execution object for the GetTopicVideos Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_GetTopicVideos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopicVideos Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTopicVideos execution.
     * @param KhanAcademy_Topics_GetTopicVideos $choreo The choreography object for this execution.
     * @param KhanAcademy_Topics_GetTopicVideos_Inputs|array $inputs (optional) Inputs as KhanAcademy_Topics_GetTopicVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Topics_GetTopicVideos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Topics_GetTopicVideos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopicVideos execution.
     *
     * @return KhanAcademy_Topics_GetTopicVideos_Results New results object.
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
     * Wraps results in appropriate results class for this GetTopicVideos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Topics_GetTopicVideos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Topics_GetTopicVideos_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTopicVideos Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_GetTopicVideos_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTopicVideos Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Topics_GetTopicVideos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTopicVideos execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the specified exercise.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExercise extends Temboo_Choreography
{
    /**
     * Retrieves the specified exercise.
     *
     * @param Temboo_Session $session The session that owns this GetExercise Choreo.
     * @return KhanAcademy_Exercises_GetExercise New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Exercises/GetExercise/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetExercise Choreo.
     *
     * @param KhanAcademy_Exercises_GetExercise_Inputs|array $inputs (optional) Inputs as KhanAcademy_Exercises_GetExercise_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Exercises_GetExercise_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Exercises_GetExercise_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetExercise Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Exercises_GetExercise_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Exercises_GetExercise_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetExercise Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExercise_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetExercise Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Exercises_GetExercise_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetExercise input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Exercises_GetExercise_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Exercises_GetExercise_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ExerciseName input for this GetExercise Choreo.
     *
     * @param string $value (required, string) The name of the exercise to retrieve (e.g. logarithms_1)
     * @return KhanAcademy_Exercises_GetExercise_Inputs For method chaining.
     */
    public function setExerciseName($value)
    {
        return $this->set('ExerciseName', $value);
    }
}


/**
 * Execution object for the GetExercise Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExercise_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetExercise Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetExercise execution.
     * @param KhanAcademy_Exercises_GetExercise $choreo The choreography object for this execution.
     * @param KhanAcademy_Exercises_GetExercise_Inputs|array $inputs (optional) Inputs as KhanAcademy_Exercises_GetExercise_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Exercises_GetExercise_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Exercises_GetExercise $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetExercise execution.
     *
     * @return KhanAcademy_Exercises_GetExercise_Results New results object.
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
     * Wraps results in appropriate results class for this GetExercise execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Exercises_GetExercise_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Exercises_GetExercise_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetExercise Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExercise_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetExercise Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Exercises_GetExercise_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetExercise execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all exercises which have the specified exercise as a prerequisite.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExerciseFollowUp extends Temboo_Choreography
{
    /**
     * Retrieves all exercises which have the specified exercise as a prerequisite.
     *
     * @param Temboo_Session $session The session that owns this GetExerciseFollowUp Choreo.
     * @return KhanAcademy_Exercises_GetExerciseFollowUp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Exercises/GetExerciseFollowUp/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetExerciseFollowUp Choreo.
     *
     * @param KhanAcademy_Exercises_GetExerciseFollowUp_Inputs|array $inputs (optional) Inputs as KhanAcademy_Exercises_GetExerciseFollowUp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Exercises_GetExerciseFollowUp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetExerciseFollowUp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Exercises_GetExerciseFollowUp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetExerciseFollowUp Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExerciseFollowUp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetExerciseFollowUp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetExerciseFollowUp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ExerciseName input for this GetExerciseFollowUp Choreo.
     *
     * @param string $value (required, string) The name of the exercise to retrieve (e.g. logarithms_1)
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function setExerciseName($value)
    {
        return $this->set('ExerciseName', $value);
    }
}


/**
 * Execution object for the GetExerciseFollowUp Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExerciseFollowUp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetExerciseFollowUp Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetExerciseFollowUp execution.
     * @param KhanAcademy_Exercises_GetExerciseFollowUp $choreo The choreography object for this execution.
     * @param KhanAcademy_Exercises_GetExerciseFollowUp_Inputs|array $inputs (optional) Inputs as KhanAcademy_Exercises_GetExerciseFollowUp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Exercises_GetExerciseFollowUp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetExerciseFollowUp execution.
     *
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Results New results object.
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
     * Wraps results in appropriate results class for this GetExerciseFollowUp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Exercises_GetExerciseFollowUp_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetExerciseFollowUp Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Exercises_GetExerciseFollowUp_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetExerciseFollowUp Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Exercises_GetExerciseFollowUp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetExerciseFollowUp execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user data for a given excercise, such as number of problems attempted, current streak, longest streak, etc.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExercise extends Temboo_Choreography
{
    /**
     * Retrieves user data for a given excercise, such as number of problems attempted, current streak, longest streak, etc.
     *
     * @param Temboo_Session $session The session that owns this GetExercise Choreo.
     * @return KhanAcademy_Users_GetExercise New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Users/GetExercise/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetExercise Choreo.
     *
     * @param KhanAcademy_Users_GetExercise_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetExercise_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetExercise_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Users_GetExercise_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetExercise Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetExercise_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Users_GetExercise_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetExercise Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExercise_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetExercise Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetExercise_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetExercise input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Users_GetExercise_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Users_GetExercise_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this GetExercise Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_Users_GetExercise_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetExercise Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_Users_GetExercise_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Email input for this GetExercise Choreo.
     *
     * @param string $value (optional, string) The email address (coach or student ID) of user. If not provided, defaults to currently logged in user.
     * @return KhanAcademy_Users_GetExercise_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ExerciseName input for this GetExercise Choreo.
     *
     * @param string $value (required, string) The exercise for which you want to retrieve follwow up exercises (e.g. "simplifying_fractions").
     * @return KhanAcademy_Users_GetExercise_Inputs For method chaining.
     */
    public function setExerciseName($value)
    {
        return $this->set('ExerciseName', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this GetExercise Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetExercise_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the OAuthToken input for this GetExercise Choreo.
     *
     * @param string $value (required, string) The OAuth Token retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetExercise_Inputs For method chaining.
     */
    public function setOAuthToken($value)
    {
        return $this->set('OAuthToken', $value);
    }
}


/**
 * Execution object for the GetExercise Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExercise_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetExercise Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetExercise execution.
     * @param KhanAcademy_Users_GetExercise $choreo The choreography object for this execution.
     * @param KhanAcademy_Users_GetExercise_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetExercise_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetExercise_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Users_GetExercise $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetExercise execution.
     *
     * @return KhanAcademy_Users_GetExercise_Results New results object.
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
     * Wraps results in appropriate results class for this GetExercise execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Users_GetExercise_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Users_GetExercise_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetExercise Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExercise_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetExercise Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Users_GetExercise_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetExercise execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all badges for a specific category.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_BadgesByCategory extends Temboo_Choreography
{
    /**
     * Retrieves all badges for a specific category.
     *
     * @param Temboo_Session $session The session that owns this BadgesByCategory Choreo.
     * @return KhanAcademy_Badges_BadgesByCategory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Badges/BadgesByCategory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this BadgesByCategory Choreo.
     *
     * @param KhanAcademy_Badges_BadgesByCategory_Inputs|array $inputs (optional) Inputs as KhanAcademy_Badges_BadgesByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Badges_BadgesByCategory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Badges_BadgesByCategory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BadgesByCategory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Badges_BadgesByCategory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Badges_BadgesByCategory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BadgesByCategory Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_BadgesByCategory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the BadgesByCategory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Badges_BadgesByCategory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BadgesByCategory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Badges_BadgesByCategory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Badges_BadgesByCategory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CategoryID input for this BadgesByCategory Choreo.
     *
     * @param string $value (required, string) The category of badges to retrieve. A full list of CategoryIds can be obtained by running the AllCategories Choreo.
     * @return KhanAcademy_Badges_BadgesByCategory_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }
}


/**
 * Execution object for the BadgesByCategory Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_BadgesByCategory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BadgesByCategory Choreo.
     *
     * @param Temboo_Session $session The session that owns this BadgesByCategory execution.
     * @param KhanAcademy_Badges_BadgesByCategory $choreo The choreography object for this execution.
     * @param KhanAcademy_Badges_BadgesByCategory_Inputs|array $inputs (optional) Inputs as KhanAcademy_Badges_BadgesByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Badges_BadgesByCategory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Badges_BadgesByCategory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BadgesByCategory execution.
     *
     * @return KhanAcademy_Badges_BadgesByCategory_Results New results object.
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
     * Wraps results in appropriate results class for this BadgesByCategory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Badges_BadgesByCategory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Badges_BadgesByCategory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the BadgesByCategory Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_BadgesByCategory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the BadgesByCategory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Badges_BadgesByCategory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this BadgesByCategory execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all the exercises associated with a given video.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Videos_GetVideoExercises extends Temboo_Choreography
{
    /**
     * Retrieves all the exercises associated with a given video.
     *
     * @param Temboo_Session $session The session that owns this GetVideoExercises Choreo.
     * @return KhanAcademy_Videos_GetVideoExercises New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Videos/GetVideoExercises/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetVideoExercises Choreo.
     *
     * @param KhanAcademy_Videos_GetVideoExercises_Inputs|array $inputs (optional) Inputs as KhanAcademy_Videos_GetVideoExercises_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Videos_GetVideoExercises_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Videos_GetVideoExercises_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetVideoExercises Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Videos_GetVideoExercises_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Videos_GetVideoExercises_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetVideoExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Videos_GetVideoExercises_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetVideoExercises Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Videos_GetVideoExercises_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetVideoExercises input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Videos_GetVideoExercises_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Videos_GetVideoExercises_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the YouTubeID input for this GetVideoExercises Choreo.
     *
     * @param string $value (required, string) The Youtube ID of the video for which you want data.
     * @return KhanAcademy_Videos_GetVideoExercises_Inputs For method chaining.
     */
    public function setYouTubeID($value)
    {
        return $this->set('YouTubeID', $value);
    }
}


/**
 * Execution object for the GetVideoExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Videos_GetVideoExercises_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetVideoExercises Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetVideoExercises execution.
     * @param KhanAcademy_Videos_GetVideoExercises $choreo The choreography object for this execution.
     * @param KhanAcademy_Videos_GetVideoExercises_Inputs|array $inputs (optional) Inputs as KhanAcademy_Videos_GetVideoExercises_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Videos_GetVideoExercises_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Videos_GetVideoExercises $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetVideoExercises execution.
     *
     * @return KhanAcademy_Videos_GetVideoExercises_Results New results object.
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
     * Wraps results in appropriate results class for this GetVideoExercises execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Videos_GetVideoExercises_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Videos_GetVideoExercises_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetVideoExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Videos_GetVideoExercises_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetVideoExercises Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Videos_GetVideoExercises_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetVideoExercises execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all badges, and if a user is logged in, retrieves additional information about the badges that user has earned.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_GetBadges extends Temboo_Choreography
{
    /**
     * Retrieves a list of all badges, and if a user is logged in, retrieves additional information about the badges that user has earned.
     *
     * @param Temboo_Session $session The session that owns this GetBadges Choreo.
     * @return KhanAcademy_Badges_GetBadges New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Badges/GetBadges/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBadges Choreo.
     *
     * @param KhanAcademy_Badges_GetBadges_Inputs|array $inputs (optional) Inputs as KhanAcademy_Badges_GetBadges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Badges_GetBadges_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Badges_GetBadges_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBadges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Badges_GetBadges_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Badges_GetBadges_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBadges Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_GetBadges_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBadges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Badges_GetBadges_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBadges input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Badges_GetBadges_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Badges_GetBadges_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBadges Choreo.
     *
     * @param string $value (optional, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_Badges_GetBadges_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBadges Choreo.
     *
     * @param string $value (optional, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_Badges_GetBadges_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Email input for this GetBadges Choreo.
     *
     * @param string $value (optional, string) The email address (coach or student ID) of user. If not provided, defaults to currently logged in user in the case when authentication credentials are provided.
     * @return KhanAcademy_Badges_GetBadges_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this GetBadges Choreo.
     *
     * @param string $value (optional, string) The OAuth Token Secret retrieved during the OAuth process.
     * @return KhanAcademy_Badges_GetBadges_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the OAuthToken input for this GetBadges Choreo.
     *
     * @param string $value (optional, string) The OAuth Token retrieved during the OAuth process.
     * @return KhanAcademy_Badges_GetBadges_Inputs For method chaining.
     */
    public function setOAuthToken($value)
    {
        return $this->set('OAuthToken', $value);
    }
}


/**
 * Execution object for the GetBadges Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_GetBadges_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBadges Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBadges execution.
     * @param KhanAcademy_Badges_GetBadges $choreo The choreography object for this execution.
     * @param KhanAcademy_Badges_GetBadges_Inputs|array $inputs (optional) Inputs as KhanAcademy_Badges_GetBadges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Badges_GetBadges_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Badges_GetBadges $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBadges execution.
     *
     * @return KhanAcademy_Badges_GetBadges_Results New results object.
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
     * Wraps results in appropriate results class for this GetBadges execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Badges_GetBadges_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Badges_GetBadges_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBadges Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Badges_GetBadges_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBadges Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Badges_GetBadges_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBadges execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all exercises for a given topic.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_GetTopicExercises extends Temboo_Choreography
{
    /**
     * Retrieves a list of all exercises for a given topic.
     *
     * @param Temboo_Session $session The session that owns this GetTopicExercises Choreo.
     * @return KhanAcademy_Topics_GetTopicExercises New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Topics/GetTopicExercises/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTopicExercises Choreo.
     *
     * @param KhanAcademy_Topics_GetTopicExercises_Inputs|array $inputs (optional) Inputs as KhanAcademy_Topics_GetTopicExercises_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Topics_GetTopicExercises_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Topics_GetTopicExercises_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopicExercises Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Topics_GetTopicExercises_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Topics_GetTopicExercises_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopicExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_GetTopicExercises_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTopicExercises Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Topics_GetTopicExercises_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopicExercises input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Topics_GetTopicExercises_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Topics_GetTopicExercises_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the TopicID input for this GetTopicExercises Choreo.
     *
     * @param string $value (required, string) The ID of the topic.
     * @return KhanAcademy_Topics_GetTopicExercises_Inputs For method chaining.
     */
    public function setTopicID($value)
    {
        return $this->set('TopicID', $value);
    }
}


/**
 * Execution object for the GetTopicExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_GetTopicExercises_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopicExercises Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTopicExercises execution.
     * @param KhanAcademy_Topics_GetTopicExercises $choreo The choreography object for this execution.
     * @param KhanAcademy_Topics_GetTopicExercises_Inputs|array $inputs (optional) Inputs as KhanAcademy_Topics_GetTopicExercises_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Topics_GetTopicExercises_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Topics_GetTopicExercises $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopicExercises execution.
     *
     * @return KhanAcademy_Topics_GetTopicExercises_Results New results object.
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
     * Wraps results in appropriate results class for this GetTopicExercises execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Topics_GetTopicExercises_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Topics_GetTopicExercises_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTopicExercises Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_GetTopicExercises_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTopicExercises Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Topics_GetTopicExercises_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTopicExercises execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user data about all excercises which have the specified excercise as a prerequisite.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExerciseFollowUp extends Temboo_Choreography
{
    /**
     * Retrieves user data about all excercises which have the specified excercise as a prerequisite.
     *
     * @param Temboo_Session $session The session that owns this GetExerciseFollowUp Choreo.
     * @return KhanAcademy_Users_GetExerciseFollowUp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Users/GetExerciseFollowUp/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetExerciseFollowUp Choreo.
     *
     * @param KhanAcademy_Users_GetExerciseFollowUp_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetExerciseFollowUp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Users_GetExerciseFollowUp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetExerciseFollowUp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Users_GetExerciseFollowUp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetExerciseFollowUp Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExerciseFollowUp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetExerciseFollowUp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetExerciseFollowUp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this GetExerciseFollowUp Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetExerciseFollowUp Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Email input for this GetExerciseFollowUp Choreo.
     *
     * @param string $value (optional, string) The email address (coach or student ID) of user. If not provided, defaults to currently logged in user.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ExerciseName input for this GetExerciseFollowUp Choreo.
     *
     * @param string $value (required, string) The exercise for which you want to retrieve follwow up exercises (e.g. "simplifying_fractions").
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function setExerciseName($value)
    {
        return $this->set('ExerciseName', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this GetExerciseFollowUp Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the OAuthToken input for this GetExerciseFollowUp Choreo.
     *
     * @param string $value (required, string) The OAuth Token retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Inputs For method chaining.
     */
    public function setOAuthToken($value)
    {
        return $this->set('OAuthToken', $value);
    }
}


/**
 * Execution object for the GetExerciseFollowUp Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExerciseFollowUp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetExerciseFollowUp Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetExerciseFollowUp execution.
     * @param KhanAcademy_Users_GetExerciseFollowUp $choreo The choreography object for this execution.
     * @param KhanAcademy_Users_GetExerciseFollowUp_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetExerciseFollowUp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Users_GetExerciseFollowUp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetExerciseFollowUp execution.
     *
     * @return KhanAcademy_Users_GetExerciseFollowUp_Results New results object.
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
     * Wraps results in appropriate results class for this GetExerciseFollowUp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Users_GetExerciseFollowUp_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetExerciseFollowUp Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetExerciseFollowUp_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetExerciseFollowUp Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Users_GetExerciseFollowUp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetExerciseFollowUp execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user data about a specified user.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_CurrentUser extends Temboo_Choreography
{
    /**
     * Retrieves user data about a specified user.
     *
     * @param Temboo_Session $session The session that owns this CurrentUser Choreo.
     * @return KhanAcademy_Users_CurrentUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Users/CurrentUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CurrentUser Choreo.
     *
     * @param KhanAcademy_Users_CurrentUser_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_CurrentUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_CurrentUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Users_CurrentUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CurrentUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_CurrentUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Users_CurrentUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CurrentUser Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_CurrentUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CurrentUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_CurrentUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CurrentUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Users_CurrentUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Users_CurrentUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this CurrentUser Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_Users_CurrentUser_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CurrentUser Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_Users_CurrentUser_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Email input for this CurrentUser Choreo.
     *
     * @param string $value (optional, string) The email address (coach or student ID) of user. If not provided, defaults to currently logged in user.
     * @return KhanAcademy_Users_CurrentUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this CurrentUser Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process.
     * @return KhanAcademy_Users_CurrentUser_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the OAuthToken input for this CurrentUser Choreo.
     *
     * @param string $value (required, string) The OAuth Token retrieved during the OAuth process.
     * @return KhanAcademy_Users_CurrentUser_Inputs For method chaining.
     */
    public function setOAuthToken($value)
    {
        return $this->set('OAuthToken', $value);
    }
}


/**
 * Execution object for the CurrentUser Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_CurrentUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CurrentUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this CurrentUser execution.
     * @param KhanAcademy_Users_CurrentUser $choreo The choreography object for this execution.
     * @param KhanAcademy_Users_CurrentUser_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_CurrentUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_CurrentUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Users_CurrentUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CurrentUser execution.
     *
     * @return KhanAcademy_Users_CurrentUser_Results New results object.
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
     * Wraps results in appropriate results class for this CurrentUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Users_CurrentUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Users_CurrentUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CurrentUser Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_CurrentUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CurrentUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Users_CurrentUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CurrentUser execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user log data about a specific video, such as when the log of watching a video was started, how long the session lasted, etc.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetVideoLog extends Temboo_Choreography
{
    /**
     * Retrieves user log data about a specific video, such as when the log of watching a video was started, how long the session lasted, etc.
     *
     * @param Temboo_Session $session The session that owns this GetVideoLog Choreo.
     * @return KhanAcademy_Users_GetVideoLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Users/GetVideoLog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetVideoLog Choreo.
     *
     * @param KhanAcademy_Users_GetVideoLog_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetVideoLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetVideoLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Users_GetVideoLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetVideoLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetVideoLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Users_GetVideoLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetVideoLog Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetVideoLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetVideoLog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Users_GetVideoLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetVideoLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ConsumerKey input for this GetVideoLog Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Khan Academy.
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetVideoLog Choreo.
     *
     * @param string $value (required, string) The OAuth Consumer Secret provided by Khan Academy.
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Email input for this GetVideoLog Choreo.
     *
     * @param string $value (optional, string) The email address (coach or student ID) of user. If not provided, defaults to currently logged in user.
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndTime input for this GetVideoLog Choreo.
     *
     * @param string $value (optional, string) The date/time to end searching for logs in UTC format: YYYY-mm-ddTHH:MM:SS (e.g., 2011-10-18T02:41:53).
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function setEndTime($value)
    {
        return $this->set('EndTime', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this GetVideoLog Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the OAuthToken input for this GetVideoLog Choreo.
     *
     * @param string $value (required, string) The OAuth Token retrieved during the OAuth process.
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function setOAuthToken($value)
    {
        return $this->set('OAuthToken', $value);
    }

    /**
     * Set the value for the StartTime input for this GetVideoLog Choreo.
     *
     * @param string $value (optional, string) The date/time to start searching for logs in UTC format: YYYY-mm-ddTHH:MM:SS (e.g., 2011-10-18T02:41:53).
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function setStartTime($value)
    {
        return $this->set('StartTime', $value);
    }

    /**
     * Set the value for the YouTubeID input for this GetVideoLog Choreo.
     *
     * @param string $value (required, string) The YouTube ID of the video for which you want to retrieve information.
     * @return KhanAcademy_Users_GetVideoLog_Inputs For method chaining.
     */
    public function setYouTubeID($value)
    {
        return $this->set('YouTubeID', $value);
    }
}


/**
 * Execution object for the GetVideoLog Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetVideoLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetVideoLog Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetVideoLog execution.
     * @param KhanAcademy_Users_GetVideoLog $choreo The choreography object for this execution.
     * @param KhanAcademy_Users_GetVideoLog_Inputs|array $inputs (optional) Inputs as KhanAcademy_Users_GetVideoLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Users_GetVideoLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Users_GetVideoLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetVideoLog execution.
     *
     * @return KhanAcademy_Users_GetVideoLog_Results New results object.
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
     * Wraps results in appropriate results class for this GetVideoLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Users_GetVideoLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Users_GetVideoLog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetVideoLog Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Users_GetVideoLog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetVideoLog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Users_GetVideoLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetVideoLog execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the hierarchical organization of all topics in the Khan Academy library.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_TopicTree extends Temboo_Choreography
{
    /**
     * Retrieves the hierarchical organization of all topics in the Khan Academy library.
     *
     * @param Temboo_Session $session The session that owns this TopicTree Choreo.
     * @return KhanAcademy_Topics_TopicTree New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Topics/TopicTree/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopicTree Choreo.
     *
     * @param KhanAcademy_Topics_TopicTree_Inputs|array $inputs (optional) Inputs as KhanAcademy_Topics_TopicTree_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Topics_TopicTree_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Topics_TopicTree_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopicTree Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Topics_TopicTree_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Topics_TopicTree_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopicTree Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_TopicTree_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopicTree Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Topics_TopicTree_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopicTree input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Topics_TopicTree_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Topics_TopicTree_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }
}


/**
 * Execution object for the TopicTree Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_TopicTree_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopicTree Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopicTree execution.
     * @param KhanAcademy_Topics_TopicTree $choreo The choreography object for this execution.
     * @param KhanAcademy_Topics_TopicTree_Inputs|array $inputs (optional) Inputs as KhanAcademy_Topics_TopicTree_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Topics_TopicTree_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Topics_TopicTree $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopicTree execution.
     *
     * @return KhanAcademy_Topics_TopicTree_Results New results object.
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
     * Wraps results in appropriate results class for this TopicTree execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Topics_TopicTree_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Topics_TopicTree_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopicTree Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_TopicTree_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopicTree Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Topics_TopicTree_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopicTree execution.
     *
     * @return string (json) The response from Khan Academy.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves topic data for a given topic, including an abbreviated list of all its sub-topics.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_TopicData extends Temboo_Choreography
{
    /**
     * Retrieves topic data for a given topic, including an abbreviated list of all its sub-topics.
     *
     * @param Temboo_Session $session The session that owns this TopicData Choreo.
     * @return KhanAcademy_Topics_TopicData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/KhanAcademy/Topics/TopicData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopicData Choreo.
     *
     * @param KhanAcademy_Topics_TopicData_Inputs|array $inputs (optional) Inputs as KhanAcademy_Topics_TopicData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Topics_TopicData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new KhanAcademy_Topics_TopicData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopicData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Topics_TopicData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new KhanAcademy_Topics_TopicData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopicData Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_TopicData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopicData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return KhanAcademy_Topics_TopicData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopicData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return KhanAcademy_Topics_TopicData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return KhanAcademy_Topics_TopicData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the TopicID input for this TopicData Choreo.
     *
     * @param string $value (required, string) The ID of the topic.
     * @return KhanAcademy_Topics_TopicData_Inputs For method chaining.
     */
    public function setTopicID($value)
    {
        return $this->set('TopicID', $value);
    }
}


/**
 * Execution object for the TopicData Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_TopicData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopicData Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopicData execution.
     * @param KhanAcademy_Topics_TopicData $choreo The choreography object for this execution.
     * @param KhanAcademy_Topics_TopicData_Inputs|array $inputs (optional) Inputs as KhanAcademy_Topics_TopicData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return KhanAcademy_Topics_TopicData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, KhanAcademy_Topics_TopicData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopicData execution.
     *
     * @return KhanAcademy_Topics_TopicData_Results New results object.
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
     * Wraps results in appropriate results class for this TopicData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return KhanAcademy_Topics_TopicData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new KhanAcademy_Topics_TopicData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopicData Choreo.
 *
 * @package Temboo
 * @subpackage KhanAcademy
 */
class KhanAcademy_Topics_TopicData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopicData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return KhanAcademy_Topics_TopicData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopicData execution.
     *
     * @return string (json) The response from Khan Academy.
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
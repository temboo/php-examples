<?php

/**
 * Temboo PHP SDK Freebase classes
 *
 * Execute Choreographies from the Temboo Freebase bundle.
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
 * @subpackage Freebase
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Generates a thumbnail for an image from the content database to the requested size. 
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Image extends Temboo_Choreography
{
    /**
     * Generates a thumbnail for an image from the content database to the requested size. 
     *
     * @param Temboo_Session $session The session that owns this Image Choreo.
     * @return Freebase_Image New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Freebase/Image/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Image Choreo.
     *
     * @param Freebase_Image_Inputs|array $inputs (optional) Inputs as Freebase_Image_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Freebase_Image_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Freebase_Image_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Image Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Freebase_Image_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Freebase_Image_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Image Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Image_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Image Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Freebase_Image_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Image input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Freebase_Image_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Freebase_Image_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Image Choreo.
     *
     * @param string $value (required, string) The API Key provided by Freebase.
     * @return Freebase_Image_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FallbackID input for this Image Choreo.
     *
     * @param string $value (optional, string) Use this second (fallback) image ID, if the primary ID is not available.
     * @return Freebase_Image_Inputs For method chaining.
     */
    public function setFallbackID($value)
    {
        return $this->set('FallbackID', $value);
    }

    /**
     * Set the value for the ID input for this Image Choreo.
     *
     * @param string $value (required, string) Enter the ID of the entity for which description information will be retrieved. IDs and MIDs can be obtained by running the Search Choreo in this bundle. Example input: /en/bob_dylan
     * @return Freebase_Image_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the MaximumHeight input for this Image Choreo.
     *
     * @param int $value (optional, integer) Enter the desired maximum image height in pixels. Integers must be in the following range: (0 --> 4,096)
     * @return Freebase_Image_Inputs For method chaining.
     */
    public function setMaximumHeight($value)
    {
        return $this->set('MaximumHeight', $value);
    }

    /**
     * Set the value for the MaximumWidth input for this Image Choreo.
     *
     * @param int $value (optional, integer) Enter the desired maximum image width in pixels. Integers must be in the following range: (0 --> 4,096)
     * @return Freebase_Image_Inputs For method chaining.
     */
    public function setMaximumWidth($value)
    {
        return $this->set('MaximumWidth', $value);
    }

    /**
     * Set the value for the Mode input for this Image Choreo.
     *
     * @param string $value (optional, string) Specify the method used to crop or scale images.  Available methods include: fill, fillcrop, fillcropmid, fit.
     * @return Freebase_Image_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Pad input for this Image Choreo.
     *
     * @param bool $value (optional, boolean) Enter 0, or 1 to specify whether the provided image should be padded to the requested dimensions.
     * @return Freebase_Image_Inputs For method chaining.
     */
    public function setPad($value)
    {
        return $this->set('Pad', $value);
    }
}


/**
 * Execution object for the Image Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Image_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Image Choreo.
     *
     * @param Temboo_Session $session The session that owns this Image execution.
     * @param Freebase_Image $choreo The choreography object for this execution.
     * @param Freebase_Image_Inputs|array $inputs (optional) Inputs as Freebase_Image_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Freebase_Image_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Freebase_Image $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Image execution.
     *
     * @return Freebase_Image_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Image execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Freebase_Image_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Freebase_Image_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Image Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Image_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Image Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Freebase_Image_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Image execution.
     *
     * @return string (string) The response from the Freebase Image API returns the thumbnail in base 64-encoded  format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search the Freebase dataset.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Search extends Temboo_Choreography
{
    /**
     * Search the Freebase dataset.
     *
     * @param Temboo_Session $session The session that owns this Search Choreo.
     * @return Freebase_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Freebase/Search/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Search Choreo.
     *
     * @param Freebase_Search_Inputs|array $inputs (optional) Inputs as Freebase_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Freebase_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Freebase_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Freebase_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Freebase_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Freebase_Search_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Search input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Search Choreo.
     *
     * @param string $value (required, string) The API Key provided by Freebase.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Domain input for this Search Choreo.
     *
     * @param string $value (optional, string) Enter a comma separated list of domain IDs.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setDomain($value)
    {
        return $this->set('Domain', $value);
    }

    /**
     * Set the value for the EscapeHTMLResults input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) Specify whether html results are to be escaped or not.  Default is set to: true.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setEscapeHTMLResults($value)
    {
        return $this->set('EscapeHTMLResults', $value);
    }

    /**
     * Set the value for the Exact input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) If set to true, the search query will match only the name and keys exactly. No normalization of any kind will be performed at indexing and query time.Default is set to: false.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setExact($value)
    {
        return $this->set('Exact', $value);
    }

    /**
     * Set the value for the Filter input for this Search Choreo.
     *
     * @param string $value (optional, string) Specify an s-expression to filter search results. For more info, see: http://wiki.freebase.com/wiki/Search_Cookbook
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Indent input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) Specify whether the JSON results should be indented, or not. Enter true, or false. Default: false.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setIndent($value)
    {
        return $this->set('Indent', $value);
    }

    /**
     * Set the value for the Language input for this Search Choreo.
     *
     * @param string $value (optional, string) Specify the language in which the searches will be performed.  Default is set to English: /lang/en
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Limit input for this Search Choreo.
     *
     * @param int $value (optional, integer) Specify the number of results to be retrieved.  Default: 20.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MQLOutput input for this Search Choreo.
     *
     * @param string $value (optional, string) Enter an MQL query to extract entity information.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setMQLOutput($value)
    {
        return $this->set('MQLOutput', $value);
    }

    /**
     * Set the value for the Prefixed input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) Specify whether or not search queries are to match results by name prefix. Default value: false.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setPrefixed($value)
    {
        return $this->set('Prefixed', $value);
    }

    /**
     * Set the value for the Query input for this Search Choreo.
     *
     * @param string $value (required, string) Enter a search query.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Start input for this Search Choreo.
     *
     * @param int $value (optional, integer) Enter a value to page through results.  Default is set to 0.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setStart($value)
    {
        return $this->set('Start', $value);
    }

    /**
     * Set the value for the Type input for this Search Choreo.
     *
     * @param string $value (optional, string) Enter a comma-seperated list of type IDs.
     * @return Freebase_Search_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search Choreo.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Freebase_Search $choreo The choreography object for this execution.
     * @param Freebase_Search_Inputs|array $inputs (optional) Inputs as Freebase_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Freebase_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Freebase_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Freebase_Search_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Search execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Freebase_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Freebase_Search_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Search_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Search Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Freebase_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string The response from the Freebase Search API in JSON format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search the Freebase dataset using the Metaweb query language (MQL).
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_MQLRead extends Temboo_Choreography
{
    /**
     * Search the Freebase dataset using the Metaweb query language (MQL).
     *
     * @param Temboo_Session $session The session that owns this MQLRead Choreo.
     * @return Freebase_MQLRead New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Freebase/MQLRead/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MQLRead Choreo.
     *
     * @param Freebase_MQLRead_Inputs|array $inputs (optional) Inputs as Freebase_MQLRead_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Freebase_MQLRead_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Freebase_MQLRead_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MQLRead Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Freebase_MQLRead_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Freebase_MQLRead_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MQLRead Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_MQLRead_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MQLRead Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Freebase_MQLRead_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MQLRead input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this MQLRead Choreo.
     *
     * @param string $value (required, string) The API Key provided by Freebase.
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AsOfTime input for this MQLRead Choreo.
     *
     * @param string $value (optional, string) Run a query as it would have run at a specific point in time. Timestamps must be entered in the following format: 2007-01-09T22, or 2007-02.
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setAsOfTime($value)
    {
        return $this->set('AsOfTime', $value);
    }

    /**
     * Set the value for the Cost input for this MQLRead Choreo.
     *
     * @param bool $value (optional, boolean) If cost is set to true, a key is returned in the results, indicating the computational cost incurred by lower levels of the service. Default value: false
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setCost($value)
    {
        return $this->set('Cost', $value);
    }

    /**
     * Set the value for the Cursor input for this MQLRead Choreo.
     *
     * @param string $value (optional, string) If set. results can be paged.  See examples at: http://wiki.freebase.com/wiki/MQL_Read_Service
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the EscapeHTMLResults input for this MQLRead Choreo.
     *
     * @param bool $value (optional, boolean) Specify whether html results are to be escaped or not.  Default is set to: true.
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setEscapeHTMLResults($value)
    {
        return $this->set('EscapeHTMLResults', $value);
    }

    /**
     * Set the value for the Indent input for this MQLRead Choreo.
     *
     * @param bool $value (optional, boolean) Specify whether the JSON results should be indented, or not. Enter true, or false. Default: false. Range of values: 0-10.
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setIndent($value)
    {
        return $this->set('Indent', $value);
    }

    /**
     * Set the value for the Language input for this MQLRead Choreo.
     *
     * @param string $value (optional, string) Specify the language in which the searches will be performed.  Multiple languages can be specified. Default is: /lang/en
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Query input for this MQLRead Choreo.
     *
     * @param string $value (required, string) Enter a search query  in a valid MQL JSON format.
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the UniqenessFailure input for this MQLRead Choreo.
     *
     * @param string $value (optional, string) Specify how MQL responds to uniqueness failures. Enter hard, or soft.  Default is set to: hard.
     * @return Freebase_MQLRead_Inputs For method chaining.
     */
    public function setUniqenessFailure($value)
    {
        return $this->set('UniqenessFailure', $value);
    }
}


/**
 * Execution object for the MQLRead Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_MQLRead_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MQLRead Choreo.
     *
     * @param Temboo_Session $session The session that owns this MQLRead execution.
     * @param Freebase_MQLRead $choreo The choreography object for this execution.
     * @param Freebase_MQLRead_Inputs|array $inputs (optional) Inputs as Freebase_MQLRead_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Freebase_MQLRead_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Freebase_MQLRead $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MQLRead execution.
     *
     * @return Freebase_MQLRead_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this MQLRead execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Freebase_MQLRead_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Freebase_MQLRead_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MQLRead Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_MQLRead_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MQLRead Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Freebase_MQLRead_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this MQLRead execution.
     *
     * @return string The response from the Freebase MQL Read API in JSON format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Access Freebase topic and schema descriptions.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Text extends Temboo_Choreography
{
    /**
     * Access Freebase topic and schema descriptions.
     *
     * @param Temboo_Session $session The session that owns this Text Choreo.
     * @return Freebase_Text New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Freebase/Text/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Text Choreo.
     *
     * @param Freebase_Text_Inputs|array $inputs (optional) Inputs as Freebase_Text_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Freebase_Text_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Freebase_Text_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Text Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Freebase_Text_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Freebase_Text_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Text Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Text_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Text Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Freebase_Text_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Text input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Freebase_Text_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Freebase_Text_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Text Choreo.
     *
     * @param string $value (required, string) The API Key provided by Freebase.
     * @return Freebase_Text_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Format input for this Text Choreo.
     *
     * @param bool $value (optional, boolean) Specify the retrieved results format.  Enter, html, plan, or raw. Default is set to: raw
     * @return Freebase_Text_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the ID input for this Text Choreo.
     *
     * @param string $value (required, string) Enter the ID of the entity for which description information will be retrieved. IDs and MIDs can be obtained by running the Search Choreo in this bundle. Example input: /en/bob_dylan
     * @return Freebase_Text_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Language input for this Text Choreo.
     *
     * @param string $value (optional, string) Specify the language in which the searches will be performed. Default is set to English: /lang/en
     * @return Freebase_Text_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the MaximumLength input for this Text Choreo.
     *
     * @param int $value (optional, integer) Enter the max number of characters to return with the rage of 0 - 4,294,967,295. Valid only for plan Format. Default is to: 200
     * @return Freebase_Text_Inputs For method chaining.
     */
    public function setMaximumLength($value)
    {
        return $this->set('MaximumLength', $value);
    }
}


/**
 * Execution object for the Text Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Text_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Text Choreo.
     *
     * @param Temboo_Session $session The session that owns this Text execution.
     * @param Freebase_Text $choreo The choreography object for this execution.
     * @param Freebase_Text_Inputs|array $inputs (optional) Inputs as Freebase_Text_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Freebase_Text_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Freebase_Text $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Text execution.
     *
     * @return Freebase_Text_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Text execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Freebase_Text_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Freebase_Text_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Text Choreo.
 *
 * @package Temboo
 * @subpackage Freebase
 */
class Freebase_Text_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Text Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Freebase_Text_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Text execution.
     *
     * @return string The response from the Freebase Text API in JSON.
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
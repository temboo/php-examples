<?php

/**
 * Temboo PHP SDK ObadMobileMarketing classes
 *
 * Execute Choreographies from the Temboo ObadMobileMarketing bundle.
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
 * @subpackage ObadMobileMarketing
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Transfer a csv file to add records to a specified group.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_AddCSVData extends Temboo_Choreography
{
    /**
     * Transfer a csv file to add records to a specified group.
     *
     * @param Temboo_Session $session The session that owns this AddCSVData Choreo.
     * @return ObadMobileMarketing_AddCSVData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ObadMobileMarketing/AddCSVData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddCSVData Choreo.
     *
     * @param ObadMobileMarketing_AddCSVData_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_AddCSVData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_AddCSVData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ObadMobileMarketing_AddCSVData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddCSVData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_AddCSVData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ObadMobileMarketing_AddCSVData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddCSVData Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_AddCSVData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddCSVData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_AddCSVData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddCSVData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ObadMobileMarketing_AddCSVData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ObadMobileMarketing_AddCSVData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddCSVData Choreo.
     *
     * @param string $value (string) Private Key for 1 unique distributor - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_AddCSVData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ClientID input for this AddCSVData Choreo.
     *
     * @param int $value (integer) Private Key for 1 unique customer to connect with - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_AddCSVData_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the Endpoint input for this AddCSVData Choreo.
     *
     * @param string $value (string) The base URL for the server you want to access (i.e. http://10.10.10.1). Set this to the appropriate host for the demo sandbox or production.
     * @return ObadMobileMarketing_AddCSVData_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the GroupID input for this AddCSVData Choreo.
     *
     * @param int $value (integer) Unique ID for the group you want to update
     * @return ObadMobileMarketing_AddCSVData_Inputs For method chaining.
     */
    public function setGroupID($value)
    {
        return $this->set('GroupID', $value);
    }

    /**
     * Set the value for the Type input for this AddCSVData Choreo.
     *
     * @param string $value (string) Specify the desired item list (i.e. camp, coupon, usergroup, shopgroup, or coupongroup). Defaults to 'shopgroup'.
     * @return ObadMobileMarketing_AddCSVData_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the URLSource input for this AddCSVData Choreo.
     *
     * @param string $value (string) The URL where you are hosting the CSV data (i.e. http://mybucket.s3.amazonaws.com/my_new_users.csv)
     * @return ObadMobileMarketing_AddCSVData_Inputs For method chaining.
     */
    public function setURLSource($value)
    {
        return $this->set('URLSource', $value);
    }
}


/**
 * Execution object for the AddCSVData Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_AddCSVData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddCSVData Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddCSVData execution.
     * @param ObadMobileMarketing_AddCSVData $choreo The choreography object for this execution.
     * @param ObadMobileMarketing_AddCSVData_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_AddCSVData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_AddCSVData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ObadMobileMarketing_AddCSVData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddCSVData execution.
     *
     * @return ObadMobileMarketing_AddCSVData_Results New results object.
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
     * Wraps results in appropriate results class for this AddCSVData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ObadMobileMarketing_AddCSVData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ObadMobileMarketing_AddCSVData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddCSVData Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_AddCSVData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddCSVData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ObadMobileMarketing_AddCSVData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddCSVData execution.
     *
     * @return string (XML) The response from Obad
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to add or remove a coupon from a coupon group.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_CouponGroupData extends Temboo_Choreography
{
    /**
     * Allows you to add or remove a coupon from a coupon group.
     *
     * @param Temboo_Session $session The session that owns this CouponGroupData Choreo.
     * @return ObadMobileMarketing_CouponGroupData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ObadMobileMarketing/CouponGroupData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CouponGroupData Choreo.
     *
     * @param ObadMobileMarketing_CouponGroupData_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_CouponGroupData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_CouponGroupData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ObadMobileMarketing_CouponGroupData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CouponGroupData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_CouponGroupData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ObadMobileMarketing_CouponGroupData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CouponGroupData Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_CouponGroupData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CouponGroupData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_CouponGroupData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CouponGroupData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ObadMobileMarketing_CouponGroupData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ObadMobileMarketing_CouponGroupData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CouponGroupData Choreo.
     *
     * @param string $value (string) Private Key for 1 unique distributor - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_CouponGroupData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ClientID input for this CouponGroupData Choreo.
     *
     * @param int $value (integer) Private Key for 1 unique customer to connect with - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_CouponGroupData_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CouponGroupID input for this CouponGroupData Choreo.
     *
     * @param int $value (integer) The ID of the coupongroup you need to update
     * @return ObadMobileMarketing_CouponGroupData_Inputs For method chaining.
     */
    public function setCouponGroupID($value)
    {
        return $this->set('CouponGroupID', $value);
    }

    /**
     * Set the value for the CouponID input for this CouponGroupData Choreo.
     *
     * @param int $value (integer) The ID of the coupon you need to update
     * @return ObadMobileMarketing_CouponGroupData_Inputs For method chaining.
     */
    public function setCouponID($value)
    {
        return $this->set('CouponID', $value);
    }

    /**
     * Set the value for the Endpoint input for this CouponGroupData Choreo.
     *
     * @param string $value (string) The base URL for the server you want to access (i.e. http://10.10.10.1). Set this to the appropriate host for the demo sandbox or production.
     * @return ObadMobileMarketing_CouponGroupData_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Mode input for this CouponGroupData Choreo.
     *
     * @param bool $value (optional, boolean) Specify 0 for removing or 1 for adding. Defaults to 1.
     * @return ObadMobileMarketing_CouponGroupData_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

}


/**
 * Execution object for the CouponGroupData Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_CouponGroupData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CouponGroupData Choreo.
     *
     * @param Temboo_Session $session The session that owns this CouponGroupData execution.
     * @param ObadMobileMarketing_CouponGroupData $choreo The choreography object for this execution.
     * @param ObadMobileMarketing_CouponGroupData_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_CouponGroupData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_CouponGroupData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ObadMobileMarketing_CouponGroupData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CouponGroupData execution.
     *
     * @return ObadMobileMarketing_CouponGroupData_Results New results object.
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
     * Wraps results in appropriate results class for this CouponGroupData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ObadMobileMarketing_CouponGroupData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ObadMobileMarketing_CouponGroupData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CouponGroupData Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_CouponGroupData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CouponGroupData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ObadMobileMarketing_CouponGroupData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CouponGroupData execution.
     *
     * @return string (XML) The response from Obad
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Transfer an image for updating the coupon or coupon burn.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_ImageCoupon extends Temboo_Choreography
{
    /**
     * Transfer an image for updating the coupon or coupon burn.
     *
     * @param Temboo_Session $session The session that owns this ImageCoupon Choreo.
     * @return ObadMobileMarketing_ImageCoupon New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ObadMobileMarketing/ImageCoupon/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ImageCoupon Choreo.
     *
     * @param ObadMobileMarketing_ImageCoupon_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_ImageCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_ImageCoupon_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ObadMobileMarketing_ImageCoupon_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ImageCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_ImageCoupon_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ObadMobileMarketing_ImageCoupon_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ImageCoupon Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_ImageCoupon_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ImageCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_ImageCoupon_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ImageCoupon input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ObadMobileMarketing_ImageCoupon_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ObadMobileMarketing_ImageCoupon_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ImageCoupon Choreo.
     *
     * @param string $value (string) Private Key for 1 unique distributor - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_ImageCoupon_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ClientID input for this ImageCoupon Choreo.
     *
     * @param int $value (integer) Private Key for 1 unique customer to connect with - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_ImageCoupon_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CouponID input for this ImageCoupon Choreo.
     *
     * @param int $value (integer) The ID of the coupon you want to update
     * @return ObadMobileMarketing_ImageCoupon_Inputs For method chaining.
     */
    public function setCouponID($value)
    {
        return $this->set('CouponID', $value);
    }

    /**
     * Set the value for the Endpoint input for this ImageCoupon Choreo.
     *
     * @param string $value (string) The base URL for the server you want to access (i.e. http://10.10.10.1). Set this to the appropriate host for the demo sandbox or production.
     * @return ObadMobileMarketing_ImageCoupon_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Type input for this ImageCoupon Choreo.
     *
     * @param string $value (optional, string) Specify the desired image type to update (i.e. coupon or couponburn). Defaults to coupon.
     * @return ObadMobileMarketing_ImageCoupon_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the URLSource input for this ImageCoupon Choreo.
     *
     * @param string $value (string) The URL where you are hosting the JPG file (i.e. http://mybucket.s3.amazonaws.com/my_image.jpg)
     * @return ObadMobileMarketing_ImageCoupon_Inputs For method chaining.
     */
    public function setURLSource($value)
    {
        return $this->set('URLSource', $value);
    }
}


/**
 * Execution object for the ImageCoupon Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_ImageCoupon_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ImageCoupon Choreo.
     *
     * @param Temboo_Session $session The session that owns this ImageCoupon execution.
     * @param ObadMobileMarketing_ImageCoupon $choreo The choreography object for this execution.
     * @param ObadMobileMarketing_ImageCoupon_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_ImageCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_ImageCoupon_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ObadMobileMarketing_ImageCoupon $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ImageCoupon execution.
     *
     * @return ObadMobileMarketing_ImageCoupon_Results New results object.
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
     * Wraps results in appropriate results class for this ImageCoupon execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ObadMobileMarketing_ImageCoupon_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ObadMobileMarketing_ImageCoupon_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ImageCoupon Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_ImageCoupon_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ImageCoupon Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ObadMobileMarketing_ImageCoupon_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ImageCoupon execution.
     *
     * @return string The XML response from Obad
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to create a new group or update an existing one.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_EditGroup extends Temboo_Choreography
{
    /**
     * Allows you to create a new group or update an existing one.
     *
     * @param Temboo_Session $session The session that owns this EditGroup Choreo.
     * @return ObadMobileMarketing_EditGroup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ObadMobileMarketing/EditGroup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditGroup Choreo.
     *
     * @param ObadMobileMarketing_EditGroup_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_EditGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_EditGroup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ObadMobileMarketing_EditGroup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_EditGroup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ObadMobileMarketing_EditGroup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditGroup Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_EditGroup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_EditGroup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditGroup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this EditGroup Choreo.
     *
     * @param string $value (string) Private Key for 1 unique distributor - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ClientID input for this EditGroup Choreo.
     *
     * @param int $value (integer) Private Key for 1 unique customer to connect with - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the Description input for this EditGroup Choreo.
     *
     * @param string $value (string) The description of the group
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Endpoint input for this EditGroup Choreo.
     *
     * @param string $value (string) The base URL for the server you want to access (i.e. http://10.10.10.1). Set this to the appropriate host for the demo sandbox or production.
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the GroupID input for this EditGroup Choreo.
     *
     * @param int $value (integer) The id of the group you need to update. In creation mode, leave blank and the id will be returned in the response.
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function setGroupID($value)
    {
        return $this->set('GroupID', $value);
    }

    /**
     * Set the value for the Mode input for this EditGroup Choreo.
     *
     * @param bool $value (optional, boolean) Specify 0 for creating and 1 for updating. Defaults to 0.
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Title input for this EditGroup Choreo.
     *
     * @param string $value (string) The title of the group
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Type input for this EditGroup Choreo.
     *
     * @param string $value (optional, string) The type of group to perform the action on.  Can be usergroup, shopgroup, or coupongroup. Defaults to usergroup.
     * @return ObadMobileMarketing_EditGroup_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

}


/**
 * Execution object for the EditGroup Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_EditGroup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditGroup Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditGroup execution.
     * @param ObadMobileMarketing_EditGroup $choreo The choreography object for this execution.
     * @param ObadMobileMarketing_EditGroup_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_EditGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_EditGroup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ObadMobileMarketing_EditGroup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditGroup execution.
     *
     * @return ObadMobileMarketing_EditGroup_Results New results object.
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
     * Wraps results in appropriate results class for this EditGroup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ObadMobileMarketing_EditGroup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ObadMobileMarketing_EditGroup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditGroup Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_EditGroup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditGroup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ObadMobileMarketing_EditGroup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditGroup execution.
     *
     * @return string (XML) The response from Obad
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Transfer an image for updating the email body image or the wap banner of a campaign.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_ImageCampaign extends Temboo_Choreography
{
    /**
     * Transfer an image for updating the email body image or the wap banner of a campaign.
     *
     * @param Temboo_Session $session The session that owns this ImageCampaign Choreo.
     * @return ObadMobileMarketing_ImageCampaign New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ObadMobileMarketing/ImageCampaign/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ImageCampaign Choreo.
     *
     * @param ObadMobileMarketing_ImageCampaign_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_ImageCampaign_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_ImageCampaign_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ObadMobileMarketing_ImageCampaign_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ImageCampaign Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_ImageCampaign_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ObadMobileMarketing_ImageCampaign_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ImageCampaign Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_ImageCampaign_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ImageCampaign Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_ImageCampaign_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ImageCampaign input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ObadMobileMarketing_ImageCampaign_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ObadMobileMarketing_ImageCampaign_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ImageCampaign Choreo.
     *
     * @param string $value (string) Private Key for 1 unique distributor - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_ImageCampaign_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignID input for this ImageCampaign Choreo.
     *
     * @param int $value (integer) The ID of the campaign you want to update
     * @return ObadMobileMarketing_ImageCampaign_Inputs For method chaining.
     */
    public function setCampaignID($value)
    {
        return $this->set('CampaignID', $value);
    }

    /**
     * Set the value for the ClientID input for this ImageCampaign Choreo.
     *
     * @param int $value (integer) Private Key for 1 unique customer to connect with - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_ImageCampaign_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the Endpoint input for this ImageCampaign Choreo.
     *
     * @param string $value (string) The base URL for the server you want to access (i.e. http://10.10.10.1). Set this to the appropriate host for the demo sandbox or production.
     * @return ObadMobileMarketing_ImageCampaign_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Type input for this ImageCampaign Choreo.
     *
     * @param string $value (optional, string) Specify the desired image type to modify (i.e. mailimage or wapban). Defaults to mailimage.
     * @return ObadMobileMarketing_ImageCampaign_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the URLSource input for this ImageCampaign Choreo.
     *
     * @param string $value (string) The URL where you are hosting the JPG file (i.e. http://mybucket.s3.amazonaws.com/my_image.jpg)
     * @return ObadMobileMarketing_ImageCampaign_Inputs For method chaining.
     */
    public function setURLSource($value)
    {
        return $this->set('URLSource', $value);
    }
}


/**
 * Execution object for the ImageCampaign Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_ImageCampaign_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ImageCampaign Choreo.
     *
     * @param Temboo_Session $session The session that owns this ImageCampaign execution.
     * @param ObadMobileMarketing_ImageCampaign $choreo The choreography object for this execution.
     * @param ObadMobileMarketing_ImageCampaign_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_ImageCampaign_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_ImageCampaign_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ObadMobileMarketing_ImageCampaign $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ImageCampaign execution.
     *
     * @return ObadMobileMarketing_ImageCampaign_Results New results object.
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
     * Wraps results in appropriate results class for this ImageCampaign execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ObadMobileMarketing_ImageCampaign_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ObadMobileMarketing_ImageCampaign_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ImageCampaign Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_ImageCampaign_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ImageCampaign Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ObadMobileMarketing_ImageCampaign_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ImageCampaign execution.
     *
     * @return string (XML) The response from Obad
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to create a new coupon or update an existing one.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_EditCoupon extends Temboo_Choreography
{
    /**
     * Allows you to create a new coupon or update an existing one.
     *
     * @param Temboo_Session $session The session that owns this EditCoupon Choreo.
     * @return ObadMobileMarketing_EditCoupon New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ObadMobileMarketing/EditCoupon/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EditCoupon Choreo.
     *
     * @param ObadMobileMarketing_EditCoupon_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_EditCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_EditCoupon_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ObadMobileMarketing_EditCoupon_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_EditCoupon_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ObadMobileMarketing_EditCoupon_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditCoupon Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_EditCoupon_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EditCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_EditCoupon_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditCoupon input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this EditCoupon Choreo.
     *
     * @param string $value (string) Private Key for 1 unique distributor - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ClientID input for this EditCoupon Choreo.
     *
     * @param int $value (integer) Private Key for 1 unique customer to connect with - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CouponId input for this EditCoupon Choreo.
     *
     * @param int $value (integer) The ID of the coupon you need to update.  In creation mode, leave this blank, and the ID will be returned in the response.
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setCouponId($value)
    {
        return $this->set('CouponId', $value);
    }

    /**
     * Set the value for the Desc1 input for this EditCoupon Choreo.
     *
     * @param string $value (string) Description at the TOP of the coupon
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setDesc1($value)
    {
        return $this->set('Desc1', $value);
    }

    /**
     * Set the value for the Desc2 input for this EditCoupon Choreo.
     *
     * @param string $value (string) Description at the BOTTOM line 1 of the coupon
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setDesc2($value)
    {
        return $this->set('Desc2', $value);
    }

    /**
     * Set the value for the Desc3 input for this EditCoupon Choreo.
     *
     * @param string $value (string) Description of the BOTTOM line 2 of the coupon
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setDesc3($value)
    {
        return $this->set('Desc3', $value);
    }

    /**
     * Set the value for the Endpoint input for this EditCoupon Choreo.
     *
     * @param string $value (string) The base URL for the server you want to access (i.e. http://10.10.10.1). Set this to the appropriate host for the demo sandbox or production.
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the From input for this EditCoupon Choreo.
     *
     * @param string $value (date) The first date that the coupon is available (formatted like YYYY/MM/DD)
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the Mode input for this EditCoupon Choreo.
     *
     * @param bool $value (optional, boolean) Specify the writing mode. Use '0' for creating or '1'  for updating. Defaults to 0.
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Title input for this EditCoupon Choreo.
     *
     * @param string $value (string) The title of the coupon that will be only used for the console
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the To input for this EditCoupon Choreo.
     *
     * @param string $value (date) The final date that the coupon is available (formatted like YYYY/MM/DD)
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the UseOnce input for this EditCoupon Choreo.
     *
     * @param bool $value (optional, boolean) Use '1' for use and burn coupon one time only and '0' for unlimited use and burn. Defaults to 0.
     * @return ObadMobileMarketing_EditCoupon_Inputs For method chaining.
     */
    public function setUseOnce($value)
    {
        return $this->set('UseOnce', $value);
    }
}


/**
 * Execution object for the EditCoupon Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_EditCoupon_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditCoupon Choreo.
     *
     * @param Temboo_Session $session The session that owns this EditCoupon execution.
     * @param ObadMobileMarketing_EditCoupon $choreo The choreography object for this execution.
     * @param ObadMobileMarketing_EditCoupon_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_EditCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_EditCoupon_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ObadMobileMarketing_EditCoupon $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditCoupon execution.
     *
     * @return ObadMobileMarketing_EditCoupon_Results New results object.
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
     * Wraps results in appropriate results class for this EditCoupon execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ObadMobileMarketing_EditCoupon_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ObadMobileMarketing_EditCoupon_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EditCoupon Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_EditCoupon_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EditCoupon Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ObadMobileMarketing_EditCoupon_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EditCoupon execution.
     *
     * @return string (XML) The response from Obad
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generate a CSV file for sending a campaign.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_CampaignSend extends Temboo_Choreography
{
    /**
     * Generate a CSV file for sending a campaign.
     *
     * @param Temboo_Session $session The session that owns this CampaignSend Choreo.
     * @return ObadMobileMarketing_CampaignSend New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ObadMobileMarketing/CampaignSend/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CampaignSend Choreo.
     *
     * @param ObadMobileMarketing_CampaignSend_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_CampaignSend_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_CampaignSend_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ObadMobileMarketing_CampaignSend_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CampaignSend Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_CampaignSend_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ObadMobileMarketing_CampaignSend_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CampaignSend Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_CampaignSend_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CampaignSend Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_CampaignSend_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CampaignSend input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ObadMobileMarketing_CampaignSend_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ObadMobileMarketing_CampaignSend_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CampaignSend Choreo.
     *
     * @param string $value (string) Private Key for 1 unique distributor - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_CampaignSend_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignID input for this CampaignSend Choreo.
     *
     * @param int $value (integer) The ID for the campaign you want to send
     * @return ObadMobileMarketing_CampaignSend_Inputs For method chaining.
     */
    public function setCampaignID($value)
    {
        return $this->set('CampaignID', $value);
    }

    /**
     * Set the value for the ClientID input for this CampaignSend Choreo.
     *
     * @param int $value (integer) Private Key for 1 unique customer to connect with - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_CampaignSend_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the Endpoint input for this CampaignSend Choreo.
     *
     * @param string $value (string) The base URL for the server you want to access (i.e. http://10.10.10.1). Set this to the appropriate host for the demo sandbox or production.
     * @return ObadMobileMarketing_CampaignSend_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Type input for this CampaignSend Choreo.
     *
     * @param string $value (optional, string) The type of campaign you're sending.  Can be sms, mail, or smsmail. Defaults to sms.
     * @return ObadMobileMarketing_CampaignSend_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the CampaignSend Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_CampaignSend_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CampaignSend Choreo.
     *
     * @param Temboo_Session $session The session that owns this CampaignSend execution.
     * @param ObadMobileMarketing_CampaignSend $choreo The choreography object for this execution.
     * @param ObadMobileMarketing_CampaignSend_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_CampaignSend_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_CampaignSend_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ObadMobileMarketing_CampaignSend $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CampaignSend execution.
     *
     * @return ObadMobileMarketing_CampaignSend_Results New results object.
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
     * Wraps results in appropriate results class for this CampaignSend execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ObadMobileMarketing_CampaignSend_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ObadMobileMarketing_CampaignSend_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CampaignSend Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_CampaignSend_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CampaignSend Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ObadMobileMarketing_CampaignSend_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CampaignSend execution.
     *
     * @return string (XML) The response from Obad
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the list and parameters of a specified list type (i.e. campaigns, coupons, user groups, shop groups, or coupons groups).
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_GetList extends Temboo_Choreography
{
    /**
     * Returns the list and parameters of a specified list type (i.e. campaigns, coupons, user groups, shop groups, or coupons groups).
     *
     * @param Temboo_Session $session The session that owns this GetList Choreo.
     * @return ObadMobileMarketing_GetList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ObadMobileMarketing/GetList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetList Choreo.
     *
     * @param ObadMobileMarketing_GetList_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_GetList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ObadMobileMarketing_GetList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_GetList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ObadMobileMarketing_GetList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_GetList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ObadMobileMarketing_GetList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ObadMobileMarketing_GetList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ObadMobileMarketing_GetList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetList Choreo.
     *
     * @param string $value (string) Private Key for 1 unique distributor - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_GetList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ClientID input for this GetList Choreo.
     *
     * @param int $value (integer) Private Key for 1 unique customer to connect with - provided by Obad Mobile Marketing
     * @return ObadMobileMarketing_GetList_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetList Choreo.
     *
     * @param string $value (string) The base URL for the server you want to access (i.e. http://10.10.10.1). Set this to the appropriate host for the demo sandbox or production.
     * @return ObadMobileMarketing_GetList_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the ID input for this GetList Choreo.
     *
     * @param int $value (optional, integer) Unique ID for an item.  Defaults to 0 which returns ALL.
     * @return ObadMobileMarketing_GetList_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Type input for this GetList Choreo.
     *
     * @param string $value (optional, string) Specify the desired item list (i.e. camp, coupon, usergroup, shopgroup, or coupongroup). Defaults to coupon.
     * @return ObadMobileMarketing_GetList_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_GetList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetList execution.
     * @param ObadMobileMarketing_GetList $choreo The choreography object for this execution.
     * @param ObadMobileMarketing_GetList_Inputs|array $inputs (optional) Inputs as ObadMobileMarketing_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ObadMobileMarketing_GetList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ObadMobileMarketing_GetList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetList execution.
     *
     * @return ObadMobileMarketing_GetList_Results New results object.
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
     * Wraps results in appropriate results class for this GetList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ObadMobileMarketing_GetList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ObadMobileMarketing_GetList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage ObadMobileMarketing
 */
class ObadMobileMarketing_GetList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ObadMobileMarketing_GetList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetList execution.
     *
     * @return string (XML) The response from Obad
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
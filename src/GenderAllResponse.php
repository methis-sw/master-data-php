<?php
/**
 * GenderAllResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  METHIS
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * METHIS Master Data
 *
 * Documentation for METHIS Master Data API for centralized master data storage
 *
 * OpenAPI spec version: 1.1.0
 * Contact: info@datamill.solutions
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace METHIS;

use \ArrayAccess;

/**
 * GenderAllResponse Class Doc Comment
 *
 * @category    Class */
 // @description Response of exporting all gender data
/**
 * @package     METHIS
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GenderAllResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GenderAllResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'country_code' => 'string',
        'gender' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'first_name' => 'first_name',
        'country_code' => 'country_code',
        'gender' => 'gender'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'country_code' => 'setCountryCode',
        'gender' => 'setGender'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'country_code' => 'getCountryCode',
        'gender' => 'getGender'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const GENDER_M = 'M';
    const GENDER_F = 'F';
    const GENDER_ = '';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_M,
            self::GENDER_F,
            self::GENDER_,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['first_name'] === null) {
            $invalid_properties[] = "'first_name' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalid_properties[] = "'gender' can't be null";
        }
        $allowed_values = ["M", "F", ""];
        if (!in_array($this->container['gender'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'gender', must be one of 'M', 'F', ''.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['first_name'] === null) {
            return false;
        }
        if ($this->container['gender'] === null) {
            return false;
        }
        $allowed_values = ["M", "F", ""];
        if (!in_array($this->container['gender'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code 2 digit ISO country code or null if the data record isn't country specific.
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender M for man and F for female
     * @return $this
     */
    public function setGender($gender)
    {
        $allowed_values = array('M', 'F', '');
        if ((!in_array($gender, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'gender', must be one of 'M', 'F', ''");
        }
        $this->container['gender'] = $gender;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\METHIS\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\METHIS\ObjectSerializer::sanitizeForSerialization($this));
    }
}

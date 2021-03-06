<?php
/**
 * MovedContactSearchRequest
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
 * MovedContactSearchRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     METHIS
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MovedContactSearchRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MovedContactSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'country_old' => 'string',
        'zip_old' => 'string',
        'street_old' => 'string'
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
        'last_name' => 'last_name',
        'country_old' => 'country_old',
        'zip_old' => 'zip_old',
        'street_old' => 'street_old'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'country_old' => 'setCountryOld',
        'zip_old' => 'setZipOld',
        'street_old' => 'setStreetOld'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'country_old' => 'getCountryOld',
        'zip_old' => 'getZipOld',
        'street_old' => 'getStreetOld'
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
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['country_old'] = isset($data['country_old']) ? $data['country_old'] : null;
        $this->container['zip_old'] = isset($data['zip_old']) ? $data['zip_old'] : null;
        $this->container['street_old'] = isset($data['street_old']) ? $data['street_old'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!is_null($this->container['country_old']) && (strlen($this->container['country_old']) > 2)) {
            $invalid_properties[] = "invalid value for 'country_old', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country_old']) && (strlen($this->container['country_old']) < 2)) {
            $invalid_properties[] = "invalid value for 'country_old', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['zip_old']) && (strlen($this->container['zip_old']) > 20)) {
            $invalid_properties[] = "invalid value for 'zip_old', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['zip_old']) && (strlen($this->container['zip_old']) < 1)) {
            $invalid_properties[] = "invalid value for 'zip_old', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['street_old']) && (strlen($this->container['street_old']) > 100)) {
            $invalid_properties[] = "invalid value for 'street_old', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street_old']) && (strlen($this->container['street_old']) < 1)) {
            $invalid_properties[] = "invalid value for 'street_old', the character length must be bigger than or equal to 1.";
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
        if (strlen($this->container['country_old']) > 2) {
            return false;
        }
        if (strlen($this->container['country_old']) < 2) {
            return false;
        }
        if (strlen($this->container['zip_old']) > 20) {
            return false;
        }
        if (strlen($this->container['zip_old']) < 1) {
            return false;
        }
        if (strlen($this->container['street_old']) > 100) {
            return false;
        }
        if (strlen($this->container['street_old']) < 1) {
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
     * @param string $first_name First name of the contact
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name Last name of the contact
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets country_old
     * @return string
     */
    public function getCountryOld()
    {
        return $this->container['country_old'];
    }

    /**
     * Sets country_old
     * @param string $country_old 2 digit ISO country code
     * @return $this
     */
    public function setCountryOld($country_old)
    {
        if (!is_null($country_old) && (strlen($country_old) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_old when calling MovedContactSearchRequest., must be smaller than or equal to 2.');
        }
        if (!is_null($country_old) && (strlen($country_old) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country_old when calling MovedContactSearchRequest., must be bigger than or equal to 2.');
        }

        $this->container['country_old'] = $country_old;

        return $this;
    }

    /**
     * Gets zip_old
     * @return string
     */
    public function getZipOld()
    {
        return $this->container['zip_old'];
    }

    /**
     * Sets zip_old
     * @param string $zip_old Zip of the old address
     * @return $this
     */
    public function setZipOld($zip_old)
    {
        if (!is_null($zip_old) && (strlen($zip_old) > 20)) {
            throw new \InvalidArgumentException('invalid length for $zip_old when calling MovedContactSearchRequest., must be smaller than or equal to 20.');
        }
        if (!is_null($zip_old) && (strlen($zip_old) < 1)) {
            throw new \InvalidArgumentException('invalid length for $zip_old when calling MovedContactSearchRequest., must be bigger than or equal to 1.');
        }

        $this->container['zip_old'] = $zip_old;

        return $this;
    }

    /**
     * Gets street_old
     * @return string
     */
    public function getStreetOld()
    {
        return $this->container['street_old'];
    }

    /**
     * Sets street_old
     * @param string $street_old Street name without housenumber or any other additions.
     * @return $this
     */
    public function setStreetOld($street_old)
    {
        if (!is_null($street_old) && (strlen($street_old) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street_old when calling MovedContactSearchRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($street_old) && (strlen($street_old) < 1)) {
            throw new \InvalidArgumentException('invalid length for $street_old when calling MovedContactSearchRequest., must be bigger than or equal to 1.');
        }

        $this->container['street_old'] = $street_old;

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

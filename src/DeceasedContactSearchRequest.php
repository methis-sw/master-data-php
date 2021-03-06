<?php
/**
 * DeceasedContactSearchRequest
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
 * DeceasedContactSearchRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     METHIS
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeceasedContactSearchRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DeceasedContactSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'country' => 'string',
        'zip' => 'string',
        'street' => 'string'
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
        'country' => 'country',
        'zip' => 'zip',
        'street' => 'street'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'country' => 'setCountry',
        'zip' => 'setZip',
        'street' => 'setStreet'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'country' => 'getCountry',
        'zip' => 'getZip',
        'street' => 'getStreet'
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 2)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) < 2)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['zip']) && (strlen($this->container['zip']) > 20)) {
            $invalid_properties[] = "invalid value for 'zip', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['zip']) && (strlen($this->container['zip']) < 1)) {
            $invalid_properties[] = "invalid value for 'zip', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['street']) && (strlen($this->container['street']) > 100)) {
            $invalid_properties[] = "invalid value for 'street', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street']) && (strlen($this->container['street']) < 1)) {
            $invalid_properties[] = "invalid value for 'street', the character length must be bigger than or equal to 1.";
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
        if (strlen($this->container['country']) > 2) {
            return false;
        }
        if (strlen($this->container['country']) < 2) {
            return false;
        }
        if (strlen($this->container['zip']) > 20) {
            return false;
        }
        if (strlen($this->container['zip']) < 1) {
            return false;
        }
        if (strlen($this->container['street']) > 100) {
            return false;
        }
        if (strlen($this->container['street']) < 1) {
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
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country 2 digit ISO country code
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling DeceasedContactSearchRequest., must be smaller than or equal to 2.');
        }
        if (!is_null($country) && (strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling DeceasedContactSearchRequest., must be bigger than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets zip
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     * @param string $zip Zip of the contact
     * @return $this
     */
    public function setZip($zip)
    {
        if (!is_null($zip) && (strlen($zip) > 20)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling DeceasedContactSearchRequest., must be smaller than or equal to 20.');
        }
        if (!is_null($zip) && (strlen($zip) < 1)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling DeceasedContactSearchRequest., must be bigger than or equal to 1.');
        }

        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     * @param string $street Street name without housenumber or any other additions.
     * @return $this
     */
    public function setStreet($street)
    {
        if (!is_null($street) && (strlen($street) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street when calling DeceasedContactSearchRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($street) && (strlen($street) < 1)) {
            throw new \InvalidArgumentException('invalid length for $street when calling DeceasedContactSearchRequest., must be bigger than or equal to 1.');
        }

        $this->container['street'] = $street;

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

<?php
/**
 * MovedContactResponse
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
 * MovedContactResponse Class Doc Comment
 *
 * @category    Class */
 // @description Response of found moved contact
/**
 * @package     METHIS
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MovedContactResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MovedContactResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'country_old' => 'string',
        'street_old' => 'string',
        'timestamp' => 'string',
        'gender' => 'string',
        'title' => 'string',
        'title_of_nobility' => 'string',
        'house_number_old' => 'string',
        'house_number_addition_old' => 'string',
        'street_addition_old' => 'string',
        'city_old' => 'string',
        'zip_old' => 'string',
        'country_new' => 'string',
        'zip_new' => 'string',
        'street_new' => 'string',
        'house_number_new' => 'string',
        'house_number_addition_new' => 'string',
        'street_addition_new' => 'string',
        'city_new' => 'string'
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
        'street_old' => 'street_old',
        'timestamp' => 'timestamp',
        'gender' => 'gender',
        'title' => 'title',
        'title_of_nobility' => 'title_of_nobility',
        'house_number_old' => 'house_number_old',
        'house_number_addition_old' => 'house_number_addition_old',
        'street_addition_old' => 'street_addition_old',
        'city_old' => 'city_old',
        'zip_old' => 'zip_old',
        'country_new' => 'country_new',
        'zip_new' => 'zip_new',
        'street_new' => 'street_new',
        'house_number_new' => 'house_number_new',
        'house_number_addition_new' => 'house_number_addition_new',
        'street_addition_new' => 'street_addition_new',
        'city_new' => 'city_new'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'country_old' => 'setCountryOld',
        'street_old' => 'setStreetOld',
        'timestamp' => 'setTimestamp',
        'gender' => 'setGender',
        'title' => 'setTitle',
        'title_of_nobility' => 'setTitleOfNobility',
        'house_number_old' => 'setHouseNumberOld',
        'house_number_addition_old' => 'setHouseNumberAdditionOld',
        'street_addition_old' => 'setStreetAdditionOld',
        'city_old' => 'setCityOld',
        'zip_old' => 'setZipOld',
        'country_new' => 'setCountryNew',
        'zip_new' => 'setZipNew',
        'street_new' => 'setStreetNew',
        'house_number_new' => 'setHouseNumberNew',
        'house_number_addition_new' => 'setHouseNumberAdditionNew',
        'street_addition_new' => 'setStreetAdditionNew',
        'city_new' => 'setCityNew'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'country_old' => 'getCountryOld',
        'street_old' => 'getStreetOld',
        'timestamp' => 'getTimestamp',
        'gender' => 'getGender',
        'title' => 'getTitle',
        'title_of_nobility' => 'getTitleOfNobility',
        'house_number_old' => 'getHouseNumberOld',
        'house_number_addition_old' => 'getHouseNumberAdditionOld',
        'street_addition_old' => 'getStreetAdditionOld',
        'city_old' => 'getCityOld',
        'zip_old' => 'getZipOld',
        'country_new' => 'getCountryNew',
        'zip_new' => 'getZipNew',
        'street_new' => 'getStreetNew',
        'house_number_new' => 'getHouseNumberNew',
        'house_number_addition_new' => 'getHouseNumberAdditionNew',
        'street_addition_new' => 'getStreetAdditionNew',
        'city_new' => 'getCityNew'
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
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['country_old'] = isset($data['country_old']) ? $data['country_old'] : null;
        $this->container['street_old'] = isset($data['street_old']) ? $data['street_old'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['title_of_nobility'] = isset($data['title_of_nobility']) ? $data['title_of_nobility'] : null;
        $this->container['house_number_old'] = isset($data['house_number_old']) ? $data['house_number_old'] : null;
        $this->container['house_number_addition_old'] = isset($data['house_number_addition_old']) ? $data['house_number_addition_old'] : null;
        $this->container['street_addition_old'] = isset($data['street_addition_old']) ? $data['street_addition_old'] : null;
        $this->container['city_old'] = isset($data['city_old']) ? $data['city_old'] : null;
        $this->container['zip_old'] = isset($data['zip_old']) ? $data['zip_old'] : null;
        $this->container['country_new'] = isset($data['country_new']) ? $data['country_new'] : null;
        $this->container['zip_new'] = isset($data['zip_new']) ? $data['zip_new'] : null;
        $this->container['street_new'] = isset($data['street_new']) ? $data['street_new'] : null;
        $this->container['house_number_new'] = isset($data['house_number_new']) ? $data['house_number_new'] : null;
        $this->container['house_number_addition_new'] = isset($data['house_number_addition_new']) ? $data['house_number_addition_new'] : null;
        $this->container['street_addition_new'] = isset($data['street_addition_new']) ? $data['street_addition_new'] : null;
        $this->container['city_new'] = isset($data['city_new']) ? $data['city_new'] : null;
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
        if ($this->container['last_name'] === null) {
            $invalid_properties[] = "'last_name' can't be null";
        }
        if ($this->container['country_old'] === null) {
            $invalid_properties[] = "'country_old' can't be null";
        }
        if ($this->container['street_old'] === null) {
            $invalid_properties[] = "'street_old' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalid_properties[] = "'timestamp' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalid_properties[] = "'gender' can't be null";
        }
        $allowed_values = ["M", "F", ""];
        if (!in_array($this->container['gender'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'gender', must be one of 'M', 'F', ''.";
        }

        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['title_of_nobility'] === null) {
            $invalid_properties[] = "'title_of_nobility' can't be null";
        }
        if ($this->container['house_number_old'] === null) {
            $invalid_properties[] = "'house_number_old' can't be null";
        }
        if ($this->container['house_number_addition_old'] === null) {
            $invalid_properties[] = "'house_number_addition_old' can't be null";
        }
        if ($this->container['street_addition_old'] === null) {
            $invalid_properties[] = "'street_addition_old' can't be null";
        }
        if ($this->container['city_old'] === null) {
            $invalid_properties[] = "'city_old' can't be null";
        }
        if ($this->container['zip_old'] === null) {
            $invalid_properties[] = "'zip_old' can't be null";
        }
        if ($this->container['country_new'] === null) {
            $invalid_properties[] = "'country_new' can't be null";
        }
        if ($this->container['zip_new'] === null) {
            $invalid_properties[] = "'zip_new' can't be null";
        }
        if ($this->container['house_number_new'] === null) {
            $invalid_properties[] = "'house_number_new' can't be null";
        }
        if ($this->container['house_number_addition_new'] === null) {
            $invalid_properties[] = "'house_number_addition_new' can't be null";
        }
        if ($this->container['street_addition_new'] === null) {
            $invalid_properties[] = "'street_addition_new' can't be null";
        }
        if ($this->container['city_new'] === null) {
            $invalid_properties[] = "'city_new' can't be null";
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
        if ($this->container['last_name'] === null) {
            return false;
        }
        if ($this->container['country_old'] === null) {
            return false;
        }
        if ($this->container['street_old'] === null) {
            return false;
        }
        if ($this->container['timestamp'] === null) {
            return false;
        }
        if ($this->container['gender'] === null) {
            return false;
        }
        $allowed_values = ["M", "F", ""];
        if (!in_array($this->container['gender'], $allowed_values)) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['title_of_nobility'] === null) {
            return false;
        }
        if ($this->container['house_number_old'] === null) {
            return false;
        }
        if ($this->container['house_number_addition_old'] === null) {
            return false;
        }
        if ($this->container['street_addition_old'] === null) {
            return false;
        }
        if ($this->container['city_old'] === null) {
            return false;
        }
        if ($this->container['zip_old'] === null) {
            return false;
        }
        if ($this->container['country_new'] === null) {
            return false;
        }
        if ($this->container['zip_new'] === null) {
            return false;
        }
        if ($this->container['house_number_new'] === null) {
            return false;
        }
        if ($this->container['house_number_addition_new'] === null) {
            return false;
        }
        if ($this->container['street_addition_new'] === null) {
            return false;
        }
        if ($this->container['city_new'] === null) {
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
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name
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
     * @param string $country_old 2 digit ISO country code as given in the input
     * @return $this
     */
    public function setCountryOld($country_old)
    {
        $this->container['country_old'] = $country_old;

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
     * @param string $street_old Name of the as input given street
     * @return $this
     */
    public function setStreetOld($street_old)
    {
        $this->container['street_old'] = $street_old;

        return $this;
    }

    /**
     * Gets timestamp
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param string $timestamp Timestamp when the entry has been created
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Academic titles
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_of_nobility
     * @return string
     */
    public function getTitleOfNobility()
    {
        return $this->container['title_of_nobility'];
    }

    /**
     * Sets title_of_nobility
     * @param string $title_of_nobility The title of nibility e.g. King
     * @return $this
     */
    public function setTitleOfNobility($title_of_nobility)
    {
        $this->container['title_of_nobility'] = $title_of_nobility;

        return $this;
    }

    /**
     * Gets house_number_old
     * @return string
     */
    public function getHouseNumberOld()
    {
        return $this->container['house_number_old'];
    }

    /**
     * Sets house_number_old
     * @param string $house_number_old The house number as given as input
     * @return $this
     */
    public function setHouseNumberOld($house_number_old)
    {
        $this->container['house_number_old'] = $house_number_old;

        return $this;
    }

    /**
     * Gets house_number_addition_old
     * @return string
     */
    public function getHouseNumberAdditionOld()
    {
        return $this->container['house_number_addition_old'];
    }

    /**
     * Sets house_number_addition_old
     * @param string $house_number_addition_old The house number addition as given as input
     * @return $this
     */
    public function setHouseNumberAdditionOld($house_number_addition_old)
    {
        $this->container['house_number_addition_old'] = $house_number_addition_old;

        return $this;
    }

    /**
     * Gets street_addition_old
     * @return string
     */
    public function getStreetAdditionOld()
    {
        return $this->container['street_addition_old'];
    }

    /**
     * Sets street_addition_old
     * @param string $street_addition_old Additions to the street name as given as input
     * @return $this
     */
    public function setStreetAdditionOld($street_addition_old)
    {
        $this->container['street_addition_old'] = $street_addition_old;

        return $this;
    }

    /**
     * Gets city_old
     * @return string
     */
    public function getCityOld()
    {
        return $this->container['city_old'];
    }

    /**
     * Sets city_old
     * @param string $city_old The city as given as input
     * @return $this
     */
    public function setCityOld($city_old)
    {
        $this->container['city_old'] = $city_old;

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
     * @param string $zip_old The zip code as given as input
     * @return $this
     */
    public function setZipOld($zip_old)
    {
        $this->container['zip_old'] = $zip_old;

        return $this;
    }

    /**
     * Gets country_new
     * @return string
     */
    public function getCountryNew()
    {
        return $this->container['country_new'];
    }

    /**
     * Sets country_new
     * @param string $country_new The 2 digit ISO country code of the found new address
     * @return $this
     */
    public function setCountryNew($country_new)
    {
        $this->container['country_new'] = $country_new;

        return $this;
    }

    /**
     * Gets zip_new
     * @return string
     */
    public function getZipNew()
    {
        return $this->container['zip_new'];
    }

    /**
     * Sets zip_new
     * @param string $zip_new The zip code of the found new address
     * @return $this
     */
    public function setZipNew($zip_new)
    {
        $this->container['zip_new'] = $zip_new;

        return $this;
    }

    /**
     * Gets street_new
     * @return string
     */
    public function getStreetNew()
    {
        return $this->container['street_new'];
    }

    /**
     * Sets street_new
     * @param string $street_new The street name of the found new address
     * @return $this
     */
    public function setStreetNew($street_new)
    {
        $this->container['street_new'] = $street_new;

        return $this;
    }

    /**
     * Gets house_number_new
     * @return string
     */
    public function getHouseNumberNew()
    {
        return $this->container['house_number_new'];
    }

    /**
     * Sets house_number_new
     * @param string $house_number_new The house number of the found new address without any additions
     * @return $this
     */
    public function setHouseNumberNew($house_number_new)
    {
        $this->container['house_number_new'] = $house_number_new;

        return $this;
    }

    /**
     * Gets house_number_addition_new
     * @return string
     */
    public function getHouseNumberAdditionNew()
    {
        return $this->container['house_number_addition_new'];
    }

    /**
     * Sets house_number_addition_new
     * @param string $house_number_addition_new Optional existing additions to the house number of the new found address
     * @return $this
     */
    public function setHouseNumberAdditionNew($house_number_addition_new)
    {
        $this->container['house_number_addition_new'] = $house_number_addition_new;

        return $this;
    }

    /**
     * Gets street_addition_new
     * @return string
     */
    public function getStreetAdditionNew()
    {
        return $this->container['street_addition_new'];
    }

    /**
     * Sets street_addition_new
     * @param string $street_addition_new Optional existing additions to the street name of the new found address
     * @return $this
     */
    public function setStreetAdditionNew($street_addition_new)
    {
        $this->container['street_addition_new'] = $street_addition_new;

        return $this;
    }

    /**
     * Gets city_new
     * @return string
     */
    public function getCityNew()
    {
        return $this->container['city_new'];
    }

    /**
     * Sets city_new
     * @param string $city_new The city of the new found address
     * @return $this
     */
    public function setCityNew($city_new)
    {
        $this->container['city_new'] = $city_new;

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

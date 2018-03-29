<?php
/**
 * GetCharactersCharacterIdClonesOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.7.6
 * 
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetCharactersCharacterIdClonesOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdClonesOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_clones_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'last_clone_jump_date' => '\DateTime',
        'home_location' => '\Swagger\Client\Model\GetCharactersCharacterIdClonesOkHomeLocation',
        'last_station_change_date' => '\DateTime',
        'jump_clones' => '\Swagger\Client\Model\GetCharactersCharacterIdClonesOkJumpClones[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'last_clone_jump_date' => 'last_clone_jump_date',
        'home_location' => 'home_location',
        'last_station_change_date' => 'last_station_change_date',
        'jump_clones' => 'jump_clones'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'last_clone_jump_date' => 'setLastCloneJumpDate',
        'home_location' => 'setHomeLocation',
        'last_station_change_date' => 'setLastStationChangeDate',
        'jump_clones' => 'setJumpClones'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'last_clone_jump_date' => 'getLastCloneJumpDate',
        'home_location' => 'getHomeLocation',
        'last_station_change_date' => 'getLastStationChangeDate',
        'jump_clones' => 'getJumpClones'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['last_clone_jump_date'] = isset($data['last_clone_jump_date']) ? $data['last_clone_jump_date'] : null;
        $this->container['home_location'] = isset($data['home_location']) ? $data['home_location'] : null;
        $this->container['last_station_change_date'] = isset($data['last_station_change_date']) ? $data['last_station_change_date'] : null;
        $this->container['jump_clones'] = isset($data['jump_clones']) ? $data['jump_clones'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['jump_clones'] === null) {
            $invalid_properties[] = "'jump_clones' can't be null";
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
        if ($this->container['jump_clones'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets last_clone_jump_date
     * @return \DateTime
     */
    public function getLastCloneJumpDate()
    {
        return $this->container['last_clone_jump_date'];
    }

    /**
     * Sets last_clone_jump_date
     * @param \DateTime $last_clone_jump_date last_clone_jump_date string
     * @return $this
     */
    public function setLastCloneJumpDate($last_clone_jump_date)
    {
        $this->container['last_clone_jump_date'] = $last_clone_jump_date;

        return $this;
    }

    /**
     * Gets home_location
     * @return \Swagger\Client\Model\GetCharactersCharacterIdClonesOkHomeLocation
     */
    public function getHomeLocation()
    {
        return $this->container['home_location'];
    }

    /**
     * Sets home_location
     * @param \Swagger\Client\Model\GetCharactersCharacterIdClonesOkHomeLocation $home_location
     * @return $this
     */
    public function setHomeLocation($home_location)
    {
        $this->container['home_location'] = $home_location;

        return $this;
    }

    /**
     * Gets last_station_change_date
     * @return \DateTime
     */
    public function getLastStationChangeDate()
    {
        return $this->container['last_station_change_date'];
    }

    /**
     * Sets last_station_change_date
     * @param \DateTime $last_station_change_date last_station_change_date string
     * @return $this
     */
    public function setLastStationChangeDate($last_station_change_date)
    {
        $this->container['last_station_change_date'] = $last_station_change_date;

        return $this;
    }

    /**
     * Gets jump_clones
     * @return \Swagger\Client\Model\GetCharactersCharacterIdClonesOkJumpClones[]
     */
    public function getJumpClones()
    {
        return $this->container['jump_clones'];
    }

    /**
     * Sets jump_clones
     * @param \Swagger\Client\Model\GetCharactersCharacterIdClonesOkJumpClones[] $jump_clones jump_clones array
     * @return $this
     */
    public function setJumpClones($jump_clones)
    {
        $this->container['jump_clones'] = $jump_clones;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}



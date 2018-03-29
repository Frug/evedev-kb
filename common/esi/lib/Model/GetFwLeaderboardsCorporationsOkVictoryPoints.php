<?php
/**
 * GetFwLeaderboardsCorporationsOkVictoryPoints
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
 * GetFwLeaderboardsCorporationsOkVictoryPoints Class Doc Comment
 *
 * @category    Class */
 // @description Top 10 rankings of corporations by victory points from yesterday, last week and in total
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetFwLeaderboardsCorporationsOkVictoryPoints implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_fw_leaderboards_corporations_ok_victory_points';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'yesterday' => '\Swagger\Client\Model\GetFwLeaderboardsCorporationsOkVictoryPointsYesterday[]',
        'last_week' => '\Swagger\Client\Model\GetFwLeaderboardsCorporationsOkVictoryPointsLastWeek[]',
        'active_total' => '\Swagger\Client\Model\GetFwLeaderboardsCorporationsOkVictoryPointsActiveTotal[]'
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
        'yesterday' => 'yesterday',
        'last_week' => 'last_week',
        'active_total' => 'active_total'
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
        'yesterday' => 'setYesterday',
        'last_week' => 'setLastWeek',
        'active_total' => 'setActiveTotal'
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
        'yesterday' => 'getYesterday',
        'last_week' => 'getLastWeek',
        'active_total' => 'getActiveTotal'
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
        $this->container['yesterday'] = isset($data['yesterday']) ? $data['yesterday'] : null;
        $this->container['last_week'] = isset($data['last_week']) ? $data['last_week'] : null;
        $this->container['active_total'] = isset($data['active_total']) ? $data['active_total'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['yesterday'] === null) {
            $invalid_properties[] = "'yesterday' can't be null";
        }
        if ($this->container['last_week'] === null) {
            $invalid_properties[] = "'last_week' can't be null";
        }
        if ($this->container['active_total'] === null) {
            $invalid_properties[] = "'active_total' can't be null";
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
        if ($this->container['yesterday'] === null) {
            return false;
        }
        if ($this->container['last_week'] === null) {
            return false;
        }
        if ($this->container['active_total'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets yesterday
     * @return \Swagger\Client\Model\GetFwLeaderboardsCorporationsOkVictoryPointsYesterday[]
     */
    public function getYesterday()
    {
        return $this->container['yesterday'];
    }

    /**
     * Sets yesterday
     * @param \Swagger\Client\Model\GetFwLeaderboardsCorporationsOkVictoryPointsYesterday[] $yesterday Top 10 ranking of corporations by victory points in the past day
     * @return $this
     */
    public function setYesterday($yesterday)
    {
        $this->container['yesterday'] = $yesterday;

        return $this;
    }

    /**
     * Gets last_week
     * @return \Swagger\Client\Model\GetFwLeaderboardsCorporationsOkVictoryPointsLastWeek[]
     */
    public function getLastWeek()
    {
        return $this->container['last_week'];
    }

    /**
     * Sets last_week
     * @param \Swagger\Client\Model\GetFwLeaderboardsCorporationsOkVictoryPointsLastWeek[] $last_week Top 10 ranking of corporations by victory points in the past week
     * @return $this
     */
    public function setLastWeek($last_week)
    {
        $this->container['last_week'] = $last_week;

        return $this;
    }

    /**
     * Gets active_total
     * @return \Swagger\Client\Model\GetFwLeaderboardsCorporationsOkVictoryPointsActiveTotal[]
     */
    public function getActiveTotal()
    {
        return $this->container['active_total'];
    }

    /**
     * Sets active_total
     * @param \Swagger\Client\Model\GetFwLeaderboardsCorporationsOkVictoryPointsActiveTotal[] $active_total Top 10 ranking of corporations active in faction warfare by total victory points. A corporation is considered \"active\" if they have participated in faction warfare in the past 14 days.
     * @return $this
     */
    public function setActiveTotal($active_total)
    {
        $this->container['active_total'] = $active_total;

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



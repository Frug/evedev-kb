<?php
/**
 * GetFleetsFleetIdMembers200Ok
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
 * GetFleetsFleetIdMembers200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetFleetsFleetIdMembers200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_fleets_fleet_id_members_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'character_id' => 'int',
        'ship_type_id' => 'int',
        'wing_id' => 'int',
        'squad_id' => 'int',
        'role' => 'string',
        'role_name' => 'string',
        'join_time' => '\DateTime',
        'takes_fleet_warp' => 'bool',
        'solar_system_id' => 'int',
        'station_id' => 'int'
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
        'character_id' => 'character_id',
        'ship_type_id' => 'ship_type_id',
        'wing_id' => 'wing_id',
        'squad_id' => 'squad_id',
        'role' => 'role',
        'role_name' => 'role_name',
        'join_time' => 'join_time',
        'takes_fleet_warp' => 'takes_fleet_warp',
        'solar_system_id' => 'solar_system_id',
        'station_id' => 'station_id'
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
        'character_id' => 'setCharacterId',
        'ship_type_id' => 'setShipTypeId',
        'wing_id' => 'setWingId',
        'squad_id' => 'setSquadId',
        'role' => 'setRole',
        'role_name' => 'setRoleName',
        'join_time' => 'setJoinTime',
        'takes_fleet_warp' => 'setTakesFleetWarp',
        'solar_system_id' => 'setSolarSystemId',
        'station_id' => 'setStationId'
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
        'character_id' => 'getCharacterId',
        'ship_type_id' => 'getShipTypeId',
        'wing_id' => 'getWingId',
        'squad_id' => 'getSquadId',
        'role' => 'getRole',
        'role_name' => 'getRoleName',
        'join_time' => 'getJoinTime',
        'takes_fleet_warp' => 'getTakesFleetWarp',
        'solar_system_id' => 'getSolarSystemId',
        'station_id' => 'getStationId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ROLE_FLEET_COMMANDER = 'fleet_commander';
    const ROLE_WING_COMMANDER = 'wing_commander';
    const ROLE_SQUAD_COMMANDER = 'squad_commander';
    const ROLE_SQUAD_MEMBER = 'squad_member';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_FLEET_COMMANDER,
            self::ROLE_WING_COMMANDER,
            self::ROLE_SQUAD_COMMANDER,
            self::ROLE_SQUAD_MEMBER,
        ];
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
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['ship_type_id'] = isset($data['ship_type_id']) ? $data['ship_type_id'] : null;
        $this->container['wing_id'] = isset($data['wing_id']) ? $data['wing_id'] : null;
        $this->container['squad_id'] = isset($data['squad_id']) ? $data['squad_id'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['role_name'] = isset($data['role_name']) ? $data['role_name'] : null;
        $this->container['join_time'] = isset($data['join_time']) ? $data['join_time'] : null;
        $this->container['takes_fleet_warp'] = isset($data['takes_fleet_warp']) ? $data['takes_fleet_warp'] : null;
        $this->container['solar_system_id'] = isset($data['solar_system_id']) ? $data['solar_system_id'] : null;
        $this->container['station_id'] = isset($data['station_id']) ? $data['station_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['character_id'] === null) {
            $invalid_properties[] = "'character_id' can't be null";
        }
        if ($this->container['ship_type_id'] === null) {
            $invalid_properties[] = "'ship_type_id' can't be null";
        }
        if ($this->container['wing_id'] === null) {
            $invalid_properties[] = "'wing_id' can't be null";
        }
        if ($this->container['squad_id'] === null) {
            $invalid_properties[] = "'squad_id' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalid_properties[] = "'role' can't be null";
        }
        $allowed_values = array("fleet_commander", "wing_commander", "squad_commander", "squad_member");
        if (!in_array($this->container['role'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'role', must be one of #{allowed_values}.";
        }

        if ($this->container['role_name'] === null) {
            $invalid_properties[] = "'role_name' can't be null";
        }
        if ($this->container['join_time'] === null) {
            $invalid_properties[] = "'join_time' can't be null";
        }
        if ($this->container['takes_fleet_warp'] === null) {
            $invalid_properties[] = "'takes_fleet_warp' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalid_properties[] = "'solar_system_id' can't be null";
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
        if ($this->container['character_id'] === null) {
            return false;
        }
        if ($this->container['ship_type_id'] === null) {
            return false;
        }
        if ($this->container['wing_id'] === null) {
            return false;
        }
        if ($this->container['squad_id'] === null) {
            return false;
        }
        if ($this->container['role'] === null) {
            return false;
        }
        $allowed_values = array("fleet_commander", "wing_commander", "squad_commander", "squad_member");
        if (!in_array($this->container['role'], $allowed_values)) {
            return false;
        }
        if ($this->container['role_name'] === null) {
            return false;
        }
        if ($this->container['join_time'] === null) {
            return false;
        }
        if ($this->container['takes_fleet_warp'] === null) {
            return false;
        }
        if ($this->container['solar_system_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets character_id
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     * @param int $character_id character_id integer
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets ship_type_id
     * @return int
     */
    public function getShipTypeId()
    {
        return $this->container['ship_type_id'];
    }

    /**
     * Sets ship_type_id
     * @param int $ship_type_id ship_type_id integer
     * @return $this
     */
    public function setShipTypeId($ship_type_id)
    {
        $this->container['ship_type_id'] = $ship_type_id;

        return $this;
    }

    /**
     * Gets wing_id
     * @return int
     */
    public function getWingId()
    {
        return $this->container['wing_id'];
    }

    /**
     * Sets wing_id
     * @param int $wing_id ID of the wing the member is in. If not applicable, will be set to -1
     * @return $this
     */
    public function setWingId($wing_id)
    {
        $this->container['wing_id'] = $wing_id;

        return $this;
    }

    /**
     * Gets squad_id
     * @return int
     */
    public function getSquadId()
    {
        return $this->container['squad_id'];
    }

    /**
     * Sets squad_id
     * @param int $squad_id ID of the squad the member is in. If not applicable, will be set to -1
     * @return $this
     */
    public function setSquadId($squad_id)
    {
        $this->container['squad_id'] = $squad_id;

        return $this;
    }

    /**
     * Gets role
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param string $role Member’s role in fleet
     * @return $this
     */
    public function setRole($role)
    {
        $allowed_values = array('fleet_commander', 'wing_commander', 'squad_commander', 'squad_member');
        if (!in_array($role, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'role', must be one of 'fleet_commander', 'wing_commander', 'squad_commander', 'squad_member'");
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets role_name
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     * @param string $role_name Localized role names
     * @return $this
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

        return $this;
    }

    /**
     * Gets join_time
     * @return \DateTime
     */
    public function getJoinTime()
    {
        return $this->container['join_time'];
    }

    /**
     * Sets join_time
     * @param \DateTime $join_time join_time string
     * @return $this
     */
    public function setJoinTime($join_time)
    {
        $this->container['join_time'] = $join_time;

        return $this;
    }

    /**
     * Gets takes_fleet_warp
     * @return bool
     */
    public function getTakesFleetWarp()
    {
        return $this->container['takes_fleet_warp'];
    }

    /**
     * Sets takes_fleet_warp
     * @param bool $takes_fleet_warp Whether the member take fleet warps
     * @return $this
     */
    public function setTakesFleetWarp($takes_fleet_warp)
    {
        $this->container['takes_fleet_warp'] = $takes_fleet_warp;

        return $this;
    }

    /**
     * Gets solar_system_id
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     * @param int $solar_system_id Solar system the member is located in
     * @return $this
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets station_id
     * @return int
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     * @param int $station_id Station in which the member is docked in, if applicable
     * @return $this
     */
    public function setStationId($station_id)
    {
        $this->container['station_id'] = $station_id;

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



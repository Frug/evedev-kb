<?php
/**
 * GetCorporationsCorporationIdShareholders200Ok
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
 * GetCorporationsCorporationIdShareholders200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdShareholders200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_shareholders_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'shareholder_id' => 'int',
        'shareholder_type' => 'string',
        'share_count' => 'int'
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
        'shareholder_id' => 'shareholder_id',
        'shareholder_type' => 'shareholder_type',
        'share_count' => 'share_count'
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
        'shareholder_id' => 'setShareholderId',
        'shareholder_type' => 'setShareholderType',
        'share_count' => 'setShareCount'
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
        'shareholder_id' => 'getShareholderId',
        'shareholder_type' => 'getShareholderType',
        'share_count' => 'getShareCount'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const SHAREHOLDER_TYPE_CHARACTER = 'character';
    const SHAREHOLDER_TYPE_CORPORATION = 'corporation';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getShareholderTypeAllowableValues()
    {
        return [
            self::SHAREHOLDER_TYPE_CHARACTER,
            self::SHAREHOLDER_TYPE_CORPORATION,
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
        $this->container['shareholder_id'] = isset($data['shareholder_id']) ? $data['shareholder_id'] : null;
        $this->container['shareholder_type'] = isset($data['shareholder_type']) ? $data['shareholder_type'] : null;
        $this->container['share_count'] = isset($data['share_count']) ? $data['share_count'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['shareholder_id'] === null) {
            $invalid_properties[] = "'shareholder_id' can't be null";
        }
        if ($this->container['shareholder_type'] === null) {
            $invalid_properties[] = "'shareholder_type' can't be null";
        }
        $allowed_values = array("character", "corporation");
        if (!in_array($this->container['shareholder_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'shareholder_type', must be one of #{allowed_values}.";
        }

        if ($this->container['share_count'] === null) {
            $invalid_properties[] = "'share_count' can't be null";
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
        if ($this->container['shareholder_id'] === null) {
            return false;
        }
        if ($this->container['shareholder_type'] === null) {
            return false;
        }
        $allowed_values = array("character", "corporation");
        if (!in_array($this->container['shareholder_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['share_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets shareholder_id
     * @return int
     */
    public function getShareholderId()
    {
        return $this->container['shareholder_id'];
    }

    /**
     * Sets shareholder_id
     * @param int $shareholder_id shareholder_id integer
     * @return $this
     */
    public function setShareholderId($shareholder_id)
    {
        $this->container['shareholder_id'] = $shareholder_id;

        return $this;
    }

    /**
     * Gets shareholder_type
     * @return string
     */
    public function getShareholderType()
    {
        return $this->container['shareholder_type'];
    }

    /**
     * Sets shareholder_type
     * @param string $shareholder_type shareholder_type string
     * @return $this
     */
    public function setShareholderType($shareholder_type)
    {
        $allowed_values = array('character', 'corporation');
        if (!in_array($shareholder_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'shareholder_type', must be one of 'character', 'corporation'");
        }
        $this->container['shareholder_type'] = $shareholder_type;

        return $this;
    }

    /**
     * Gets share_count
     * @return int
     */
    public function getShareCount()
    {
        return $this->container['share_count'];
    }

    /**
     * Sets share_count
     * @param int $share_count share_count integer
     * @return $this
     */
    public function setShareCount($share_count)
    {
        $this->container['share_count'] = $share_count;

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



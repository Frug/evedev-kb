<?php
/**
 * GetCharactersCharacterIdContracts200Ok
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
 * GetCharactersCharacterIdContracts200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdContracts200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_contracts_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'contract_id' => 'int',
        'issuer_id' => 'int',
        'issuer_corporation_id' => 'int',
        'assignee_id' => 'int',
        'acceptor_id' => 'int',
        'start_location_id' => 'int',
        'end_location_id' => 'int',
        'type' => 'string',
        'status' => 'string',
        'title' => 'string',
        'for_corporation' => 'bool',
        'availability' => 'string',
        'date_issued' => '\DateTime',
        'date_expired' => '\DateTime',
        'date_accepted' => '\DateTime',
        'days_to_complete' => 'int',
        'date_completed' => '\DateTime',
        'price' => 'double',
        'reward' => 'double',
        'collateral' => 'double',
        'buyout' => 'double',
        'volume' => 'double'
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
        'contract_id' => 'contract_id',
        'issuer_id' => 'issuer_id',
        'issuer_corporation_id' => 'issuer_corporation_id',
        'assignee_id' => 'assignee_id',
        'acceptor_id' => 'acceptor_id',
        'start_location_id' => 'start_location_id',
        'end_location_id' => 'end_location_id',
        'type' => 'type',
        'status' => 'status',
        'title' => 'title',
        'for_corporation' => 'for_corporation',
        'availability' => 'availability',
        'date_issued' => 'date_issued',
        'date_expired' => 'date_expired',
        'date_accepted' => 'date_accepted',
        'days_to_complete' => 'days_to_complete',
        'date_completed' => 'date_completed',
        'price' => 'price',
        'reward' => 'reward',
        'collateral' => 'collateral',
        'buyout' => 'buyout',
        'volume' => 'volume'
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
        'contract_id' => 'setContractId',
        'issuer_id' => 'setIssuerId',
        'issuer_corporation_id' => 'setIssuerCorporationId',
        'assignee_id' => 'setAssigneeId',
        'acceptor_id' => 'setAcceptorId',
        'start_location_id' => 'setStartLocationId',
        'end_location_id' => 'setEndLocationId',
        'type' => 'setType',
        'status' => 'setStatus',
        'title' => 'setTitle',
        'for_corporation' => 'setForCorporation',
        'availability' => 'setAvailability',
        'date_issued' => 'setDateIssued',
        'date_expired' => 'setDateExpired',
        'date_accepted' => 'setDateAccepted',
        'days_to_complete' => 'setDaysToComplete',
        'date_completed' => 'setDateCompleted',
        'price' => 'setPrice',
        'reward' => 'setReward',
        'collateral' => 'setCollateral',
        'buyout' => 'setBuyout',
        'volume' => 'setVolume'
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
        'contract_id' => 'getContractId',
        'issuer_id' => 'getIssuerId',
        'issuer_corporation_id' => 'getIssuerCorporationId',
        'assignee_id' => 'getAssigneeId',
        'acceptor_id' => 'getAcceptorId',
        'start_location_id' => 'getStartLocationId',
        'end_location_id' => 'getEndLocationId',
        'type' => 'getType',
        'status' => 'getStatus',
        'title' => 'getTitle',
        'for_corporation' => 'getForCorporation',
        'availability' => 'getAvailability',
        'date_issued' => 'getDateIssued',
        'date_expired' => 'getDateExpired',
        'date_accepted' => 'getDateAccepted',
        'days_to_complete' => 'getDaysToComplete',
        'date_completed' => 'getDateCompleted',
        'price' => 'getPrice',
        'reward' => 'getReward',
        'collateral' => 'getCollateral',
        'buyout' => 'getBuyout',
        'volume' => 'getVolume'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_UNKNOWN = 'unknown';
    const TYPE_ITEM_EXCHANGE = 'item_exchange';
    const TYPE_AUCTION = 'auction';
    const TYPE_COURIER = 'courier';
    const TYPE_LOAN = 'loan';
    const STATUS_OUTSTANDING = 'outstanding';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_FINISHED_ISSUER = 'finished_issuer';
    const STATUS_FINISHED_CONTRACTOR = 'finished_contractor';
    const STATUS_FINISHED = 'finished';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_REJECTED = 'rejected';
    const STATUS_FAILED = 'failed';
    const STATUS_DELETED = 'deleted';
    const STATUS_REVERSED = 'reversed';
    const AVAILABILITY_PUBLIC = 'public';
    const AVAILABILITY_PERSONAL = 'personal';
    const AVAILABILITY_CORPORATION = 'corporation';
    const AVAILABILITY_ALLIANCE = 'alliance';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_ITEM_EXCHANGE,
            self::TYPE_AUCTION,
            self::TYPE_COURIER,
            self::TYPE_LOAN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OUTSTANDING,
            self::STATUS_IN_PROGRESS,
            self::STATUS_FINISHED_ISSUER,
            self::STATUS_FINISHED_CONTRACTOR,
            self::STATUS_FINISHED,
            self::STATUS_CANCELLED,
            self::STATUS_REJECTED,
            self::STATUS_FAILED,
            self::STATUS_DELETED,
            self::STATUS_REVERSED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAvailabilityAllowableValues()
    {
        return [
            self::AVAILABILITY_PUBLIC,
            self::AVAILABILITY_PERSONAL,
            self::AVAILABILITY_CORPORATION,
            self::AVAILABILITY_ALLIANCE,
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
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['issuer_id'] = isset($data['issuer_id']) ? $data['issuer_id'] : null;
        $this->container['issuer_corporation_id'] = isset($data['issuer_corporation_id']) ? $data['issuer_corporation_id'] : null;
        $this->container['assignee_id'] = isset($data['assignee_id']) ? $data['assignee_id'] : null;
        $this->container['acceptor_id'] = isset($data['acceptor_id']) ? $data['acceptor_id'] : null;
        $this->container['start_location_id'] = isset($data['start_location_id']) ? $data['start_location_id'] : null;
        $this->container['end_location_id'] = isset($data['end_location_id']) ? $data['end_location_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['for_corporation'] = isset($data['for_corporation']) ? $data['for_corporation'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['date_issued'] = isset($data['date_issued']) ? $data['date_issued'] : null;
        $this->container['date_expired'] = isset($data['date_expired']) ? $data['date_expired'] : null;
        $this->container['date_accepted'] = isset($data['date_accepted']) ? $data['date_accepted'] : null;
        $this->container['days_to_complete'] = isset($data['days_to_complete']) ? $data['days_to_complete'] : null;
        $this->container['date_completed'] = isset($data['date_completed']) ? $data['date_completed'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['reward'] = isset($data['reward']) ? $data['reward'] : null;
        $this->container['collateral'] = isset($data['collateral']) ? $data['collateral'] : null;
        $this->container['buyout'] = isset($data['buyout']) ? $data['buyout'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['contract_id'] === null) {
            $invalid_properties[] = "'contract_id' can't be null";
        }
        if ($this->container['issuer_id'] === null) {
            $invalid_properties[] = "'issuer_id' can't be null";
        }
        if ($this->container['issuer_corporation_id'] === null) {
            $invalid_properties[] = "'issuer_corporation_id' can't be null";
        }
        if ($this->container['assignee_id'] === null) {
            $invalid_properties[] = "'assignee_id' can't be null";
        }
        if ($this->container['acceptor_id'] === null) {
            $invalid_properties[] = "'acceptor_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = array("unknown", "item_exchange", "auction", "courier", "loan");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = array("outstanding", "in_progress", "finished_issuer", "finished_contractor", "finished", "cancelled", "rejected", "failed", "deleted", "reversed");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        if ($this->container['for_corporation'] === null) {
            $invalid_properties[] = "'for_corporation' can't be null";
        }
        if ($this->container['availability'] === null) {
            $invalid_properties[] = "'availability' can't be null";
        }
        $allowed_values = array("public", "personal", "corporation", "alliance");
        if (!in_array($this->container['availability'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'availability', must be one of #{allowed_values}.";
        }

        if ($this->container['date_issued'] === null) {
            $invalid_properties[] = "'date_issued' can't be null";
        }
        if ($this->container['date_expired'] === null) {
            $invalid_properties[] = "'date_expired' can't be null";
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
        if ($this->container['contract_id'] === null) {
            return false;
        }
        if ($this->container['issuer_id'] === null) {
            return false;
        }
        if ($this->container['issuer_corporation_id'] === null) {
            return false;
        }
        if ($this->container['assignee_id'] === null) {
            return false;
        }
        if ($this->container['acceptor_id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = array("unknown", "item_exchange", "auction", "courier", "loan");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = array("outstanding", "in_progress", "finished_issuer", "finished_contractor", "finished", "cancelled", "rejected", "failed", "deleted", "reversed");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['for_corporation'] === null) {
            return false;
        }
        if ($this->container['availability'] === null) {
            return false;
        }
        $allowed_values = array("public", "personal", "corporation", "alliance");
        if (!in_array($this->container['availability'], $allowed_values)) {
            return false;
        }
        if ($this->container['date_issued'] === null) {
            return false;
        }
        if ($this->container['date_expired'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets contract_id
     * @return int
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     * @param int $contract_id contract_id integer
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets issuer_id
     * @return int
     */
    public function getIssuerId()
    {
        return $this->container['issuer_id'];
    }

    /**
     * Sets issuer_id
     * @param int $issuer_id Character ID for the issuer
     * @return $this
     */
    public function setIssuerId($issuer_id)
    {
        $this->container['issuer_id'] = $issuer_id;

        return $this;
    }

    /**
     * Gets issuer_corporation_id
     * @return int
     */
    public function getIssuerCorporationId()
    {
        return $this->container['issuer_corporation_id'];
    }

    /**
     * Sets issuer_corporation_id
     * @param int $issuer_corporation_id Character's corporation ID for the issuer
     * @return $this
     */
    public function setIssuerCorporationId($issuer_corporation_id)
    {
        $this->container['issuer_corporation_id'] = $issuer_corporation_id;

        return $this;
    }

    /**
     * Gets assignee_id
     * @return int
     */
    public function getAssigneeId()
    {
        return $this->container['assignee_id'];
    }

    /**
     * Sets assignee_id
     * @param int $assignee_id ID to whom the contract is assigned, can be corporation or character ID
     * @return $this
     */
    public function setAssigneeId($assignee_id)
    {
        $this->container['assignee_id'] = $assignee_id;

        return $this;
    }

    /**
     * Gets acceptor_id
     * @return int
     */
    public function getAcceptorId()
    {
        return $this->container['acceptor_id'];
    }

    /**
     * Sets acceptor_id
     * @param int $acceptor_id Who will accept the contract
     * @return $this
     */
    public function setAcceptorId($acceptor_id)
    {
        $this->container['acceptor_id'] = $acceptor_id;

        return $this;
    }

    /**
     * Gets start_location_id
     * @return int
     */
    public function getStartLocationId()
    {
        return $this->container['start_location_id'];
    }

    /**
     * Sets start_location_id
     * @param int $start_location_id Start location ID (for Couriers contract)
     * @return $this
     */
    public function setStartLocationId($start_location_id)
    {
        $this->container['start_location_id'] = $start_location_id;

        return $this;
    }

    /**
     * Gets end_location_id
     * @return int
     */
    public function getEndLocationId()
    {
        return $this->container['end_location_id'];
    }

    /**
     * Sets end_location_id
     * @param int $end_location_id End location ID (for Couriers contract)
     * @return $this
     */
    public function setEndLocationId($end_location_id)
    {
        $this->container['end_location_id'] = $end_location_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of the contract
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('unknown', 'item_exchange', 'auction', 'courier', 'loan');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'unknown', 'item_exchange', 'auction', 'courier', 'loan'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the the contract
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('outstanding', 'in_progress', 'finished_issuer', 'finished_contractor', 'finished', 'cancelled', 'rejected', 'failed', 'deleted', 'reversed');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'outstanding', 'in_progress', 'finished_issuer', 'finished_contractor', 'finished', 'cancelled', 'rejected', 'failed', 'deleted', 'reversed'");
        }
        $this->container['status'] = $status;

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
     * @param string $title Title of the contract
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets for_corporation
     * @return bool
     */
    public function getForCorporation()
    {
        return $this->container['for_corporation'];
    }

    /**
     * Sets for_corporation
     * @param bool $for_corporation true if the contract was issued on behalf of the issuer's corporation
     * @return $this
     */
    public function setForCorporation($for_corporation)
    {
        $this->container['for_corporation'] = $for_corporation;

        return $this;
    }

    /**
     * Gets availability
     * @return string
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     * @param string $availability To whom the contract is available
     * @return $this
     */
    public function setAvailability($availability)
    {
        $allowed_values = array('public', 'personal', 'corporation', 'alliance');
        if (!in_array($availability, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'availability', must be one of 'public', 'personal', 'corporation', 'alliance'");
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets date_issued
     * @return \DateTime
     */
    public function getDateIssued()
    {
        return $this->container['date_issued'];
    }

    /**
     * Sets date_issued
     * @param \DateTime $date_issued Сreation date of the contract
     * @return $this
     */
    public function setDateIssued($date_issued)
    {
        $this->container['date_issued'] = $date_issued;

        return $this;
    }

    /**
     * Gets date_expired
     * @return \DateTime
     */
    public function getDateExpired()
    {
        return $this->container['date_expired'];
    }

    /**
     * Sets date_expired
     * @param \DateTime $date_expired Expiration date of the contract
     * @return $this
     */
    public function setDateExpired($date_expired)
    {
        $this->container['date_expired'] = $date_expired;

        return $this;
    }

    /**
     * Gets date_accepted
     * @return \DateTime
     */
    public function getDateAccepted()
    {
        return $this->container['date_accepted'];
    }

    /**
     * Sets date_accepted
     * @param \DateTime $date_accepted Date of confirmation of contract
     * @return $this
     */
    public function setDateAccepted($date_accepted)
    {
        $this->container['date_accepted'] = $date_accepted;

        return $this;
    }

    /**
     * Gets days_to_complete
     * @return int
     */
    public function getDaysToComplete()
    {
        return $this->container['days_to_complete'];
    }

    /**
     * Sets days_to_complete
     * @param int $days_to_complete Number of days to perform the contract
     * @return $this
     */
    public function setDaysToComplete($days_to_complete)
    {
        $this->container['days_to_complete'] = $days_to_complete;

        return $this;
    }

    /**
     * Gets date_completed
     * @return \DateTime
     */
    public function getDateCompleted()
    {
        return $this->container['date_completed'];
    }

    /**
     * Sets date_completed
     * @param \DateTime $date_completed Date of completed of contract
     * @return $this
     */
    public function setDateCompleted($date_completed)
    {
        $this->container['date_completed'] = $date_completed;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price Price of contract (for ItemsExchange and Auctions)
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets reward
     * @return double
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     * @param double $reward Remuneration for contract (for Couriers only)
     * @return $this
     */
    public function setReward($reward)
    {
        $this->container['reward'] = $reward;

        return $this;
    }

    /**
     * Gets collateral
     * @return double
     */
    public function getCollateral()
    {
        return $this->container['collateral'];
    }

    /**
     * Sets collateral
     * @param double $collateral Collateral price (for Couriers only)
     * @return $this
     */
    public function setCollateral($collateral)
    {
        $this->container['collateral'] = $collateral;

        return $this;
    }

    /**
     * Gets buyout
     * @return double
     */
    public function getBuyout()
    {
        return $this->container['buyout'];
    }

    /**
     * Sets buyout
     * @param double $buyout Buyout price (for Auctions only)
     * @return $this
     */
    public function setBuyout($buyout)
    {
        $this->container['buyout'] = $buyout;

        return $this;
    }

    /**
     * Gets volume
     * @return double
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     * @param double $volume Volume of items in the contract
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

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



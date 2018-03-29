<?php
/**
 * PlanetaryInteractionApi
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

namespace EsiClient;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * PlanetaryInteractionApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlanetaryInteractionApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://esi.tech.ccp.is');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return PlanetaryInteractionApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCharactersCharacterIdPlanets
     *
     * Get colonies
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetCharactersCharacterIdPlanets200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdPlanets($character_id, $datasource = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getCharactersCharacterIdPlanetsWithHttpInfo($character_id, $datasource, $token, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdPlanetsWithHttpInfo
     *
     * Get colonies
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetCharactersCharacterIdPlanets200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdPlanetsWithHttpInfo($character_id, $datasource = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdPlanets');
        }
        if (($character_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling PlanetaryInteractionApi.getCharactersCharacterIdPlanets, must be bigger than or equal to 1.0.');
        }

        // parse inputs
        $resourcePath = "/v1/characters/{character_id}/planets/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetCharactersCharacterIdPlanets200Ok[]',
                '/v1/characters/{character_id}/planets/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCharactersCharacterIdPlanets200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdPlanets200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCharactersCharacterIdPlanetsPlanetId
     *
     * Get colony layout
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $planet_id Planet id of the target planet (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOk
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdPlanetsPlanetId($character_id, $planet_id, $datasource = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getCharactersCharacterIdPlanetsPlanetIdWithHttpInfo($character_id, $planet_id, $datasource, $token, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdPlanetsPlanetIdWithHttpInfo
     *
     * Get colony layout
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $planet_id Planet id of the target planet (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdPlanetsPlanetIdWithHttpInfo($character_id, $planet_id, $datasource = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdPlanetsPlanetId');
        }
        if (($character_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling PlanetaryInteractionApi.getCharactersCharacterIdPlanetsPlanetId, must be bigger than or equal to 1.0.');
        }

        // verify the required parameter 'planet_id' is set
        if ($planet_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $planet_id when calling getCharactersCharacterIdPlanetsPlanetId');
        }
        // parse inputs
        $resourcePath = "/v3/characters/{character_id}/planets/{planet_id}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // path params
        if ($planet_id !== null) {
            $resourcePath = str_replace(
                "{" . "planet_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($planet_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOk',
                '/v3/characters/{character_id}/planets/{planet_id}/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCorporationsCorporationIdCustomsOffices
     *
     * List corporation customs offices
     *
     * @param int $corporation_id An EVE corporation ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param int $page Which page of results to return (optional, default to 1)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetCorporationsCorporationIdCustomsOffices200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCorporationsCorporationIdCustomsOffices($corporation_id, $datasource = null, $page = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getCorporationsCorporationIdCustomsOfficesWithHttpInfo($corporation_id, $datasource, $page, $token, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getCorporationsCorporationIdCustomsOfficesWithHttpInfo
     *
     * List corporation customs offices
     *
     * @param int $corporation_id An EVE corporation ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param int $page Which page of results to return (optional, default to 1)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetCorporationsCorporationIdCustomsOffices200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCorporationsCorporationIdCustomsOfficesWithHttpInfo($corporation_id, $datasource = null, $page = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'corporation_id' is set
        if ($corporation_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corporation_id when calling getCorporationsCorporationIdCustomsOffices');
        }
        if (($corporation_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$corporation_id" when calling PlanetaryInteractionApi.getCorporationsCorporationIdCustomsOffices, must be bigger than or equal to 1.0.');
        }

        // parse inputs
        $resourcePath = "/v1/corporations/{corporation_id}/customs_offices/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($corporation_id !== null) {
            $resourcePath = str_replace(
                "{" . "corporation_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($corporation_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetCorporationsCorporationIdCustomsOffices200Ok[]',
                '/v1/corporations/{corporation_id}/customs_offices/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCorporationsCorporationIdCustomsOffices200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCorporationsCorporationIdCustomsOffices200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUniverseSchematicsSchematicId
     *
     * Get schematic information
     *
     * @param int $schematic_id A PI schematic ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetUniverseSchematicsSchematicIdOk
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getUniverseSchematicsSchematicId($schematic_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getUniverseSchematicsSchematicIdWithHttpInfo($schematic_id, $datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getUniverseSchematicsSchematicIdWithHttpInfo
     *
     * Get schematic information
     *
     * @param int $schematic_id A PI schematic ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetUniverseSchematicsSchematicIdOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getUniverseSchematicsSchematicIdWithHttpInfo($schematic_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'schematic_id' is set
        if ($schematic_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $schematic_id when calling getUniverseSchematicsSchematicId');
        }
        // parse inputs
        $resourcePath = "/v1/universe/schematics/{schematic_id}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($schematic_id !== null) {
            $resourcePath = str_replace(
                "{" . "schematic_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($schematic_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetUniverseSchematicsSchematicIdOk',
                '/v1/universe/schematics/{schematic_id}/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetUniverseSchematicsSchematicIdOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseSchematicsSchematicIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetUniverseSchematicsSchematicIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}

<?php
/**
 * DatabaseState
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Equisoft /connect API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0-equisoft4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Equisoft\SDK\EquisoftConnect\Model;
use \Equisoft\SDK\EquisoftConnect\ObjectSerializer;

/**
 * DatabaseState Class Doc Comment
 *
 * @category Class
 * @description Database&#39;s state.
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DatabaseState
{
    /**
     * Possible values of this enum
     */
    public const ACTIVE = 'ACTIVE';

    public const INACTIVE = 'INACTIVE';

    public const TODELETE = 'TODELETE';

    public const MAINTENANCE = 'MAINTENANCE';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::INACTIVE,
            self::TODELETE,
            self::MAINTENANCE,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}


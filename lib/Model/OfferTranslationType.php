<?php
/**
 * OfferTranslationType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;
use \AllegroApi\ObjectSerializer;

/**
 * OfferTranslationType Class Doc Comment
 *
 * @category Class
 * @description Type of content: BASE - initial content for offer in declared offer language. AUTO - automatic translation from BASE content. MANUAL - manual translation provided by the user.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferTranslationType
{
    /**
     * Possible values of this enum
     */
    public const AUTO = 'AUTO';

    public const MANUAL = 'MANUAL';

    public const BASE = 'BASE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTO,
            self::MANUAL,
            self::BASE
        ];
    }
}



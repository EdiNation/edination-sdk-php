<?php
/*
 * EdiNationAPILib
 *
 * This file was automatically generated for EdiNation by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EdiNationAPILib\Exceptions;

use EdiNationAPILib\APIException;
use EdiNationAPILib\APIHelper;

/**
 * @todo Write general description for this model
 */
class ErrorDetailsException extends APIException
{
    /**
     * @todo Write general description for this property
     * @maps Code
     * @var integer|null $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @maps Details
     * @var array|null $details public property
     */
    public $details;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct($reason, $context)
    {
        parent::__construct($reason, $context);
    }

    /**
     * Unbox response into this exception class
     */
    public function unbox()
    {
        APIHelper::deserialize(self::getResponseBody(), $this, false, false);
    }
}

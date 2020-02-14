<?php
/*
 * EdiNationAPILib
 *
 * This file was automatically generated for EdiNation by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EdiNationAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class S006 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps ApplicationSenderIdentification_1
     * @var string|null $applicationSenderIdentification1 public property
     */
    public $applicationSenderIdentification1;

    /**
     * @todo Write general description for this property
     * @maps IdentificationCodeQualifier_2
     * @var string|null $identificationCodeQualifier2 public property
     */
    public $identificationCodeQualifier2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $applicationSenderIdentification1 Initialization value for $this-
     *                                                   >applicationSenderIdentification1
     * @param string $identificationCodeQualifier2     Initialization value for $this->identificationCodeQualifier2
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->applicationSenderIdentification1 = func_get_arg(0);
            $this->identificationCodeQualifier2     = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ApplicationSenderIdentification_1'] = $this->applicationSenderIdentification1;
        $json['IdentificationCodeQualifier_2']     = $this->identificationCodeQualifier2;

        return $json;
    }
}

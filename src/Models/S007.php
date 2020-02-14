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
class S007 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps ApplicationRecipientIdentification_1
     * @var string|null $applicationRecipientIdentification1 public property
     */
    public $applicationRecipientIdentification1;

    /**
     * @todo Write general description for this property
     * @maps IdentificationCodeQualifier_2
     * @var string|null $identificationCodeQualifier2 public property
     */
    public $identificationCodeQualifier2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $applicationRecipientIdentification1 Initialization value for $this-
     *                                                      >applicationRecipientIdentification1
     * @param string $identificationCodeQualifier2        Initialization value for $this-
     *                                                      >identificationCodeQualifier2
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->applicationRecipientIdentification1 = func_get_arg(0);
            $this->identificationCodeQualifier2        = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ApplicationRecipientIdentification_1'] = $this->applicationRecipientIdentification1;
        $json['IdentificationCodeQualifier_2']        = $this->identificationCodeQualifier2;

        return $json;
    }
}

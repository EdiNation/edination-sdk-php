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
class S003 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps InterchangeRecipientIdentification_1
     * @var string|null $interchangeRecipientIdentification1 public property
     */
    public $interchangeRecipientIdentification1;

    /**
     * @todo Write general description for this property
     * @maps IdentificationCodeQualifier_2
     * @var string|null $identificationCodeQualifier2 public property
     */
    public $identificationCodeQualifier2;

    /**
     * @todo Write general description for this property
     * @maps InterchangeRecipientInternalIdentification_3
     * @var string|null $interchangeRecipientInternalIdentification3 public property
     */
    public $interchangeRecipientInternalIdentification3;

    /**
     * @todo Write general description for this property
     * @maps InterchangeRecipientInternalSubIdentification_4
     * @var string|null $interchangeRecipientInternalSubIdentification4 public property
     */
    public $interchangeRecipientInternalSubIdentification4;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $interchangeRecipientIdentification1            Initialization value for $this-
     *                                                                 >interchangeRecipientIdentification1
     * @param string $identificationCodeQualifier2                   Initialization value for $this-
     *                                                                 >identificationCodeQualifier2
     * @param string $interchangeRecipientInternalIdentification3    Initialization value for $this-
     *                                                                 >interchangeRecipientInternalIdentification3
     * @param string $interchangeRecipientInternalSubIdentification4 Initialization value for $this-
     *                                                                 >interchangeRecipientInternalSubIdentification4
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->interchangeRecipientIdentification1            = func_get_arg(0);
            $this->identificationCodeQualifier2                   = func_get_arg(1);
            $this->interchangeRecipientInternalIdentification3    = func_get_arg(2);
            $this->interchangeRecipientInternalSubIdentification4 = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['InterchangeRecipientIdentification_1']            = $this->interchangeRecipientIdentification1;
        $json['IdentificationCodeQualifier_2']                   = $this->identificationCodeQualifier2;
        $json['InterchangeRecipientInternalIdentification_3']    = $this->interchangeRecipientInternalIdentification3;
        $json['InterchangeRecipientInternalSubIdentification_4'] = $this->interchangeRecipientInternalSubIdentification4;

        return $json;
    }
}

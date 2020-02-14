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
class S002 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps InterchangeSenderIdentification_1
     * @var string|null $interchangeSenderIdentification1 public property
     */
    public $interchangeSenderIdentification1;

    /**
     * @todo Write general description for this property
     * @maps IdentificationCodeQualifier_2
     * @var string|null $identificationCodeQualifier2 public property
     */
    public $identificationCodeQualifier2;

    /**
     * @todo Write general description for this property
     * @maps InterchangeSenderInternalIdentification_3
     * @var string|null $interchangeSenderInternalIdentification3 public property
     */
    public $interchangeSenderInternalIdentification3;

    /**
     * @todo Write general description for this property
     * @maps InterchangeSenderInternalSubIdentification_4
     * @var string|null $interchangeSenderInternalSubIdentification4 public property
     */
    public $interchangeSenderInternalSubIdentification4;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $interchangeSenderIdentification1            Initialization value for $this-
     *                                                              >interchangeSenderIdentification1
     * @param string $identificationCodeQualifier2                Initialization value for $this-
     *                                                              >identificationCodeQualifier2
     * @param string $interchangeSenderInternalIdentification3    Initialization value for $this-
     *                                                              >interchangeSenderInternalIdentification3
     * @param string $interchangeSenderInternalSubIdentification4 Initialization value for $this-
     *                                                              >interchangeSenderInternalSubIdentification4
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->interchangeSenderIdentification1            = func_get_arg(0);
            $this->identificationCodeQualifier2                = func_get_arg(1);
            $this->interchangeSenderInternalIdentification3    = func_get_arg(2);
            $this->interchangeSenderInternalSubIdentification4 = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['InterchangeSenderIdentification_1']            = $this->interchangeSenderIdentification1;
        $json['IdentificationCodeQualifier_2']                = $this->identificationCodeQualifier2;
        $json['InterchangeSenderInternalIdentification_3']    = $this->interchangeSenderInternalIdentification3;
        $json['InterchangeSenderInternalSubIdentification_4'] = $this->interchangeSenderInternalSubIdentification4;

        return $json;
    }
}

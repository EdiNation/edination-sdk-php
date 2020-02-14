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
class S008 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps MessageVersionNumber_1
     * @var string|null $messageVersionNumber1 public property
     */
    public $messageVersionNumber1;

    /**
     * @todo Write general description for this property
     * @maps MessageReleaseNumber_2
     * @var string|null $messageReleaseNumber2 public property
     */
    public $messageReleaseNumber2;

    /**
     * @todo Write general description for this property
     * @maps AssociationAssignedCode_3
     * @var string|null $associationAssignedCode3 public property
     */
    public $associationAssignedCode3;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $messageVersionNumber1    Initialization value for $this->messageVersionNumber1
     * @param string $messageReleaseNumber2    Initialization value for $this->messageReleaseNumber2
     * @param string $associationAssignedCode3 Initialization value for $this->associationAssignedCode3
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->messageVersionNumber1    = func_get_arg(0);
            $this->messageReleaseNumber2    = func_get_arg(1);
            $this->associationAssignedCode3 = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['MessageVersionNumber_1']    = $this->messageVersionNumber1;
        $json['MessageReleaseNumber_2']    = $this->messageReleaseNumber2;
        $json['AssociationAssignedCode_3'] = $this->associationAssignedCode3;

        return $json;
    }
}

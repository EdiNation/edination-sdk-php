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
class IEA implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps NumberOfIncludedGroups_1
     * @var string|null $numberOfIncludedGroups1 public property
     */
    public $numberOfIncludedGroups1;

    /**
     * @todo Write general description for this property
     * @maps InterchangeControlNumber_2
     * @var string|null $interchangeControlNumber2 public property
     */
    public $interchangeControlNumber2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $numberOfIncludedGroups1   Initialization value for $this->numberOfIncludedGroups1
     * @param string $interchangeControlNumber2 Initialization value for $this->interchangeControlNumber2
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->numberOfIncludedGroups1   = func_get_arg(0);
            $this->interchangeControlNumber2 = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['NumberOfIncludedGroups_1']   = $this->numberOfIncludedGroups1;
        $json['InterchangeControlNumber_2'] = $this->interchangeControlNumber2;

        return $json;
    }
}

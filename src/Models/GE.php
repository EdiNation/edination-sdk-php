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
class GE implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps NumberOfIncludedSets_1
     * @var string|null $numberOfIncludedSets1 public property
     */
    public $numberOfIncludedSets1;

    /**
     * @todo Write general description for this property
     * @maps GroupControlNumber_2
     * @var string|null $groupControlNumber2 public property
     */
    public $groupControlNumber2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $numberOfIncludedSets1 Initialization value for $this->numberOfIncludedSets1
     * @param string $groupControlNumber2   Initialization value for $this->groupControlNumber2
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->numberOfIncludedSets1 = func_get_arg(0);
            $this->groupControlNumber2   = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['NumberOfIncludedSets_1'] = $this->numberOfIncludedSets1;
        $json['GroupControlNumber_2']   = $this->groupControlNumber2;

        return $json;
    }
}

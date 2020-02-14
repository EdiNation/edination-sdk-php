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
class UNZ implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps InterchangeControlCount_1
     * @var string|null $interchangeControlCount1 public property
     */
    public $interchangeControlCount1;

    /**
     * @todo Write general description for this property
     * @maps InterchangeControlReference_2
     * @var string|null $interchangeControlReference2 public property
     */
    public $interchangeControlReference2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $interchangeControlCount1     Initialization value for $this->interchangeControlCount1
     * @param string $interchangeControlReference2 Initialization value for $this->interchangeControlReference2
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->interchangeControlCount1     = func_get_arg(0);
            $this->interchangeControlReference2 = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['InterchangeControlCount_1']     = $this->interchangeControlCount1;
        $json['InterchangeControlReference_2'] = $this->interchangeControlReference2;

        return $json;
    }
}

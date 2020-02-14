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
class S004 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Date_1
     * @var string|null $date1 public property
     */
    public $date1;

    /**
     * @todo Write general description for this property
     * @maps Time_2
     * @var string|null $time2 public property
     */
    public $time2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $date1 Initialization value for $this->date1
     * @param string $time2 Initialization value for $this->time2
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->date1 = func_get_arg(0);
            $this->time2 = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Date_1'] = $this->date1;
        $json['Time_2'] = $this->time2;

        return $json;
    }
}

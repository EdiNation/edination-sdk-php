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
class UNE implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps GroupControlCount_1
     * @var string|null $groupControlCount1 public property
     */
    public $groupControlCount1;

    /**
     * @todo Write general description for this property
     * @maps GroupReferenceNumber_2
     * @var string|null $groupReferenceNumber2 public property
     */
    public $groupReferenceNumber2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $groupControlCount1    Initialization value for $this->groupControlCount1
     * @param string $groupReferenceNumber2 Initialization value for $this->groupReferenceNumber2
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->groupControlCount1    = func_get_arg(0);
            $this->groupReferenceNumber2 = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['GroupControlCount_1']    = $this->groupControlCount1;
        $json['GroupReferenceNumber_2'] = $this->groupReferenceNumber2;

        return $json;
    }
}

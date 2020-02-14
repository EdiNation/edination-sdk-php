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
class OperationResult implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps LastIndex
     * @var integer|null $lastIndex public property
     */
    public $lastIndex;

    /**
     * @todo Write general description for this property
     * @maps Details
     * @var \EdiNationAPILib\Models\OperationDetail[]|null $details public property
     */
    public $details;

    /**
     * @todo Write general description for this property
     * @maps Status
     * @var string|null $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $lastIndex Initialization value for $this->lastIndex
     * @param array   $details   Initialization value for $this->details
     * @param string  $status    Initialization value for $this->status
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->lastIndex = func_get_arg(0);
            $this->details   = func_get_arg(1);
            $this->status    = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['LastIndex'] = $this->lastIndex;
        $json['Details']   = $this->details;
        $json['Status']    = $this->status;

        return $json;
    }
}

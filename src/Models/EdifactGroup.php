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
class EdifactGroup implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps UNG
     * @var \EdiNationAPILib\Models\UNG|null $uNG public property
     */
    public $uNG;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Transactions
     * @var array $transactions public property
     */
    public $transactions;

    /**
     * @todo Write general description for this property
     * @maps UNETrailers
     * @var \EdiNationAPILib\Models\UNE[]|null $uNETrailers public property
     */
    public $uNETrailers;

    /**
     * Constructor to set initial or default values of member properties
     * @param UNG   $uNG          Initialization value for $this->uNG
     * @param array $transactions Initialization value for $this->transactions
     * @param array $uNETrailers  Initialization value for $this->uNETrailers
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->uNG          = func_get_arg(0);
            $this->transactions = func_get_arg(1);
            $this->uNETrailers  = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['UNG']          = $this->uNG;
        $json['Transactions'] = $this->transactions;
        $json['UNETrailers']  = $this->uNETrailers;

        return $json;
    }
}

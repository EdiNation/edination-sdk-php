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
class X12Group implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps GS
     * @var \EdiNationAPILib\Models\GS $gS public property
     */
    public $gS;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Transactions
     * @var array $transactions public property
     */
    public $transactions;

    /**
     * @todo Write general description for this property
     * @maps GETrailers
     * @var \EdiNationAPILib\Models\GE[]|null $gETrailers public property
     */
    public $gETrailers;

    /**
     * Constructor to set initial or default values of member properties
     * @param GS    $gS           Initialization value for $this->gS
     * @param array $transactions Initialization value for $this->transactions
     * @param array $gETrailers   Initialization value for $this->gETrailers
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->gS           = func_get_arg(0);
            $this->transactions = func_get_arg(1);
            $this->gETrailers   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['GS']           = $this->gS;
        $json['Transactions'] = $this->transactions;
        $json['GETrailers']   = $this->gETrailers;

        return $json;
    }
}

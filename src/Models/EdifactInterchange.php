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
class EdifactInterchange implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps UNA
     * @var \EdiNationAPILib\Models\UNA|null $uNA public property
     */
    public $uNA;

    /**
     * @todo Write general description for this property
     * @required
     * @maps UNB
     * @var \EdiNationAPILib\Models\UNB $uNB public property
     */
    public $uNB;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Groups
     * @var \EdiNationAPILib\Models\EdifactGroup[] $groups public property
     */
    public $groups;

    /**
     * @todo Write general description for this property
     * @maps UNZTrailers
     * @var \EdiNationAPILib\Models\UNZ[]|null $uNZTrailers public property
     */
    public $uNZTrailers;

    /**
     * @todo Write general description for this property
     * @maps Result
     * @var \EdiNationAPILib\Models\OperationResult|null $result public property
     */
    public $result;

    /**
     * Constructor to set initial or default values of member properties
     * @param UNA             $uNA         Initialization value for $this->uNA
     * @param UNB             $uNB         Initialization value for $this->uNB
     * @param array           $groups      Initialization value for $this->groups
     * @param array           $uNZTrailers Initialization value for $this->uNZTrailers
     * @param OperationResult $result      Initialization value for $this->result
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->uNA         = func_get_arg(0);
            $this->uNB         = func_get_arg(1);
            $this->groups      = func_get_arg(2);
            $this->uNZTrailers = func_get_arg(3);
            $this->result      = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['UNA']         = $this->uNA;
        $json['UNB']         = $this->uNB;
        $json['Groups']      = $this->groups;
        $json['UNZTrailers'] = $this->uNZTrailers;
        $json['Result']      = $this->result;

        return $json;
    }
}

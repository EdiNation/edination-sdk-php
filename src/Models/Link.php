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
class Link implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Rel
     * @var string|null $rel public property
     */
    public $rel;

    /**
     * @todo Write general description for this property
     * @maps Href
     * @var string|null $href public property
     */
    public $href;

    /**
     * @todo Write general description for this property
     * @maps Action
     * @var string|null $action public property
     */
    public $action;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $rel    Initialization value for $this->rel
     * @param string $href   Initialization value for $this->href
     * @param string $action Initialization value for $this->action
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->rel    = func_get_arg(0);
            $this->href   = func_get_arg(1);
            $this->action = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Rel']    = $this->rel;
        $json['Href']   = $this->href;
        $json['Action'] = $this->action;

        return $json;
    }
}

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
class EdiModel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @maps DateCreated
     * @var string|null $dateCreated public property
     */
    public $dateCreated;

    /**
     * @todo Write general description for this property
     * @maps Links
     * @var \EdiNationAPILib\Models\Link[]|null $links public property
     */
    public $links;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name        Initialization value for $this->name
     * @param string $dateCreated Initialization value for $this->dateCreated
     * @param array  $links       Initialization value for $this->links
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->name        = func_get_arg(0);
            $this->dateCreated = func_get_arg(1);
            $this->links       = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Name']        = $this->name;
        $json['DateCreated'] = $this->dateCreated;
        $json['Links']       = $this->links;

        return $json;
    }
}

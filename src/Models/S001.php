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
class S001 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps SyntaxIdentifier_1
     * @var string|null $syntaxIdentifier1 public property
     */
    public $syntaxIdentifier1;

    /**
     * @todo Write general description for this property
     * @maps SyntaxVersionNumber_2
     * @var string|null $syntaxVersionNumber2 public property
     */
    public $syntaxVersionNumber2;

    /**
     * @todo Write general description for this property
     * @maps ServiceCodeListDirectoryVersionNumber_3
     * @var string|null $serviceCodeListDirectoryVersionNumber3 public property
     */
    public $serviceCodeListDirectoryVersionNumber3;

    /**
     * @todo Write general description for this property
     * @maps CharacterEncoding_4
     * @var string|null $characterEncoding4 public property
     */
    public $characterEncoding4;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $syntaxIdentifier1                      Initialization value for $this->syntaxIdentifier1
     * @param string $syntaxVersionNumber2                   Initialization value for $this->syntaxVersionNumber2
     * @param string $serviceCodeListDirectoryVersionNumber3 Initialization value for $this-
     *                                                         >serviceCodeListDirectoryVersionNumber3
     * @param string $characterEncoding4                     Initialization value for $this->characterEncoding4
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->syntaxIdentifier1                      = func_get_arg(0);
            $this->syntaxVersionNumber2                   = func_get_arg(1);
            $this->serviceCodeListDirectoryVersionNumber3 = func_get_arg(2);
            $this->characterEncoding4                     = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['SyntaxIdentifier_1']                      = $this->syntaxIdentifier1;
        $json['SyntaxVersionNumber_2']                   = $this->syntaxVersionNumber2;
        $json['ServiceCodeListDirectoryVersionNumber_3'] = $this->serviceCodeListDirectoryVersionNumber3;
        $json['CharacterEncoding_4']                     = $this->characterEncoding4;

        return $json;
    }
}

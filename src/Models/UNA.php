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
class UNA implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps ComponentDataElement
     * @var string|null $componentDataElement public property
     */
    public $componentDataElement;

    /**
     * @todo Write general description for this property
     * @maps DataElement
     * @var string|null $dataElement public property
     */
    public $dataElement;

    /**
     * @todo Write general description for this property
     * @maps DecimalNotation
     * @var string|null $decimalNotation public property
     */
    public $decimalNotation;

    /**
     * @todo Write general description for this property
     * @maps ReleaseIndicator
     * @var string|null $releaseIndicator public property
     */
    public $releaseIndicator;

    /**
     * @todo Write general description for this property
     * @maps Reserved
     * @var string|null $reserved public property
     */
    public $reserved;

    /**
     * @todo Write general description for this property
     * @maps Segment
     * @var string|null $segment public property
     */
    public $segment;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $componentDataElement Initialization value for $this->componentDataElement
     * @param string $dataElement          Initialization value for $this->dataElement
     * @param string $decimalNotation      Initialization value for $this->decimalNotation
     * @param string $releaseIndicator     Initialization value for $this->releaseIndicator
     * @param string $reserved             Initialization value for $this->reserved
     * @param string $segment              Initialization value for $this->segment
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->componentDataElement = func_get_arg(0);
            $this->dataElement          = func_get_arg(1);
            $this->decimalNotation      = func_get_arg(2);
            $this->releaseIndicator     = func_get_arg(3);
            $this->reserved             = func_get_arg(4);
            $this->segment              = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ComponentDataElement'] = $this->componentDataElement;
        $json['DataElement']          = $this->dataElement;
        $json['DecimalNotation']      = $this->decimalNotation;
        $json['ReleaseIndicator']     = $this->releaseIndicator;
        $json['Reserved']             = $this->reserved;
        $json['Segment']              = $this->segment;

        return $json;
    }
}

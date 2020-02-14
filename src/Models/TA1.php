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
class TA1 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps InterchangeControlNumber_1
     * @var string|null $interchangeControlNumber1 public property
     */
    public $interchangeControlNumber1;

    /**
     * @todo Write general description for this property
     * @maps InterchangeDate_2
     * @var string|null $interchangeDate2 public property
     */
    public $interchangeDate2;

    /**
     * @todo Write general description for this property
     * @maps InterchangeTime_3
     * @var string|null $interchangeTime3 public property
     */
    public $interchangeTime3;

    /**
     * @todo Write general description for this property
     * @maps InterchangeAcknowledgmentCode_4
     * @var string|null $interchangeAcknowledgmentCode4 public property
     */
    public $interchangeAcknowledgmentCode4;

    /**
     * @todo Write general description for this property
     * @maps InterchangeNoteCode_5
     * @var string|null $interchangeNoteCode5 public property
     */
    public $interchangeNoteCode5;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $interchangeControlNumber1      Initialization value for $this->interchangeControlNumber1
     * @param string $interchangeDate2               Initialization value for $this->interchangeDate2
     * @param string $interchangeTime3               Initialization value for $this->interchangeTime3
     * @param string $interchangeAcknowledgmentCode4 Initialization value for $this->interchangeAcknowledgmentCode4
     * @param string $interchangeNoteCode5           Initialization value for $this->interchangeNoteCode5
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->interchangeControlNumber1      = func_get_arg(0);
            $this->interchangeDate2               = func_get_arg(1);
            $this->interchangeTime3               = func_get_arg(2);
            $this->interchangeAcknowledgmentCode4 = func_get_arg(3);
            $this->interchangeNoteCode5           = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['InterchangeControlNumber_1']      = $this->interchangeControlNumber1;
        $json['InterchangeDate_2']               = $this->interchangeDate2;
        $json['InterchangeTime_3']               = $this->interchangeTime3;
        $json['InterchangeAcknowledgmentCode_4'] = $this->interchangeAcknowledgmentCode4;
        $json['InterchangeNoteCode_5']           = $this->interchangeNoteCode5;

        return $json;
    }
}

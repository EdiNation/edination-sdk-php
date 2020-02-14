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
class X12Interchange implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps SegmentDelimiter
     * @var string $segmentDelimiter public property
     */
    public $segmentDelimiter;

    /**
     * @todo Write general description for this property
     * @required
     * @maps DataElementDelimiter
     * @var string $dataElementDelimiter public property
     */
    public $dataElementDelimiter;

    /**
     * @todo Write general description for this property
     * @required
     * @maps ISA
     * @var \EdiNationAPILib\Models\ISA $iSA public property
     */
    public $iSA;

    /**
     * @todo Write general description for this property
     * @maps TA1
     * @var \EdiNationAPILib\Models\TA1|null $tA1 public property
     */
    public $tA1;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Groups
     * @var \EdiNationAPILib\Models\X12Group[] $groups public property
     */
    public $groups;

    /**
     * @todo Write general description for this property
     * @maps IEATrailers
     * @var \EdiNationAPILib\Models\IEA[]|null $iEATrailers public property
     */
    public $iEATrailers;

    /**
     * @todo Write general description for this property
     * @maps Result
     * @var \EdiNationAPILib\Models\OperationResult|null $result public property
     */
    public $result;

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $segmentDelimiter     Initialization value for $this->segmentDelimiter
     * @param string          $dataElementDelimiter Initialization value for $this->dataElementDelimiter
     * @param ISA             $iSA                  Initialization value for $this->iSA
     * @param TA1             $tA1                  Initialization value for $this->tA1
     * @param array           $groups               Initialization value for $this->groups
     * @param array           $iEATrailers          Initialization value for $this->iEATrailers
     * @param OperationResult $result               Initialization value for $this->result
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->segmentDelimiter     = func_get_arg(0);
            $this->dataElementDelimiter = func_get_arg(1);
            $this->iSA                  = func_get_arg(2);
            $this->tA1                  = func_get_arg(3);
            $this->groups               = func_get_arg(4);
            $this->iEATrailers          = func_get_arg(5);
            $this->result               = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['SegmentDelimiter']     = $this->segmentDelimiter;
        $json['DataElementDelimiter'] = $this->dataElementDelimiter;
        $json['ISA']                  = $this->iSA;
        $json['TA1']                  = $this->tA1;
        $json['Groups']               = $this->groups;
        $json['IEATrailers']          = $this->iEATrailers;
        $json['Result']               = $this->result;

        return $json;
    }
}

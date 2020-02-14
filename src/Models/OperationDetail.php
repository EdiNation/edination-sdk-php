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
class OperationDetail implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Index
     * @var integer|null $index public property
     */
    public $index;

    /**
     * @todo Write general description for this property
     * @maps TransactionIndex
     * @var integer|null $transactionIndex public property
     */
    public $transactionIndex;

    /**
     * @todo Write general description for this property
     * @maps TransactionRef
     * @var string|null $transactionRef public property
     */
    public $transactionRef;

    /**
     * @todo Write general description for this property
     * @maps SegmentId
     * @var string|null $segmentId public property
     */
    public $segmentId;

    /**
     * @todo Write general description for this property
     * @maps Value
     * @var string|null $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @maps Message
     * @var string|null $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @maps Status
     * @var string|null $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $index            Initialization value for $this->index
     * @param integer $transactionIndex Initialization value for $this->transactionIndex
     * @param string  $transactionRef   Initialization value for $this->transactionRef
     * @param string  $segmentId        Initialization value for $this->segmentId
     * @param string  $value            Initialization value for $this->value
     * @param string  $message          Initialization value for $this->message
     * @param string  $status           Initialization value for $this->status
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->index            = func_get_arg(0);
            $this->transactionIndex = func_get_arg(1);
            $this->transactionRef   = func_get_arg(2);
            $this->segmentId        = func_get_arg(3);
            $this->value            = func_get_arg(4);
            $this->message          = func_get_arg(5);
            $this->status           = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Index']            = $this->index;
        $json['TransactionIndex'] = $this->transactionIndex;
        $json['TransactionRef']   = $this->transactionRef;
        $json['SegmentId']        = $this->segmentId;
        $json['Value']            = $this->value;
        $json['Message']          = $this->message;
        $json['Status']           = $this->status;

        return $json;
    }
}

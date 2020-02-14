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
class GS implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps CodeIdentifyingInformationType_1
     * @var string|null $codeIdentifyingInformationType1 public property
     */
    public $codeIdentifyingInformationType1;

    /**
     * @todo Write general description for this property
     * @maps SenderIDCode_2
     * @var string|null $senderIDCode2 public property
     */
    public $senderIDCode2;

    /**
     * @todo Write general description for this property
     * @maps ReceiverIDCode_3
     * @var string|null $receiverIDCode3 public property
     */
    public $receiverIDCode3;

    /**
     * @todo Write general description for this property
     * @maps Date_4
     * @var string|null $date4 public property
     */
    public $date4;

    /**
     * @todo Write general description for this property
     * @maps Time_5
     * @var string|null $time5 public property
     */
    public $time5;

    /**
     * @todo Write general description for this property
     * @maps GroupControlNumber_6
     * @var string|null $groupControlNumber6 public property
     */
    public $groupControlNumber6;

    /**
     * @todo Write general description for this property
     * @maps TransactionTypeCode_7
     * @var string|null $transactionTypeCode7 public property
     */
    public $transactionTypeCode7;

    /**
     * @todo Write general description for this property
     * @maps VersionAndRelease_8
     * @var string|null $versionAndRelease8 public property
     */
    public $versionAndRelease8;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $codeIdentifyingInformationType1 Initialization value for $this->codeIdentifyingInformationType1
     * @param string $senderIDCode2                   Initialization value for $this->senderIDCode2
     * @param string $receiverIDCode3                 Initialization value for $this->receiverIDCode3
     * @param string $date4                           Initialization value for $this->date4
     * @param string $time5                           Initialization value for $this->time5
     * @param string $groupControlNumber6             Initialization value for $this->groupControlNumber6
     * @param string $transactionTypeCode7            Initialization value for $this->transactionTypeCode7
     * @param string $versionAndRelease8              Initialization value for $this->versionAndRelease8
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->codeIdentifyingInformationType1 = func_get_arg(0);
            $this->senderIDCode2                   = func_get_arg(1);
            $this->receiverIDCode3                 = func_get_arg(2);
            $this->date4                           = func_get_arg(3);
            $this->time5                           = func_get_arg(4);
            $this->groupControlNumber6             = func_get_arg(5);
            $this->transactionTypeCode7            = func_get_arg(6);
            $this->versionAndRelease8              = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['CodeIdentifyingInformationType_1'] = $this->codeIdentifyingInformationType1;
        $json['SenderIDCode_2']                   = $this->senderIDCode2;
        $json['ReceiverIDCode_3']                 = $this->receiverIDCode3;
        $json['Date_4']                           = $this->date4;
        $json['Time_5']                           = $this->time5;
        $json['GroupControlNumber_6']             = $this->groupControlNumber6;
        $json['TransactionTypeCode_7']            = $this->transactionTypeCode7;
        $json['VersionAndRelease_8']              = $this->versionAndRelease8;

        return $json;
    }
}

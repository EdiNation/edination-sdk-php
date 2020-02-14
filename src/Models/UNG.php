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
class UNG implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps MessageGroupIdentification_1
     * @var string|null $messageGroupIdentification1 public property
     */
    public $messageGroupIdentification1;

    /**
     * @todo Write general description for this property
     * @maps APPLICATIONSENDERIDENTIFICATION_2
     * @var \EdiNationAPILib\Models\S006|null $aPPLICATIONSENDERIDENTIFICATION2 public property
     */
    public $aPPLICATIONSENDERIDENTIFICATION2;

    /**
     * @todo Write general description for this property
     * @maps APPLICATIONRECIPIENTIDENTIFICATION_3
     * @var \EdiNationAPILib\Models\S007|null $aPPLICATIONRECIPIENTIDENTIFICATION3 public property
     */
    public $aPPLICATIONRECIPIENTIDENTIFICATION3;

    /**
     * @todo Write general description for this property
     * @maps DATEANDTIMEOFPREPARATION_4
     * @var \EdiNationAPILib\Models\S004|null $dATEANDTIMEOFPREPARATION4 public property
     */
    public $dATEANDTIMEOFPREPARATION4;

    /**
     * @todo Write general description for this property
     * @maps GroupReferenceNumber_5
     * @var string|null $groupReferenceNumber5 public property
     */
    public $groupReferenceNumber5;

    /**
     * @todo Write general description for this property
     * @maps ControllingAgency_6
     * @var string|null $controllingAgency6 public property
     */
    public $controllingAgency6;

    /**
     * @todo Write general description for this property
     * @maps MESSAGEVERSION_7
     * @var \EdiNationAPILib\Models\S008|null $mESSAGEVERSION7 public property
     */
    public $mESSAGEVERSION7;

    /**
     * @todo Write general description for this property
     * @maps ApplicationPassword_8
     * @var string|null $applicationPassword8 public property
     */
    public $applicationPassword8;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $messageGroupIdentification1         Initialization value for $this->messageGroupIdentification1
     * @param S006   $aPPLICATIONSENDERIDENTIFICATION2    Initialization value for $this-
     *                                                      >aPPLICATIONSENDERIDENTIFICATION2
     * @param S007   $aPPLICATIONRECIPIENTIDENTIFICATION3 Initialization value for $this-
     *                                                      >aPPLICATIONRECIPIENTIDENTIFICATION3
     * @param S004   $dATEANDTIMEOFPREPARATION4           Initialization value for $this->dATEANDTIMEOFPREPARATION4
     * @param string $groupReferenceNumber5               Initialization value for $this->groupReferenceNumber5
     * @param string $controllingAgency6                  Initialization value for $this->controllingAgency6
     * @param S008   $mESSAGEVERSION7                     Initialization value for $this->mESSAGEVERSION7
     * @param string $applicationPassword8                Initialization value for $this->applicationPassword8
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->messageGroupIdentification1         = func_get_arg(0);
            $this->aPPLICATIONSENDERIDENTIFICATION2    = func_get_arg(1);
            $this->aPPLICATIONRECIPIENTIDENTIFICATION3 = func_get_arg(2);
            $this->dATEANDTIMEOFPREPARATION4           = func_get_arg(3);
            $this->groupReferenceNumber5               = func_get_arg(4);
            $this->controllingAgency6                  = func_get_arg(5);
            $this->mESSAGEVERSION7                     = func_get_arg(6);
            $this->applicationPassword8                = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['MessageGroupIdentification_1']         = $this->messageGroupIdentification1;
        $json['APPLICATIONSENDERIDENTIFICATION_2']    = $this->aPPLICATIONSENDERIDENTIFICATION2;
        $json['APPLICATIONRECIPIENTIDENTIFICATION_3'] = $this->aPPLICATIONRECIPIENTIDENTIFICATION3;
        $json['DATEANDTIMEOFPREPARATION_4']           = $this->dATEANDTIMEOFPREPARATION4;
        $json['GroupReferenceNumber_5']               = $this->groupReferenceNumber5;
        $json['ControllingAgency_6']                  = $this->controllingAgency6;
        $json['MESSAGEVERSION_7']                     = $this->mESSAGEVERSION7;
        $json['ApplicationPassword_8']                = $this->applicationPassword8;

        return $json;
    }
}

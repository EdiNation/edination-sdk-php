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
class ISA implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps AuthorizationInformationQualifier_1
     * @var string|null $authorizationInformationQualifier1 public property
     */
    public $authorizationInformationQualifier1;

    /**
     * @todo Write general description for this property
     * @maps AuthorizationInformation_2
     * @var string|null $authorizationInformation2 public property
     */
    public $authorizationInformation2;

    /**
     * @todo Write general description for this property
     * @maps SecurityInformationQualifier_3
     * @var string|null $securityInformationQualifier3 public property
     */
    public $securityInformationQualifier3;

    /**
     * @todo Write general description for this property
     * @maps SecurityInformation_4
     * @var string|null $securityInformation4 public property
     */
    public $securityInformation4;

    /**
     * @todo Write general description for this property
     * @maps SenderIDQualifier_5
     * @var string|null $senderIDQualifier5 public property
     */
    public $senderIDQualifier5;

    /**
     * @todo Write general description for this property
     * @maps InterchangeSenderID_6
     * @var string|null $interchangeSenderID6 public property
     */
    public $interchangeSenderID6;

    /**
     * @todo Write general description for this property
     * @maps ReceiverIDQualifier_7
     * @var string|null $receiverIDQualifier7 public property
     */
    public $receiverIDQualifier7;

    /**
     * @todo Write general description for this property
     * @maps InterchangeReceiverID_8
     * @var string|null $interchangeReceiverID8 public property
     */
    public $interchangeReceiverID8;

    /**
     * @todo Write general description for this property
     * @maps InterchangeDate_9
     * @var string|null $interchangeDate9 public property
     */
    public $interchangeDate9;

    /**
     * @todo Write general description for this property
     * @maps InterchangeTime_10
     * @var string|null $interchangeTime10 public property
     */
    public $interchangeTime10;

    /**
     * @todo Write general description for this property
     * @maps InterchangeControlStandardsIdentifier_11
     * @var string|null $interchangeControlStandardsIdentifier11 public property
     */
    public $interchangeControlStandardsIdentifier11;

    /**
     * @todo Write general description for this property
     * @maps InterchangeControlVersionNumber_12
     * @var string|null $interchangeControlVersionNumber12 public property
     */
    public $interchangeControlVersionNumber12;

    /**
     * @todo Write general description for this property
     * @maps InterchangeControlNumber_13
     * @var string|null $interchangeControlNumber13 public property
     */
    public $interchangeControlNumber13;

    /**
     * @todo Write general description for this property
     * @maps AcknowledgementRequested_14
     * @var string|null $acknowledgementRequested14 public property
     */
    public $acknowledgementRequested14;

    /**
     * @todo Write general description for this property
     * @maps UsageIndicator_15
     * @var string|null $usageIndicator15 public property
     */
    public $usageIndicator15;

    /**
     * @todo Write general description for this property
     * @maps ComponentElementSeparator_16
     * @var string|null $componentElementSeparator16 public property
     */
    public $componentElementSeparator16;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $authorizationInformationQualifier1      Initialization value for $this-
     *                                                          >authorizationInformationQualifier1
     * @param string $authorizationInformation2               Initialization value for $this-
     *                                                          >authorizationInformation2
     * @param string $securityInformationQualifier3           Initialization value for $this-
     *                                                          >securityInformationQualifier3
     * @param string $securityInformation4                    Initialization value for $this->securityInformation4
     * @param string $senderIDQualifier5                      Initialization value for $this->senderIDQualifier5
     * @param string $interchangeSenderID6                    Initialization value for $this->interchangeSenderID6
     * @param string $receiverIDQualifier7                    Initialization value for $this->receiverIDQualifier7
     * @param string $interchangeReceiverID8                  Initialization value for $this->interchangeReceiverID8
     * @param string $interchangeDate9                        Initialization value for $this->interchangeDate9
     * @param string $interchangeTime10                       Initialization value for $this->interchangeTime10
     * @param string $interchangeControlStandardsIdentifier11 Initialization value for $this-
     *                                                          >interchangeControlStandardsIdentifier11
     * @param string $interchangeControlVersionNumber12       Initialization value for $this-
     *                                                          >interchangeControlVersionNumber12
     * @param string $interchangeControlNumber13              Initialization value for $this-
     *                                                          >interchangeControlNumber13
     * @param string $acknowledgementRequested14              Initialization value for $this-
     *                                                          >acknowledgementRequested14
     * @param string $usageIndicator15                        Initialization value for $this->usageIndicator15
     * @param string $componentElementSeparator16             Initialization value for $this-
     *                                                          >componentElementSeparator16
     */
    public function __construct()
    {
        if (16 == func_num_args()) {
            $this->authorizationInformationQualifier1      = func_get_arg(0);
            $this->authorizationInformation2               = func_get_arg(1);
            $this->securityInformationQualifier3           = func_get_arg(2);
            $this->securityInformation4                    = func_get_arg(3);
            $this->senderIDQualifier5                      = func_get_arg(4);
            $this->interchangeSenderID6                    = func_get_arg(5);
            $this->receiverIDQualifier7                    = func_get_arg(6);
            $this->interchangeReceiverID8                  = func_get_arg(7);
            $this->interchangeDate9                        = func_get_arg(8);
            $this->interchangeTime10                       = func_get_arg(9);
            $this->interchangeControlStandardsIdentifier11 = func_get_arg(10);
            $this->interchangeControlVersionNumber12       = func_get_arg(11);
            $this->interchangeControlNumber13              = func_get_arg(12);
            $this->acknowledgementRequested14              = func_get_arg(13);
            $this->usageIndicator15                        = func_get_arg(14);
            $this->componentElementSeparator16             = func_get_arg(15);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['AuthorizationInformationQualifier_1']      = $this->authorizationInformationQualifier1;
        $json['AuthorizationInformation_2']               = $this->authorizationInformation2;
        $json['SecurityInformationQualifier_3']           = $this->securityInformationQualifier3;
        $json['SecurityInformation_4']                    = $this->securityInformation4;
        $json['SenderIDQualifier_5']                      = $this->senderIDQualifier5;
        $json['InterchangeSenderID_6']                    = $this->interchangeSenderID6;
        $json['ReceiverIDQualifier_7']                    = $this->receiverIDQualifier7;
        $json['InterchangeReceiverID_8']                  = $this->interchangeReceiverID8;
        $json['InterchangeDate_9']                        = $this->interchangeDate9;
        $json['InterchangeTime_10']                       = $this->interchangeTime10;
        $json['InterchangeControlStandardsIdentifier_11'] = $this->interchangeControlStandardsIdentifier11;
        $json['InterchangeControlVersionNumber_12']       = $this->interchangeControlVersionNumber12;
        $json['InterchangeControlNumber_13']              = $this->interchangeControlNumber13;
        $json['AcknowledgementRequested_14']              = $this->acknowledgementRequested14;
        $json['UsageIndicator_15']                        = $this->usageIndicator15;
        $json['ComponentElementSeparator_16']             = $this->componentElementSeparator16;

        return $json;
    }
}

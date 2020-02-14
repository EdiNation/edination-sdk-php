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
class UNB implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps SYNTAXIDENTIFIER_1
     * @var \EdiNationAPILib\Models\S001|null $sYNTAXIDENTIFIER1 public property
     */
    public $sYNTAXIDENTIFIER1;

    /**
     * @todo Write general description for this property
     * @maps INTERCHANGESENDER_2
     * @var \EdiNationAPILib\Models\S002|null $iNTERCHANGESENDER2 public property
     */
    public $iNTERCHANGESENDER2;

    /**
     * @todo Write general description for this property
     * @maps INTERCHANGERECIPIENT_3
     * @var \EdiNationAPILib\Models\S003|null $iNTERCHANGERECIPIENT3 public property
     */
    public $iNTERCHANGERECIPIENT3;

    /**
     * @todo Write general description for this property
     * @maps DATEANDTIMEOFPREPARATION_4
     * @var \EdiNationAPILib\Models\S004|null $dATEANDTIMEOFPREPARATION4 public property
     */
    public $dATEANDTIMEOFPREPARATION4;

    /**
     * @todo Write general description for this property
     * @maps InterchangeControlReference_5
     * @var string|null $interchangeControlReference5 public property
     */
    public $interchangeControlReference5;

    /**
     * @todo Write general description for this property
     * @maps RECIPIENTSREFERENCEPASSWORDDETAILS_6
     * @var \EdiNationAPILib\Models\S005|null $rECIPIENTSREFERENCEPASSWORDDETAILS6 public property
     */
    public $rECIPIENTSREFERENCEPASSWORDDETAILS6;

    /**
     * @todo Write general description for this property
     * @maps ApplicationReference_7
     * @var string|null $applicationReference7 public property
     */
    public $applicationReference7;

    /**
     * @todo Write general description for this property
     * @maps ProcessingPriorityCode_8
     * @var string|null $processingPriorityCode8 public property
     */
    public $processingPriorityCode8;

    /**
     * @todo Write general description for this property
     * @maps AcknowledgementRequest_9
     * @var string|null $acknowledgementRequest9 public property
     */
    public $acknowledgementRequest9;

    /**
     * @todo Write general description for this property
     * @maps InterchangeAgreementIdentifier_10
     * @var string|null $interchangeAgreementIdentifier10 public property
     */
    public $interchangeAgreementIdentifier10;

    /**
     * @todo Write general description for this property
     * @maps TestIndicator_11
     * @var string|null $testIndicator11 public property
     */
    public $testIndicator11;

    /**
     * Constructor to set initial or default values of member properties
     * @param S001   $sYNTAXIDENTIFIER1                   Initialization value for $this->sYNTAXIDENTIFIER1
     * @param S002   $iNTERCHANGESENDER2                  Initialization value for $this->iNTERCHANGESENDER2
     * @param S003   $iNTERCHANGERECIPIENT3               Initialization value for $this->iNTERCHANGERECIPIENT3
     * @param S004   $dATEANDTIMEOFPREPARATION4           Initialization value for $this->dATEANDTIMEOFPREPARATION4
     * @param string $interchangeControlReference5        Initialization value for $this-
     *                                                      >interchangeControlReference5
     * @param S005   $rECIPIENTSREFERENCEPASSWORDDETAILS6 Initialization value for $this-
     *                                                      >rECIPIENTSREFERENCEPASSWORDDETAILS6
     * @param string $applicationReference7               Initialization value for $this->applicationReference7
     * @param string $processingPriorityCode8             Initialization value for $this->processingPriorityCode8
     * @param string $acknowledgementRequest9             Initialization value for $this->acknowledgementRequest9
     * @param string $interchangeAgreementIdentifier10    Initialization value for $this-
     *                                                      >interchangeAgreementIdentifier10
     * @param string $testIndicator11                     Initialization value for $this->testIndicator11
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->sYNTAXIDENTIFIER1                   = func_get_arg(0);
            $this->iNTERCHANGESENDER2                  = func_get_arg(1);
            $this->iNTERCHANGERECIPIENT3               = func_get_arg(2);
            $this->dATEANDTIMEOFPREPARATION4           = func_get_arg(3);
            $this->interchangeControlReference5        = func_get_arg(4);
            $this->rECIPIENTSREFERENCEPASSWORDDETAILS6 = func_get_arg(5);
            $this->applicationReference7               = func_get_arg(6);
            $this->processingPriorityCode8             = func_get_arg(7);
            $this->acknowledgementRequest9             = func_get_arg(8);
            $this->interchangeAgreementIdentifier10    = func_get_arg(9);
            $this->testIndicator11                     = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['SYNTAXIDENTIFIER_1']                   = $this->sYNTAXIDENTIFIER1;
        $json['INTERCHANGESENDER_2']                  = $this->iNTERCHANGESENDER2;
        $json['INTERCHANGERECIPIENT_3']               = $this->iNTERCHANGERECIPIENT3;
        $json['DATEANDTIMEOFPREPARATION_4']           = $this->dATEANDTIMEOFPREPARATION4;
        $json['InterchangeControlReference_5']        = $this->interchangeControlReference5;
        $json['RECIPIENTSREFERENCEPASSWORDDETAILS_6'] = $this->rECIPIENTSREFERENCEPASSWORDDETAILS6;
        $json['ApplicationReference_7']               = $this->applicationReference7;
        $json['ProcessingPriorityCode_8']             = $this->processingPriorityCode8;
        $json['AcknowledgementRequest_9']             = $this->acknowledgementRequest9;
        $json['InterchangeAgreementIdentifier_10']    = $this->interchangeAgreementIdentifier10;
        $json['TestIndicator_11']                     = $this->testIndicator11;

        return $json;
    }
}

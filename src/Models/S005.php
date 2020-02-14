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
class S005 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps RecipientReferencePassword_1
     * @var string|null $recipientReferencePassword1 public property
     */
    public $recipientReferencePassword1;

    /**
     * @todo Write general description for this property
     * @maps RecipientReferencePasswordQualifier_2
     * @var string|null $recipientReferencePasswordQualifier2 public property
     */
    public $recipientReferencePasswordQualifier2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $recipientReferencePassword1          Initialization value for $this-
     *                                                       >recipientReferencePassword1
     * @param string $recipientReferencePasswordQualifier2 Initialization value for $this-
     *                                                       >recipientReferencePasswordQualifier2
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->recipientReferencePassword1          = func_get_arg(0);
            $this->recipientReferencePasswordQualifier2 = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['RecipientReferencePassword_1']          = $this->recipientReferencePassword1;
        $json['RecipientReferencePasswordQualifier_2'] = $this->recipientReferencePasswordQualifier2;

        return $json;
    }
}

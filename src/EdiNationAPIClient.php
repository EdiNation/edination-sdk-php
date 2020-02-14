<?php
/*
 * EdiNationAPILib
 *
 * This file was automatically generated for EdiNation by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EdiNationAPILib;

use EdiNationAPILib\Controllers;

/**
 * EdiNationAPILib client class
 */
class EdiNationAPIClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $ocpApimSubscriptionKey = null
    ) {
        Configuration::$ocpApimSubscriptionKey = $ocpApimSubscriptionKey ? $ocpApimSubscriptionKey : Configuration::$ocpApimSubscriptionKey;
    }
    /**
     * Singleton access to Edifact controller
     * @return Controllers\EdifactController The *Singleton* instance
     */
    public function getEdifact()
    {
        return Controllers\EdifactController::getInstance();
    }
    /**
     * Singleton access to EdiModel controller
     * @return Controllers\EdiModelController The *Singleton* instance
     */
    public function getEdiModel()
    {
        return Controllers\EdiModelController::getInstance();
    }
    /**
     * Singleton access to X12 controller
     * @return Controllers\X12Controller The *Singleton* instance
     */
    public function getX12()
    {
        return Controllers\X12Controller::getInstance();
    }
}

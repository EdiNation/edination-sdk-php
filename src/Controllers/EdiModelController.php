<?php
/*
 * EdiNationAPILib
 *
 * This file was automatically generated for EdiNation by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EdiNationAPILib\Controllers;

use EdiNationAPILib\APIException;
use EdiNationAPILib\APIHelper;
use EdiNationAPILib\Configuration;
use EdiNationAPILib\Models;
use EdiNationAPILib\Exceptions;
use EdiNationAPILib\Http\HttpRequest;
use EdiNationAPILib\Http\HttpResponse;
use EdiNationAPILib\Http\HttpMethod;
use EdiNationAPILib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class EdiModelController extends BaseController
{
    /**
     * @var EdiModelController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return EdiModelController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Uploads a model file to a subscription. It must be a valid DOT NET assembly.
     *
     * @param string $fileName Upload File
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function upload(
        $fileName
    ) {

        //prepare query string for API call
        $_queryBuilder = '/models';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Ocp-Apim-Subscription-Key' => Configuration::$ocpApimSubscriptionKey
        );

        //prepare parameters
        $_parameters = array (
            'fileName' => Request\Body::File($fileName)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request::buildHTTPCurlQuery($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorDetailsException('Bad Request', $_httpContext);
        }

        if ($response->code == 500) {
            throw new Exceptions\ErrorDetailsException('Server Error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Retrieves all models for a subscription.
     *
     * @param bool $system (optional) Whether to retrieve EdiNation's or custom uploaded models.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getModels(
        $system = true
    ) {

        //prepare query string for API call
        $_queryBuilder = '/models';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'system' => (null != $system) ? var_export($system, true) : true,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Ocp-Apim-Subscription-Key' => Configuration::$ocpApimSubscriptionKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorDetailsException('Bad Request', $_httpContext);
        }

        if ($response->code == 500) {
            throw new Exceptions\ErrorDetailsException('Server Error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'EdiNationAPILib\\Models\\EdiModel');
    }

    /**
     * Retrieve a particular model file as a stream.
     *
     * @param string $id     The model name.
     * @param bool   $system (optional) Whether to search in EdiNation's or custom uploaded models.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getModel(
        $id,
        $system = true
    ) {

        //prepare query string for API call
        $_queryBuilder = '/models/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'     => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'system' => (null != $system) ? var_export($system, true) : true,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Ocp-Apim-Subscription-Key' => Configuration::$ocpApimSubscriptionKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorDetailsException('Bad Request', $_httpContext);
        }

        if ($response->code == 500) {
            throw new Exceptions\ErrorDetailsException('Server Error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Deletes a particular model from the custom models.
     *
     * @param string $id The model name.
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function delete(
        $id
    ) {

        //prepare query string for API call
        $_queryBuilder = '/models/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Ocp-Apim-Subscription-Key' => Configuration::$ocpApimSubscriptionKey
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorDetailsException('Bad Request', $_httpContext);
        }

        if ($response->code == 500) {
            throw new Exceptions\ErrorDetailsException('Server Error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }
}

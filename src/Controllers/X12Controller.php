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
class X12Controller extends BaseController
{
    /**
     * @var X12Controller The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return X12Controller The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Reads an X12 file and returns its contents translated to an array of X12Interchange objects.
     *
     * @param string $fileName         Upload File
     * @param bool   $ignoreNullValues (optional) Whether to ignore all null values in the response. The default is
     *                                 false.
     * @param bool   $continueOnError  (optional) Whether to continue reading if a corrupt interchange is encountered.
     *                                 The default is false.
     * @param string $charSet          (optional) The encoding of the file contents. The default is utf-8. The
     *                                 available values are: unicodeFFFE, utf-32, utf-32BE, us-ascii, iso-8859-1, utf-7,
     *                                 utf-8, utf-16.
     * @param string $model            (optional) The model to use. By default, the API will infer the model based on
     *                                 the transaction and version identifiers.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function read(
        $fileName,
        $ignoreNullValues = false,
        $continueOnError = false,
        $charSet = 'utf-8',
        $model = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/x12/read';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'ignoreNullValues' => (null != $ignoreNullValues) ? var_export($ignoreNullValues, true) : false,
            'continueOnError'  => (null != $continueOnError) ? var_export($continueOnError, true) : false,
            'charSet'          => (null != $charSet) ? $charSet : 'utf-8',
            'model'            => $model,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'     => BaseController::USER_AGENT,
            'Accept'         => 'application/json',
            'Ocp-Apim-Subscription-Key' => Configuration::$ocpApimSubscriptionKey
        );

        //prepare parameters
        $_parameters = array (
            'fileName'       => Request\Body::File($fileName)
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

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'EdiNationAPILib\\Models\\X12Interchange');
    }

    /**
     * Translates an X12Interchange object to a raw X12 interchange and returns it as a stream.
     *
     * @param bool                  $preserveWhitespace (optional) Whether to preserve blank data elements so the
     *                                                  output contains multiple delimiters instead of omitting any
     *                                                  excess delimiters. The default is false.
     * @param string                $charSet            (optional) The encoding of the file contents. The default is
     *                                                  utf-8. The available values are: unicodeFFFE, utf-32, utf-32BE,
     *                                                  us-ascii, iso-8859-1, utf-7, utf-8, utf-16.
     * @param string                $postfix            (optional) The postfix to be applied at the end of each segment,
     *                                                  just after the segment separator. This is usually a carriage
     *                                                  return (CR), line feed (LF) or both. By default, there is no
     *                                                  postfix.
     * @param string                $contentType        (optional) Example: application/json
     * @param Models\X12Interchange $body               (optional) The X12Interchange object to translate to raw X12.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function write(
        $preserveWhitespace = false,
        $charSet = 'utf-8',
        $postfix = null,
        $contentType = 'application/json',
        $body = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/x12/write';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'preserveWhitespace' => (null != $preserveWhitespace) ? var_export($preserveWhitespace, true) : false,
            'charSet'            => (null != $charSet) ? $charSet : 'utf-8',
            'postfix'            => $postfix,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'       => BaseController::USER_AGENT,
            'Ocp-Apim-Subscription-Key' => Configuration::$ocpApimSubscriptionKey,
            'Content-Type'       => (null != $contentType) ? $contentType : 'application/json'
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

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
     * Validates an X12Interchange object according to the X12 standard rules for each version and
     * transaction.
     *
     * @param bool                  $basicSyntax   (optional) All data elements with alpha (A) or alphanumeric (AN)
     *                                             data types are validated against a syntax set of allowed characters.
     *                                             The default syntax set is the Extended, hence the default for this
     *                                             parameter is false. By setting this to true, validation will use the
     *                                             Basic syntax set.
     * @param string                $syntaxSet     (optional) In case you need to validate against a syntax set,
     *                                             different than Basic and Extended, populate this filed with all of
     *                                             the allowed symbols, url-escaped.
     * @param bool                  $skipTrailer   (optional) You are allowed to validate an X12Interchange with
     *                                             missing interchange, functional group or transaction trailers (IEA,
     *                                             GE, SE). This is because these will be automatically applied during
     *                                             the Write oprtaion so you don't have to worry about counting the
     *                                             items. By default it is expected that all trailers are present when
     *                                             you validate the X12Interchange and by default, this is set to false.
     *                                             To skip all trailer validation, set this to true.
     * @param bool                  $structureOnly (optional) This is equivalent to HIPAA Snip level 1, where only the
     *                                             structure and control segments are validated. By default, this is
     *                                             set to false, however if you want to not validate things such as
     *                                             data types, number of repeteitions or dates, set this to true.
     * @param string                $contentType   (optional) Example: application/json
     * @param Models\X12Interchange $body          (optional) The X12Interchange object to validate.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function validate(
        $basicSyntax = false,
        $syntaxSet = null,
        $skipTrailer = false,
        $structureOnly = false,
        $contentType = 'application/json',
        $body = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/x12/validate';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'basicSyntax'   => (null != $basicSyntax) ? var_export($basicSyntax, true) : false,
            'syntaxSet'     => $syntaxSet,
            'skipTrailer'   => (null != $skipTrailer) ? var_export($skipTrailer, true) : false,
            'structureOnly' => (null != $structureOnly) ? var_export($structureOnly, true) : false,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Ocp-Apim-Subscription-Key' => Configuration::$ocpApimSubscriptionKey,
            'Content-Type'    => (null != $contentType) ? $contentType : 'application/json'
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

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

        return $mapper->mapClass($response->body, 'EdiNationAPILib\\Models\\OperationResult');
    }

    /**
     * Generates functional/implementation and/or technical acknowledment(s) for the requested
     * X12Interchange.
     *
     * @param bool                  $basicSyntax          (optional) All data elements with alpha (A) or alphanumeric
     *                                                    (AN) data types are validated against a syntax set of allowed
     *                                                    characters. The default syntax set is the Extended, hence the
     *                                                    default for this parameter is false. By setting this to true,
     *                                                    validation will use the Basic syntax set.
     * @param string                $syntaxSet            (optional) In case you need to validate against a syntax set,
     *                                                    different than Basic and Extended, populate this filed with
     *                                                    all of the allowed symbols, url-escaped.
     * @param bool                  $detectDuplicates     (optional) If you need to detect duplicates as in functional
     *                                                    groups or transactions with the same reference number, set
     *                                                    this flag to true. The default is false.
     * @param integer               $tranRefNumber        (optional) The default is 1. Set this to whatever the 997 or
     *                                                    999 X12Interchange.ST.TransactionSetControlNumber_02 needs to
     *                                                    be. In case there are multiple acknowledgments (for multiple
     *                                                    functional groups), this will be starting reference number
     *                                                    and every subsequent acknowledgment will have the previous
     *                                                    reference number incremented with 1.
     * @param integer               $interchangeRefNumber (optional) The default is 1. Set this to whatever the 997 or
     *                                                    999 X12Interchange.ISA.InterchangeControlNumber_13 needs to
     *                                                    be.
     * @param bool                  $ackForValidTrans     (optional) The default is false. Set this to true if you need
     *                                                    AK2 loops included for all valid transaction as well. By
     *                                                    default AK2 loops are generated only for invalid transactions.
     * @param bool                  $batchAcks            (optional) The default is true. Set this to false if you need
     *                                                    to generate separate X12Interchange for each acknowledgment.
     *                                                    By default all acknowledgments are batched in the same
     *                                                    X12Interchange.
     * @param string                $technicalAck         (optional) The default technical acknowledgment TA1 is
     *                                                    generated according to X12Interchange.ISA.
     *                                                    AcknowledgementRequested_14. You can either enforce it to
     *                                                    always generate TA1s or supress it to never generate any TA1s.
     *                                                    This will override the flag in X12Interchange.ISA.
     *                                                    AcknowledgementRequested_14.              The available
     *                                                    values are: default, enforce, suppress.
     * @param string                $ack                  (optional) The default value is 997. The type of
     *                                                    acknowledgment being generated. Set this to 999 if you need
     *                                                    to generate an implementation instead of functional
     *                                                    acknowledgment. The available values are: 997, 999.
     * @param bool                  $ak901isP             (optional) The value of the AK9's first element. By default
     *                                                    it is "E". Set this to true if you want this value to be "P"
     *                                                    instead.
     * @param string                $contentType          (optional) Example: application/json
     * @param Models\X12Interchange $body                 (optional) The X12Interchange object to acknowledge.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function ack(
        $basicSyntax = false,
        $syntaxSet = null,
        $detectDuplicates = false,
        $tranRefNumber = 1,
        $interchangeRefNumber = 1,
        $ackForValidTrans = false,
        $batchAcks = true,
        $technicalAck = null,
        $ack = '997',
        $ak901isP = false,
        $contentType = 'application/json',
        $body = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/x12/ack';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'basicSyntax'          => (null != $basicSyntax) ? var_export($basicSyntax, true) : false,
            'syntaxSet'            => $syntaxSet,
            'detectDuplicates'     => (null != $detectDuplicates) ? var_export($detectDuplicates, true) : false,
            'tranRefNumber'        => (null != $tranRefNumber) ? $tranRefNumber : 1,
            'interchangeRefNumber' => (null != $interchangeRefNumber) ? $interchangeRefNumber : 1,
            'ackForValidTrans'     => (null != $ackForValidTrans) ? var_export($ackForValidTrans, true) : false,
            'batchAcks'            => (null != $batchAcks) ? var_export($batchAcks, true) : true,
            'technicalAck'         => $technicalAck,
            'ack'                  => (null != $ack) ? $ack : '997',
            'ak901isP'             => (null != $ak901isP) ? var_export($ak901isP, true) : false,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => BaseController::USER_AGENT,
            'Accept'             => 'application/json',
            'Ocp-Apim-Subscription-Key' => Configuration::$ocpApimSubscriptionKey,
            'Content-Type'         => (null != $contentType) ? $contentType : 'application/json'
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

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

        return $mapper->mapClassArray($response->body, 'EdiNationAPILib\\Models\\X12Interchange');
    }
}

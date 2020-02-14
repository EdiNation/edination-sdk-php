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
class EdifactController extends BaseController
{
    /**
     * @var EdifactController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return EdifactController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Reads an EDIFACT file and returns its contents translated to an array of EdifactInterchange objects.
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
     * @param bool   $eancomS3         (optional) The default syntax for EANCOM transactions. By default all EANCOM
     *                                 transactions will be translated and validated according to the rules of Syntax 4.
     *                                 Set this flag to true if you need Syntax 3 to be used.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function read(
        $fileName,
        $ignoreNullValues = false,
        $continueOnError = false,
        $charSet = 'utf-8',
        $model = null,
        $eancomS3 = false
    ) {

        //prepare query string for API call
        $_queryBuilder = '/edifact/read';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'ignoreNullValues' => (null != $ignoreNullValues) ? var_export($ignoreNullValues, true) : false,
            'continueOnError'  => (null != $continueOnError) ? var_export($continueOnError, true) : false,
            'charSet'          => (null != $charSet) ? $charSet : 'utf-8',
            'model'            => $model,
            'eancomS3'         => (null != $eancomS3) ? var_export($eancomS3, true) : false,
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

        return $mapper->mapClassArray($response->body, 'EdiNationAPILib\\Models\\EdifactInterchange');
    }

    /**
     * Translates an EdifactInterchange object to a raw EDIFACT interchange and returns it as a stream.
     *
     * @param bool                      $preserveWhitespace         (optional) Whether to preserve blank data elements
     *                                                              so the output contains multiple delimiters instead
     *                                                              of omitting any excess delimiters. The default is
     *                                                              false.
     * @param string                    $charSet                    (optional) The encoding of the file contents. The
     *                                                              default is utf-8. The available values are:
     *                                                              unicodeFFFE, utf-32, utf-32BE, us-ascii, iso-8859-1,
     *                                                              utf-7, utf-8, utf-16.
     * @param string                    $postfix                    (optional) The postfix to be applied at the end of
     *                                                              each segment, just after the segment separator.
     *                                                              This is usually a carriage return (CR), line feed
     *                                                              (LF) or both. By default, there is no postfix.
     * @param bool                      $sameRepetionAndDataElement (optional) Sometimes the same delimiter is used to
     *                                                              denote data element separator and repetition
     *                                                              separator as in IATA transactions. By default, this
     *                                                              is false.
     * @param bool                      $eancomS3                   (optional) The default syntax for EANCOM
     *                                                              transactions. By default all EANCOM transactions
     *                                                              will be translated and validated according to the
     *                                                              rules of Syntax 4. Set this flag to true if you
     *                                                              need Syntax 3 to be used.
     * @param string                    $contentType                (optional) Example: application/json
     * @param Models\EdifactInterchange $body                       (optional) The EdifactInterchange object to
     *                                                              translate to raw EDIFACT.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function write(
        $preserveWhitespace = false,
        $charSet = 'utf-8',
        $postfix = null,
        $sameRepetionAndDataElement = false,
        $eancomS3 = false,
        $contentType = 'application/json',
        $body = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/edifact/write';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'preserveWhitespace'         => (null != $preserveWhitespace) ? var_export($preserveWhitespace, true) : false,
            'charSet'                    => (null != $charSet) ? $charSet : 'utf-8',
            'postfix'                    => $postfix,
            'sameRepetionAndDataElement' => (null != $sameRepetionAndDataElement) ? var_export($sameRepetionAndDataElement, true) : false,
            'eancomS3'                   => (null != $eancomS3) ? var_export($eancomS3, true) : false,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'               => BaseController::USER_AGENT,
            'Ocp-Apim-Subscription-Key' => Configuration::$ocpApimSubscriptionKey,
            'Content-Type'               => (null != $contentType) ? $contentType : 'application/json'
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
     * Validates an EdifactInterchange object according to the EDIFACT standard rules for each version and
     * transaction.
     *
     * @param string                    $syntaxSet     (optional) In case you need to validate against a syntax set,
     *                                                 different than UNOA and UNOB, populate this filed with all of
     *                                                 the allowed symbols, url-escaped.              All data elements
     *                                                 with alpha (A) or alphanumeric (AN) data types are validated
     *                                                 against a syntax set of allowed characters. The supported syntax
     *                                                 sets are UNOA and UNOB. The validator infers the correct syntax
     *                                                 set from EdifactInterchange.UNB.SYNTAXIDENTIFIER_1.
     *                                                 SyntaxIdentifier_1. The symbols added to this field will
     *                                                 override the corresponding sets in both UNOA and UNOB.
     * @param bool                      $skipTrailer   (optional) You are allowed to validate an EdifactInterchange
     *                                                 with missing interchange, functional group or transaction
     *                                                 trailers (UNZ, UNE, UNT). This is because these will be
     *                                                 automatically applied during the Write oprtaion so you don't
     *                                                 have to worry about counting the items. By default it is
     *                                                 expected that all trailers are present when you validate the
     *                                                 EdifactInterchange and by default, this is set to false. To skip
     *                                                 all trailer validation, set this to true.
     * @param bool                      $structureOnly (optional) This is equivalent to HIPAA Snip level 1, where only
     *                                                 the structure and control segments are validated. By default,
     *                                                 this is set to false, however if you want to not validate things
     *                                                 such as data types, number of repeteitions or dates, set this to
     *                                                 true.
     * @param string                    $decimalPoint  (optional) This could be either point . (default) or comma ,.
     * @param bool                      $eancomS3      (optional) The default syntax for EANCOM transactions. By
     *                                                 default all EANCOM transactions will be validated according to
     *                                                 the rules of Syntax 4. Set this flag to true if you need Syntax
     *                                                 3 to be used.
     * @param string                    $contentType   (optional) Example: application/json
     * @param Models\EdifactInterchange $body          (optional) The EdifactInterchange object to validate.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function validate(
        $syntaxSet = null,
        $skipTrailer = false,
        $structureOnly = false,
        $decimalPoint = '.',
        $eancomS3 = false,
        $contentType = 'application/json',
        $body = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/edifact/validate';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'syntaxSet'     => $syntaxSet,
            'skipTrailer'   => (null != $skipTrailer) ? var_export($skipTrailer, true) : false,
            'structureOnly' => (null != $structureOnly) ? var_export($structureOnly, true) : false,
            'decimalPoint'  => (null != $decimalPoint) ? $decimalPoint : '.',
            'eancomS3'      => (null != $eancomS3) ? var_export($eancomS3, true) : false,
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
     * Generates functional and/or technical CONTRL acknowledment(s) for the requested EdifactInterchange.
     *
     * @param string                    $syntaxSet            (optional) In case you need to validate against a syntax
     *                                                        set, different than UNOA and UNOB, populate this filed
     *                                                        with all of the allowed symbols, url-escaped. All data
     *                                                        elements with alpha (A) or alphanumeric (AN) data types
     *                                                        are validated against a syntax set of allowed characters.
     *                                                        The supported syntax sets are UNOA and UNOB. The
     *                                                        validator infers the correct syntax set from
     *                                                        EdifactInterchange.UNB.SYNTAXIDENTIFIER_1.
     *                                                        SyntaxIdentifier_1. The symbols added to this field will
     *                                                        override the corresponding sets in both UNOA and UNOB.
     * @param bool                      $detectDuplicates     (optional) If you need to detect duplicates as in
     *                                                        functional groups or transactions with the same reference
     *                                                        number, set this flag to true. The default is false.
     * @param integer                   $tranRefNumber        (optional) The default is 1. Set this to whatever the
     *                                                        CONTRL UNH.MessageReferenceNumber_01 needs to be.
     * @param integer                   $interchangeRefNumber (optional) The default is 1. Set this to whatever the
     *                                                        CONTRL EdifactInterchange.UNB.
     *                                                        InterchangeControlReference_5 needs to be.
     * @param bool                      $ackForValidTrans     (optional) The default is false. Set this to true if you
     *                                                        need UCM loops included for all valid transaction as well.
     *                                                        By default UCM loops are generated only for invalid
     *                                                        transactions.
     * @param bool                      $batchAcks            (optional) The default is true. Set this to false if you
     *                                                        need to generate separate EdifactInterchange for each
     *                                                        acknowledgment. By default all acknowledgments are
     *                                                        batched in the same EdifactInterchange.
     * @param string                    $technicalAck         (optional) The default technical acknowledgment CONTRL is
     *                                                        generated according to EdifactInterchange.UNB.
     *                                                        AcknowledgementRequest_9. You can either enforce it to
     *                                                        always generate technical CONTRLs or supress it to never
     *                                                        generate any technical CONTRLs. This will override the
     *                                                        flag in EdifactInterchange.UNB.AcknowledgementRequest_9.
     *                                                        The available values are: default, enforce,
     *                                                        suppress.
     * @param bool                      $eancomS3             (optional) The default syntax for EANCOM transactions. By
     *                                                        default all EANCOM transactions will be validated
     *                                                        according to the rules of Syntax 4. Set this flag to true
     *                                                        if you need Syntax 3 to be used.
     * @param string                    $contentType          (optional) Example: application/json
     * @param Models\EdifactInterchange $body                 (optional) The EdifactInterchange object to acknowledge.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function ack(
        $syntaxSet = null,
        $detectDuplicates = false,
        $tranRefNumber = 1,
        $interchangeRefNumber = 1,
        $ackForValidTrans = false,
        $batchAcks = true,
        $technicalAck = null,
        $eancomS3 = false,
        $contentType = 'application/json',
        $body = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/edifact/ack';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'syntaxSet'            => $syntaxSet,
            'detectDuplicates'     => (null != $detectDuplicates) ? var_export($detectDuplicates, true) : false,
            'tranRefNumber'        => (null != $tranRefNumber) ? $tranRefNumber : 1,
            'interchangeRefNumber' => (null != $interchangeRefNumber) ? $interchangeRefNumber : 1,
            'ackForValidTrans'     => (null != $ackForValidTrans) ? var_export($ackForValidTrans, true) : false,
            'batchAcks'            => (null != $batchAcks) ? var_export($batchAcks, true) : true,
            'technicalAck'         => $technicalAck,
            'eancomS3'             => (null != $eancomS3) ? var_export($eancomS3, true) : false,
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

        return $mapper->mapClassArray($response->body, 'EdiNationAPILib\\Models\\EdifactInterchange');
    }
}

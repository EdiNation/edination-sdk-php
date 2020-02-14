# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=EdiNation%20API-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the EdiNationAPI library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=EdiNation%20API-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=EdiNation%20API-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=EdiNation%20API-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=EdiNation%20API-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=EdiNation%20API-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=EdiNation%20API-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=EdiNation%20API-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=EdiNation%20API-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=EdiNation%20API-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=EdiNation%20API-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=EdiNation%20API-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=EdiNation%20API-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| ocpApimSubscriptionKey | API key to authenticate requests |



API client can be initialized as following.

```php
$ocpApimSubscriptionKey = 'ocpApimSubscriptionKey'; // API key to authenticate requests

$client = new EdiNationAPILib\EdiNationAPIClient($ocpApimSubscriptionKey);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [EdifactController](#edifact_controller)
* [EdiModelController](#edi_model_controller)
* [X12Controller](#x12_controller)

## <a name="edifact_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EdifactController") EdifactController

### Get singleton instance

The singleton instance of the ``` EdifactController ``` class can be accessed from the API Client.

```php
$edifact = $client->getEdifact();
```

### <a name="read"></a>![Method: ](https://apidocs.io/img/method.png ".EdifactController.read") read

> Reads an EDIFACT file and returns its contents translated to an array of EdifactInterchange objects.


```php
function read(
        $fileName,
        $ignoreNullValues = false,
        $continueOnError = false,
        $charSet = 'utf-8',
        $model = null,
        $eancomS3 = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fileName |  ``` Required ```  | Upload File |
| ignoreNullValues |  ``` Optional ```  ``` DefaultValue ```  | Whether to ignore all null values in the response. The default is false. |
| continueOnError |  ``` Optional ```  ``` DefaultValue ```  | Whether to continue reading if a corrupt interchange is encountered. The default is false. |
| charSet |  ``` Optional ```  ``` DefaultValue ```  | The encoding of the file contents. The default is utf-8. The available values are: unicodeFFFE, utf-32, utf-32BE, us-ascii, iso-8859-1, utf-7, utf-8, utf-16. |
| model |  ``` Optional ```  | The model to use. By default, the API will infer the model based on the transaction and version identifiers. |
| eancomS3 |  ``` Optional ```  ``` DefaultValue ```  | The default syntax for EANCOM transactions. By default all EANCOM transactions will be translated and validated according to the rules of Syntax 4. Set this flag to true if you need Syntax 3 to be used. |



#### Example Usage

```php
$fileName = "PathToFile";
$ignoreNullValues = false;
$continueOnError = false;
$charSet = 'utf-8';
$model = 'model';
$eancomS3 = false;

$result = $edifact->read($fileName, $ignoreNullValues, $continueOnError, $charSet, $model, $eancomS3);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



### <a name="write"></a>![Method: ](https://apidocs.io/img/method.png ".EdifactController.write") write

> Translates an EdifactInterchange object to a raw EDIFACT interchange and returns it as a stream.


```php
function write(
        $preserveWhitespace = false,
        $charSet = 'utf-8',
        $postfix = null,
        $sameRepetionAndDataElement = false,
        $eancomS3 = false,
        $contentType = 'application/json',
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| preserveWhitespace |  ``` Optional ```  ``` DefaultValue ```  | Whether to preserve blank data elements so the output contains multiple delimiters instead of omitting any excess delimiters. The default is false. |
| charSet |  ``` Optional ```  ``` DefaultValue ```  | The encoding of the file contents. The default is utf-8. The available values are: unicodeFFFE, utf-32, utf-32BE, us-ascii, iso-8859-1, utf-7, utf-8, utf-16. |
| postfix |  ``` Optional ```  | The postfix to be applied at the end of each segment, just after the segment separator. This is usually a carriage return (CR), line feed (LF) or both. By default, there is no postfix. |
| sameRepetionAndDataElement |  ``` Optional ```  ``` DefaultValue ```  | Sometimes the same delimiter is used to denote data element separator and repetition separator as in IATA transactions. By default, this is false. |
| eancomS3 |  ``` Optional ```  ``` DefaultValue ```  | The default syntax for EANCOM transactions. By default all EANCOM transactions will be translated and validated according to the rules of Syntax 4. Set this flag to true if you need Syntax 3 to be used. |
| contentType |  ``` Optional ```  ``` DefaultValue ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | The EdifactInterchange object to translate to raw EDIFACT. |



#### Example Usage

```php
$preserveWhitespace = false;
$charSet = 'utf-8';
$postfix = 'postfix';
$sameRepetionAndDataElement = false;
$eancomS3 = false;
$contentType = 'application/json';
$body = new EdifactInterchange();

$result = $edifact->write($preserveWhitespace, $charSet, $postfix, $sameRepetionAndDataElement, $eancomS3, $contentType, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



### <a name="validate"></a>![Method: ](https://apidocs.io/img/method.png ".EdifactController.validate") validate

> Validates an EdifactInterchange object according to the EDIFACT standard rules for each version and transaction.


```php
function validate(
        $syntaxSet = null,
        $skipTrailer = false,
        $structureOnly = false,
        $decimalPoint = '.',
        $eancomS3 = false,
        $contentType = 'application/json',
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| syntaxSet |  ``` Optional ```  | In case you need to validate against a syntax set, different than UNOA and UNOB, populate this filed with all of the allowed symbols, url-escaped. All data elements with alpha (A) or alphanumeric (AN) data types are validated against a syntax set of allowed characters. The supported syntax sets are UNOA and UNOB. The validator infers the correct syntax set from EdifactInterchange.UNB.SYNTAXIDENTIFIER_1.SyntaxIdentifier_1. The symbols added to this field will override the corresponding sets in both UNOA and UNOB. |
| skipTrailer |  ``` Optional ```  ``` DefaultValue ```  | You are allowed to validate an EdifactInterchange with missing interchange, functional group or transaction trailers (UNZ, UNE, UNT). This is because these will be automatically applied during the Write oprtaion so you don't have to worry about counting the items. By default it is expected that all trailers are present when you validate the EdifactInterchange and by default, this is set to false. To skip all trailer validation, set this to true. |
| structureOnly |  ``` Optional ```  ``` DefaultValue ```  | This is equivalent to HIPAA Snip level 1, where only the structure and control segments are validated. By default, this is set to false, however if you want to not validate things such as data types, number of repeteitions or dates, set this to true. |
| decimalPoint |  ``` Optional ```  ``` DefaultValue ```  | This could be either point . (default) or comma ,. |
| eancomS3 |  ``` Optional ```  ``` DefaultValue ```  | The default syntax for EANCOM transactions. By default all EANCOM transactions will be validated according to the rules of Syntax 4. Set this flag to true if you need Syntax 3 to be used. |
| contentType |  ``` Optional ```  ``` DefaultValue ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | The EdifactInterchange object to validate. |



#### Example Usage

```php
$syntaxSet = 'syntaxSet';
$skipTrailer = false;
$structureOnly = false;
$decimalPoint = '.';
$eancomS3 = false;
$contentType = 'application/json';
$body = new EdifactInterchange();

$result = $edifact->validate($syntaxSet, $skipTrailer, $structureOnly, $decimalPoint, $eancomS3, $contentType, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



### <a name="ack"></a>![Method: ](https://apidocs.io/img/method.png ".EdifactController.ack") ack

> Generates functional and/or technical CONTRL acknowledment(s) for the requested EdifactInterchange.


```php
function ack(
        $syntaxSet = null,
        $detectDuplicates = false,
        $tranRefNumber = 1,
        $interchangeRefNumber = 1,
        $ackForValidTrans = false,
        $batchAcks = true,
        $technicalAck = null,
        $eancomS3 = false,
        $contentType = 'application/json',
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| syntaxSet |  ``` Optional ```  | In case you need to validate against a syntax set, different than UNOA and UNOB, populate this filed with all of the allowed symbols, url-escaped. All data elements with alpha (A) or alphanumeric (AN) data types are validated against a syntax set of allowed characters. The supported syntax sets are UNOA and UNOB. The validator infers the correct syntax set from EdifactInterchange.UNB.SYNTAXIDENTIFIER_1.SyntaxIdentifier_1. The symbols added to this field will override the corresponding sets in both UNOA and UNOB. |
| detectDuplicates |  ``` Optional ```  ``` DefaultValue ```  | If you need to detect duplicates as in functional groups or transactions with the same reference number, set this flag to true. The default is false. |
| tranRefNumber |  ``` Optional ```  ``` DefaultValue ```  | The default is 1. Set this to whatever the CONTRL UNH.MessageReferenceNumber_01 needs to be. |
| interchangeRefNumber |  ``` Optional ```  ``` DefaultValue ```  | The default is 1. Set this to whatever the CONTRL EdifactInterchange.UNB.InterchangeControlReference_5 needs to be. |
| ackForValidTrans |  ``` Optional ```  ``` DefaultValue ```  | The default is false. Set this to true if you need UCM loops included for all valid transaction as well. By default UCM loops are generated only for invalid transactions. |
| batchAcks |  ``` Optional ```  ``` DefaultValue ```  | The default is true. Set this to false if you need to generate separate EdifactInterchange for each acknowledgment. By default all acknowledgments are batched in the same EdifactInterchange. |
| technicalAck |  ``` Optional ```  | The default technical acknowledgment CONTRL is generated according to EdifactInterchange.UNB.AcknowledgementRequest_9. You can either enforce it to always generate technical CONTRLs or supress it to never generate any technical CONTRLs. This will override the flag in EdifactInterchange.UNB.AcknowledgementRequest_9. The available values are: default, enforce, suppress. |
| eancomS3 |  ``` Optional ```  ``` DefaultValue ```  | The default syntax for EANCOM transactions. By default all EANCOM transactions will be validated according to the rules of Syntax 4. Set this flag to true if you need Syntax 3 to be used. |
| contentType |  ``` Optional ```  ``` DefaultValue ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | The EdifactInterchange object to acknowledge. |



#### Example Usage

```php
$syntaxSet = 'syntaxSet';
$detectDuplicates = false;
$tranRefNumber = 1;
$interchangeRefNumber = 1;
$ackForValidTrans = false;
$batchAcks = true;
$technicalAck = 'technicalAck';
$eancomS3 = false;
$contentType = 'application/json';
$body = new EdifactInterchange();

$result = $edifact->ack($syntaxSet, $detectDuplicates, $tranRefNumber, $interchangeRefNumber, $ackForValidTrans, $batchAcks, $technicalAck, $eancomS3, $contentType, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



[Back to List of Controllers](#list_of_controllers)

## <a name="edi_model_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EdiModelController") EdiModelController

### Get singleton instance

The singleton instance of the ``` EdiModelController ``` class can be accessed from the API Client.

```php
$ediModel = $client->getEdiModel();
```

### <a name="upload"></a>![Method: ](https://apidocs.io/img/method.png ".EdiModelController.upload") upload

> Uploads a model file to a subscription. It must be a valid DOT NET assembly.


```php
function upload($fileName)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fileName |  ``` Required ```  | Upload File |



#### Example Usage

```php
$fileName = "PathToFile";

$ediModel->upload($fileName);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



### <a name="get_models"></a>![Method: ](https://apidocs.io/img/method.png ".EdiModelController.getModels") getModels

> Retrieves all models for a subscription.


```php
function getModels($system = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| system |  ``` Optional ```  ``` DefaultValue ```  | Whether to retrieve EdiNation's or custom uploaded models. |



#### Example Usage

```php
$system = true;

$result = $ediModel->getModels($system);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



### <a name="get_model"></a>![Method: ](https://apidocs.io/img/method.png ".EdiModelController.getModel") getModel

> Retrieve a particular model file as a stream.


```php
function getModel(
        $id,
        $system = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The model name. |
| system |  ``` Optional ```  ``` DefaultValue ```  | Whether to search in EdiNation's or custom uploaded models. |



#### Example Usage

```php
$id = 'id';
$system = true;

$result = $ediModel->getModel($id, $system);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



### <a name="delete"></a>![Method: ](https://apidocs.io/img/method.png ".EdiModelController.delete") delete

> Deletes a particular model from the custom models.


```php
function delete($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The model name. |



#### Example Usage

```php
$id = 'id';

$ediModel->delete($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



[Back to List of Controllers](#list_of_controllers)

## <a name="x12_controller"></a>![Class: ](https://apidocs.io/img/class.png ".X12Controller") X12Controller

### Get singleton instance

The singleton instance of the ``` X12Controller ``` class can be accessed from the API Client.

```php
$x12 = $client->getX12();
```

### <a name="read"></a>![Method: ](https://apidocs.io/img/method.png ".X12Controller.read") read

> Reads an X12 file and returns its contents translated to an array of X12Interchange objects.


```php
function read(
        $fileName,
        $ignoreNullValues = false,
        $continueOnError = false,
        $charSet = 'utf-8',
        $model = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fileName |  ``` Required ```  | Upload File |
| ignoreNullValues |  ``` Optional ```  ``` DefaultValue ```  | Whether to ignore all null values in the response. The default is false. |
| continueOnError |  ``` Optional ```  ``` DefaultValue ```  | Whether to continue reading if a corrupt interchange is encountered. The default is false. |
| charSet |  ``` Optional ```  ``` DefaultValue ```  | The encoding of the file contents. The default is utf-8. The available values are: unicodeFFFE, utf-32, utf-32BE, us-ascii, iso-8859-1, utf-7, utf-8, utf-16. |
| model |  ``` Optional ```  | The model to use. By default, the API will infer the model based on the transaction and version identifiers. |



#### Example Usage

```php
$fileName = "PathToFile";
$ignoreNullValues = false;
$continueOnError = false;
$charSet = 'utf-8';
$model = 'model';

$result = $x12->read($fileName, $ignoreNullValues, $continueOnError, $charSet, $model);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



### <a name="write"></a>![Method: ](https://apidocs.io/img/method.png ".X12Controller.write") write

> Translates an X12Interchange object to a raw X12 interchange and returns it as a stream.


```php
function write(
        $preserveWhitespace = false,
        $charSet = 'utf-8',
        $postfix = null,
        $contentType = 'application/json',
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| preserveWhitespace |  ``` Optional ```  ``` DefaultValue ```  | Whether to preserve blank data elements so the output contains multiple delimiters instead of omitting any excess delimiters. The default is false. |
| charSet |  ``` Optional ```  ``` DefaultValue ```  | The encoding of the file contents. The default is utf-8. The available values are: unicodeFFFE, utf-32, utf-32BE, us-ascii, iso-8859-1, utf-7, utf-8, utf-16. |
| postfix |  ``` Optional ```  | The postfix to be applied at the end of each segment, just after the segment separator. This is usually a carriage return (CR), line feed (LF) or both. By default, there is no postfix. |
| contentType |  ``` Optional ```  ``` DefaultValue ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | The X12Interchange object to translate to raw X12. |



#### Example Usage

```php
$preserveWhitespace = false;
$charSet = 'utf-8';
$postfix = 'postfix';
$contentType = 'application/json';
$body = new X12Interchange();

$result = $x12->write($preserveWhitespace, $charSet, $postfix, $contentType, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



### <a name="validate"></a>![Method: ](https://apidocs.io/img/method.png ".X12Controller.validate") validate

> Validates an X12Interchange object according to the X12 standard rules for each version and transaction.


```php
function validate(
        $basicSyntax = false,
        $syntaxSet = null,
        $skipTrailer = false,
        $structureOnly = false,
        $contentType = 'application/json',
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| basicSyntax |  ``` Optional ```  ``` DefaultValue ```  | All data elements with alpha (A) or alphanumeric (AN) data types are validated against a syntax set of allowed characters. The default syntax set is the Extended, hence the default for this parameter is false. By setting this to true, validation will use the Basic syntax set. |
| syntaxSet |  ``` Optional ```  | In case you need to validate against a syntax set, different than Basic and Extended, populate this filed with all of the allowed symbols, url-escaped. |
| skipTrailer |  ``` Optional ```  ``` DefaultValue ```  | You are allowed to validate an X12Interchange with missing interchange, functional group or transaction trailers (IEA, GE, SE). This is because these will be automatically applied during the Write oprtaion so you don't have to worry about counting the items. By default it is expected that all trailers are present when you validate the X12Interchange and by default, this is set to false. To skip all trailer validation, set this to true. |
| structureOnly |  ``` Optional ```  ``` DefaultValue ```  | This is equivalent to HIPAA Snip level 1, where only the structure and control segments are validated. By default, this is set to false, however if you want to not validate things such as data types, number of repeteitions or dates, set this to true. |
| contentType |  ``` Optional ```  ``` DefaultValue ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | The X12Interchange object to validate. |



#### Example Usage

```php
$basicSyntax = false;
$syntaxSet = 'syntaxSet';
$skipTrailer = false;
$structureOnly = false;
$contentType = 'application/json';
$body = new X12Interchange();

$result = $x12->validate($basicSyntax, $syntaxSet, $skipTrailer, $structureOnly, $contentType, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



### <a name="ack"></a>![Method: ](https://apidocs.io/img/method.png ".X12Controller.ack") ack

> Generates functional/implementation and/or technical acknowledment(s) for the requested X12Interchange.


```php
function ack(
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
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| basicSyntax |  ``` Optional ```  ``` DefaultValue ```  | All data elements with alpha (A) or alphanumeric (AN) data types are validated against a syntax set of allowed characters. The default syntax set is the Extended, hence the default for this parameter is false. By setting this to true, validation will use the Basic syntax set. |
| syntaxSet |  ``` Optional ```  | In case you need to validate against a syntax set, different than Basic and Extended, populate this filed with all of the allowed symbols, url-escaped. |
| detectDuplicates |  ``` Optional ```  ``` DefaultValue ```  | If you need to detect duplicates as in functional groups or transactions with the same reference number, set this flag to true. The default is false. |
| tranRefNumber |  ``` Optional ```  ``` DefaultValue ```  | The default is 1. Set this to whatever the 997 or 999 X12Interchange.ST.TransactionSetControlNumber_02 needs to be. In case there are multiple acknowledgments (for multiple functional groups), this will be starting reference number and every subsequent acknowledgment will have the previous reference number incremented with 1. |
| interchangeRefNumber |  ``` Optional ```  ``` DefaultValue ```  | The default is 1. Set this to whatever the 997 or 999 X12Interchange.ISA.InterchangeControlNumber_13 needs to be. |
| ackForValidTrans |  ``` Optional ```  ``` DefaultValue ```  | The default is false. Set this to true if you need AK2 loops included for all valid transaction as well. By default AK2 loops are generated only for invalid transactions. |
| batchAcks |  ``` Optional ```  ``` DefaultValue ```  | The default is true. Set this to false if you need to generate separate X12Interchange for each acknowledgment. By default all acknowledgments are batched in the same X12Interchange. |
| technicalAck |  ``` Optional ```  | The default technical acknowledgment TA1 is generated according to X12Interchange.ISA.AcknowledgementRequested_14. You can either enforce it to always generate TA1s or supress it to never generate any TA1s. This will override the flag in X12Interchange.ISA.AcknowledgementRequested_14. The available values are: default, enforce, suppress. |
| ack |  ``` Optional ```  ``` DefaultValue ```  | The default value is 997. The type of acknowledgment being generated. Set this to 999 if you need to generate an implementation instead of functional acknowledgment. The available values are: 997, 999. |
| ak901isP |  ``` Optional ```  ``` DefaultValue ```  | The value of the AK9's first element. By default it is "E". Set this to true if you want this value to be "P" instead. |
| contentType |  ``` Optional ```  ``` DefaultValue ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | The X12Interchange object to acknowledge. |



#### Example Usage

```php
$basicSyntax = false;
$syntaxSet = 'syntaxSet';
$detectDuplicates = false;
$tranRefNumber = 1;
$interchangeRefNumber = 1;
$ackForValidTrans = false;
$batchAcks = true;
$technicalAck = 'technicalAck';
$ack = '997';
$ak901isP = false;
$contentType = 'application/json';
$body = new X12Interchange();

$result = $x12->ack($basicSyntax, $syntaxSet, $detectDuplicates, $tranRefNumber, $interchangeRefNumber, $ackForValidTrans, $batchAcks, $technicalAck, $ack, $ak901isP, $contentType, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Bad Request |
| 500 | Server Error |



[Back to List of Controllers](#list_of_controllers)




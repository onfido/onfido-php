# onfido-php
The Onfido API is used to submit check requests.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 2.0.0
- Package version: 4.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.1 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/onfido/api-php-client.git"
    }
  ],
  "require": {
    "onfido/api-php-client": "^4.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/onfido-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

// Limit the at-rest region, if needed (optional, see https://documentation.onfido.com/#regions)
// $config->setHost($config->getHostFromSettings(1, array("region" => "us")));

$api = new Onfido\Api\DefaultApi(null, $config);

// Setting applicant details
$applicant = new Onfido\Model\Applicant();
$applicant->setFirstName('John');
$applicant->setLastName('Smith');
$applicant->setDob(new DateTime('1980-01-22'));
$applicant->setCountry('GBR');

$address = new Onfido\Model\Address();
$address->setBuildingNumber('100');
$address->setStreet('Main Street');
$address->setTown('London');
$address->setPostcode('SW4 6EH');
$address->setCountry('GBR');

$applicant->setAddresses(array($address));

// Setting check details
$check = new Onfido\Model\Check();
$check->setType('express');
$report = new Onfido\Model\Report();
$report->setName('identity');
$check->setReports(array($report));

try {
    $applicantData = $api->createApplicant($applicant);
    $applicantId = $applicantData->getId();
    $checkData = $api->createCheck($applicantId, $check);
    print_r($checkData);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}

?>

```

## Documentation for API Endpoints

All URIs are relative to *https://api.onfido.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**cancelReport**](docs/Api/DefaultApi.md#cancelreport) | **POST** /checks/{check_id}/reports/{report_id}/cancel | This endpoint is for cancelling individual paused reports.
*DefaultApi* | [**createApplicant**](docs/Api/DefaultApi.md#createapplicant) | **POST** /applicants | Create Applicant
*DefaultApi* | [**createCheck**](docs/Api/DefaultApi.md#createcheck) | **POST** /applicants/{applicant_id}/checks | Create a check
*DefaultApi* | [**createWebhook**](docs/Api/DefaultApi.md#createwebhook) | **POST** /webhooks | Create a webhook
*DefaultApi* | [**destroyApplicant**](docs/Api/DefaultApi.md#destroyapplicant) | **DELETE** /applicants/{applicant_id} | Delete Applicant
*DefaultApi* | [**downloadDocument**](docs/Api/DefaultApi.md#downloaddocument) | **GET** /applicants/{applicant_id}/documents/{document_id}/download | Download a documents raw data
*DefaultApi* | [**downloadLivePhoto**](docs/Api/DefaultApi.md#downloadlivephoto) | **GET** /live_photos/{live_photo_id}/download | Download live photo
*DefaultApi* | [**downloadLiveVideo**](docs/Api/DefaultApi.md#downloadlivevideo) | **GET** /live_videos/{live_video_id}/download | Download live video
*DefaultApi* | [**findAddresses**](docs/Api/DefaultApi.md#findaddresses) | **GET** /addresses/pick | Search for addresses by postcode
*DefaultApi* | [**findApplicant**](docs/Api/DefaultApi.md#findapplicant) | **GET** /applicants/{applicant_id} | Retrieve Applicant
*DefaultApi* | [**findCheck**](docs/Api/DefaultApi.md#findcheck) | **GET** /applicants/{applicant_id}/checks/{check_id} | Retrieve a Check
*DefaultApi* | [**findDocument**](docs/Api/DefaultApi.md#finddocument) | **GET** /applicants/{applicant_id}/documents/{document_id} | A single document can be retrieved by calling this endpoint with the document’s unique identifier.
*DefaultApi* | [**findLivePhoto**](docs/Api/DefaultApi.md#findlivephoto) | **GET** /live_photos/{live_photo_id} | Retrieve live photo
*DefaultApi* | [**findLiveVideo**](docs/Api/DefaultApi.md#findlivevideo) | **GET** /live_videos/{live_video_id} | Retrieve live video
*DefaultApi* | [**findReport**](docs/Api/DefaultApi.md#findreport) | **GET** /checks/{check_id}/reports/{report_id} | A single report can be retrieved using this endpoint with the corresponding unique identifier.
*DefaultApi* | [**findReportTypeGroup**](docs/Api/DefaultApi.md#findreporttypegroup) | **GET** /report_type_groups/{report_type_group_id} | Retrieve single report type group object
*DefaultApi* | [**findWebhook**](docs/Api/DefaultApi.md#findwebhook) | **GET** /webhooks/{webhook_id} | Retrieve a Webhook
*DefaultApi* | [**generateSdkToken**](docs/Api/DefaultApi.md#generatesdktoken) | **POST** /sdk_token | Generate a SDK token
*DefaultApi* | [**listApplicants**](docs/Api/DefaultApi.md#listapplicants) | **GET** /applicants | List Applicants
*DefaultApi* | [**listChecks**](docs/Api/DefaultApi.md#listchecks) | **GET** /applicants/{applicant_id}/checks | Retrieve Checks
*DefaultApi* | [**listDocuments**](docs/Api/DefaultApi.md#listdocuments) | **GET** /applicants/{applicant_id}/documents | List documents
*DefaultApi* | [**listLivePhotos**](docs/Api/DefaultApi.md#listlivephotos) | **GET** /live_photos | List live photos
*DefaultApi* | [**listLiveVideos**](docs/Api/DefaultApi.md#listlivevideos) | **GET** /live_videos | List live videos
*DefaultApi* | [**listReportTypeGroups**](docs/Api/DefaultApi.md#listreporttypegroups) | **GET** /report_type_groups | Retrieve all report type groups
*DefaultApi* | [**listReports**](docs/Api/DefaultApi.md#listreports) | **GET** /checks/{check_id}/reports | All the reports belonging to a particular check can be listed from this endpoint.
*DefaultApi* | [**listWebhooks**](docs/Api/DefaultApi.md#listwebhooks) | **GET** /webhooks | List webhooks
*DefaultApi* | [**restoreApplicant**](docs/Api/DefaultApi.md#restoreapplicant) | **POST** /applicants/{applicant_id}/restore | Restore Applicant
*DefaultApi* | [**resumeCheck**](docs/Api/DefaultApi.md#resumecheck) | **POST** /checks/{check_id}/resume | Resume a Check
*DefaultApi* | [**resumeReport**](docs/Api/DefaultApi.md#resumereport) | **POST** /checks/{check_id}/reports/{report_id}/resume | This endpoint is for resuming individual paused reports.
*DefaultApi* | [**updateApplicant**](docs/Api/DefaultApi.md#updateapplicant) | **PUT** /applicants/{applicant_id} | Update Applicant
*DefaultApi* | [**uploadDocument**](docs/Api/DefaultApi.md#uploaddocument) | **POST** /applicants/{applicant_id}/documents | Upload a document
*DefaultApi* | [**uploadLivePhoto**](docs/Api/DefaultApi.md#uploadlivephoto) | **POST** /live_photos | Upload live photo


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Applicant](docs/Model/Applicant.md)
 - [ApplicantsList](docs/Model/ApplicantsList.md)
 - [Check](docs/Model/Check.md)
 - [CheckCommon](docs/Model/CheckCommon.md)
 - [CheckWithReportIds](docs/Model/CheckWithReportIds.md)
 - [ChecksList](docs/Model/ChecksList.md)
 - [Document](docs/Model/Document.md)
 - [DocumentsList](docs/Model/DocumentsList.md)
 - [Error](docs/Model/Error.md)
 - [GenericAddress](docs/Model/GenericAddress.md)
 - [GenericAddressesList](docs/Model/GenericAddressesList.md)
 - [IdNumber](docs/Model/IdNumber.md)
 - [LivePhoto](docs/Model/LivePhoto.md)
 - [LivePhotosList](docs/Model/LivePhotosList.md)
 - [LiveVideo](docs/Model/LiveVideo.md)
 - [LiveVideosList](docs/Model/LiveVideosList.md)
 - [Report](docs/Model/Report.md)
 - [ReportDocument](docs/Model/ReportDocument.md)
 - [ReportOption](docs/Model/ReportOption.md)
 - [ReportType](docs/Model/ReportType.md)
 - [ReportTypeGroup](docs/Model/ReportTypeGroup.md)
 - [ReportTypeGroupsList](docs/Model/ReportTypeGroupsList.md)
 - [ReportsList](docs/Model/ReportsList.md)
 - [SdkTokenRequest](docs/Model/SdkTokenRequest.md)
 - [SdkTokenResponse](docs/Model/SdkTokenResponse.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhooksList](docs/Model/WebhooksList.md)


## Documentation For Authorization


## Token

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



